<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index'); //ทุกฟังก์ชั่นจะต้อง return ค่าออกไปเท่านั้น
    }
    public function create(){
        return view('create');
    }
    public function store(Request $request){

        return redirect('/');
    }
    public function edit($id){

        return view('edit');
    }
    public function update(Request $request, $id)
    {

        return redirect('/');
    }
}
