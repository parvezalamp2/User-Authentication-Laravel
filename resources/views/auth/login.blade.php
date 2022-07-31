@extends('layouts.app')
@section('content')

<div class="div-container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1 class="text-decoration-underline">Login</h1>
            @if(Session::has('error'))
            <p class="text-danger">{{Session::get('error')}}</p>
            @endif

            @if(Session::has('success'))
            <p class="text-success">{{Session::get('success')}}</p>
            @endif
            <form action="{{route('login')}}" method="post">
            @csrf
            @method('post')
            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @if($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email')}}</p>
                @endif
            </div>
            <div class="mb-5 text-right">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                @if($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password')}}</p>
                @endif
            </div>

            <input type="submit" class="btn btn-primary" value="Login" />
            <a href="#" class="btn btn-link">Forgot Password</a>

            </form>
        </div>
    </div>
</div>

@endsection
