@extends('layout')
@section('body')

    <!-- Start Register 
    ============================================= -->
    <div class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="login-box">
                        <div class="login">
                            <div class="content">
                                <!-- Display error if any -->
                                @if(Session::has('error')) <div class="alert alert-danger text-white">{{Session::get('error')}}</div> @endif
                                <a href="/"><img src="../img/logo.png" alt="Logo"></a>
                                <form action="{{route('save_user')}}" method = "POST">
                                    <!-- {{ csrf_field() }} -->
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-user"></i> <input class="form-control" name= "fullname" placeholder="Name*" type="text" required>
                                                <span class="text-danger">{{Session::has('fail') ? join(",", Session::get('fail')->get('fullname')) : ""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-envelope-open"></i> <input class="form-control" name="email" placeholder="Email*" type="email" required>
                                                <span class="text-danger">{{Session::has('fail') ? join(",", Session::get('fail')->get('email')) : ""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-phone"></i> <input class="form-control" name="phone" placeholder="Phone*" type="tel" required>
                                                <span class="text-danger">{{Session::has('fail') ? join(",", Session::get('fail')->get('phone')) : ""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input class="form-control" name ="password" placeholder="Password*" type="password" required>
                                                <span class="text-danger">{{Session::has('fail') ? join(",", Session::get('fail')->get('password')) : ""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <i class="fas fa-lock"></i> <input class="form-control" name ="password_verify" placeholder="Confirm Password*" type="password" required>
                                                <span class="text-danger">{{Session::has('fail') ? join(",", Session::get('fail')->get('password_verify')) : ""}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="row">
                                            <button type="submit">
                                            Register
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="sign-up">
                                    <p>
                                        Already have an account? <a href="/login">Login Now</a>
                                    </p>
                                </div>
                                <!-- <div class="social-login">
                                    <h5>Or Register With</h5>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="g-plus">
                                            <a href="#">
                                                <i class="fab fa-google-plus-g"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection