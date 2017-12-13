<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;

class TableController extends Controller
{
    public function index()
    {
      $cats = Cat::all();
      return view('table', ['cats' => $cats]);
    }

}
