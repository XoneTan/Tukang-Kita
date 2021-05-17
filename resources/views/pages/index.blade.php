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
    <!-- <h1>{{$title}}</h1>
    <h1>Wirandy Page</h1>
    <p>The best tukang platform in Indonesia</p> -->
<!-- carousel -->
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
      <img class="crs" src="assets/image/aloha carwash.jpg" alt="Los Angeles">
    </div>

    <div class="item bord">
      <img class="crs" src="assets/image/kingsman workshop.jpg" alt="Chicago">
    </div>

    <div class="item bord">
      <img class="crs" src="assets/image/yahya detailing.jpg" alt="New York">
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
<!-- end carousel -->
  <!-- page content -->
</div>
    </div>    
    <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
            <img class="img-category" src="assets/image/kingsman workshop.jpg" alt="kingsman workshop">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                    Kingsman Workshop
                </a>
                <p><br>Menyediakan jasa reparasi kendaraan anda, dengan prinsip customer adalah raja, serta kepuasan customer adalah prioritas kami.</p>
                <p>Kelapa Gading, Jakarta Utara</p>
                <br>
                </h2>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="card">
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
    <div class="col-md-4 col-sm-6">
        <div class="card">
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
    <div class="col-md-4 col-sm-6">
        <div class="card">
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
    <div class="col-md-4 col-sm-6">
        <div class="card">
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
    <div class="col-md-4 col-sm-6">
        <div class="card">
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
</div> 
@endsection
<!-- <div class="col-md-4 col-sm-6">
        <div class="card">
            <div class="card-header ">
                <h2 class="h6 mb-0">
                    <a class="text-body text-body" href="#">
                    </a>
                </h2>    
             </div>
            <img class="card-image card-img-top loaded img-category" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="Card Image" width="253" height="169" data-lazy="true" data-srcset="https://via.placeholder.com/253x169" srcset="https://via.placeholder.com/253x169" data-was-processed="true">
            <div class="card-body">
                <h2 class="h5">
                <a href="#">
                    Card Body Headline
                </a>
                </h2>
                    Card Body Text   
            </div>
        </div>
    </div> -->