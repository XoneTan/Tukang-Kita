@extends('layouts.app')

@section('content')
    <h1>Create Post by {{ Auth::user()->name }}</h1>
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title','',['class' => 'form-control','placeholder' =>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Content')}}
            {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control','placeholder' =>'Body Content'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="marg">
            <select class="fadeIn fourth" aria-label="Default select example" name="location">
              <option selected>Location</option>
              <option value="jakarta">jakarta</option>
              <option value="Semarang">Semarang</option>
              <option value="Jogjakarta">Jogjakarta</option>
            </select>
            </div>
            <div class="marg">
            <select class="fadeIn fourth" aria-label="Default select example" name="locationdetail">
              <option selected>Location Detail</option>
              <option value="Kelapa Gading">Kelapa Gading</option>
              <option value="Serpong">Serpong</option>
              <option value="Medan">Medan</option>
            </select>
            </div>        
            <div class="marg">
                <select class="fadeIn fourth" aria-label="Default select example" name="category">
                  <option selected>Category</option>
                  <option value="Montir">Montir</option>
                  <option value="Serpong">Serpong</option>
                  <option value="Medan">Medan</option>
                </select>
                </div>    
        {{Form::submit('Create',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection