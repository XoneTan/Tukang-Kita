@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <h1>Delvin Page</h1>
    @if (count($about) > 0)
    <ul>
        {{-- @foreach ($about as $item)
            <li>{{$item}}</li>
        @endforeach --}}
    </ul>
        
    @endif
    <p>This is Detail Page for {{$item}} with id {{$id}}</p>
@endsection