<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => 'what name?',
            'data' => $request->data,
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        $msg = $request->msg;
        $data = [
            'msg' => 'hello!' . $msg . '!',
            'data' => [],
        ];
        return view('hello.index', $data);
    }
}
