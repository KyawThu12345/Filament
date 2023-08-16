<?php

namespace App\Http\Controllers;

use App\Models\Customer; // Import the Customer class

class UserController extends Controller
{
    public function showCustomer()
    {
        $customers = Customer::where('name', 'John')->get();

        foreach ($customers as $customer) {
            // Do something with each customer
        }
    }
}
