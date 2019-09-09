<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Author extends Model{
  use SoftDeletes;

  protected $fillable = ['name', 'avatar', 'country_id'];

  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

  public function country()
  {
    return $this->belongsTo('App\Models\Country');
  }

  public function authors()
  {
    return $this->hasManyThrough('App\Models\Book', 'App\Models\BookAuthor', 'author_id', 'id', 'id', 'book_id');
  }
}
