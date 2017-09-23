<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siswa extends Model
{
  //soft delete
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'siswas';
}
