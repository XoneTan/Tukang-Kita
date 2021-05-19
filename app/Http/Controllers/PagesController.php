<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Review;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Tukang Kita";
        $a = Post::all();

        // return view('pages.index',compact('title'));
        return view('pages.index')->with('posts',$a);
    }

    public function category(){
        $data = array(
            'title' => 'Category',
            'category' => ['Elektronik','Otomotif', 'Landing']
        );
        $a = Post::all();

        
        return view('pages.category')->with('posts',$a);
    }
    
    public function detail($id){
        // $data = array(
        //     'title' => 'Detail Page',
        //     'about' => ['Elektronik','Otomotif', 'Landing'],
        //     'id' => $id,
        //     'item' => $item
        // );
        $review = Review::select('user_id','message','rating')->where('post_id', $id)->get();
        $data = Post::find($id);

        return view('pages.detail')->with('data', $data)->with('review',$review);
    }
    public function profile(){
        return view('pages.profile');
    }

}
