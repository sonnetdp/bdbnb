<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index(){
        return 'from controller';
    }

    public function queryForm(){
        return view('query');
    }

    public function querySave(){
        return 'query form';
    }
}
