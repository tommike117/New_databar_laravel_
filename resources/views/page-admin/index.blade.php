@extends('layouts/admin')

@section('link')
{{-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet"> --}}
    
@endsection

@section('content')
    
<style>
    .block {
        width: 500px;
        height: 650px;
        margin: auto;
        background: white;
        border-radius: 25px;
        overflow: hidden;
        box-shadow: 10px 15px 23px 0px #232323;
    }

    body {
        background: #4d4d4d;
        font-family: 'Roboto', sans-serif;
    }

    .row {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    .mt-5 {
        margin-top: 50px;
    }

    .row {
        margin: 20px auto;
    }

    .login {
        height: 140px;
    display: flex;
    align-items: center;
    border-radius: 50%;
    background: white;
    color: black;
    width: 140px;
    justify-content: center;
    position: relative;
    font-size: 25;
    top: 125px;
    color: black !important;
    box-shadow: 0px 11px 12px -4px #9e9e9e;
    }

    .my-label {
        font-size: 15px;
    }

    .form-group {
        width: 300px;
        margin: auto;
    }

    .justify-content-left {
        justify-content: left;
    }

    input.form-control {
        width: 100%;
        height: 30px;
        border: 1px solid lightgrey;
        border-radius: 25px;
        padding: 0 10px;
        transition: 0.5s;
    }

    input.form-control:hover {
        box-shadow: 0px 0px 1px 1px #3b3b3b;
    }

    input.form-control:focus {
        border-color: #3b3b3b;
        outline-color: transparent;
        outline: none !important;
        box-shadow: 0px 0px 1px 1px #3b3b3b;
    }

    .login-button {
        background-color: transparent;
        border-radius: 25px;
        border: 1px solid;
        width: 150px;
        height: 35px;
        display: flex;
        justify-content: center;
        align-content: center;
        margin-top: 30px;
        cursor: pointer;
        transition: 0.5s;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .login-button:hover {
        background: #1d2d5a;
        color: white;
    }

    .login-button p {
        margin: 0;
    }

    .block>.row {
        background-image: url('/images/loginpage/knox.jpg');
        background-size: 100%;
        height: 250px;
        background-repeat: no-repeat;
        margin: 0;
        align-items: center;
    }


    form {
        margin-top: 70px;
    }

    form::after {
        content: "";
        border-bottom: 1px solid #dedede;
        width: 300px;
        position: absolute;
        height: 0;
        left: 0;
        right: 0;
        margin: auto;
    }

    .fas.fa-sign-in-alt {
        position: relative;
        left: -100px;
        top: 1.3px;
        transition: 0.5s;
        z-index: 1;
    }

    .login-text {
        position: relative;
        left: 5px;
        transition: 0.5s;
        z-index: 2;
    }

   
    /* .alert-top-right{
        position:absolute;
        top:0;
        right:0;
    } */
</style>

@if ($message = Session::get('error'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>{{ $message }} </strong> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>    
@endif

<div class="error-message">
    @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="container">

    <div class="block">
        <div class="row justify-content-center">
            <div class="overlay"></div>
            <h2 class="text-center login">Login</h2>
        </div>
        <form action="{{ URL::to('admin/login')}}" method="post">
            @csrf
            <div class="form-group">
                <div class="row justify-content-left">
                    <label class="my-label" for="exampleInputEmail1">Email Address</label>
                </div>
                <div class="row justify-content-center">
                    <input type="text" name="User_Email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            </div>
            <div class="form-group">
                <div class="row justify-content-left">
                    <label class="my-label" for="exampleInputPassword1">Password</label>
                </div>
                <div class="row justify-content-center">
                    <input type="password" name="User_Password" class="form-control" id="exampleInputPassword1"
                        placeholder="Password">
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <button type="submit" class="login-button">
                    <p class="login-text">Login</p>
                    <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                </button>
            </div>

        </form>
    </div>
</div>
@endsection

@section('script')
    

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2bd8c670f0.js"></script>

<script>
    $(document).ready(function () {
        $(".login-button").on('mouseenter', function () {
            $(".fas.fa-sign-in-alt").css({
                "left" : "10px",
                "color":"white",
                "opacity":"1",
            });
            $(".login-text").css({
                "left" : "0px",
                "color":"white"
            });
        }).on('mouseleave',function(){
            $(".fas.fa-sign-in-alt").css({
                "left" : "-100px",
                "color":"white",
                "opacity":"0",
            });
            $(".login-text").css({
                "left" : "5px",
                "color":"black"
            });
        });
    });

</script>
@endsection
