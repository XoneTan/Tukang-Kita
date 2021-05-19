@extends('layouts.app')
<style>
    .sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: absolute;
  height: 50%;
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
.img-category {
    width: 400px;
    height: 235px;   
}
.tes {
    color: black;
}
.sidebar h4{
    margin-left: 20px;
    color:black;
    font-weight: bold;
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
.card {
    color: black;
    background-color: rgb(180, 217, 243);
    width: 400px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}

</style>
@section('content')

    <h2 class="tes">Filter</h2>
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
            {!! Form::checkbox('Mont', 'M') !!}{!! 'Montir' !!}
            <div></div>
            {!! Form::checkbox('Mont', 'M') !!}{!! 'Washing' !!}
            <div></div>
            {!! Form::checkbox('Mont', 'M') !!}{!! 'Detailing' !!}
            <div></div>

        </ul>
        <h4>Lokasi</h4>
        <ul>
            {!! Form::checkbox('Mont', 'M') !!}{!! 'Jakarta' !!}
            <div></div>
            {!! Form::checkbox('Mont', 'M') !!}{!! 'Semarang' !!}
            <div></div>
            {!! Form::checkbox('Mont', 'M') !!}{!! 'Yogya' !!}
            <div></div>
        </ul>
        <h4>Rating</h4>
        <ul>
            {!! Form::radio('Mont', 'M') !!}{!! 'Bintang 5' !!}
            <div></div>
            {!! Form::radio('Mont', 'M') !!}{!! 'diatas Bintang 4' !!}
            <div></div>
            {!! Form::radio('Mont', 'M') !!}{!! 'Bintang 3 ke atas' !!}
            <div></div>
        </ul>
      </div>
      
      <!-- Page content -->
<div class="content">        
    @if(count($posts) > 0)
        @foreach ($posts as $item)
        <div class="col-md-6 col-xl-4">
            <div class="card">
                <div class="card mb-3">
                    <div class="card-header ">
                        <h2 class="h6 mb-0">
                            <a class="text-body text-body" href="#">
                            </a>
                        </h2>    
                     </div>
                    <img class="img-category" src="/storage/cover_images/{{$item->cover_image}}" alt="kingsman workshop">
                    <div class="card-body">
                        <h2 class="h5">
                        <a href="/category/{{$item->id}}">
                            {{$item->title}}
                        </a>
                        <p><br>{{$item->body}}</p>
                        <p>{{$item->location}}, {{$item->locationdetail}}</p>
                        <br>
                        </h2>
                    </div>
                </div>
            </div>
    </div>

        @endforeach
    @endif
    {{-- <div class="col-md-6 col-xl-4">
    <div class="card">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
            <img class="img-category" src="assets/image/pak jiko.jpg" alt="Pak Jiko Workshop">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                Pak Jiko Workshop
                </a>
                <p><br>Menyediakan jasa reparasi kendaraan anda, dengan pengalaman 10 tahun, menjamin kendaraan anda dalam kondisi terbaik.</p>
                <p>Kelapa Gading, Jakarta Utara</p>
                <br>
                </h2>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4">
    <div class="card">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
             <img class="img-category" src="assets/image/cling car wash.jpg" alt="Cling Car Wash">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                Cling Car Wash
                </a>
                <p><br>Menyediakan jasa mencuci kendaraan dengan pressure washing yang dijamin membuat kendaraan anda cling-cling.</p>
                <p>Kelapa Gading, Jakarta Utara</p>
                <br>
                </h2> 
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4">
    <div class="card">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
             <img class="img-category" src="assets/image/aloha carwash.jpg" alt="Aloha Car Wash">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                Aloha Car Wash
                </a>
                <p><br>menyediakan jasa mencuci kendaraan anda, yang sudah menjadi kepercayaan orang indonesia selama 15 tahun.</p>
                <p>Kelapa Gading, Jakarta Utara</p>
                <br>
                </h2>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4">
    <div class="card">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
             <img class="img-category" src="assets/image/yahya detailing.jpg" alt="Yahya Detailing">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                Yahya Detailing
                </a>
                <p><br>Siap Merawat Kendaraan Anda. Kami spesialis nano ceramic coating yang sudah berpengalaman Membersihkan & mengatasi mesin kotor, kabin bau, jok kumal, dashboard kusam.</p>
                <p>Kelapa Gading, Jakarta Utara</p>
                <br>
                </h2>
            </div>
        </div>
    </div>
    </div>
    <div class="col-md-6 col-xl-4">
    <div class="card">
        <div class="card mb-3">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
             <img class="img-category" src="assets/image/rizki workshop.jpg" alt="Rizki Worshop">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                Rizki Workshop
                </a>
                <p><br>Dengan pengalaman yang sudah bertahan selama 25 tahun, kami siap memberikan pelayanan yang lebih lengkap dan menyeluruh dengan berbagai keunggulan baru bagi setiap pelanggan.</p>
                <p>Kelapa Gading, Jakarta Utara</p>
                <br>
                </h2>
            </div>
        </div>
    </div>
    </div> --}}
</div>
@endsection
<script>
$(document).ready(function () {



});
    
</script>

