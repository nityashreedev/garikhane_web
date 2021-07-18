<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ConformMail;
use App\Events\NewUserRegisterEvent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use Validator;
class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at','desc')->get();

        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $purpose = "Create";
        $users = new User();
        return view('admin.user.create', compact('users', 'purpose'));
    }

    public function store(Request  $request)
    {
        $this->validate($request,
            [
                'fname'=> 'required',
                'lname'=>'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).{8,}$/',
                'role'=> 'nullable',
                'phone'=> 'required|numeric|digits:10|',
                'address'=> 'required',
            ]
        );
        $user = new User();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->email = $request->get('email');
        $password  = $request->get('password');
        if ($request->has('password')) {
            $pass =  bcrypt($request->get('password'));
            $user->password = $pass;
        }

        $user->role = $request->get('role');
        $user->save();
        $request->session()->flash('success','User created');
        Mail::to($user->email)->send(new ConformMail($user, $password));
        return redirect('admin/users');
        

    }

    public function edit($id)
    {
        $purpose = 'Edit';
        $users = User::findOrFail($id);
        return view('admin.user.edit', compact('users', 'purpose'));
    }

    public function update($id, Request $request)
    {
        
        $this->validate(
            $request,
            [
                'fname'=> 'required',
                'lname'=>'required',
                'email' => 'required|email|unique:users,email,'.$id.',id',
                'password' => 'sometimes|nullable|min:6|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[^\w\s]).,}$/',
                'role'=> 'nullable',
                'phone'=> 'required|numeric|digits:10|',
                'address'=> 'required'
            ]);


        $user = User::findorfail($id);

        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->get('email');
        if ($request->has('password') && $request->password != null ) {
            $pass =  bcrypt($request->get('password'));
            $user->password = $pass;
        }

        $user->role = $request->get('role');
        $user->address = $request->address;
        $user->phone = $request->phone;

        $user->save();
        $request->session()->flash('success', 'User Updated');
        return redirect('admin/users');
    }

    public function delete($id ,Request $request)
    {
        $user = User::findorfail($id);
        $user->delete();
        $request->session()->flash('success', 'user deleted successfully!');
        return redirect('admin/users');
    }

    public function changestatus(Request $request)
    {

        $user = User::find($request->user_id);
        $status = $user->status;
        $newStatus = 'active';
        $buttonText = 'Suspend';

        if($status == 'active')
        {
            $newStatus = 'suspended';
            $buttonText = 'Active';
        }

        $user->status = $newStatus;
        $user->save();
        return [
            'status' => 'success',
            'userId' => $user->id,
            'text' => $buttonText,
            'newStatus' => $newStatus
        ];
    }
}
