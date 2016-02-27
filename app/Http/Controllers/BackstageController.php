<?php

namespace xhhweb\Http\Controllers;

use Illuminate\Http\Request;

use xhhweb\Http\Requests;
use xhhweb\Http\Controllers\Controller;

class BackstageController extends Controller
{
    public function index(){
        return view("backstage.index");
    }
}
