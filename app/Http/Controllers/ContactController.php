<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'role' => 'required',
            'email' => 'required',
            'contact' => 'required',
            'instution' => 'required',
            'comments' => 'required',
        ]);

        $customer = new Customer;
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->role = $request->input('role');
        $customer->email = $request->input('email');
        $customer->contact = $request->input('contact');
        $customer->instution = $request->input('instution');
        $customer->comments = $request->input('comments');


        if ($customer->save()) {
            $request->session()->flash('message.status', 'success');
            $request->session()->flash('message.content', 'Thank you for contacting us! We will get back to you as soon as possible.');
        } else {
            $request->session()->flash('message.level', 'error');
            $request->session()->flash('message.content', 'Please Try again!');
        }

        return redirect()->route('contact');
    }

    public function customers()
    {
        $customers = Customer::all();

        return view('customerlist',['customers'=>$customers]);
    }
}
