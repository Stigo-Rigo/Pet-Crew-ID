@extends('layouts.app')

@section('content')
<div class="container" style="padding-bottom:100px">  
       
        <div class="col-12">    
            <div class="card shadow mb-5 bg-white rounded">
                <div class="row p-2">
                    <div class="col-12 pl-3">
                        <h6>Home <img src="/svg/dotLogo.svg" style="height:5px"> Owner profile <img src="/svg/dotLogo.svg" style="height:5px"><strong> {{ $pet->nickname }} </strong></h6>
                        <hr class="my-3"></hr>
                    </div>
                    <div class="col-3 p-3">
                        <div class=" align-items-baseline pb-3">
                            <a href="/profile/{{ $pet->user->id }}"><img src="/svg/leftArrowLogo.svg" style="height:15px;" class="px-1 pb-1"><strong><span class="text-dark">OWNER PROFILE</span></strong></a>
                        </div>                     
                        <img src="{{ $pet->user->profile->DefaultProfileImage() }}" class="rounded-circle w-100 " style="max-width:60px"> <strong class="pl-2">{{ $pet->user->name }}</strong> 
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ $pet->defaultPetImage() }}" class="w-100" style="height:250px">
                                <div class="pt-4 align-items-baseline">
                                    <a href="/pet/{{ $pet->id }}/edit">
                                        <strong><span class="text-dark">Edit Pet</span></strong>
                                        <img src="/svg/arrowLogo.svg" style="height:16px;" class="pb-1">
                                    </a>
                                </div>
                            </div>
                            <div class="col-8">
                                <h4 style="padding-left:5px"><strong>{{ $pet->nickname }}</strong></h4>

                                <h4 class="pt-3">Animal Details</h4>
                                <div class="row align-items-center pt-3">
                                    <div class="col-7" style="color:grey;">
                                        Species
                                    </div>
                                    <div class="col-5" style="padding-left:5px">
                                        {{ $pet->species }}
                                    </div>
                                    <div class="col-7 pt-3" style="color:grey;">
                                        Date of birth
                                    </div>
                                    <div class="col-5 pt-3" style="padding-left:5px">
                                        {{ $pet->date_of_birth }}
                                    </div>
                                    <div class="col-7 pt-3" style="color:grey;">
                                        Breed
                                    </div>
                                    <div class="col-5 pt-3" style="padding-left:5px">
                                        ooo
                                    </div>
                                    <div class="col-7 pt-3" style="color:grey;">
                                        Color
                                    </div>
                                    <div class="col-5 pt-3" style="padding-left:5px">
                                        {{ $pet->color }}
                                    </div>
                                    <div class="col-7 pt-3" style="color:grey;">
                                        Gender
                                    </div>
                                    <div class="col-5 pt-3" style="padding-left:5px">
                                        {{ $pet->gender }}
                                    </div>
                                    <div class="col-7 pt-3" style="color:grey;">
                                        Owner
                                    </div>
                                    <div class="col-5 pt-3" style="padding-left:5px">
                                        {{ $pet->user->name }}
                                    </div>
                                    <div class="col-7 pt-3" style="color:grey;">
                                        Register date on Pet Crew-ID
                                    </div>
                                    <div class="col-5 pt-3" style="padding-left:5px">
                                        {{ $pet->created_at->toDateString() }}
                                    </div>
                                </div>

                                <h4 class="pt-5">Proceedure</h4>
                                <div class="row align-items-center pt-3">
                                    <div class="col-7" style="color:grey;">
                                        Sterilization
                                    </div>
                                    <div class="col-5" style="padding-left:5px">
                                        No
                                    </div>
                                </div>

                                <h4 class="pt-5">Identification</h4>
                                <div class="row align-items-center pt-3 pb-5">
                                    <div class="col-7" style="color:grey;">
                                        Pet ID
                                    </div>
                                    <div class="col-5" style="padding-left:5px">
                                        6465436534
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</div>


@endsection