@extends('templates/headerAndFooterTemplate')


@section('title', 'Provider')


@section('content')

<section style="background-color: #eee;">
  <div class="container py-5">
  

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">Denis Gorshenko</h5>
            <p class="text-muted mb-4">Luxembourg, Luxembourg</p>
    
          </div>
        </div>
        
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">First Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Denis </p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Gorshenko</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">00352661928374</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">denis@denis.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">Luxembourg, Luxembourg</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Cart</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">-property</p><br>
        
              </div>
            </div>
      </div>
    </div>
  </div>

  
</section>


@endsection