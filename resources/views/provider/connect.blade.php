@extends('templates/template')
@section('title', 'atEvent Provider')

@section('content')




    <div>
        {{-- <button class="btn dashboard">{{ Auth::provider()->first_name }}</button> --}}
        <div class="dropdown-content">
            <a href="{{ route('provider.dashboard') }}">Dashboard</a>
            <a href="{{ route('provider.logout') }}">Logout</a>
        </div>
    </div>

    <button onclick="location.href='{{ route('provider.login') }}'" type="button" class="btn login">Log
        in</button>

    <button onclick="location.href='{{ route('provider.register') }}'" type="button"
        class="btn register">{{ 'Register' }}</button>


@endsection
