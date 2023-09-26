<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function show(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()],
            'name' => 'required|alpha:ascii',
            'float' => 'required|numeric|between:2.50,99.99',
            'image' => 'required|max:2048|mimes:jpg,jpeg.pn'
        ]);

        $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        $results = [
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'float' => $request->float,
            'image' => $request->image->getClientOriginalName(),
        ];

        return redirect('/results')->with(['results' => $results, 'status' => 'Form submitted!']);
    }

    public function result()
    {
        $results = session()->get('results');

        return view('result', [
            'results' => $results
        ]);
    }
}
