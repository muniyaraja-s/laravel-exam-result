@extends('layouts.guest')
@section('title', 'Login')
@section('content')

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-5 shadow-lg p-3 mb-5 bg-white rounded">
                    <form action="{{url('login/submit')}}" method="post">
                        @csrf
                        <div class="mb-4">
                            <input type="text" class="form-control" placeholder="Email Address" name="email">
                            @error('email')
                            <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            @error('password')
                            <span class="text-danger mt-1">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary w-100 mb-4" type="submit">Login</button>
                            <a href="{{url('register')}}" class="text-decoration-none pt-3">
                                New to estore? Create an account
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection