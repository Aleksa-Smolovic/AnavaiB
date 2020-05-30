<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Blog;
use App\Movie;
use App\Category;
use App\Actor;
use App\MovieActor;
use App\MovieRating;
use Illuminate\Support\Facades\Input;
use App\User;

class WebsiteController extends Controller
{

    public function home(){
        $blogs = Blog::select('title', 'slug', 'image', 'text', 'created_at')->orderBy("id", "DESC")->limit(4)->get();
        $trailerMovies = Movie::select('title', 'slug', 'trailer', 'image')->inRandomOrder()->limit(7)->get();

        $sliderMovies = Movie::select('title', 'category_id', 'rating', 'slug', 'run_time', 'release_date', 'image')->orderBy('release_date', 'DESC')->orderBy('rating', 'desc')->limit(5)->get();
        
        $popular = Movie::select('title', 'rating', 'slug', 'image')->orderBy('rating', 'desc')->limit(6)->get();
        $comingSoon = Movie::select('title', 'rating', 'slug', 'image')->where('release_date', '>', \DB::raw('NOW()'))->orderBy('release_date', 'ASC')->limit(6)->get();
        $topRated = Movie::select('title', 'rating', 'slug', 'image')->orderBy('rating', 'DESC')->limit(6)->get();
        $new = Movie::select('title', 'rating', 'slug', 'image')->orderBy('release_date', 'ASC')->limit(6)->get();

        $actors = Actor::select('full_name', 'slug', 'image')->inRandomOrder()->limit(4)->get();

        return view('front.home', compact('blogs', 'trailerMovies', 'sliderMovies', 'popular', 'comingSoon', 'topRated', 'new', 'actors'));
    }
    
    public function movie($slug){
        //737
        $movie = Movie::where('slug', $slug)->with(['reviews' => function($query){
            $query->whereNotNull('title');
        }])->first();
        $actors = Actor::select('character', 'slug', 'full_name', 'image')->join('movie_actors', 'actor_id', 'actors.id')->where('movie_actors.movie_id', $movie->id)->orderBy('full_name', 'ASC')->get();
        $userRating = MovieRating::select('rating')->where('movie_id', $movie->id)->where('create_user_id', Auth::user()->id)->first();
        $relatedMovies = Movie::where('category_id', $movie->category_id)->orderBy('release_date', 'DESC')->limit(5)->get();
        return view('front.movie', compact('movie', 'actors', 'relatedMovies', 'userRating'));
    }

    public function blogs(){
        $blogs = Blog::select('title', 'slug', 'image', 'text', 'created_at')->orderBy("id", "DESC")->paginate(5);
        return view('front.blogs', compact('blogs'));
    }

    public function blog($slug){
        $blog = Blog::where('slug', $slug)->with('comments')->first();
        return view('front.blog', compact('blog'));
    }

    public function search(){
        $categories = Category::select('name')->orderBy('name', 'desc')->get();
        $movieQuery = Movie::select('title', 'image', 'slug', 'rating', 'run_time', 'text');

        if(Input::has('title'))
            $movieQuery->where('title', 'like', '%' . Input::get('title') . '%');
        if(Input::has('from'))
            $movieQuery->whereYear('release_date', '<=', Input::get('from'));
        if(Input::has('to'))
            $movieQuery->whereYear('release_date', '>=', Input::get('to'));
        if(Input::has('category'))
            $movieQuery->join('categories', 'categories.id', 'category_id')->where('name', Input::get('category'));
            
        $movies = $movieQuery->orderBy('release_date', 'ASC')->paginate(5);
        return view('front.search', compact('categories', 'movies'));
    }

    public function movies(){
        $by = 'release_date';
        $type = 'ASC';
        if(Input::has('sort')){
            $by = Input::get('sort');
            $type = Input::get('by');
        }
        $movies = Movie::select('title', 'image', 'slug', 'rating')->orderBy($by, $type)->paginate(10);
        $movieCount = Movie::count();
        return view('front.movies', compact("movies", 'movieCount'));
    }

    public function profile(){
        return view('front.profile');
    }

    public function rated(){
        return view('front.rated');
    }

    public function actors(){
        $actors = Actor::select('image', 'full_name', 'country', 'slug')->orderBy('full_name', 'ASC')->paginate(9);
        $actorsCount = Actor::count();
        return view('front.actors', compact('actors', 'actorsCount'));
    }

    public function actor($slug){
        $actor = Actor::where('slug', $slug)->first();
        $movies = Movie::select('slug', 'title', 'image', 'release_date', 'character')->join('movie_actors', 'movie_id', 'movies.id')->where('actor_id', $actor->id)->orderBy('release_date', 'DESC')->get();
        return view('front.actor', compact('actor', 'movies'));
    }

    public function index(){
        return view('front.index');
    }

    public function favourite($perPage = null){
        $perPage = $perPage ? $perPage : 15;
        $userMovies = Movie::select('movies.id', 'movie_ratings.rating', 'movies.title', 'movies.slug', 'movies.image')
        ->join('movie_ratings', 'movie_id', 'movies.id')
        ->where('movie_ratings.create_user_id', Auth::user()->id)
        ->orderBy('movie_ratings.rating','DESC')->orderBy('movies.release_date', 'DESC')->distinct('movies.id')->paginate($perPage);
        return view('front.favourite', compact('userMovies'));
    }

    public function activation($activationCode){
        User::where('activation_code', $activationCode)->update(['activated' => true, 'activation_code' => null]);
        return view('front.activation');
    }

}
