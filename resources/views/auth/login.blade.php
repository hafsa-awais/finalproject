<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

<h2>Login Form</h2>

@if($errors->any())
<div class="alert danger">
    @foreach($errors->all() as $error)
    <li style="color: red"> {{$error}}</li>
    @endforeach
@endif
</div>
<h2>LOGIN</h2>
<form action="" method="post">
    @csrf
    <input type="text" name="email"placeholder="email"><br>
    <input type="text" name="password"placeholder="password"><br>
    <input type="submit" value="Login">
    <input type="submit" value="Register">
</form>
