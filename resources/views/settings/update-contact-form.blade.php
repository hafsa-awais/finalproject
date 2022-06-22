<form action="{{ route('settings.contact.update') }}" method="post">
    @csrf
    @method('PUT')

    <!-- Contact -->
    <label for="updateformcontact">Telefon number</label>
    <input type="text" id="contact" name="contact" value="{{ auth()->user()->contact }}" id="updateformcontact" />

    <button type="submit" value="submit">Save</button>

</form>




{{-- <x-form-section :action="route('settings.contact.update')" method="PUT">

    <x-slot name="form">
        <!-- Contact -->
        <div class="">
            <x-label for="contact" value="{{ __('Contact number') }}" />
            <x-input name="contact" id="contact" type="text" class="" value="{{ auth()->user()->contact }}" />
            <x-input-error for="contact" class="" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section> --}}
