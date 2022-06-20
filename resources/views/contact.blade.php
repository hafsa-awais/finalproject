@extends('templates/headerAndFooterTemplate')


@section('title', 'Contact Us')


@section('content')


@if($errors->any())
<div class="alert danger">
    @foreach($errors->all() as $error)
    <li style="color: red"> {{$error}}</li>
    @endforeach
@endif
</div>

<!-- <form action="" method="post">
    @csrf
    <input type="text" name="first_name"placeholder="first name"><br>
    <input type="text" name="last_name"placeholder="last name"><br>
    <input type="text" name="email"placeholder="email"><br>
    <input type="text" name="phone"placeholder="Contact no."><br>
    <input type="text" 
    name="description" placeholder="Type your message here"><br>
    <input type="submit" value="Login">    
</form> -->



<section class="vh-50" style="background-color: #eee; padding-top: 50px; padding-bottom: 50px;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Contact Us</p>

                <form class="mx-1 mx-md-4" action="" method="post">

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="first_name" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Firstname</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name="last_name" id="form3Example3c" class="form-control" />
                      <label class="form-label" for="form3Example3c">Lastname</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="email" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-lg  me-3 fa-phone fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="contact" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Phone Number</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                  <i class="fas fa-fw fa-lg  me-3 fa-comment-alt"></i>
                    <div class="form-outline flex-fill mb-0" style="height: 200px;">
                      <input type="text" name="description" id="form3Example4cd" class="form-control" />
                      <label class="form-label" for="form3Example4cd">Your Message</label>
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" value="Login" class="btn btn-success btn-lg">Send</button>
                  </div>

                </form>
                

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="assets/contactus.jpg"
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
