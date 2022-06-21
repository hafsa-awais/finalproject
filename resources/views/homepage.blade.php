@extends('templates/headerAndFooterTemplate')


@section('title', 'Homepage')


@section('content')
<section class="bodycontent">
<!-- <div class="slogan2">
            <h3>Let's just say we know a guy who knows a guy who has a place</h3>
        </div> -->

    <!-- <div class="slogan1">
            <h6>Exclusive events, priceless memories.</h6>
        </div> -->

        
        <div class="text">
            
            <div id="particles-js"></div>
    <div class="iconscontainer">
        <div class="categoryicons">
        <i class="fas fa-2x fa-glass-cheers"></i>
            <p>Wedding Venues</p>
        </div>
        <div class="categoryicons">
            <i class="fas fa-2x fa-birthday-cake"></i>
            <p>Birthday Venues</p>
        </div>
        <div class="categoryicons">
            <i class="fas fa-2x fa-video"></i>
            <p>Photoshoot Venues</p>
        </div>
        <div class="categoryicons">
            <i class="fas fa-2x fa-camera"></i>
            <p>Photography Studios</p>
        </div>
        <div class="categoryicons">
            <i class="fas fa-2x fa-guitar"></i>
            <p>Music Studios</p>
        </div>
    </div>

    
    <div class="headingofweddings">
            <h3>Wedding Venues</h3>
        </div> 

        
        <div class="picturecontainerbody">

        @foreach ($properties as $property)

        <div class="pictureboxes">
            
            <object data={{$property->coverphoto}} width=100% height=100%  class="proppics"></object><br>
            <p class="proptext"><strong>Place: </strong>{{$property->title}}<br>
            <p class="proptext"><strong>{{$property->address}}
            <strong>{{$property->price}}</strong> / day <br>
            <strong>{{$property->locality}}</strong><br>
            </p>
        </div>
    
        @endforeach
        </div>

    
    <div class="headingofbirthdays">
            <h3>Birthday Venues</h3>
        </div>


        <div class="picturecontainer2body">
        @foreach ($properties as $property)
        
        <div class="pictureboxes">
            
            <object data={{$property->coverphoto}} width=100% height=100%  class="proppics"></object><br>
            <p class="proptext"><strong>Place: </strong>{{$property->title}}<br>
            <p class="proptext"><strong>{{$property->address}}
            <strong>{{$property->price}}</strong> / day <br>
            <strong>{{$property->locality}}</strong><br>
            </p>
        </div>
    
        @endforeach
        </div>

<!--
        <div class="pictureboxes">
            <object data="assets/propertypics/8.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/9.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/10.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/11.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/12.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/8.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        <div class="pictureboxes">
            <object data="assets/propertypics/8.jpg" height=100% width=100% class="proppics"></object>
            <p class="proptext"><strong>Petange, Luxembourg </strong><br>
            746575 km away <br>
            <strong>€ 675</strong> / day <br>
            </p>
        </div>
        </div>
    </div>
</section>
-->

