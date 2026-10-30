<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UiSweetalertController extends Controller
{
     public function index()
    {
        return view('admin.ui-sweetalerts');
    }
}