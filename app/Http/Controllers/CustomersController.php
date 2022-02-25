<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomersController extends Controller
{
    public function index()
    {
        $customers = \App\Models\customer::all();
        //$activecustomers = \App\Models\customer::active()->get();
        //$inactivecustomers = \App\Models\customer::inactive()->get();
        
        $companies = \App\Models\Company::all();
        

        // dd($inactivecustomers);

        // $customers = \App\Models\customer::all();

        // dd($customers);

        return view('customers.index', compact ('customers'));
        //('activecustomers', 'inactivecustomers','companies'));
    }

    public function create()
    {
        $companies = \App\Models\Company::all();
        $customer = new \App\Models\customer();

        return view('customers.form', compact('companies', 'customer'));
    }

    public function store()
    {

        //dd($data);

        \App\Models\customer::create($this->validateRequest());
       

        return redirect('customers');
    }

    public function show(customer $customer)
    {

         // dd($customer);

        return view('customers.show', compact('customer'));

        
    }

    public function edit(customer $customer)
    {
        $companies = \App\Models\Company::all();
        return view('customers.edit', compact('customer', 'companies' ));
    }

    public function update(customer $customer)
    {
        $customer->update($this->validateRequest());

        return redirect('customers/' . $customer->id);
    }

    public function destroy(customer $customer)
    {
        $customer->delete();

        return redirect('customers');

    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'company_id' => 'required',
        ]);
    }

}