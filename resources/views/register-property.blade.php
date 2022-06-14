<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>property details</title>
</head>
<body>
    @if($errors->any())
<div class="alert danger">
    @foreach($errors->all() as $error)
    <li style="color: red"> {{$error}}</li>
    @endforeach
@endif

<h2>Property Deatils Form</h2>
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
</form>
</body>
</html>