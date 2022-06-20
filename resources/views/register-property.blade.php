@extends('templates/headerAndFooterTemplate')


@section('title', 'Registration')


@section('content')

    @if($errors->any())
<div class="alert danger">
    @foreach($errors->all() as $error)
    <li style="color: red"> {{$error}}</li>
    @endforeach
@endif

<!-- 
<form action="" method="post" id="myForm">
    @csrf
    <input type="text" name="area"placeholder="area"><br>
    <input type="text" name="price"placeholder="price"><br>
    <input type="text" name="description"placeholder="description"><br>
    <input type="text" name="house_no"placeholder="house_no"><br>
    <input type="text" name="street_name"placeholder="street_name"><br>
    <input type="text" name="city"placeholder="city"><br>
    <input type="text" name="postal_code"placeholder="postal_code"><br>
    <input type="text" name="country"placeholder="country"><br>
    <input type="submit" value="Submit"> 
</form> -->


<section class="vh-50" style="background-color: #eee; padding-top: 50px; padding-bottom: 50px;">
  <div class="container h-50">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register Property</p>

                <form class="mx-1 mx-md-4" action="" method="post" id="myForm">

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-dollar-sign fa-lg me-3 fa-fw"></i>
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="price" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Price</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-pen fa-lg me-3 fa-fw"></i>
                  
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="description" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Small Description</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-home fa-lg me-3 fa-fw"></i>
                  
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="house_no" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">House Number</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-road fa-lg  me-3 fa-fw"></i>            
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="street_name" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Street Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-city fa-lg me-3 fa-fw"></i>
                  
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="city" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">City</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-map-pin fa-lg me-3 fa-fw"></i>
                 
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="postal_code" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Postal Code</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-flag fa-lg me-3 fa-fw"></i>
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="country" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Country</label>
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" value="Submit" class="btn btn-success btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/house.jpg"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection

