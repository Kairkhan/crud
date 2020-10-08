<?php


namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        if(auth()->user())
        {
            return view('user.index');
        }
        return redirect('/login');
    }


    public function show()
    {
        $user = User::find(Auth::user()->id);
        return view('user.posts',['posts'=>$user->posts]);
    }
}
