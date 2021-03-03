<?php

namespace App\Http\Controllers;
use App\Models\userreg;
use Illuminate\Http\Request;

class UserregController extends Controller
{
    public function userregistation(){
        return view(view:'user.userreg');
       }

       public function RegistationDataStore(Request $request){
  

        $userreg_obj = new userreg;

        $userreg_obj->fullname = $request->fullname;
        $userreg_obj->username = $request->username;
        $userreg_obj->nip = $request->nip;
        $userreg_obj->telephone = $request->telephone;
        $userreg_obj->description = $request->description;
        $userreg_obj->address = $request->address;
        $userreg_obj->email = $request->email;
        $userreg_obj->password = $request->password;

        $userreg_obj->save();

        $request->validate([
            'fullname' => 'required',
            'username' => 'required',
            'nip' => 'required',
            'telephone' => 'required',
            'description' => 'required',
            'address' => 'required',
            'email' => 'required',
            'password' => 'required',
        ],[
            'fullname.required' => 'Please Input Full Name',
            'username.required' => 'Please Input User Name',
            'nip.required' => 'Please Input NIF Number',
            'telephone.required' => 'Please Input Telephone Number',
            'description.required' => 'Please Input Description',
            'address.required' => 'Please Input Your Address',
            'email.required' => 'Please Input Your Email',
            'password.required' => 'Please Input Your Password',
        ]);

          
           
      
           return redirect()->back()->with('success','successfully Registar Your Account.');
    }   
}
