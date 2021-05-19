<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    public function index()
    {
        //Eloquent
        // $a = Post::all();
        // $a = Post::where('title','Second Liner');
        // $a = Post::orderBy('title','desc')->take(1)->get();
        $a = Post::orderBy('title','desc')->paginate(1);

        
        return view('posts.index')->with('posts',$a);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
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
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999', //better 2MB for each database
            'location' => 'required',
            'locationdetail'=>'required',
            'category'=>'required'
        ]);
        // return 123;
        //handle file upload
        if($request->hasFile('cover_image')){//make sure user choose upload file
            //get file name
            $extName = $request->file('cover_image')->getClientOriginalName();//get file
            //get just file name
            $fileName = pathinfo($extName, PATHINFO_FILENAME);

            //get just ext
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            //upload image and create a folder with path Storage->App->public and inaccessible through web
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            

        }else{
            $fileNameToStore = 'noimage.jpg';//jika tidak mengisi bagian foto
        }

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = Auth()->user()->id;
        $post->cover_image = $fileNameToStore;
        $post->location = $request->location;
        $post->locationdetail = $request->locationdetail;
        $post->category = $request->category;
        $post->save();

        return redirect('/posts')->with('success','Data Created');
        
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
        $a = Post::find($id);
        return view('posts.show')->with('data', $a);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change = Post::find($id);

        if(auth()->user()->id != $change->user_id){
            return redirect('/posts')->with('error', 'Unauthorized user');
        }

        return view('posts.edit')->with('data',$change);

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
        //
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required'
        ]);
        //file handling
        if($request->hasFile('cover_image')){//make sure user choose upload file
            //get file name
            $extName = $request->file('cover_image')->getClientOriginalName();//get file
            //get just file name
            $fileName = pathinfo($extName, PATHINFO_FILENAME);

            //get just ext
            $ext = $request->file('cover_image')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            //upload image and create a folder with path Storage->App->public and inaccessible through web
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            

        }
        
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileNameToStore;
        }
        $post->save();
        //how to delete file after update to reserve memory, LOOK DESTROY METHOD
        return redirect('/posts')->with('success','Data Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = Post::find($id);
        if($del->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$del->cover_image);
        }
        $del->delete();
        if(auth()->user()->id != $del->user_id){
            return redirect('/posts')->with('error', 'Unauthorized user');
        }
        return redirect('/posts')->with('success','Data Removed');
    }
}
