<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    //el user_id se pasa desde la ruta(web.php)
    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if ($user) {
            $user->role_as = $request->role_as;
            $user->update();
            return redirect('admin/users')->with('message', 'Updated Successfully');
        }
        return redirect('admin/users')->with('message', 'No User Found');
    }
}
