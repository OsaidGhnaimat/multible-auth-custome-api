<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         // Validate the incoming request data
         $validatedData = $request->validate([
             'name' => 'required|string|max:255',
             'email' => 'required|email|unique:users|max:255',
             'password' => 'required|min:6',
         ]);

         // Create the user with the specified role_id
         $user = User::create([
             'name' => $validatedData['name'],
             'email' => $validatedData['email'],
             'password' => bcrypt($validatedData['password']),
             'role_id' => 1, // Assuming the role_id for the desired role is 1
         ]);



         return response()->json([
             'status' => 200,
             'message' => 'User created successfully',
         ], 200);
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
