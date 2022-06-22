<form action="{{ route('settings.password.update') }}" method="post">
    @csrf
    @method('PUT')

    <!-- password -->
    <label for="updateformcurrentpassword">Current password</label>
    <input type="password" id="current_password" name="current_password" id="updateformcurrentpassword" />

    <label for="updateformnewpassword">New password</label>
    <input type="password" id="password" name="password" id="updateformnewpassword" />

    <label for="updateformconfirmpassword">Confirm password</label>
    <input type="password" id="password_confirmation" name="password_confirmation" id="updateformconfirmpassword" />

    <button type="submit" value="submit">Save</button>

</form>
 




{{-- 
<x-form-section :action="route('settings.password.update')" method="PUT">

    <x-slot name="form">
        <div class=">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-input name="current_password" id="current_password" type="password" class="" />
            <x-input-error for="current_password" class="" />
        </div>

        <div class=">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-input name="password" id="password" type="password" class="" />
            <x-input-error for="password" class="" />
        </div>

        <div class=">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input name="password_confirmation" id="password_confirmation" type="password" class="" />
            <x-input-error for="password_confirmation" class="" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section> --}}
