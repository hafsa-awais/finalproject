@extends('templates/template')
<!-- meta title tag (SEO) -->
@section('title', 'atEvent - Beautiful event venues in Luxembourg')

@section('content')

    <!-- category banner -->
    <section class="bodycontent">
        <div class="text">
            
            <div class="iconscontainer">
                {{-- wedding logo --}}
                <div class="categoryicons">
                    <a href="{{route('category','wedding')}}">
                        <i class="fas fa-2x fa-glass-cheers"></i>
                        <p>Wedding Venues</p>
                    </a>
                    <a href="{{ route('categories.wedding') }}">
                    <i class="fas fa-2x fa-glass-cheers"></i>
                    <!-- h6 headings for SEO purpose -->
                    <h6>Wedding Venues</h6></a>
                </div>
                {{-- birthday logo --}}
                <div class="categoryicons">
                    <a href="{{ route('category','birthday') }}">
                        <i class="fas fa-2x fa-birthday-cake"></i>
                        <p>Birthday Venues</p>
                    </a>
                    <a href="{{ route('categories.birthday') }}">
                    <i class="fas fa-2x fa-birthday-cake"></i>
                    <h6>Birthday Venues</h6></a>
                </div>
                {{-- photoshoot logo --}}
                <div class="categoryicons">
                    <a href="{{ route('category','photoshoot') }}">
                        <i class="fas fa-2x fa-video"></i>
                        <p>Photoshoot Venues</p>
                    </a>
                    <a href="{{ route('categories.photoshoot') }}">
                    <i class="fas fa-2x fa-video"></i>
                    <h6>Photoshoot Venues</h6></a>
                </div>
                {{-- photography logo --}}
                <div class="categoryicons">
                    <a href="{{ route('category','photography') }}">
                        <i class="fas fa-2x fa-camera"></i>
                        <p>Photography Studios</p>
                    </a>
                    <a href="{{ route('categories.photography') }}">
                    <i class="fas fa-2x fa-camera"></i>
                    <h6>Photography Studios</h6></a>
                </div>
                {{-- music logo --}}
                <div class="categoryicons">
                    <a href="{{ route('category','music') }}">
                        <i class="fas fa-2x fa-guitar"></i>
                        <p>Music Events</p>
                    </a>
                    <a href="{{ route('categories.music') }}">
                    <i class="fas fa-2x fa-guitar"></i>
                    <h6>Music Studios</h6></a>
                </div>
            </div>

            <div class="picturecontainerbody">

@foreach ($properties as $property)
                <div class="pictureboxes">

                    <a href="{{ route('descriptiondesk', $property->id) }}"><object data={{ asset("$property->coverphoto") }} width=100% height=100% class="proppics"></object></a><br>
                    <p class="proptext"><strong>{{ $property->locality }}</strong><br>
                    {{ $property->price }} € / day <br>
                    {{ $property->title }}<br>
                    </p>
                </div>
            @endforeach
</div>

        </div>
    </section>
@endsection
