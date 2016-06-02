<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

use App\Http\Requests;

class MemberController extends Controller
{
    public function index()
    {
        return Member::all();
    }

    public function search($name)
    {
        return Member::where('name','like',$name.'%')->get();
    }
}
