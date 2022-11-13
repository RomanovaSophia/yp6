<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return Post::all();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required',
            'category_id' => 'required',
            'department_id' => 'required',
        ]);
        //Выводим ошибки если есть
        if($validator->fails()){
            return $validator->errors();
        }

        $user = Auth::user();
        return Post::create([
            'text' => $request['text'],
            'user_id' => $user['id'],
            'category_id' => $request['category_id'],
            'department_id' => $request['department_id'],
        ]);
    }


    public function show(Post $post)
    {
        return $post;
    }


    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(), [
            'text' => 'required',
            'category_id' => 'required',
            'department_id' => 'required',
        ]);
        //Выводим ошибки если есть
        if($validator->fails()){
            return $validator->errors();
        }

        $user = Auth::user();
        $post->update([
            'text' => $request['text'],
            'user_id' => $user['id'],
            'category_id' => $request['category_id'],
            'department_id' => $request['department_id'],
        ]);
        return $post;
    }


    public function destroy(Post $post)
    {
        $post->delete();
        return [
            "deleted" => true
        ];
    }
}
