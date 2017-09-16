<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\siswa;

class StudentsController extends Controller
{
    public function list()
    {
      $active = 'StudentsList';
      $user = siswa::get();

      return view('admin.students',['active' => $active, 'users' => $user]);
    }
}
