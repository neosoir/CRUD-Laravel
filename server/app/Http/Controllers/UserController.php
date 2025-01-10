<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // Show the form for creating a new resource
    public function create()
    {
        return view('users.create');
    }

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email',
            'phone'     => 'required|string|max:15',
        ]);

        User::create([
            'name'      => $request->name,
            'lastName'  => $request->lastName,
            'email'     => $request->email,
            'phone'     => $request->phone,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario creado con éxito.');
    }

    // Display the specified resource
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    // Show the form for editing the specified resource
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    // Update the specified resource in storage
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'lastName'  => 'required|string|max:255',
            'email'     => 'required|email|unique:users,email,' . $user->id,
            'phone'     => 'required|string|max:15',
        ]);

        $user->update([
            'name'      => $request->name,
            'lastName'  => $request->lastName,
            'email'     => $request->email,
            'phone'     => $request->phone,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuario actualizado con éxito.');
    }

    // Remove the specified resource from storage
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuario eliminado con éxito.');
    }
}