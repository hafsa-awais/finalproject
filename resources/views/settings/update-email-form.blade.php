<form action="{{ route('settings.email.notify') }}" method="post">
    @csrf
    @method('PUT')

    <!-- Email -->
    <label for="updateformemail">Email</label>
    <input type="text" id="email" name="email" value="{{ auth()->user()->email }}" id="updateformemail" />

    <!-- Verification Message -->
    @if ($showVerificationMessage)
        <div class="">
            <span>A verification email has been sent to {{ $emailToVerify }}.</span>
        </div>
    @endif


    <button type="submit" value="submit">Save</button>

</form>



{{-- 
<x-form-section :action="route('settings.email.notify')" method="POST">

    <x-slot name="form">
        <!-- Email -->
        <div class="">
            <x-label for="email" value="{{ __('Email') }}" />
            <x-input name="email" id="email" type="email" class=""
                value="{{ auth()->user()->email }}" />
            <x-input-error for="email" class="" />
        </div>

        <!-- Verification Message -->
        @if ($showVerificationMessage)
            <div class="">
                <span>A verification email has been sent to {{ $emailToVerify }}.</span>
            </div>
        @endif
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section> --}}
