<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function toys()
    {
        $toys = Toy::all();
        return view('admin.toys.index', compact('toys'));
    }

    public function createToy()
    {
        return view('admin.toys.create');
    }

    public function storeToy(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|uuid',
            'price' => 'required|integer',
            'image' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required|integer',
        ]);

        Toy::create($request->all());

        return redirect()->route('admin.toys.index')->with('success', 'Toy created successfully.');
    }

    public function editToy(Toy $toy)
    {
        return view('admin.toys.edit', compact('toy'));
    }

    public function updateToy(Request $request, Toy $toy)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|uuid',
            'price' => 'required|integer',
            'image' => 'required|string',
            'description' => 'required|string',
            'stock' => 'required|integer',
        ]);

        $toy->update($request->all());

        return redirect()->route('admin.toys.index')->with('success', 'Toy updated successfully.');
    }

    public function deleteToy(Toy $toy)
    {
        $toy->delete();

        return redirect()->route('admin.toys.index')->with('success', 'Toy deleted successfully.');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function editUser(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, User $user)
    {
        $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->user_id.',user_id',
            'role' => 'required|string',
            'money' => 'required|integer',
        ]);

        $user->update($request->all());

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully.');
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully.');
    }
}
