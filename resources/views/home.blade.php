@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-2">
            <img style="height: 100px;" src="https://img.favpng.com/10/15/7/stormtrooper-star-wars-the-clone-wars-clone-trooper-png-favpng-WZHpSypu9n5XvJqNQsK2Dz7km_t.jpg" class="rounded-circle">

        </div>
        <div class="col-9 pt-2">
            <div><h1>
                {{$user->username ?? ''}}
            </h1></div>
            <div class="text-right"><a href="#"> Add new post </a></div>
            <div class="d-flex">
                <div class="p-4"><strong>151</strong>posts</div>
                <div class="p-4"><strong>10k</strong>follow</div>
                <div class="p-4"><strong>212</strong>following</div>
            </div>
                <div class="p-4">{{$user->profile->title ?? ''}}</div>
                <div class="p-4">{{$user->profile->desc ?? ''}}</div>
                <div> <a href='#'>{{$user->profile->url ?? ''}}</a></div>
            
        <div class="row pt-5">
            <div class="col-4">
                <img class="w-100" src="https://i.pinimg.com/236x/60/cf/db/60cfdb96744a9cc380f96b23b1d7550d--cute-instagram-photo-ideas-cute-pictures-for-instagram.jpg">
            </div>
            <div class="col-4">
                <img class="w-100" src="https://i.pinimg.com/236x/60/cf/db/60cfdb96744a9cc380f96b23b1d7550d--cute-instagram-photo-ideas-cute-pictures-for-instagram.jpg">
            </div>
            <div class="col-4">
                <img class="w-100" src="https://i.pinimg.com/236x/60/cf/db/60cfdb96744a9cc380f96b23b1d7550d--cute-instagram-photo-ideas-cute-pictures-for-instagram.jpg">
            </div>
            



        </div>

        </div>    

    </div>
</div>
@endsection
