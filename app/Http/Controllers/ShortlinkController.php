<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class ShortlinkController extends Controller
{
    //
    public function index() {
        return view('layout.index');
    }

    public function show(){
        return view('layout.list');
    }


    public function store(Request $request) {
        $request->validate([
            'url' => 'required'
        ]);
        //dd($request->all());
        $longurls = new longurls;
        $longurls->url = $request->get('url');
        $number = rand(10,99);
        $string = $this->generateRandomString(3);
        $longurls->code = "/gt/334$string$number";
        $longurls->save();




        return redirect('/new')->with('success','shorturl created');

    }

    function generateRandomString($length = 3) {
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}
