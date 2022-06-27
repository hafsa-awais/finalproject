@extends('templates/template')
@section('title', 'Search Results')

@section('content')


@section('content')
<section class="bodycontent">

        <div class="text">

            <div id="particles-js"></div>
            <div class="iconscontainer">
                {{-- wedding logo --}}
                <div class="categoryicons">
                    <a href="{{ route('categories.wedding') }}">
                    <i class="fas fa-2x fa-glass-cheers"></i>
                    <p>Wedding Venues</p></a>
                </div>
                {{-- birthday logo --}}
                <div class="categoryicons">
                    <a href="{{ route('categories.birthday') }}">
                    <i class="fas fa-2x fa-birthday-cake"></i>
                    <p>Birthday Venues</p></a>
                </div>
                {{-- photoshoot logo --}}
                <div class="categoryicons">
                    <a href="{{ route('categories.photoshoot') }}">
                    <i class="fas fa-2x fa-video"></i>
                    <p>Photoshoot Venues</p></a>
                </div>
                {{-- photography logo --}}
                <div class="categoryicons">
                    <a href="{{ route('categories.photography') }}">
                    <i class="fas fa-2x fa-camera"></i>
                    <p>Photography Studios</p></a>
                </div>
                {{-- music logo --}}
                <div class="categoryicons">
                    <a href="{{ route('categories.music') }}">
                    <i class="fas fa-2x fa-guitar"></i>
                    <p>Music Studios</p></a>
                </div>
            </div>

            <div class="picturecontainerbody">

                @foreach ($properties as $property)
                    <div class="pictureboxes">

                        <object data={{ $property->coverphoto }} width=100% height=100% class="proppics"></object><br>
                        <p class="proptext"><strong>Place: </strong>{{ $property->title }}<br>
                        <p class="proptext"><strong>{{ $property->address }}</strong>
                                <strong>{{ $property->price }}</strong> / day <br>
                                <strong>{{ $property->locality }}</strong><br>
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

@endsection