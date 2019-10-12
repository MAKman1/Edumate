@extends('layouts.parent')
@section('head')
<style>
        .card-signin {
        border: 0;
        background-image: -moz-linear-gradient(55deg, #2B32B2 0%, #1488CC);
        background-image: -webkit-linear-gradient(55deg, #2B32B2 0%, #1488CC);
        background-image: -ms-linear-gradient(55deg, #2B32B2 0%, #1488CC);
        border-radius: 10px;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
        }

        .card-signin .card-title {
        margin-bottom: 4rem;
        font-weight: 300;
        font-size: 35px;
        color:#FFFFFF;
        }

        .card-signin .card-body {
        padding: 3rem;
        }

        .form-signin {
        width: 100%;
        }

        .form-signin .btn {
        font-size: 80%;
        border-radius: 5rem;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
        }

        .form-label-group {
        position: relative;
        margin-bottom: 1rem;
        }

        .form-label-group input {
        height: 60px;
        padding-left: 15px;
        font-size:25px;
        border-radius: 2rem;
        }

        .form-label-group>input,
        .form-label-group>label {
        padding-left: 30px;
        padding-top: 15px;
        }

        .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
        color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
        color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
        color: transparent;
        }

        .form-label-group input::-moz-placeholder {
        color: transparent;
        }

        .form-label-group input::placeholder {
        color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
        padding-left:30px;
        }

        .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        padding-left:30px;
        font-size: 10px;
        color: #777;
        }

        .btn-signin {
        color: white;
        background-image: -moz-linear-gradient(55deg, #51D8F7 0%, #2CF6D7);
        background-image: -webkit-linear-gradient(55deg, #51D8F7 0%, #2CF6D7);
        background-image: -ms-linear-gradient(55deg, #51D8F7 0%, #2CF6D7);
        }

        .btn-signup {
        color: #000000;
        width:auto;
        height:auto;
        background-color: #FFFFFF;
        }
        
        </style>

@endsection
@section('body')
<section class="login-container">
        <div class="background"></div>
        <div class="round-shape3">
            <img src="assets/images/round-shape3.png" alt="">
        </div>
        <div class="round-shape5">
            <img src="assets/images/round-shape5.png" alt="">
        </div>
        <div class="round-shape7">
            <img src="assets/images/round-shape7.png" alt="">
        </div>
        <div class="round-shape8">
            <img src="assets/images/round-shape8.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Sign In</h5>
                        <form class="form-signin" method="post" action="{{url('/login/checklogin')}}">
                            @csrf
                            <div class="form-label-group">
                                <input type="text" id="username" class="form-control" placeholder="Email or username" name="username"required autofocus>
                                <label for="username">Email or username</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" style="color:#FFFFFF" for="customCheck1">Remember password</label>
                            </div>
                            <button class="btn btn-lg btn-signin btn-block text-uppercase" type="submit">Sign in</button>
                        </form>
                        <hr class="my-4" style="border-color:#FFFFFF">
                        <center>
                        <button class="btn btn-lg btn-signup btn-block text-uppercase" type="submit">New user?</button>
                        </center>
                    </div>
                    </div>
                </div>
                <!-- <div class="col-xl-3">
                    <div class="row">
                        <div class=" login-form-2">
                        <h3>Login</h3>
                        <form method="POST" action="{{url('/login/checklogin')}}">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control login-input" placeholder="Email or username" name="username" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control login-input" placeholder="Password" name="password" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btnSubmit" value="Login" />
                            </div>
                            <div class="form-group">

                                <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                            </div>
                        </form>
                    </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

@endsection
@section('scripts')

@endsection