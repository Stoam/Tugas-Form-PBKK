<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\Form;

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
            // 'image' => 'required|max:2048|mimes:jpg,jpeg,png'
        ]);

        // $imagePath = $request->image->storeAs('public/images', $request->image->getClientOriginalName());

        Form::create([
            'email' => $request->email,
            'password' => $request->password,
            'name' => $request->name,
            'float' => $request->float,
            // 'float_number' => $request->float,
            // 'image_path' => $imagePath,
        ]);

        // return redirect('/result')->with('status', 'Form submitted!');
        return redirect('/formData')->with('status', 'Form submitted!');

        // $results = [
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'name' => $request->name,
        //     'float' => $request->float,
        //     'image' => $request->image->getClientOriginalName(),
        // ];

        // return redirect('/result')->with(['results' => $results, 'status' => 'Form submitted!']);
    }

    public function viewFormData()
    {
        $formData = Form::all();
        return view('form_data', ['formData' => $formData]);
    }

    public function result()
    {
        $results = session()->get('results');

        return view('result', [
            'results' => $results
        ]);
    }
}
