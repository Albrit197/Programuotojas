<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index() {
        return view('customers.index', ['customers' => Customer::orderBy('name')->get()]);
    }
    public function create() {
        return view('customers.create');
    }
    public function store(Request $request) {
        $customer = new Customer();
     // can be used for seeing the insides of the incoming request
         // var_dump($request->all()); die();
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('customers.index');
    }
 
    public function edit(Customer $customer){
        return view('companies.edit', ['customer' => $customer]);
    }
 
    public function update(Request $request, Customer $customer){
        $customer->fill($request->all());
        $customer->save();
        return redirect()->route('company.index');
    }
 
     public function destroy(Customer $customer){
         $customer->delete();
         return redirect()->route('customer.index');
     }
}
