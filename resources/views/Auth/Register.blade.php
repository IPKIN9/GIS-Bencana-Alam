@extends('layout/Auth')
@section('content')
<div class="row">
    <div class="col-sm-12">
        <form class="md-float-material form-material" method="POST" action="{{route('register.insert')}}">
            @csrf
            <div class="text-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo.png">
            </div>
            <div class="auth-box card">
                <div class="card-block">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center txt-primary">Sign up</h3>
                        </div>
                    </div>
                    <div class="form-group form-primary">
                        <input type="text" name="full_name" class="form-control">
                        <span class="form-bar"></span>
                        <label class="float-label">Full Name</label>
                        @error('full_name')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group form-primary">
                        <input type="text" name="username" class="form-control">
                        <span class="form-bar"></span>
                        <label class="float-label">Username</label>
                        @error('username')
                            <p class="text-danger mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group form-primary">
                                <input type="password" name="password" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label">Password</label>
                                @error('password')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group form-primary">
                                <input type="password" name="password_confirmation" class="form-control" required="">
                                <span class="form-bar"></span>
                                <label class="float-label">Konfirmasi Password</label>
                                @error('confirmed')
                                    <p class="text-danger mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Register</button>
                        </div>
                    </div>
                    <hr/>
                    <div class="row">
                        <div class="col-md-10">
                            <p class="text-inverse text-left m-b-0">Thank you.</p>
                            <p class="text-inverse text-left"><a href="index.html"><b>Back to website</b></a></p>
                        </div>
                        <div class="col-md-2">
                            <img src="{{ asset('assets/images/auth/Logo-small-bottom.png') }}" alt="small-logo.png">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- end of col-sm-12 -->
</div>
@endsection