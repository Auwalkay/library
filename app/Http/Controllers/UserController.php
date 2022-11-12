<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;
use Hash;

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

    public function picture()
    {
        return view("dashboard.upload");
    }

    public function picture_upload(Request $request)
    {
        $this->validate($request,[
            'picture'=>'required|mimes:jpg,jpeg|max:1024'
        ]);

        $filename = request()->file('picture')->getClientOriginalName();
    	 	$newName = time().$filename;
    	 	request()->file('picture')->move(public_path().'/passports/',$newName);
        Auth::user()->passport = $newName;
        Auth::user()->save();
        return redirect()->route('user.profile',Auth::id());
    }

    public function create()
    {
        return view('dashboard.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email|unique:users,email',
            'fullName'=>'required|min:5|max:255|string',
            "password"=>"required|confirmed",
            "phoneNumber"=>"required|unique:users,phoneNumber|max:11",

            "password"=>"required|confirmed"
        ]);

        $user = User::create([
            "name"=>$request->fullName,
            "email"=>$request->email,
            "password"=>Hash::make($request->password),
            "user_type_id"=>1,
            "phoneNumber"=>$request->phoneNumber,

        ]);
        Session::flash("success","New User Added");
        return redirect()->route("user.profile",$user->id);

    }
}