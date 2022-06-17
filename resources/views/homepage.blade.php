@extends('templates/headerAndFooterTemplate')


@section('title', 'Homepage')


@section('content')
<section class="bodycontent">
<div class="slogan2">
            <h3>Let's just say we know a guy who knows a guy who has a place</h3>
        </div>
<div class="searchcontainerbody">
      <form action="/" method="GET" class="searchformbody">
        <input type="search" placeholder="Search your desired location" class="search-fieldbody" />
        <button type="submit" class="search-buttonbody">
          <img src="../../css/assets/search.png">
        </button>
      </form>
    </div>

    <!-- <div class="slogan1">
            <h6>Exclusive events, priceless memories.</h6>
        </div> -->
    
    <div class="headingofweddings">
            <h3>WEDDING VENUES</h3>
        </div>


    <div class="picturecontainerbody">
        
        <div class="pictureboxes">
            <object data="assets/propertypics/4.jpg" height=100% width=100%></object>
            <p>Wedding</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/2.jpg" height=100% width=100%></object>
            <p>Wedding</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/3.jpg" height=100% width=100%></object>
            <p>Wedding</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/4.jpg" height=100% width=100%></object>
            <p>Wedding</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/5.jpg" height=100% width=100%></object>
            <p>Wedding</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/6.jpg" height=100% width=100%></object>
            <p>Wedding</p>
        </div>
    </div>

    <div class="headingofbirthdays">
            <h3>BIRTHDAY VENUES</h3>
        </div>


    <div class="picturecontainer2body">
        
        <div class="pictureboxes">
            <object data="assets/propertypics/7.jpg" height=100% width=100%></object>
            <p>Birthday</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/8.jpg" height=100% width=100%></object>
            <p>Birthday</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/9.jpg" height=100% width=100%></object>
            <p>Birthday</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/10.jpg" height=100% width=100%></object>
            <p>Birthday</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/11.jpg" height=100% width=100%></object>
            <p>Birthday</p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/12.jpg" height=100% width=100%></object>
            <p>Birthday</p>
        </div>
    </div>
</section>
@endsection

