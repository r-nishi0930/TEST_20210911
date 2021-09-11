<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm()
    {
        return view('confirm');
    }

    public function input(Request $request)
    {
        $param = [
            'name' => $request->name,
            'sex' => $request->sex,
            'mail' => $request->mail,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
            'idea' => $request->idea,
        ];
        return view('/confirm',['param' => $param]);
    }

    public function insert(Request $request)
    {
        $param = [
            'name' => $request->name,
            'sex' => $request->sex,
            'mail' => $request->mail,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'building' => $request->building,
            'idea' => $request->idea,
        ];

        DB::insert('insert into contacts (name, sex, mail, postcode, address, building, idea) values (:name, :sex, :mail, :postcode, :address, :building, :idea)', $param);

        return view('/thanks');
    }
    public function control()
    {
        $items = DB::table('contacts')->get();
        return view('/control', ['items'=> $items]);
    }
    public function post(Request $request)
    {
    $validate_rule = [
        'name' => 'required',
        'mail' => 'required|email',
        'postcode' => 'required|max:8',
        'address' => 'required',
        'idea' => 'required',
    ];
    $this->validate($request, $validate_rule);
    return view('index', ['txt' => '正しい入力です']);
    }
}