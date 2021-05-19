@extends('layouts.app')
<style>
    div {
        margin: 5px;
    }

    p {
        font-weight: bold;
    }


    .info {
        text-align: center;
        border: none;
        border-radius: 10px;
        background-color: #91d2da;
        color: black;
        width: 100%;
        padding: 5px;
        box-shadow: 3px 3px #888888;
    }

    .content {
        border: none;
        border-radius: 10px;
        background-color: #91d2da;
        color: black;
        font-size: 16px;
        box-shadow: 3px 3px #888888;
        margin-left: 30px;
        position: relative;
        padding: 10px 10px 20px 15px;
    }

    .button {
        margin-top: 30px;
        margin-left: 395px;
        font-weight: bold;
        margin-bottom: 40px;
    }

    h4 {
        font-weight: 900 !important;
        color: black !important;
    }

    h3 {
        padding: 5px 0px 5px 10px;
        font-weight: bold !important;
        color: black !important;
    }

    .submit {
        margin-left: 5px;
        background-color: #5ac2b9 !important;
    }

    .submit:hover {
        background-color: #007399;
        color: white !important;
    }

    /* input[type="text"] {
        border: 3px;
        width: 400px;
        background-color: #489fa1;
        border-radius: 5px;
        padding: 5px;
        margin-left: 8px;
    }

    input[type="password"] {
        border: 3px;
       
        background-color: #489fa1;
        border-radius: 5px;
        padding: 5px;
        margin-left: 8px;
    } */

    input[type="text"]:placeholder {
        color: #d3d3d3;
    }

    input[type="password"]:placeholder {
        color: #d3d3d3;
    }
</style>
@section('content')
<!-- <h1>Profile</h1>
    <h1>Sehila Pages</h1> -->

<div class="container">

    <div class="profile">
        <div class="row">
            <div class="col-md-2">
                <div class="info">
                    <h4>Information</h4>
                </div>
            </div>

            <div class="col-md-8">
                <div class="content">
                    <h3>Ubah Biodata Diri</h3>
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" placeholder="abc@binus.com" value="{{ Auth::user()->email }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="password" class="form-control" id="password" placeholder="*****" value="{{ Auth::user()->password }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi :</label>
                        <input type="text" class="form-control" id="location" placeholder="your location. ex: Bogor, Jakarta, ..." value="{{ Auth::user()->location }}">
                    </div>
                    <button type="button" class="btn submit">
                        SIMPAN
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection