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
  </head>

<body>
<section class="headersection">
  <nav class="headernav">
    <div class="headerlogo">
      <img src="assets/Logo.png">
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

</body>
</html>





