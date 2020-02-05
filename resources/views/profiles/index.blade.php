@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-2">
            <img style="height: 100px;" src="https://img.favpng.com/10/15/7/stormtrooper-star-wars-the-clone-wars-clone-trooper-png-favpng-WZHpSypu9n5XvJqNQsK2Dz7km_t.jpg" class="rounded-circle">

        </div>
        <div class="col-9 pt-2">
            <div><h1>
                {{$user->username}}
            </h1></div>
            <div class="text-right"><a href="/p/create"> Add new post </a></div>
            <div class="d-flex">
                <div class="p-4"><strong>{{ $user->posts->count()}}</strong> posts</div>
                <div class="p-4"><strong>10k</strong>follow</div>
                <div class="p-4"><strong>212</strong>following</div>
            </div>
                <div class="p-4">{{$user->profile->title}}</div>
                <div class="p-4">{{$user->profile->desc}}</div>
                <div> <a href='#'>{{$user->profile->url}}</a></div>
            
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 p-2">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>

            @endforeach



        </div>

        </div>    

    </div>
</div>
@endsection
