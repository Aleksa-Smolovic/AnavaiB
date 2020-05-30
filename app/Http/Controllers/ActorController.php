<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Actor;
use App\Http\Requests\ActorRequest;


class ActorController extends Controller
{
    
    public function index(){
        $objects = Actor::select('id' , 'full_name', 'country', 'birth_date', 'image')->orderBy("id", "DESC")->get();
        
        return view("admin.actors.index",  compact("objects" ));
    }

    public function store(ActorRequest $request){
        $data = $request->validated();
        $data["create_user_id"] = Auth::user()->id;
        Actor::create($data);
        return response()->json(["success" => "success"], 200);
    }

    public function edit(ActorRequest $request) {
		$data = $request->validated();
		$object = Actor::find($data['id']);
        $data["update_user_id"] = Auth::user()->id;
		$object->fill($data);
		$object->save();
		return response()->json(['success' => 'success'], 200);
	}

    public function getOne($id){
        $object = Actor::find($id);
        return $object ? $object : null;
    }
    
    public function destroy($id){
        $object = Actor::find($id);
        if($object)
            $object->delete();
        return back()->with("success", "Element uspješno obrisan!");
    }
    
    public function deleted()
	{
        return view("admin.actors.deleted")->withObjects( Actor::select('id' , 'full_name', 'country', 'birth_date', 'image')->onlyTrashed()->get());
    }
    
    public function restore($id){
        Actor::where("id", $id)->restore();
		return back()->with("success", "Objekat uspješno aktiviran.");
    }
    
}
