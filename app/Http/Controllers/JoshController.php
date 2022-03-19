<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JoshController extends Controller
{
    
    public function index($name=null)
    {
        return 'hello,'.$name;
    }
}
