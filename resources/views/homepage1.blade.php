

@foreach ($properties as $property)
        
    <img src= {{$property->coverphoto}} height=100% width=100% ><br>
    <strong>Place:</strong>{{$property->title}}<br>
    <strong>{{$property->address}}
    <strong>{{$property->price}}</strong> / day <br>
    <strong>{{$property->locality}}</strong><br>
     
@endforeach