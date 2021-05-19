@extends('layouts.app')
<style>
    .marg{
        margin:"0px 50pc 0px 50px"
    }
    .bord{
        height: 400px;
    }
    .crs{
        height: 150px;
        width: 100%;
        object-fit: fill;
    }
    .img-category {
        width: 350px;
        height: 235px;   
    }
    .card{
        height: 387.9px;
        color: black;
        background-color: rgb(180, 217, 243);
        width: 350px;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    .h5 a {
        font-size: 15;
        color: black;
        font-weight: bold;
        margin: 10px;
    }
    .h5 p {
        margin-left: 10px;
        font-size: 12;
    }
    @media screen and (max-width: 800px) {
        .bord{
            height: 200px;
        }
    }
    @media screen and (max-width: 767px) {
        .card{
            max-width: 690px;
            width: 100%;
        }
        .img-category {
            width: 100%;
            height: 235px;   
            object-fit: cover;
        }
        .h5 a {
            font-size: 15;
            color: black;
            font-weight: bold;
            margin: 10px;
            width: 100%;
        }
        .h5 p {
            margin-left: 10px;
            font-size: 12;
        }
    }
    .tes {
        color: black;
    }
</style>
@section('content')
    <!-- <h1></h1>
    <h1>Wirandy Page</h1>
    <p>The best tukang platform in Indonesia</p> -->

    <div class="content">    
    <div class="col">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active bord">
      <img src="assets/image/pak jiko.jpg" alt="Los Angeles" class="crs">
    </div>

    <div class="item bord">
      <img src="assets/image/pak jiko.jpg" alt="Chicago" class="crs">
    </div>

    <div class="item bord">
      <img src="assets/image/pak jiko.jpg" alt="New York" class="crs">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>   
    <br/>
    <br/>
    @if(count($posts) > 0)
        @foreach ($posts as $item)
        <div class="col-md-4" style="padding-bottom: 20px;">
            <div class="card">
               
                <img class="img-category" src="/storage/cover_images/{{$item->cover_image}}" alt="Card Image" width="253" height="169" data-lazy="true" >

                <div class="card-body">
                    <h2 class="h5">
                    <a href="/category/{{$item->id}}">
                        {{$item->title}}
                    </a>
                    </h2>
                        {{$item->body}}
                </div>
            </div>
        </div>

        @endforeach
    @endif 
    
    {{-- <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    <div class="col-md-4">
        <div class="card">
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
    </div> --}}
</div> 
@endsection
