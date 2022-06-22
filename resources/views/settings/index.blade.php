@extends('templates/template')
@section('title', 'atEvent Profile Update')

@section('content')

    <div class="">
        <div class="">

            @include('settings.update-profile-form')

            @include('settings.update-email-form', [
                'showVerificationMessage' => $showVerificationMessage,
                'emailToVerify' => $emailToVerify,
            ])

            @include('settings.update-contact-form')

            @include('settings.update-address-form')

            @include('settings.update-password-form')
            <br><br><br>
            @include('settings.delete-account-form')

        </div>
    </div>

@endsection
