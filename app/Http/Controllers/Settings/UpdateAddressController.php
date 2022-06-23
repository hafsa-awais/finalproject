<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\UpdateAddressRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UpdateAddressController extends Controller
{
    public function update(UpdateAddressRequest $request): RedirectResponse
    {
        auth()->user()->update($request->validated());

        return redirect()->route('settings.profile.index');
    }
}
