@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
<div class="container">

<div class="search-container container">
    <h1>Search Results</h1>
    <p>{{$users->count()}} results for '{{request()->input('query')}}'</p>

    @foreach($users as $u)
    <div>
    	<a href="/profile/{{$id}}">{{ $u->username}}</a>
    	
    </div>


    @endforeach

</div>
    
</div>
@endsection
