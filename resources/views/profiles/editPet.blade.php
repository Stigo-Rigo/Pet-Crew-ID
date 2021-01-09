@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card shadow mb-5 bg-white rounded">
        
        <div class="row p-2">
            <div class="col-12 pl-3">
                <h6>Home <img src="/svg/dotLogo.svg" style="height:5px"> Owner profile <img src="/svg/dotLogo.svg" style="height:5px"><strong> {{ $pet->nickname }} </strong></h6>
                <hr class="my-3"></hr>
            </div>
            <div class="col-3 p-3">
                <div class=" align-items-baseline pb-3">
                    <a href="#"><img src="/svg/leftArrowLogo.svg" style="height:15px;" class="px-1 pb-1"><strong><span class="text-dark">OWNER PROFILE</span></strong></a>
                </div>                     
                <img src="{{ $pet->user->profile->DefaultProfileImage() }}" class="rounded-circle w-100 " style="max-width:60px"> <strong class="pl-2">{{ $pet->user->name }}</strong> 
            </div>
            
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <img src="{{ $pet->defaultPetImage() }}" class="w-100" style="height:250px">
                    </div>
                    <div class="col-8">
                        <h3><strong>Edit Pet</strong></h3>

                        <h4 class="pt-4">Pet Information</h4>
                        <hr>
                        
                        <form action="/pet/{{ $pet->id }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('PATCH')
                            
                            <div class="row">
                                <div class="col-12">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nickname" style="color:grey;">Nickname</label>

                                            <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" 
                                                name="nickname" value="{{ old('nickname') ?? $pet->nickname }}" 
                                                autocomplete="nickname" autofocus>

                                            @error('nickname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="species" style="color:grey">Species</label>

                                            <input id="species" type="text" class="form-control @error('species') is-invalid @enderror" 
                                                name="species" value="{{ old('species') ?? $pet->species }}" 
                                                autocomplete="species" autofocus disabled>

                                            @error('species')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-4 d-flex">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="gender" style="color:grey;">Gender</label>
                                                <select id="gender" class="form-control @error('gender') is-invalid @enderror" 
                                                        name="gender"
                                                        value="{{ old('gender') ?? $pet->gender }}"
                                                        required autocomplete="gender" autofocus>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                            <option>Unknown</option>
                                                </select>
                                            @error('gender')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="color" style="color:grey;">Color</label>
                                                <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" 
                                                    name="color" 
                                                    value="{{ old('color') ?? $pet->color }}"
                                                    required autocomplete="color" autofocus>
                                            @error('color')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-4 d-flex">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="date_of_birth" style="color:grey;">Date Of Birth</label>
                                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror" 
                                                    name="date_of_birth" 
                                                    value="{{ old('date_of_birth') ?? $pet->date_of_birth }}"                                                   
                                                    required autocomplete="date_of_birth" autofocus>
                                            @error('date_of_birth')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="breed" style="color:grey;">Breed</label>
                                                <input id="breed" type="text" class="form-control" 
                                                    name="breed" 
                                                    placeholder="ooo" 
                                                    autofocus disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="created_at" style="color:grey">Register Date</label>

                                            <input id="created_at" type="text" class="form-control @error('created_at') is-invalid @enderror" 
                                                name="created_at" value="{{ $pet->created_at->toDateString() }}" 
                                                autocomplete="created_at" autofocus disabled>

                                            @error('created_at')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <label for="description" style="color:grey">Description</label>
                                        
                                            <textarea name="description" id="description" rows="3"
                                                    class="form-control @error('description') is-invalid @enderror"  
                                                    value="{{ old('description') ?? $pet->description }}"
                                                    placeholder="Enter a description of the pet...">
                                            </textarea>

                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                       </div>                                       
                                    </div>
                                </div>

                                <div class="col-12 pt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image" style="color:grey">Image</label>
                                
                                                <input type="file", class="form-control-file" id="image" name="image">

                                                @error('image')
                                                    <strong>{{ $message }}</strong>
                                                @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 pt-4 pb-5">
                                    <div class="col-md-6">
                                        <button class="btn btn-primary">Confirm</button>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection