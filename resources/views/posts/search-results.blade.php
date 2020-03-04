@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<div class="container">

<div class="search-container container">
    <h1>Search Results</h1>
    <p>{{$users->count()}} results for '{{request()->input('query')}}'</p>

    @foreach($users as $u)
    <div>
    	<a href="/profile/{{$users[0]['id']}}">{{ $u->username}}</a>

    	{{$users[0]}}
    	<div class="col-8 text-center">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>

    </div>


    @endforeach

</div>
    
</div>
@endsection
