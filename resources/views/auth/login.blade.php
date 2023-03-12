@extends('layouts.app')

@section('content')
    <div class="container bg-light">
        <div class="row">

            <h2>Register</h2>
        </div>
        @if(session('status'))
        <div class="bg-danger ">
        {{session('status')}}

        </div>
        @endif
            <form action="{{route('login')}}" method="post">
                @csrf
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
                <button type="submit" class="btn btn-success mb-3">Login</button>
            </form>


    </div>
@endsection
