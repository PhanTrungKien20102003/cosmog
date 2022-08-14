<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_Page_Controller extends Controller
{
    public function adminIndex(){
        return view('admin-Page');
    }
}
