<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        $companies = Company::all();

        return view('customers.index',compact('customers','companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $customer = new Customer();
        return view('customers.create',compact('companies','customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create($this->validateRequest());

        // alert()->success('Saved!','Successfully created a new customer');

        return redirect()->route('customers.index')->with('success','Successfully created a new customer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        // Replaced with Route Model Binding
        // $customer = Customer::where('id',$customer)->firstOrFail();
        return view('customers.show',compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $companies = Company::all();
        return view('customers.edit',compact('customer','companies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($this->validateRequest());

        alert()->info('Updated!','Successfully updated a customer');

        return redirect()->route('customers.show',$customer->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        
        alert()->error('Deleted','You have finally deleted a customer');

        return redirect()->route('customers.index');
    }

    private function validateRequest()
    {
        return request()->validate([
            'company_id' => 'required',
            'name' => 'required|min:3',
            'email' => ['required'],
            'status' => 'required'
        ]);

        if (request()->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }
    }
}
