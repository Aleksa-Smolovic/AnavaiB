<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Category;
use App\Http\Requests\CategoryRequest;


class CategoryController extends Controller
{
    
    public function index(){
        $objects = Category::select('id' , 'name')->orderBy("id", "DESC")->get();
        
        return view("admin.categories.index",  compact("objects" ));
    }

    public function store(CategoryRequest $request){
        $data = $request->validated();
        $data["create_user_id"] = Auth::user()->id;
        Category::create($data);
        return response()->json(["success" => "success"], 200);
    }

    public function edit(CategoryRequest $request) {
		$data = $request->validated();
		$object = Category::find($data['id']);
        $data["update_user_id"] = Auth::user()->id;
		$object->fill($data);
		$object->save();
		return response()->json(['success' => 'success'], 200);
	}

    public function getOne($id){
        $object = Category::find($id);
        return $object ? $object : null;
    }
    
    public function destroy($id){
        $object = Category::find($id);
        if($object)
            $object->delete();
        return back()->with("success", "Element uspješno obrisan!");
    }
    
    public function deleted()
	{
        return view("admin.categories.deleted")->withObjects( Category::select('id' , 'name')->onlyTrashed()->get());
    }
    
    public function restore($id){
        Category::where("id", $id)->restore();
		return back()->with("success", "Objekat uspješno aktiviran.");
    }
    
}
