<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = ['msg' => 'what name?'];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = ['msg' => 'hello!' . $msg . '!'];
        return view('hello.index', $data);
    }
}
