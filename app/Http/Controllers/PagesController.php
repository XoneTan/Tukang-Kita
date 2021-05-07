<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Tukang Kita";
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title',$title);
    }

    public function category(){
        $data = array(
            'title' => 'Category',
            'category' => ['Elektronik','Otomotif', 'Landing']
        );
        return view('pages.category')->with($data);
    }
    
    public function detail($id, $item){
        $data = array(
            'title' => 'Detail Page',
            'about' => ['Elektronik','Otomotif', 'Landing'],
            'id' => $id,
            'item' => $item
        );
        return view('pages.detail')->with($data);
    }
    public function profile(){
        return view('pages.profile');
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }
}
