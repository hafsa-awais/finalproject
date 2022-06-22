@extends('templates/template')
@section('title', 'atEvent Provider Dashboard')

@section('content')

    <div class="">
        <h2>Personal information</h2>
        <div>
            First name : {{ Auth::guard('provider')->user()->first_name }}<br>
            Last name : {{ Auth::guard('provider')->user()->last_name }}
        </div>
        <div>
            Email : {{ Auth::guard('provider')->user()->email }}
        </div>
        <div>
            Contact number : {{ Auth::guard('provider')->user()->contact }}
        </div>
        <div>
            House n° & Street: {{ Auth::guard('provider')->user()->address1 }}<br>
            Postcode & Locality: {{ Auth::guard('provider')->user()->address2 }}
        </div>

        <div>
            {{-- <a href="{{ route('settings.profile.index') }}">Edit personal information</a> --}}
            <a href="{{ route('provider.logout') }}">Logout</a>
        </div>
    </div>

    <br><hr><br>

    <div>
        <h2>Transactions</h2>
        <h4>current reservations</h4>
        <h4>previous reservations</h4>
    </div>


@endsection
