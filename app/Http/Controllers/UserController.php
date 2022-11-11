<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;

class UserController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function index()
    {
        return view("dashboard.index");
    }

    public function login()
    {
        return view("login");
    }

    public function loggedIn(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            "password"=>"required",
        ]);

        if(Auth::attempt(['email'=>$request->email,"password"=>$request->password])){
            return redirect()->route("user.index");
        }else{
            Session::flash('error',"Invalid Login Details");
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }

    public function all()
    {
        $user = User::orderBy('name','asc')->get();

        return view('dashboard.users.all')->withUsers($user);
    }

    public function available_books()
    {
        return view("dashboard.users.allBooks");
    }

    public function checkedBooks()
    {
        $userBooks = Auth::user()->books;

        return view('dashboard.users.books')->withUserBooks($userBooks);
    }

    public function profile(User $user)
    {
        return view('dashboard.profile')->withUser($user);
    }
}