<?php

namespace App\Http\Controllers;

use App\Companies;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
        return view('companies.index', ['companies' => Companies::orderBy('name')->get()]);
    }
    public function create() {
        return view('companies.create');
    }
    public function store(Request $request) {
        $company = new Companies();
     // can be used for seeing the insides of the incoming request
         // var_dump($request->all()); die();
        $company->fill($request->all());
        $company->save();
        return redirect()->route('company.index');
    }
 
    public function edit(Companies $company){
        return view('companies.edit', ['company' => $company]);
    }
 
    public function update(Request $request, Companies $company){
        $company->fill($request->all());
        $company->save();
        return redirect()->route('company.index');
    }
 
     public function destroy(Companies $company){
         $company->delete();
         return redirect()->route('company.index');
     }
}
