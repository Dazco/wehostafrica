<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class blogController extends Controller
{

    public function index(){
        $categorys = Category::all();
        $posts = Post::all();
        return view('blog.index',compact('posts','categorys'));
    }
    public function post($id){
        $categorys = Category::all();
        $post = Post::find($id);
        return view('blog.post',compact('post','categorys'));
    }
    public function category($id){
        $categorys = Category::all();
        $oneCat = Category::find($id)->category;
        $posts = Post::where('category_id',$id)->get();
        return view('blog.category',compact('posts','categorys','oneCat'));
    }
}
