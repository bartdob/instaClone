@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/profile/{$users_id}">profile</a>
<div class="container d-flex">
    @foreach($posts as $post)
        <div class="row">
            <div class="col">
                
                <a href="/profile/{{ $post->user->id }}">
                    <img src="/storage/{{ $post->image }}" style="max-width: 150px;">
                </a>
                
            </div>

            <div class="col pt-2">
                        <a href="/profile/{{ $post->user->id }}">
                            <span class="badge badge-info">{{ $post->user->username }}</span>
                        </a>
                 {{ $post->caption }}
            </div>
        </div>

        <!-- </div> -->
    @endforeach
</div>
</div>
@endsection