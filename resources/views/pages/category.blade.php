@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    @if (count($category) > 0)
    <ul>
        <?php
            $i = 1;
            ?>
        @foreach ($category as $item)
            <li><a href="category/{{$i}}/{{$item}}">{{$item}}</a></li>
            <?php $i++ ?>
        @endforeach
    </ul>
        
    @endif
    <p>This is category page</p>
@endsection