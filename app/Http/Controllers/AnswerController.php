<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use Illuminate\Support\Facades\Validator;
class AnswerController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'body' => 'required'
        ]);
        
        if ($validator->fails()) {
            return redirect('/posts/'. $request->post_id)->withErrors($validator)->withInput();
        }
        
        Answer::create([
            'user_id'=> auth()->user()->id,
            'post_id' => $request->post_id,
            'body'=> strip_tags($request->body),
        ]);


        return redirect("/posts/". $request->post_id)->with('success', 'New post has been added!');
    }
}