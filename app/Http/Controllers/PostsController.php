<?php

namespace App\Http\Controllers;

use App\Repository\Post\PostRepository;
use Illuminate\Http\Request;
use App\Post;
use Yajra\DataTables\DataTables;

class PostsController extends Controller
{
    public function __construct(PostRepository $post){
       $this->post=$post;
    }
  public function index(){

//      $post=Post::latest()->get();
//      $post=$this->post->getAll();
//      return view('posts.index', compact('post'));
//        $query=Post::select('title', 'body', 'user_id');
//        $post=datatables($post)->make(true);
//        dd($post);
        return view('posts.index');
  }
  public function data(){
      $post=$this->post->getAll();
      return datatables($post)->make(true);
  }
  public function create(){
      return view('posts.create');
  }
    public function show($id){
        $post=$this->post->show($id);
        return view('posts.show', compact('post'));
    }
    public function store(){

        $this->validate(
            request(),[
                'title'=>'required',
                'body'=>'required'
                ]);
        Post::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/')->with('success', 'Post Created');

    }
}
