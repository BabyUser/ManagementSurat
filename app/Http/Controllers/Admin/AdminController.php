<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
      $active = 'dashboard';
      return view("admin.index",['active' => $active]);
    }

    public function inbox()
    {
      $active = 'inbox';
      return view('admin.inbox', ['active' => $active]);
    }

    public function compose()
    {
      $active = 'add';
      return view('admin.add-email',['active' => $active]);
    }

    public function profile()
    {
      $active = 'profile';
      return view('admin.profile', ['active' => $active]);
    }
}
