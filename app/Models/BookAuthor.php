<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class BookAuthor extends Model{
  use SoftDeletes;

  protected $fillable = ['author_id', 'book_id'];

  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
