<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogComment;
use App\Http\Requests\BlogCommentRequest;
use Illuminate\Support\Facades\Auth;

class BlogCommentController extends Controller
{
    
    public function store(BlogCommentRequest $request){
        $data = $request->validated();
        $data["create_user_id"] = 1;
        BlogComment::create($data);
        return back();
    }

}
