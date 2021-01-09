@extends('layouts.app')

@section('content')
<div class="container py-5">
    <form action="/r" method="post">
        @csrf

        <div class="row">
            <div class="col-10">
            
                <div class="row justify-content-center">
                    <h1><strong>Add A Pet</strong></h1>
                </div>

                <div class="form-group row py-4">
                    <label for="nickname" class="col-md-4 col-form-label text-md-right">Nickname</label>
                    <div class="col-md-6">
                        <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" 
                            name="nickname" 
                            value="{{ old('nickname') }}"
                            placeholder="Enter the name of the animal" 
                            required autocomplete="nickname" autofocus>

                        @error('nickname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> 

                <div class="form-group row">
                    <label for="species" class="col-md-4 col-form-label text-md-right">Species</label>
                    <div class="col-md-6">
                        <select id="species" class="form-control @error('species') is-invalid @enderror" 
                            name="species"
                            value="{{ old('species') }}"
                            required autocomplete="species" autofocus>
                                <option disabled selected>Select species</option>
                                <option>Dog</option>
                                <option>Domestic cat</option>
                                <option>other</option>
                        </select>

                        @error('species')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row py-4">
                    <label for="date_of_birth" class="col-md-4 col-form-label text-md-right">Date of birth</label>
                    <div class="col-md-6">
                        <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" 
                            name="date_of_birth" 
                            value="{{ old('date_of_birth') }}"
                            placeholder="yyyy-mm-dd" 
                            required autocomplete="date_of_birth" autofocus>

                        @error('date_of_birth')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> 

                <div class="form-group row justify-content-center" style="padding-left:108px">
                    <div class="form-group col-md-3">
                        <label for="gender">Gender</label>
                        <select id="gender" class="form-control @error('gender') is-invalid @enderror" 
                                name="gender"
                                value="{{ old('gender') }}"
                                required autocomplete="gender" autofocus>
                                    <option>Unknown</option>
                                    <option>Male</option>
                                    <option>Female</option>
                        </select>
                        @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="color">Color</label>
                        <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" 
                            name="color" 
                            value="{{ old('color') }}"
                            placeholder="Select color" 
                            required autocomplete="color" autofocus>
                        @error('color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row py-4">
                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                    <div class="col-md-6">
                        <textarea name="description" id="description" rows="3"
                            class="form-control @error('description') is-invalid @enderror"  
                            value="{{ old('description') }}"
                            placeholder="Enter a description of the animal"></textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div> 
                
                <div class="row col-md-6" style="margin-left:300px">
                    <button class="btn btn-primary btn-lg btn-block">Finish</button>
                </div>
                <div class="row col-md-6 py-4" style="margin-left:440px">
                    <a href="#"><h4><strong><span class="text-dark">Add Pet Later</span></strong></h4></a>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection