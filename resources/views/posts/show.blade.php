@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 text-center">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <h3>{{ $post->user->username }}</h3>

                <p><div class="font-weight-bold">
                   <a href="/profile/{{ $post->user->id }}">
                    <span class="text-dark">
                    {{ $post->user->username }}:</span></a>
                     <a href="#" class="p-4">Follow</a>
                </div>

                    {{ $post->caption }}</p>
            </div>
        </div>
    </div>
    
</div>
@endsection
