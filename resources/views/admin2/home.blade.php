@extends('admin2.adminbase')
@section('adContent')

	<div class="row">
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/apt.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Appointments</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/pres.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Prescriptions</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img class="card-img-top"src="{{'images/pres.jpg'}}" style="height: 300px;" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Reports</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

  @endsection