<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;    

class CustomerController extends Controller
{
    public function update(CustomerRequest $request)
    {
        Customer::where('customerNumber', $request['customerNumber'])
        ->update($request->only(['contactLastName', 'contactFirtsName', 'phone', 'postalCode']));

        return 'Yes';
    }
}