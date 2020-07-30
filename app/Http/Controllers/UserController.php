<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function index()
  {
    $user = User::all();
    return view ('welcome', ['users'=>$users]);
  }

  public function create()
  {

  }

  public function store(Request $request)
  {

  }

  public function show($id)
}
