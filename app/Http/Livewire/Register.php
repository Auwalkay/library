<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\User;
use Auth;
use Session;
use Hash;

class Register extends Component
{
    use WithFileUploads;
    public $email,$name,$password,$phoneNumber,$passport,$password_confirmation;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    protected $rules = [
        'email'=>'required|email|unique:users,email',
        'name'=>'required|min:5|max:255|string',
        "password"=>"required|confirmed",
        "phoneNumber"=>"required|unique:users,phoneNumber|max:11",

        "password"=>"required|confirmed"
    ];

    public function register()
    {
        $this->validate();


        $user = User::create([
            "name"=>$this->name,
            "email"=>$this->email,
            "password"=>Hash::make($this->password),
            "user_type_id"=>2,
            "phoneNumber"=>$this->phoneNumber,

        ]);

        if ($user) {
            if(Auth::attempt(['email'=>$this->email,"password"=>$this->password])){
                return redirect()->route("user.index");
            }else{
                Session::flash('error',"Server Error");
            }
        }else{
            Session::flash("error","Server Error");
            return redirect()->back();
        }
    }
    public function render()
    {
        return view('livewire.register');
    }

}