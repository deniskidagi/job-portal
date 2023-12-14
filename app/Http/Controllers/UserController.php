<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createseeker(){
        return view("user.seeker-register");
    }
}
