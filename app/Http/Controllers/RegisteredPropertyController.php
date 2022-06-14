<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function show(Request $request)
        {
            return view('property');
                
         }

    public function add(Request $request)
    {
        $request->validate([
            'prize' => ['required', 'string', 'max:255'],
            'area' => ['required', 'string', 'max:255'],
            'house_no' => ['required', 'string', 'max:255'],
            'street_name' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
        ]);
                $property = new Property;
                $property->prize = $request->prize;
                $property->area = $request->area;
                $property->description = $request->description;
                $property->house_no = $request->house_no;
                $property->street_name = $request->street_name;
                $property->postal_code = $request->postal_code;
                $property->city = $request->city;
                $property->country = $request->country; 
                $property->save(); 
                return redirect('/')->with ('sucess', 'Property Details added Successfully') ;
              
    }
    public function upload_file()
    {
        return view('upload-file');
    }

    public function upload_file_submit(Request $request)
    {
        // Validate the file
        $request->validate([
            'myFile' => 'required|mimes:jpg,png'
        ]);

        // Rename the file
        // $fileName = time() . '.' . $request->myFile->extension();
        $fileName = $request->myFile->getClientOriginalName();

        // Save the public path 
        $publicPath = public_path('uploads');

        // Save the file in the public/uploads folder
        $request->myFile->move($publicPath, $fileName);
    }

    public function authenticated(Request $request)
    {
        
        /*$request ->validate([
            'email' => 'Email should not be empty',     
        ]);*/

        session(['email' => $request->email] );
        return redirect('/flowers');
    }
    public function logout(Request $request)
    {
        $request->session()->forget('email');
        return redirect('/flowers');
    }
}




   
    