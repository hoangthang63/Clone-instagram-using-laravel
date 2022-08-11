@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://cdn.pixabay.com/photo/2018/10/19/05/12/naruto-3757871_960_720.jpg" class="rounded-circle " style="height: 170px; width:170px" alt="">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                
            @can('update', $user->profile)
                <a href="/p/create">Add New Post</a>
            @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            
            <div class="d-flex">
                <div class="pe-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                <div class="pe-5"><strong>63k</strong> followers</div>
                <div class="pe-5"><strong>2k</strong> folowing</div>
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
