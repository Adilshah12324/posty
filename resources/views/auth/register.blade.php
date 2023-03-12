@extends('layouts.app')

@section('content')
    <div class="container bg-light">
        <div class="row">

            <h2>Register</h2>
        </div>
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') border-danger @enderror" name="name" id="exampleInputEmail1" aria-describedby="name" value="{{old('name')}}" >
                    @error('name')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Username</label>
                    <input type="text" name="username" class="form-control @error('username') border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('username')}}">
                    @error('username')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label ">Email</label>
                    <input type="email" name="email" class="form-control @error('email') border-danger @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('email')}}">
                    @error('email')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" name="password" class="form-control @error('password') border-danger @enderror" id="password">
                    @error('password')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') border-danger @enderror" id="password_confirmation" value="{{old('password_confirmation')}}">
                    @error('password_confirmation')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mb-3">Register</button>
            </form>


    </div>
@endsection
