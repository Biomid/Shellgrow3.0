<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUsersCreateController extends Controller
{
    public function createUser(Request $request)
    {
        // Валидация входных данных
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'role' => 'required|exists:roles,name',
            'password' => 'required|string|min:6',
            'file' => 'file',
        ]);

        // Создание нового пользователя
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            if ($file->store('uploads/documents')) {
                $user->file_path = $filename;
            } else {
                return redirect()->back()->with('error', 'File upload failed');
            }
        }
        $user->save();

        // Присвоение роли пользователю
        $role = Role::where('name', $request->role)->first();
        $user->assignRole($role);

        return redirect()->back()->with('success', 'User created successfully');
    }

    public function ShowUsers()
    {
        $users = User::orderBy('id')->get();
        return view('users', compact([
        'users'
    ]));
    }
}
