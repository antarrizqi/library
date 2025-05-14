<?php

namespace App\Http\Controllers;

use app\Http\Controllers;
use Illuminate\Database\Eloquent\Models\User;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {


        $User = User::all();
        return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => '',
            'email'=>'',
            'user'=>'',
            'password'=>'',
            'role'=>'',
        ]);

        


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
