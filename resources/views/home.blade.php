@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12 pb-2">
            <h4>Home <img src="/svg/dotLogo.svg" style="height:5px"> Owner profile</h4>
        </div>     
        <div class="col-12" >
            <img src="https://media.istockphoto.com/photos/happy-pet-dog-puppy-running-in-the-grass-in-summer-picture-id1164944848?k=6&m=1164944848&s=612x612&w=0&h=aVnome1bw7D3dh3ZlAgN9ymWHgcaZ_L-wTALxT6HIug=" class="w-100" style="height:234px; position:relative;">
            <div class="img-overlay">
                <button type="button" class="btn btn-secondary uploaded__button" style="top:100px;">select background</button>
            </div>
        </div>
        
        <div class="col-3">
            <div class="p-3"><h5>My Pets</h5></div>
           
            <div class="card">   
                <div class="row">
                    <div class="col-4 pt-2">               
                        <img src="https://animal-id.net/images/caps/dog_md.jpg" class="rounded-circle p-2" style="width:100px; height:100px;">
                    </div> 
                        <div class="col-8">
                            <div class="card-body">
                                <div class="pt-2">Dog <a href="#"><img src="/svg/arrowLogo.svg" style="height:15px;float:right;"></a></div>
                                    <div><strong> Sonic </strong></div>
                                    <div class="pt-3">8 months</div>
                                    <div>23542134</div>
                                </div>    
                            </div>
                        </div>
                </div>
            </div>

        
        <div class="col-6">
            
                <div class="row">
                    <div class="col-4"> 
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Profile_avatar_placeholder_large.png" class="rounded-circle p-3" style="width:190px; height:190px; position:relative">
                    </div>
                    <div class="col-6">
                        <h4 style="padding-top:70px">Owner</h4>
                        <hr>
                        <a href="#">Edit Profile</a>

                    </div>
                </div>
                <hr>
            
                <form action="#">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label"><h5>Create Post</h5></label>

                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    </div>
                    
                </form>
                <div class="class pt-2"><hr></div>
            

        </div>
        

        <div class="col-3 pt-5">
            <div class="card">
                <div class="card-header">
                    <h5>Information</h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-baseline">
                        <div class="pl-1  col-3" style="font-size:x-small">
                            Gender
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            Male
                        </div>
                        <div class="pl-1 pt-4 col-3" style="font-size:x-small">
                            Email
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            stigorigo@gmail.com
                        </div>
                        <div class="pl-1 pt-4 col-3" style="font-size:x-small">
                            Address
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            Banjulinding
                        </div>
                        <div class="pl-1 pt-4 col-3" style="font-size:x-small">
                            phone
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            3902339
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div> 

@endsection
