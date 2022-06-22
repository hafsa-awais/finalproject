<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/stylebody.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styleheader.css') }}">
  <link rel="stylesheet" href="{{ asset('css/stylefooter.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styleaboutus.css') }}">
  <link rel="stylesheet" href="{{ asset('css/styledescription.css') }}"  />
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
  rel="stylesheet"
/>
<link rel="stylesheet" href="assets/particles.js-2.0.0/demo/css/style.css" />

<!-- denis links boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- lottiefiles -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>


<body>
  <!-- mobile version -->
  <nav class="navbar navbar-light bg-light">
  
  <div class="container-fluid">
  <div class="searchcontainerheader">
      <form action="/" method="GET" class="searchformbody">
        <input type="search" placeholder="Search your desired location" class="search-fieldbody" />
        <button type="submit" class="search-buttonbody">
          <img src="assets/search.png">
        </button>
      </form>
    </div>
    <button class="navbar-toggler ms-auto" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarToggleExternalContent3" aria-controls="navbarToggleExternalContent3"
      aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
  </div>
</nav>
  
<div class="collapse" id="navbarToggleExternalContent3">
  <div class="bg-light shadow-3 p-4">
    <button class="btn btn-link btn-block border-bottom m-0">Link 1</button>
    <button class="btn btn-link btn-block border-bottom m-0">Link 2</button>
    <button class="btn btn-link btn-block m-0">Link 3</button>
  </div>
</div>
<!--/end mobile version-->

<!-- desktop version -->
<section class="headersection">
  <nav class="headernav">
    <div class="headerlogo">
      <img src="assets/Logo.png">
    </div>
    <div class="searchcontainerbody">
      <form action="{{route('properties.search')}}" method="GET" class="searchformbody">
        <input type="search" placeholder="Search your desired location" class="search-fieldbody" />
        <button type="submit" class="search-buttonbody">
          <img src="assets/search.png">
        </button>
      </form>
    </div>
  <ul>
    <li class="headernavlist">
      <a href="#" class="headernav_a">Home</a>
      <a href="#" class="headernav_a">About Us</a>
      <button class="headerbtn headerregister">Register</button>
      <button class="headerbtn headerlogin">Log In</button>

    </li>
  </ul>
</nav>
<!-- end desktop version -->
</section>

<main class="content">
  @yield('content')
</main>

<Section>
    <div class="footer">
        <div id="footerround"></div>
        <div class="footercontainer">
            <div class="footergrid">
                <div class="footerbox-init" id="box-init-logo">
                    <div id="box-init-logo">
                        <img id="footerlogo" src="assets/Logo.png">
                    </div>
                </div>
                <div class="footerbox-init">
                    <a href="#." class="footerbox-init-description">About Us</a>
                </div>
                <div class="footerbox-init">
                    <a href="#." class="footerbox-init-description">Contact</a>
                </div>
                <div class="footerbox-init">
                    <a href="#." class="footerbox-init-description">Advertisers</a>
                </div>
                <div class="footerbox-init">
                    <a href="#." class="footerbox-init-description">Carrieres</a>
                </div>
                <div class="footerbox-init">
                    <a href="#." class="footerbox-init-description">Responsibility</a>
                </div>
                <div class="footerbox-init">
                    <a href="mailto:gorshenko.d@gmail.com" class="footerbutton">send a message</a>
                </div>
            </div>
        </div>
    </div>
</Section>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"
></script>
<script src=
        "assets/particles.js-2.0.0/particles.js">
    </script>
    <script src=
        "assets/particles.js-2.0.0/demo/js/app.js">
    </script>
    <script src="{{ asset('js/calender.js') }}"></script>
    <script src="{{ asset('js/map.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- Popperjs -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <!-- Tempus Dominus JavaScript -->
    <script src="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/js/tempus-dominus.js" crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Tempus Dominus Styles -->
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet" crossorigin="anonymous">
  </head>
</body>
</html>

