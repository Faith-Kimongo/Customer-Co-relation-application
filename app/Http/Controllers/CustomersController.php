<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {
        $customers = \App\Models\customer::all();

        dd($customers);

        return view('internals.customers', [
            'customers' => $customers,
        ]);
    }
}