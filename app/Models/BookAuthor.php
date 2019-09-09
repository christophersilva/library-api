<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class BookAuthor extends Model{
  protected $table = 'books_authors';

  protected $fillable = ['author_id', 'book_id'];

  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
}
