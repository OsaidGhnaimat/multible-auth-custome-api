<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('log-in');
    }




    public function login(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['name'] = $user->name;

            if ($user->role_id == 1) {
                // Return a view with the response data for role 1
                return response()->json([
                    'status' => 200,
                    'message' => 'admin login successfully',
                ], 200);

            } elseif ($user->role_id == 2) {
                // Return a view with the response data for role 2
                return response()->json([
                    'status' => 200,
                    'message' => 'user login successfully',
                ], 200);
                        } else{
                            return response()->json([
                                'status' => 200,
                                'message' => 'student login successfully',
                            ], 200);
            }

        } else {
            // Return a view with an error message
            return view('form', ['error' => 'Unauthorised']);
        }
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
        //
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
