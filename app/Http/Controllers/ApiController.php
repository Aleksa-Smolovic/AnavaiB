<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Movie;
use App\MovieRating;
use App\Actor;
use App\MovieActor;
use App\Blog;

class ApiController extends Controller
{
    
    public function getAllCategories(){
        $categories = Category::select('id', 'name', 'image')->orderBy('name', 'desc')->get();
        return response()->json($categories);
    }

    public function getAllMovies($categoryId){
        $movies = Movie::select('id', 'title', 'image')
            ->where('category_id', $categoryId)
            ->orderBy('id', 'desc')->get();
        return response()->json($movies);
    }

    public function getMovie($movieId){
        $movie = Movie::select('title', 'image', 'text', 'release_date', 'rated_by', 'rating')
            ->where('id', $movieId)
            ->first();
        return response()->json($movie);   
    }

    public function getReviews($movieId){
        $reviews = MovieRating::select('title', 'text', 'rating', 'movie_ratings.created_at', 'image')
        ->join('user_details', 'user_details.user_id', 'movie_ratings.create_user_id')
        ->where('movie_id', $movieId)->get();
        return response()->json($reviews);   
    }

    public function getActors($movieId){
        $actors = MovieActor::select('full_name', 'image')
        ->join('actors', 'actor_id', 'actors.id')
        ->where('movie_id', $movieId)
        ->orderBy('full_name', 'asc')->get();
        return response()->json($actors);   
    }

    public function userInfo(){
        $user = auth('api')->user();
        $response = [
            "full_name" => $user->full_name,
            "email" => $user->email,
            "image" => $user->userDetails->image
        ];
        return response()->json($response);   
    }

    public function getBlogs(){
        $blogs = Blog::select('title', 'image', 'text')->orderBy('created_at', 'desc')->get();
        return response()->json($blogs);   
    }
 

}
