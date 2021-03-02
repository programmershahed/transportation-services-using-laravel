<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserregController extends Controller
{
    public function userregistation(){
        return view(view:'user.userreg');
       }
}
