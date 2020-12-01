@extends('layouts.app')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="d-block w-100" src="https://todaysveterinarynurse.com/wp-content/uploads/sites/3/2019/11/TVN_PetOwnerFacts_shutterstock_1359893087_Pixel-Shot.jpg" alt="First slide" style="height:500px">
              <div class="carousel-caption w-50 d-none d-md-block">
                  <h3><strong>AN ONLINE REGISTRATION SYSTEM FOR PET OWNERS TO REGISTER THEIR PETS CONVENIENTLY</strong></h3>
                  <h5>Pet-id is a unique online pet registration platform. After the registion of his/her pet, the owner will receive
                      an online profile for themselves and their pets.   
                  </h5>
              </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="https://fjwp.s3.amazonaws.com/blog/wp-content/uploads/2018/04/23073318/6-Benefits-of-Working-from-Home-as-a-Pet-Owner.jpg" alt="Second slide" style="height:500px">
              <div class="carousel-caption w-50 d-none d-md-block">
                  <h1><strong>Comfortable coexistence of pets and their owners via Pet Crew-ID</strong></h1>
                  <h5>Pet Crew-id aims to smoothen the coexistence of owners <br> and pets through this unique app!</h5>
              </div>
          </div>
          <div class="carousel-item">
              <img class="d-block w-100" src="https://www.petvetcarecenters.com/files/pet-vet-care-centers-join-pet-family.jpeg" alt="Third slide" style="height:500px">
              <div class="carousel-caption w-50 d-none d-md-block">
                  <h1><strong>Welfare and health boost of pets</strong></h1>
                  <h5>The interaction and communication of owners through <br> this app will improve the welfare of pets immensly</h5>
              </div>
          </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <h1><strong>Services available for the pet owner on PET CREW ID</strong></h1>
            <hr class="p-3">
            <div>
                <div class="d-flex">
                    <img src="/svg/petLogo.svg" style="height:20px; padding-right:5px"><h5>An online profile for a pet and his/her owner for socialization</h5>
                </div>
                <br>
                <div class="d-flex">
                    <img src="/svg/petLogo.svg" style="height:20px; padding-right:5px"><h5>An efficient pet registeration for owners to register their pets</h5> 
                </div>
                <br>
                <div class="d-flex">
                    <img src="/svg/petLogo.svg" style="height:20px; padding-right:5px"><h5>Platform for checking important events and proceedures</h5>
                </div>
                <br>
                <div class="d-flex">
                    <img src="/svg/petLogo.svg" style="height:20px; padding-right:5px"><h5>Integration with veterinary clinics</h5>
                </div>
                <br>
            </div>
            <div>
                <a href="registerPet">
                    <button type="button" class="btn btn-secondary" style="border-radius:50px">Register my pet</button>
                </a>
            </div>
        </div>
        <div class="col-md-6">
            <div style="padding-top:140px;">
                <img src="https://petmediagroup.com/wp-content/uploads/2016/11/pets_big.png" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div style="background:#FFF;">
    <div class="container" style="padding-top:70px">
        <div class="row">
            <div class="col-md-5 py-5">
                <h1><strong>Our propose:</strong></h1>
                <br>
                <br>
                <h5>To provide a standard registration / platform to keep track and record all the pets and their pet owners in the country.</h5>
            </div>
            <div class="col-md-7 py-5" style="padding-top:300px; ">
                <img src="https://dogexpress.in/wp-content/uploads/2016/06/register-your-pet-dogs-online-660x330.jpg"class="img-fluid" style="width:550px;padding-top:60px; padding-bottom:40px;">
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-md-6 py-5">
            <h1><strong>Our Goal</strong></h1>
            <br>
            <br>
            <h5>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem similique fugiat magnam 
            <br>
            <h5>dolorem mollitia, quasi maxime nam natus iusto placeat alias voluptas provident dolores sunt debitis. Officiis</h5>
            <br>
            <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non quisquam veniam sunt accusantium nisi iusto ipsam modi amet? Tenetur dolorum provident itaque ex dignissimos assumenda optio quas, aut velit voluptatibus.</h5>     
        </div>
        <div class="col-md-6 py-5">
            <img src="/svg/petAndOwnerLogo.svg" class="img-fluid" style="width:400px; height:500px">
        </div>
    </div>
</div>

<div style="background:#FFF">
    <div class="container" style="padding-top:70px">
        <div class="row">
            <div class="col-md-12">
                <h1><strong>Pet Crew-Id.net</strong></h1>
                <br>
                <br>
                <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur amet, nobis, ut ad fugit hic iste inventore architecto ratione optio repellendus iure omnis voluptates laudantium nostrum quas perferendis veniam eligendi!</h5>
                
                <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore est totam itaque. Modi est, ea officia praesentium, quos error provident fugiat sed doloribus, possimus temporibus quis nihil saepe culpa illum!</h5>
                <div class="">
                    <img src="https://southerncourier.co.za/wp-content/uploads/sites/36/2014/09/PetProtection.jpg" class="img-fluid">
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection

