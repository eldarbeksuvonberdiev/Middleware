<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index(){
        $models = User::orderBy('id','desc')->paginate(10);
        return view('user.index',['models' => $models]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'role' => 'required',
        ]);
        User::create($request->all());
        return redirect()->route('user');
    }

    public function show(User $user){
        return view('user.show',['user'=>$user]);
    }

    public function update(Request $request,User $user){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);
        $user->update($request->all());
        return redirect()->route('user');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->back();
    }
}
