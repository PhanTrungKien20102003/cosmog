<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_PageController extends Controller
{
    public function AdminPageIndex(){
        return view('admin_Page');
    }
}
