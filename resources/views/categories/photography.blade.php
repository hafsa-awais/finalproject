@extends('templates/template')


@section('title', 'Homepage')


@section('content')
    <section class="bodycontent">

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

            <div class="pictureheadings">
                <h3>Photography Studios</h3>
            </div>

            <div class="picturecontainerbody">
                @foreach ($properties as $property)
                    <div class="pictureboxes">
                        <object data={{ $property->coverphoto }} width=100% height=100% class="proppics"></object><br>
                        <p class="proptext"><strong>Place:</strong>{{ $property->title }}<br>
                        <p class="proptext"><strong>{{ $property->address }}</strong>
                            <strong>{{ $property->price }}</strong> / day <br>
                            <strong>{{ $property->locality }}</strong><br>
                        </p>
                    </div>
                @endforeach

            </div>
    </section>
@endsection
