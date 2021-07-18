<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;
use App\Models\Invite;
use Validator;

class InviteController extends Controller
{
    public function invite()
    {
        return view('admin.user.invite');
    }

    public function store(Request $request)
    {


        $this->validate(
            $request,[
                'email' =>'required| email| unique:admin_invite,email',
                'role' => 'required',
            ]

        );

            $invited = new Invite();
            $invited->email = $request->email;
            $invited->role = $request->role;
            $invited->invited_by =Auth::user()->id;
            $invited->save();
        $request->session()->flash('success','User Invited');

        return redirect('admin/users');
    }

    public function index()
    {
        $invited_list = Invite::all();
        return view('admin.invite.invited', compact('invited_list'));
    }

    public function delete ($id,Request $request)
    {


        $invited = Invite::findorfail($id);
        $invited->delete();
        $request->session()->flash('success', 'user deleted successfully!');
        return redirect('admin/invited-user');
    }
}
