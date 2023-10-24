<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(Request $request){
        if(Like::where("user_id", $request->user_id)->where('post_id', $request->post_id)->count() == 0){
                Like::create([
                    'user_id' => auth()->user()->id,
                    'post_id' => $request->post_id,
                    "is_liked" => true,
                ]);
                return redirect("/posts/{$request->post_id}")->with("success","");
        } 

        Like::where("user_id", $request->user_id)->where('post_id', $request->post_id)->delete();
        return redirect("/posts/{$request->post_id}")->with("success","");
    }
}