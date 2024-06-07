<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsercenterController extends Controller
{
    //

    public function index() {
        $userTypes = \App\Models\User::all();
        return view('admin.usercenter.index', compact('userTypes'));
    }

    public function edit($id)
    {
        $userType = User::findOrFail($id);
        return view('usertypes.edit', compact('userType'));
    }
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('usertypes.index')->with('success', 'User type deleted successfully.');
    }

}
