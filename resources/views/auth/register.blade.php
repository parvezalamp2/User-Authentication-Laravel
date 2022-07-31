@extends('layouts.app')
@section('content')

<div class="div-container-fluid">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <h1 class="text-decoration-underline">Register</h1>
            
            @if(Session::has('error'))
            <p class="text-danger">{{Session::get('error')}}</p>
            @endif

            <form action="{{route('register')}}" method="post">
            @csrf
            @method('post')

            <div class="mb-3 mt-4">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="name" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                @if($errors->has('name'))
                    <p class="text-danger">{{ $errors->first('name')}}</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @if($errors->has('email'))
                    <p class="text-danger">{{ $errors->first('email')}}</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                @if($errors->has('password'))
                    <p class="text-danger">{{ $errors->first('password')}}</p>
                @endif
            </div>

            <div class="mb-4">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
            </div>

            <input type="submit" class="btn btn-primary" value="Register" />

            </form>
        </div>
    </div>
</div>
@endsection