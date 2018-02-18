<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostadsValidation;
use App\Post;
use App\SubCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $cat=Category::with('subcat')->get();
        $post=Post::all();

        return view('index',compact('cat','post'));
    }
    public function details($id){

        return view('well');
    }
    public function show(){

        return view('post_ads');
    }
    public function Subcat($id){
          $pro=Post::where('sub_categories_id','=',$id)->get();

        return view('sub_cat',compact('pro'));
    }
    public function create(PostadsValidation $request){

        Post::create($request->allFiles());

        return view('post_ads');
    }


}
