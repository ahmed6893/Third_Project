<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminCustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::with('orders')->get();
        return view('admin.customer.index',['customers'=>$customer]);
    }
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return back()->with('delete','Customer Deleted Successfully');
    }
}
