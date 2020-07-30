<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;}

class MenuController extends Controller
{
    public function index()
    {
      $menu = Menu::all();
      return view ('welcome', ['menu'=>$menu]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)

}
