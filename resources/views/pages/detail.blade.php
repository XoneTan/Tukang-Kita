@extends('layouts.app')
<style>
    .marg{
        margin:"0px 50pc 0px 50px"
    }
</style>
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <!-- <h1>{{$title}}</h1>
    <h1>Wirandy Page</h1>
    <p>The best tukang platform in Indonesia</p> -->

    <div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="https://via.placeholder.com/400x300/FFB6C1/000000" alt="project-image" class="rounded">
            <div class="project-info-box">
                <p><b>Categories:</b> Design, Illustration</p>
                <p><b>Skills:</b> Illustrator</p>
            </div><!-- / project-info-box -->
        </div><!-- / column -->

        <div class="col-md-5">
            <div class="project-info-box mt-0">
                <h5>PROJECT DETAILS</h5>
                <p class="mb-0">Vivamus pellentesque, felis in aliquam ullamcorper, lorem tortor porttitor erat,
                    hendrerit porta nunc tellus eu lectus. Ut vel imperdiet est. Pellentesque condimentum, dui et blandit laoreet, quam nisi tincidunt tortor.</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box">
                <p><b>Client:</b> CUPCAKE CO</p>
                <p><b>Date:</b> 14.02.2020</p>
                <p><b>Designer:</b> James Doe</p>
                <p><b>Tools:</b> Illustrator</p>
                <p class="mb-0"><b>Budget:</b> $500</p>
            </div><!-- / project-info-box -->

            <div class="project-info-box mt-0 mb-0">
                <p class="mb-0">
                    <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                    <a href="#x" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
                    <a href="#x" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
                    <a href="#x" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
                    <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
                </p>
            </div><!-- / project-info-box -->
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
