<form action="{{ route('settings.address.update') }}" method="post">
    @csrf
    @method('PUT')

    <!-- Address1 (House n° & street name -->
    <label for="updateformaddress1">House n° and street name</label>
    <input type="text" id="address1" name="address1" value="{{ auth()->user()->address1 }}" id="updateformaddress1" />

    <!-- Address2 (postcode & locality) -->
    <label for="updateformaddress2">Postcode and Locality</label>
    <input type="text" id="address2" name="address2" value="{{ auth()->user()->address2 }}" id="updateformaddress2" />

    <button type="submit" value="submit">Save</button>

</form>



{{-- <x-form-section :action="route('settings.address.update')" method="PUT">
    <x-slot name="form">
        <!-- Address (postcode & locality) -->
        <div class="">
            <x-label for="address1" value="{{ __('House n° and Street Name') }}" />
            <x-input name="address1" id="address1" type="text" class="" value="{{ auth()->user()->address1 }}" />
            <x-input-error for="address1" class="" />
        </div>
        <div class="">
            <x-label for="address2" value="{{ __('Postcode and Locality') }}" />
            <x-input name="address2" id="address2" type="text" class="" value="{{ auth()->user()->address2 }}" />
            <x-input-error for="address2" class="" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section> --}}
