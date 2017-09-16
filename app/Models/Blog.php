<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
  // public $timestamps = false; //jika created_at and updated_at ngak ada

  // protected $fillable = ['title','description']; //whitelist
  protected $guarded = []; //blacklist
}
