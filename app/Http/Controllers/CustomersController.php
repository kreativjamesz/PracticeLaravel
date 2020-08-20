<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Company;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index() {
        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        return view('customers.index',compact('activeCustomers','inactiveCustomers','companies'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('customers.create',compact('companies'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'company_id' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email|unique:customers,email',
            'status' => 'required'
        ]);

        $customer = Customer::create($validatedData);

        return redirect()->route('customers.index');
    }

    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }
}
