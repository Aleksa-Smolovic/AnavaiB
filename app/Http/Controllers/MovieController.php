<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Movie;
use App\Http\Requests\MovieRequest;
use App\Category;
use App\Actor;
use App\MovieActor;
use App\MovieRating;
use App\Http\Requests\MovieActorRequest;
use App\Http\Requests\MovieRatingRequest;

class MovieController extends Controller
{
    
    public function index(){
        $objects = Movie::select('id' , 'title', 'image', 'category_id')->orderBy("id", "DESC")->get();
        $category = Category::select('id', 'name')->orderBy("id", "DESC")->get();
        return view("admin.movies.index",  compact("objects" , "category"));
    }

    public function store(MovieRequest $request){
        $data = $request->validated();
        $data["create_user_id"] = Auth::user()->id;
        Movie::create($data);
        return response()->json(["success" => "success"], 200);
    }

    public function edit(MovieRequest $request) {
		$data = $request->validated();
		$object = Movie::find($data['id']);
        $data["update_user_id"] = Auth::user()->id;
		$object->fill($data);
		$object->save();
		return response()->json(['success' => 'success'], 200);
	}

    public function getOne($id){
        $object = Movie::find($id);
        return $object ? $object : null;
    }
    
    public function destroy($id){
        $object = Movie::find($id);
        if($object)
            $object->delete();
        return back()->with("success", "Element uspješno obrisan!");
    }
    
    public function deleted()
	{
        return view("admin.movies.deleted")->withObjects( Movie::select('id' , 'title', 'image', 'category_id')->onlyTrashed()->get());
    }
    
    public function restore($id){
        Movie::where("id", $id)->restore();
		return back()->with("success", "Objekat uspješno aktiviran.");
    }

    public function actors($id){
        $objects = Actor::select('movie_actors.id', 'actors.id as actor_id', 'full_name', 'character', 'image')->join('movie_actors', 'actor_id', 'actors.id')->where('movie_id', $id)->orderBy('full_name', 'ASC')->get();
        $allActors = Actor::select('id', 'full_name')->whereNotIn('id', $objects->pluck('actor_id'))->orderBy('full_name', 'ASC')->get();
        return view('admin.movies.actors', compact('objects', 'allActors'));
    }
    
    public function storeActors(MovieActorRequest $request, $id){
        $data = $request->validated();
        $data['movie_id'] = $id;
        $data["create_user_id"] = Auth::user()->id;
        MovieActor::create($data);
        return response()->json(["success" => "success"], 200);
    }

    public function destroyActor($id){
        $object = MovieActor::find($id);
        if($object)
            $object->forceDelete();
        return back()->with("success", "Element uspješno obrisan!");
    }

    public function storeMovieRating(MovieRatingRequest $request, $id){
        $data = $request->validated();
        $data["create_user_id"] = Auth::user()->id;
        $data["movie_id"] = $id;
        if(MovieRating::where('movie_id', $id)->where('create_user_id', $data["create_user_id"])->count() > 0)
            return response("You have already rated this movie!", 400);
        
        MovieRating::create($data);
        $ratings = MovieRating::select('rating')->where('movie_id', $id)->get();
        $sum = $count = 0;
        foreach($ratings as $rating){
            $count++;
            $sum += $rating['rating'];
        }
        $count = $count == 0 ? 1 : $count;
        Movie::where('id', $id)->update([
            'rating'=> $sum / $count 
        ]);
        return back()->with("success", "Success!");
    }

}
