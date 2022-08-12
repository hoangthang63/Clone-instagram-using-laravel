@extends('layouts.app')

@section('content')
<div class="container">
    @foreach ($posts as $post)
    <div class="row">
        <div class="col-6 offset-3">
            <a href="/profile/{{$post->user->id}}">
                <img src="/storage/{{$post->image}}" class="w-100" alt="">
            </a>
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-6 offset-3">
            <div>
                
                <p>
                    <span>
                        <strong>
                            <a href="/profile/{{$post->user->id}}" style="text-decoration: none;">
                                <span class="text-dark">{{$post->user->username}}</span>
                            </a>
                        </strong>
                    </span>
                    {{$post->caption}}
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
