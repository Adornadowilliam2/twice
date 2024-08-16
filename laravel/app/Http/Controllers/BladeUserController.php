<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class BladeUserController extends Controller
{
    public function showRegistrationForm()
    {
        return view('users.register');
    }

    public function register(Request $request)
    {
        $validator = validator($request->all(), [
            "name" => "required|unique:users",
            "groupname" => "required|min:4|string",
            "country" => "required|min:4",
            "age" => "required|numeric",
            "thumbnail" => "required|string"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create($validator->validated());

        return redirect()->route('users.list')->with('success', 'User has been created');
    }

    public function showUserList()
    {
        $users = User::all();
        return view('users.list', compact('users'));
    }

    public function showEditForm($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = validator($data, [
            'name' => 'required',
            'groupname' => 'required',
            'country' => 'required',
            "age" => "required|numeric",
            "thumbnail" => "required|string"
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            User::where('id', $id)->update($validator->validated());
            return redirect()->route('users.list')->with('success', 'User has been updated');
        } catch (\Exception $e) {
            \Log::error($e);
            return redirect()->back()->withErrors(['error' => 'An error occurred while updating the user.'])->withInput();
        }
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if ($user->delete()) {
            return redirect()->route('users.list')->with('success', 'User has been deleted');
        }
    }
}
