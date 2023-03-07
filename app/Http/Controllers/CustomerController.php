<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Customer;

use Illuminate\Support\Str;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    //
    public function index()
    {
        
        $data = DB::table('customers')->get();
        return response()->json($data);
    }

//     public function store(Request $request)
// {
//     $customer = new Customer;
//     $customer->name = $request->input('name');
//     $customer->email = $request->input('email');
//     $customer->avatar = $request->input('avatar');
//     $customer->password = Hash::make($request->input('password'));
//     $customer->remember_token = Str::random(10);
//     $customer->phone = $request->input('phone');
//     $customer->save();

    
//     return response()->json(['message' => 'Customer created successfully']);
// }

// with token 


public function store(Request $request)
{
    $customer = new Customer;
    $customer->name = $request->input('name');
    $customer->email = $request->input('email');
    $customer->avatar = $request->input('avatar');
    $customer->password = Hash::make($request->input('password'));
    $customer->remember_token = Str::random(10);
    $customer->phone = $request->input('phone');
    $customer->save();

    // generate a new token for the user
    $token = Str::random(60);

    // update the customer record with the token
    $customer->forceFill([
        'api_token' => hash('sha256', $token),
    ])->save();

    return response()->json([
        'message' => 'Customer created successfully',
        'token' => $token,
    ]);
}


// show function for every customer

// public function show($id)
// {
//     // $data = DB::table('customers')->get();
//     //     return response()->json($data);
//     $customer = Customer::find($slug);

//     if (!$customer) {
//         return response()->json(['error' => 'Customer not found'], 404);
//     }

//     return response()->json(['customer' => $customer]);
// }

public function showBySlug($slug)
{
    $customer = Customer::where('slug', $slug)->firstOrFail();

    if (!$customer) {
                return response()->json(['error' => 'Customer not found'], 404);
            }
    return response()->json($customer);
}

}
