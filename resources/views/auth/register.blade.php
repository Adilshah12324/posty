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
                    <input type="text" class="form-control @error('name') border-danger @enderror" name="name" id="exampleInputEmail1" aria-describedby="name" >
                    @error('name')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label @error('username') border-danger @enderror">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('username')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label @error('email') border-danger @enderror">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    @error('email')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label @error('password') border-danger @enderror">Password</label>
                    <input type="password" class="form-control" id="password">
                    @error('password')
                    <div class="text-danger mt-2 small">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label @error('password_confirmation') border-danger @enderror">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
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
