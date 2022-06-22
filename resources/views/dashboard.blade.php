@extends('templates/template')
@section('title', 'atEvent User Account')

@section('content')


<section style="background-color: #eee;">
  <div class="container py-5">
  

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
            <p class="text-muted mb-4">{{ Auth::user()->address2 }}, Luxembourg</p>
            {{-- edit & logout buttons --}}
            <div class="d-flex justify-content-center mb-2">
                <button onclick="location.href='{{ route('settings.profile.index') }}'" type="button" class="btn btn-primary">Edit user information</button>
                <button onclick="location.href='{{ route('logout') }}'" class="btn btn-outline-primary ms-1">Logout</button>
              </div>
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
                <p class="text-muted mb-0">{{ Auth::user()->first_name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Last Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->last_name }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Telephone n°</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->contact }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{ Auth::user()->address1 }} <br> {{ Auth::user()->address2 }}</p>
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
