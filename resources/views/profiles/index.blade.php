@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-md-12 pb-2">
            <h4>Home <img src="/svg/dotLogo.svg" style="height:5px" class="img-fluid"> Owner profile</h4>
        </div>     
        <div class="col-md-12" >
            <img src="https://d2bki4h0nxsiqd.cloudfront.net/user-profile-covers/default/preset3.jpg" class="w-100 img-fluid" style="height:234px; position:relative;">
            <!-- <div class="img-overlay">
                <button type="button" class="btn btn-secondary uploaded__button" style="top:100px;">select background</button>
            </div> -->
        </div>

<!---------------------------------- Pets section ------------------------->      
        <div class="col-md-3">
            <div class="p-3 d-flex">
                <h5>My Pets</h5>
                <a href="/r/create"><img src="/svg/addLogo.svg" style="height:30px; padding-left:125px" class="img-fluid"></a>
            </div>
           
            @foreach ($user->pets as $pet)
                <div class="card shadow mb-3 bg-white rounded">   
                    <div class="row">
                        <div class="col-md-4 pt-2">               
                            <img src="{{ $pet->defaultPetImage() }}" class="rounded-circle p-2" style="width:100px; height:100px;">
                        </div> 
                        <div class="col-md-8">
                            <div class="card-body"> <a href="#"><img src="/svg/deleteLogo.svg" style="height:10px;float:right;" class="img-fluid"></a>
                                <div class="pt-2"> {{ $pet->species }} </div>
                                <div><strong> {{ $pet->nickname }} </strong></div>
                                @if($pet->age == 1)
                                    <div class="pt-3">{{ $pet->age }} year </div>
                                @else
                                    <div class="pt-3">{{ $pet->age }} years </div>
                                @endif
                                <div>23542134 <a href="/pet/{{ $pet->id }}"><img src="/svg/arrowLogo.svg" style="height:15px;float:right;" class="img-fluid"></a></div>   
                            </div>                  
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
        </div>    

        <!---------- Owner section ---------->
        <div class="col-md-6">
            
                <div class="row">
                    <div class="col-md-4"> 
                        <img src="{{ $user->profile->DefaultProfileImage() }}" class="rounded-circle p-3" style="width:190px; height:190px; position:relative">
                    </div>
                    <div class="col-md-6">
                        <h4 style="padding-top:70px">Owner</h4>
                        <hr>
                        
                        <!-- if the user can upadate, then allow them to edit profile, else hide it -->
                        @can('update', $user->profile)
                            <a href="/profile/{{ $user->id }}/edit"><span class="text-dark">Edit Profile</span></a> 
                        @endcan                      
                        
                        @can('update', $user->profile)
                            <a href="/post/create" style="padding-left:80px"><strong><span class="text-dark">Add new Post</span></strong></a>
                        @endcan
                        
                    </div>
                    <div style="padding-left:45px">
                        <div class="font-weight-bold">{{ $user->profile->title ?? 'No title..' }}</div>
                        <div>{{ $user->profile->description ?? 'No description..' }}</div>
                        <div><a href="#">{{ $user->profile->url ?? 'N/A' }}</a></div>
                    </div>
                </div>
                <hr>
                <br>

<!---------------------------------------- Add a comment ------------------------------------------>

                <div class="comments">
                    <ul class="list-group">
                        @foreach ($user->comments as $comment)
                            <article class="pt-2">
                                <li class="list-group-item">
                                    <strong>{{ $comment->created_at->diffForHumans() }}: &nbsp;</strong> {{ $comment->body }}
                                    <br>
                                    <div class="pt-2">
                                        <a href="/profile/{{ $comment->id }}" style="color:grey;">Delete</a>
                                    </div>
                                </li>
                            </article>
                        @endforeach
                    </ul>
                    <br>
                </div>

                <div class="card">
                    <div class="card-block">
                        <form action="/profile/{{ $user->id }}/comments" method="post">
                        @csrf
                            <div class="form-group px-3 pt-3">
                                <textarea name="body" placeholder="Your comment here..." class="form-control"></textarea>
                            </div>
                    
                            <div class="form-group pl-3">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="pt-4"><hr class="pt-4"></div>
                
<!-------------------------------- POSTS ------------------------------------------------>           
                @foreach($user->posts as $post )
                    <div class="card shadow-lg mb-5 bg-white rounded">
                        <div class="card-block">
                            <div class="p-2">
                                {{ $post->created_at->isoFormat('LLLL') }}
                                <a href="/post/{{ $post->id }}" onclick="return confirm('Are you sure?')">
                                    <img src="/svg/deleteLogo.svg" style="height:15px; padding-left:250px">
                                </a>
                            </div>
                                <div class="row pt-2">
                                    <div class="col-md-12">
                                        <img class="w-100 img-fluid" src=" /storage/{{ $post->image }}">
                                    </div>
                                </div>
                            <div class="card-footer">
                                <p>{{ $post->caption }}</p>
                            </div>                           
                        </div>
                    </div>
                    <br>
                    <br>
                @endforeach
            
            

        </div>
        
<!--------------------------------- Owner info section ------------------------------------------>
        <div class="col-md-3 pt-5">
            <div class="card shadow mb-5 bg-white rounded">
                <div class="card-header">
                    <h5>Information</h5>
                </div>
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="pl-1 col-3" style="font-size:x-small">
                            Name
                        </div>
                        <div class="pl-1 col-9">
                            {{ $user->name }}
                        </div>
                        <div class="pl-1 pt-4 col-3" style="font-size:x-small">
                            Email
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            {{ $user->email }}
                        </div>
                        <div class="pl-1 pt-4 col-3" style="font-size:x-small">
                            Address
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            {{ $user->address ?? 'N/A' }}
                        </div>
                        <div class="pl-1 pt-4 col-3" style="font-size:x-small">
                            phone
                        </div>
                        <div class="pl-1 pt-4 col-9">
                            {{ $user->phone }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> 

@endsection
