@extends('layouts.app')
<style>
    body {
        background: #f5f5f5;
        margin-top: 20px;
    }

    /*------- portfolio -------*/
    .project {
        margin: 15px 0;
    }

    .no-gutter .project {
        margin: 0 !important;
        padding: 0 !important;
    }

    .has-spacer {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-spacer-extra-space {
        margin-left: 30px;
        margin-right: 30px;
        margin-bottom: 30px;
    }

    .has-side-spacer {
        margin-left: 30px;
        margin-right: 30px;
    }

    .project-title {
        font-size: 1.25rem;
    }

    .project-skill {
        font-size: 0.9rem;
        font-weight: 400;
        letter-spacing: 0.06rem;
    }

    .project-info-box {
        margin: 15px 0;
        background-color: #b3daf2;
        padding: 30px 40px;
        border-radius: 5px;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    .project-info-box p:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    img {
        width: 100%;
        max-width: 100%;
        height: auto;
        -webkit-backface-visibility: hidden;
    }

    .rounded {
        margin-top: 15px !important;
        border-radius: 3px !important;
    }


    .mr-5 {
        margin-right: 5px !important;
    }

    .mb-0 {
        margin-bottom: 0 !important;
    }

    .project-info-box p {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #d5dadb;
    }

    h3 {
        margin-top: 0px !important;
        font-weight: 900 !important;
        color: black !important;
    }

    h4 {
        margin-top: 0px !important;
        font-weight: 900 !important;
        color: black !important;
    }

    p {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: 300;
        color: black;
        font-size: 1em;
        letter-spacing: 0.03rem;
        margin-bottom: 10px;
    }

    b,
    strong {
        font-weight: 900 !important;
    }

    #myCarousel {
        margin-top: 15px !important;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/assets/image/kingsman workshop.jpg" alt="Los Angeles">
                    </div>

                    <div class="item">
                        <img src="/assets/image/aloha carwash.jpg" alt="Chicago">
                    </div>

                    <div class="item">
                        <img src="/assets/image/pak jiko.jpg" alt="New York">
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
            <!--<img src="/assets/image/kingsman workshop.jpg" alt="project-image" class="rounded">-->
            <div class="project-info-box">
                <div class="col-md-11">
                    <h3>{{$item}}</h3>
                </div>
                <div class="col-md-1">
                    <button type="button" class="btn btn-outline-danger"><i class="fa fa-heart"></i>
                </div>

                <p class="mb-0">Deskripsi : <br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate purus. Sed semper,
                    augue id placerat rutrum, quam elit tincidunt magna, et ultrices felis eros ut diam</p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->

        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h3>Lokasi</h3>
                <p class="mb-0">Alamat : Lorem ipsum</p>
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe src='https://api.mapbox.com/styles/v1/skyeyaya/ckokk7tvi0tyc18ozce4u6guh.html?fresh=true&title=false&access_token=pk.eyJ1Ijoic2t5ZXlheWEiLCJhIjoiY2tvazBrenc5MGMxaDJybDVybG9nc2xpZSJ9.FdGVvzozDUZs-0YgZwpfJA'></iframe>
                </div>
                <p class="mb-0">Kontak : lorem ipsum</p>
            </div><!-- / project-info-box -->

            <p>ULASAN PALING MEMBANTU</p>
            <div class="project-info-box">
                <h4>Budi</h4>
                <p class="mb-0">Chizuru is the best rental girlfriend</p>
            </div><!-- / project-info-box -->

            <div class="col-sm-1 col-sm-offset-9">
                <a href="#" class="btn btn-danger">Report Iklan</a>
            </div><!-- Button -->
        </div><!-- / column -->


    </div>
</div>

@if (count($about) > 0)
<ul>
    {{-- @foreach ($about as $item)
            <li>{{$item}}</li>
    @endforeach --}}
</ul>

@endif
<p>This is Detail Page for {{$item}} with id {{$id}}</p>
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">