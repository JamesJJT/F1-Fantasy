<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $userinfo = Auth::user()->count();
        return view('admin.dashboard')->with([
            'user' => $userinfo,
        ]);
    }

    public function showUsers()
    {
        $users = Auth::user()->paginate(15);
        return view('admin.users')->with([
            'users' => $users,
        ]);
    }

    public function showSpecificUser($user)
    {
        $user = User::findOrFail($user);
        return view('admin.specificUser')->with([
            'user'=>$user
        ]);
    }

    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'admin' => ['required', 'boolean', 'max:1']
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => $validator->errors()->all()], 400);
        }

        User::where("id", $id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "admin" => $request->admin
        ]);

        $user = User::findOrFail($id);

        return redirect()->route('adminSpecificUser', ['user'=> $id])->with([
            'success' => 'User updated successfully'
        ]);
    }
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('adminUsers')->with([
            'success' => 'User deleted successfully'
        ]);
    }
}
