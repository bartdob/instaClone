@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
     @csrf
    <h1>Add new post</h1>
    <div class="row">
        <div class="col-8 offset-2">

            <div class="form-group row">
                            <label for="caption" class="col-md-4 col-form-label text-md-right">Image Caption</label>

                            <div class="col-md-6">
                                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

              <div class="row">
                  <label for="image" class="col-md-4 col-form-label">Post Image</label>

                <input type="file" class="form-control-file" id="image" name="image">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
              </div>

              <div class="pt-5 text-md-right">
                  <button class="btn btn-primary"> Add new post</button>
                </div>     
            
        </div>
    
    </div>

</form>
</div>
@endsection
