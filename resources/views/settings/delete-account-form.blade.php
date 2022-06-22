<form action="{{ route('settings.account.delete') }}" method="POST" confirmation="True">
    @csrf
    {{-- form method spoofing for method DELETE to function --}}
    @method('DELETE')




    <!-- delete account -->
    <div>
        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
    </div>

    <button type="submit" value="submit">Delete Account</button>




</form>







{{-- <x-form-section :action="route('settings.account.delete')" method="DELETE" confirmation="True">

    <x-slot name="content">
        <div class="">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted.') }}
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-button>
            {{ __('Delete Account') }}
        </x-button>
    </x-slot>
</x-form-section> --}}
