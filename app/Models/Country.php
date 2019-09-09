<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Country extends Model{
  use SoftDeletes;

  protected $fillable = ['name', 'iso', 'iso3'];

  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
