<form action="{{ route('settings.profile.update') }}" method="post">
    @csrf
    @method('PUT')

    <!-- Firstname -->
    <label for="updateformfirstname">Firstname</label>
    <input type="text" id="first_name" name="first_name" value="{{ auth()->user()->first_name }}" id="updateformfirstname" />

    <!-- Lastname -->
    <label for="updateforlastname">Lastname</label>
    <input type="text" id="last_name" name="last_name" value="{{ auth()->user()->last_name }}" id="updateformlastname" />

    <button type="submit" value="submit">Save</button>

</form>





{{-- <x-form-section :action="route('settings.profile.update')" method="PUT">

    <x-slot name="form">
        <!-- First Name -->
        <div class="">
            <x-label for="first_name" value="{{ __('First Name') }}" />
            <x-input name="first_name" id="first_name" type="text" value="{{ auth()->user()->first_name }}" />
            <x-input-error for="first_name" class="" />
        </div>

        <!-- Last Name -->
        <div class="">
            <x-label for="last_name" value="{{ __('Last Name') }}" />
            <x-input name="last_name" id="last_name" type="text" value="{{ auth()->user()->last_name }}" />
            <x-input-error for="last_name" class="" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section> --}}