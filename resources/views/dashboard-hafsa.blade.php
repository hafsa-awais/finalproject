@extends('templates/template')
@section('title', 'atEvent User Account')

@section('content')


    <div class="container py-5">

        <!-- for transaction messages -->
        <div>
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
        </div>
        @endif



        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">

                        <h5 class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ Auth::user()->first_name }}
                            {{ Auth::user()->last_name }}</h5>

                        {{-- edit & logout buttons --}}
                        <div class="d-flex justify-content-center mb-2">
                            <button onclick="location.href='{{ route('settings.profile.index') }}'" type="button"
                                class="btn btn-primary">Edit user information</button>
                            <button onclick="location.href='{{ route('logout') }}'"
                                class="btn btn-outline-primary ms-1">Logout</button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>First Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->first_name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Last Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->last_name }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Telephone n°</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->contact }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Email</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->email }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Address</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{ Auth::user()->address1 }} <br>
                                    {{ Auth::user()->address2 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h1><strong>Current Bookings</strong></h1>
                @foreach ($transactionsCurrent as $transaction)
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Property Name</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $transaction->title }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Dates booked</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ date_format(new DateTime($transaction->startdate), 'd-m-Y') }} ->
                                            {{ date_format(new DateTime($transaction->enddate), 'd-m-Y') }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Booking date</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ date_format(new DateTime($transaction->created_at), 'd-m-Y') }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Status</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $transaction->status }}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach ($transactionsPrevious as $transaction)
                    <h1><strong>Previous Bookings</strong></h1>
                    <div class="col-lg-12">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Property Name</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $transaction->title }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Dates booked</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ date_format(new DateTime($transaction->startdate), 'd-m-Y') }} ->
                                            {{ date_format(new DateTime($transaction->enddate), 'd-m-Y') }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Booking date</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">
                                            {{ date_format(new DateTime($transaction->created_at), 'd-m-Y') }}</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <p class="mb-0"><strong>Status</strong></p>
                                    </div>
                                    <div class="col-sm-9">
                                        <p class="text-muted mb-0">{{ $transaction->status }}</p>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>


@endsection
