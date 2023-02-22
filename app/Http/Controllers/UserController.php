<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manageUser()
    {
        return view('adminPanel.user.manage-user', [
            'users' => User::all()
        ]);
    }

    public function editUser($id)
    {
        return view('adminPanel.user.edit-user', [
            'user' => User::find($id)
        ]);
    }

    public function updateUser(Request $request)
    {
        User::updateUser($request);
        return redirect(route('manage.user'))->with('message', 'update successfully');
    }

    public function deleteUser(Request $request)
    {
        User::deleteUser($request);
        return back()->with('message', 'delete successfully');
    }


}
