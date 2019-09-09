<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class ProgrammingLanguage extends Model{
  use SoftDeletes;

  protected $fillable = ['name'];

  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
