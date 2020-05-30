<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Blog;
use App\Http\Requests\BlogRequest;


class BlogController extends Controller
{
    
    public function index(){
        $objects = Blog::select('id' , 'title', 'image')->orderBy("id", "DESC")->get();
        return view("admin.blogs.index",  compact("objects" ));
    }

    public function store(BlogRequest $request){
        $data = $request->validated();
        $data["create_user_id"] = Auth::user()->id;
        Blog::create($data);
        return response()->json(["success" => "success"], 200);
    }

    public function edit(BlogRequest $request) {
		$data = $request->validated();
		$object = Blog::find($data['id']);
        $data["update_user_id"] = Auth::user()->id;
		$object->fill($data);
		$object->save();
		return response()->json(['success' => 'success'], 200);
	}

    public function getOne($id){
        $object = Blog::find($id);
        return $object ? $object : null;
    }
    
    public function destroy($id){
        $object = Blog::find($id);
        if($object)
            $object->delete();
        return back()->with("success", "Element uspješno obrisan!");
    }
    
    public function deleted()
	{
        return view("admin.blogs.deleted")->withObjects( Blog::select('id' , 'title', 'image')->onlyTrashed()->get());
    }
    
    public function restore($id){
        Blog::where("id", $id)->restore();
		return back()->with("success", "Objekat uspješno aktiviran.");
    }
    
}
