@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 30px" alt="">
                    </div>
                    <div>
                        <div>
                            <strong>
                                <a href="/profile/{{$post->user->id}}" style="text-decoration: none;">
                                    <span class="text-dark">{{$post->user->username}}</span>
                                </a>
                                |
                                <a href="#" class="ps-3" style="text-decoration: none;">Follow</a>
                            </strong>
                        </div>
                    </div>
                </div>
                <hr>
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
</div>
@endsection
