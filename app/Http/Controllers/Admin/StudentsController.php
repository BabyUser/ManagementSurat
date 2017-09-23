<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\siswa;

class StudentsController extends Controller
{
    public function list(Request $request)
    {
      //Kategori
      $active = 'StudentsList';
      $user['list'] = siswa::where('grade', 'like', "%$request->kelas%")->orwhere('name', 'like', "%$request->kelas%")->paginate(15);
      // data kelas 10
      $user['klsX'] = siswa::
                        where('grade', 'like', '10%')
                        ->get()
                        ->count();
      // data kelas 11
      $user['klsXI'] = siswa::
                        where('grade', 'like', '11%')
                        ->get()
                        ->count();
      // data kelas 12
      $user['klsXII'] = siswa::
                        where('grade', 'like', '12%')
                        ->get()
                        ->count();
      return view('admin.students',['active' => $active, 'users' => $user]);
    }

    public function destroy($nis)
    {
      $active = 'StudentsList';
      //soft delete
      siswa::where('nis', "$nis")->delete();
      return redirect()->route('admin.ListStudents', ['active' => $active]);
    }
}
