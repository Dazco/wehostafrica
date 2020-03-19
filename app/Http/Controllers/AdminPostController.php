<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('category','id')->all();
        return view('admin.post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
                'title'=>'required',
                'body'=>'required',
//                'category_id'=>'required',
                'photo'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
                'body'=>'required',
                ]);
        $data = $request->all();
        if($file = $request->file('photo')){
                $name = time().$file->getClientOriginalName();
                //move file to somewhere
                $file->move('images',$name);
                $data['photo'] = $name;
        }
//        return $data;
        Post::create($data);
        return redirect('admin/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::pluck('category','id')->all();
        $post = Post::findOrFail($id);
        return view('admin.post.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
//            'category_id'=>'required',

            'body'=>'required',
        ]);
        $data = $request->all();
        if($file = $request->file('photo')){
            $request->validate([
                'photo'=>'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            $name = time().$file->getClientOriginalName();
            //move file to somewhere
            $file->move('images',$name);
            $data['photo'] = $name;
        }

        Post::find($id)->update($data);
        return redirect('admin/post');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
            $post->delete();
        //unlink pics and send a session message;
        if($post->photo){
            unlink(public_path().'/images/'.$post->photo);
        }
        return redirect('admin/post');
    }
}
