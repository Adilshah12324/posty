@extends('layouts.app')

@section('content')
<div class="container bg-light">
    <div class="row">

        <h2>Posts</h2>

    </div>
    @if(session('status'))
        <div class="bg-success text-white p-2">
            {{session('status')}}

        </div>        @endif

    <form action="{{route('post')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label ">Body</label>
            <textarea name="body" class="form-control @error('body') border-danger @enderror" placeholder="Post Something!" id="exampleInputEmail1" aria-describedby="emailHelp">
            </textarea>
            @error('body')
            <div class="text-danger mt-2 small">
                {{$message}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mb-3">Submit</button>
    </form>
    @if($posts->count())
        @foreach($posts as $post)
            <div class="mb-4">
                <b><a href="" class="font-bold">{{$post->user->name}}</a></b>
                <span class="text-info text-sm">{{$post->created_at->diffForHumans()}}</span>
                <p class="mb-2">{{$post->body}}</p>

            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <h2>There is no Post</h2>
    @endif

</div>
@endsection
