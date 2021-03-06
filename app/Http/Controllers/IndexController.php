<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => '山田たろう', 'mail' => 'taro@yamada'],
            ['name' => '田中はなこ', 'mail' => 'hanako@flower'],
            ['name' => '鈴木さちこ', 'mail' => 'sachiko@happy'],
        ];
        return view('index.index', ['data' => $data]);
    }
}
