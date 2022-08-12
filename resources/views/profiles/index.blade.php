@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{$user->profile->profileImage()}}" class="rounded-circle " style="height: 170px; width:170px" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h1">{{ $user->username }}</div>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
            @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
            @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            
            <div class="d-flex">
                <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pe-5"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                <div class="pe-5"><strong>{{$user->following->count()}}</strong> folowing</div>
            </div>
            <div class="pt-4"><strong>{{ $user->profile->title }}</strong> </div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row pt-4">
        
        @foreach ($user->posts as $posts)
            <div class="col-4 pb-4">
                <a href="/p/{{$posts->id}}">
                    <img src="/storage/{{$posts->image}}" alt="{{$posts->image}}" class="w-75 h-75">
                </a>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
