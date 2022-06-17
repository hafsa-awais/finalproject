<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>
<body>
   
<h2>Get in Touch</h2>

@if($errors->any())
<div class="alert danger">
    @foreach($errors->all() as $error)
    <li style="color: red"> {{$error}}</li>
    @endforeach
@endif
</div>

<form action="" method="post">
    @csrf
    <input type="text" name="first_name"placeholder="first name"><br>
    <input type="text" name="last_name"placeholder="last name"><br>
    <input type="text" name="email"placeholder="email"><br>
    <input type="text" name="phone"placeholder="Contact no."><br>
    <input type="text" 
    name="description"placeholder="Type your message here"><br>
    <input type="submit" value="Login">    
</form>

<p>Thanks for Submitting!!</p>

</body>
</html>


