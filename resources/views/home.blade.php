@extends('layouts.base')

@section('header')
  @include('navbar')

@endsection('header')

@section('content')

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" style="min-height: 100px;">
      <div class="carousel-item active">
        <img src="{{'images/car4_new1.jpg'}}" style="width: 100%; height: 515px; " alt="..."> 
      </div>
      
      <div class="carousel-item">
        <img src="{{'images/car6.jpg'}}"  style="width: 100%; height: 515px;"  alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{'images/car5_new.jpg'}}"  style="width: 100%; height: 515px;"  alt="...">
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>   
</section>

<section class="container">
  <div class="row py-5">
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/appointment.jpg'}}" style="height: 250px;" alt="Card image cap">
        <div class="card-body" style="min-height: 200px;">
          <h5 class="card-title">Don't Delay Care</h5>
          <p class="card-text">Maintaining the safest environment possible at all our facilities is a top priority. 
            You don't have to wait to get the health care you need.
          </p>
          <button type="button" class="btn btn-primary modal-btn"  data-bs-toggle="modal" data-bs-target="#login">Book Appointment</button>
        </div>
      </div>
    </div>
     <div class="modal fade" id="login">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
               
               
              <div class="modal-body">

                <form class="mb-4 px-5 align-items-center" id ="modal-form" method="POST" action="{{route('login')}}">
                  @csrf
                  
               
                  <div class="form-group row">
                    
                    <label class="p-1" for="email">Email</label>
                    <input type="email" id="email" name="email">
                  </div>
                  <div class="form-group row">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                  </div>
                </form>
                 
                
              </div>
              <div class="modal-footer">
                  <button type="submit" id = "loginbtn" onclick ="event.preventDefault();document.getElementById('modal-form').submit();"class="btn btn-primary modal-form">Login</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
               
            </div>
          </div>
        </div>
          
       
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top" src="{{'images/view_doctor.jpg'}}" style="height: 250px;"alt="Card image cap">
        <div class="card-body" style="min-height: 200px;">
          <h5 class="card-title">Primary Care Network</h5>
          <p class="card-text">Searching the web for a medical diagonsis? Get quality treatment from our experienced physicians. They are always ready to serve you.</p>
          <a href="{{url('/guest/doclist')}}" class="btn btn-primary">View Doctors</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/car4.jpg'}}" style="height: 250px;" alt="Card image cap">
        <div class="card-body" style="min-height: 200px;">
          <h5 class="card-title">Service Charge</h5>
          <p class="card-text">Get to know about our service charges, emergency care and other haelth package charges in single click. Get the best diagnosis with minimum cost.</p>
          <a href="{{url('/test _and_service_chaeges')}}" class="btn btn-primary">Service Charge</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection('content')

@section('footer')
@include('footer')
@endsection('footer')
