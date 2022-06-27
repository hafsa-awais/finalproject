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
                <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Property Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Property1</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Dates booked</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">24-09-2022 -> 26-09-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Booking date</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">22-06-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Status</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">pending</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

           
                                        
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Property Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Property2</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Dates booked</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">03-07-2022 -> 04-07-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Booking date</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">23-06-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Status</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">pending</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                                    </div>
                                    <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Property Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Property3</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Dates booked</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">12-10-2022 -> 14-10-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Booking date</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">24-06-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Status</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">pending</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                                    </div>


                <!-- <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0">Current bookings</p><br>
                                    {{-- @foreach ($transactionsCurrent as $transaction)
                                        <div>
                                            <p style="margin: 10px">
                                                Property Name: {{ $transaction->title }}<br>
                                                Dates booked :
                                                {{ date_format(new DateTime($transaction->startdate), 'd-m-Y') }} ->
                                                {{ date_format(new DateTime($transaction->enddate), 'd-m-Y') }}<br>
                                                Booking date:
                                                {{ date_format(new DateTime($transaction->created_at), 'd-m-Y') }}<br>
                                                Status : {{ $transaction->status }}
                                            </p>
                                        </div>
                                    @endforeach --}}

                                </div>
                            </div>
                        </div>
                    </div>
                                    </div> -->

            


                    <h1><strong>Previous Bookings</strong></h1>
                <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Property Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Property4</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Dates booked</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">24-03-2022 -> 26-03-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Booking date</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">25-02-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Status</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">completed</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

           
                                        
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Property Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Property5</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Dates booked</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">12-04-2022 -> 13-04-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Booking date</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">28-03-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Status</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">completed</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                                    </div>
                                    <div class="col-lg-">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Property Name</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Property6</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Dates booked</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">01-06-2022 -> 02-06-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Booking date</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">30-05-2022</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0"><strong>Status</strong></p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">completed</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                                    </div>

                    <!-- <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">


                            </div>
                            <hr>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">Previous bookings</p><br>
                                {{-- @foreach ($transactionsPrevious as $transaction)
                                    <div>
                                        <p style="margin: 10px">
                                            Property Name: {{ $transaction->title }}<br>
                                            Dates booked :
                                            {{ date_format(new DateTime($transaction->startdate), 'd-m-Y') }} ->
                                            {{ date_format(new DateTime($transaction->enddate), 'd-m-Y') }}<br>
                                            Booking date:
                                            {{ date_format(new DateTime($transaction->created_at), 'd-m-Y') }}<br>
                                            Status : {{ $transaction->status }}
                                        </p>
                                    </div>
                                @endforeach --}}


                                

                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


@endsection
