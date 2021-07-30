@extends('layout/Auth')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <form class="md-float-material form-material" method="POST" action="{{route('authlogin')}}">
            @csrf
            <div class="text-center">
                <img src="{{ asset('assets/images/logo.png') }}" alt="logo.png">
            </div>
            <div class="auth-box card">
                <div class="card-block">
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <h3 class="text-center">Sign In</h3>
                        </div>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-danger">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="form-group form-primary">
                        <input type="text" name="username" class="form-control" required="">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="form-bar"></span>
                        <label class="float-label">Username</label>
                    </div>
                    <div class="form-group form-primary">
                        <input type="password" name="password" class="form-control" required="">
                        @error('username')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <span class="form-bar"></span>
                        <label class="float-label">Password</label>
                    </div>
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <button type="submit"
                                class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign
                                in</button>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-md-10">
                            <p class="text-inverse text-left m-b-0">Thank you.MassoGisTeam</p>
                            <p class="text-inverse text-left"><a href="{{route('register.index')}}"><b>Register</b></a></p>
                        </div>
                        <div class="col-md-2">
                            <img src="{{ asset('assets/images/auth/Logo-small-bottom.png') }}" alt="small-logo.png">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- end of form -->
    </div>
    <!-- end of col-sm-12 -->
</div>
@endsection