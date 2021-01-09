@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row pt-5">
                    <h1>Add New Post</h1>
                </div>
                <div class="form-group row pt-4">
                    <label for="caption" class="col-md-4 col-form-label"><h4>Post Caption</h4></label>
                    
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" 
                        name="caption" value="{{ old('caption') }}" 
                        autocomplete="caption" autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                   
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label"><strong>Post Image</strong></label>
            
                    <input type="file", class="form-control-file" id="image" name="image">

                        @error('image')
                                <strong>{{ $message }}</strong>
                        @enderror

                </div>

                <div class="row pt-5" style="padding-bottom:200px">
                    <button class="btn btn-primary">Add New Post</button>
                </div>
 
            </div>
        </div>                
    </form>
</div>
@endsection
