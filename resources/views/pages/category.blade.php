@extends('layouts.app')
<style>
    .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: absolute;
  height: 100%;
  overflow: hidden;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  /* height: 1000px; */
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}

</style>
@section('content')

    <h1 class="tes">{{$title}}</h1>
    {{-- @if (count($category) > 0)
    <ul>
        
        @foreach ($category as $item)
            <li><a href="category/{{$i}}/{{$item}}">{{$item}}</a></li>
            
        @endforeach
    </ul>
        
    @endif --}}
    <div class="sidebar">
        {{-- <a class="active" href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a> --}}
        <h4>Category</h4>
        <ul>
            <li>Montir</li>
            <li>Washing</li>
            <li>Detailing</li>

        </ul>
        <h4>Lokasi</h4>
        <ul>
            <li>Jakarta</li>
            <li>Semarang</li>
            <li>Yogyakarta</li>
        </ul>
      </div>
      
      <!-- Page content -->
<div class="content">        
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    Card Header Headline
                    </a>
                </h2>    
             </div>
            <img class="card-image card-img-top loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-was-processed="true">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                    Card Body Headline
                </a>
                </h2>
                    Card Body Text   
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    Card Header Headline
                    </a>
                </h2>    
             </div>
            <img class="card-image card-img-top loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-was-processed="true">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                    Card Body Headline
                </a>
                </h2>
                    Card Body Text   
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    Card Header Headline
                    </a>
                </h2>    
             </div>
            <img class="card-image card-img-top loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-was-processed="true">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                    Card Body Headline
                </a>
                </h2>
                    Card Body Text   
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    Card Header Headline
                    </a>
                </h2>    
             </div>
            <img class="card-image card-img-top loaded" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-was-processed="true">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                    Card Body Headline
                </a>
                </h2>
                    Card Body Text   
            </div>
        </div>
    </div>
</div>
@endsection