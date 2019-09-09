<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Book extends Model{
  use SoftDeletes;

  protected $fillable = ['title', 'subtitle', 'isbn', 'language_id', 'country_id', 'programming_language_id', 'published_at'];

  protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

  public function authors()
  {
    return $this->hasManyThrough('App\Models\Author', 'App\Models\BookAuthor', 'book_id', 'id', 'id', 'author_id');
  }

  public function language()
  {
    return $this->belongsTo('App\Models\Language');
  }

  public function programming_language()
  {
    return $this->belongsTo('App\Models\ProgrammingLanguage');
  }

  public function country()
  {
    return $this->belongsTo('App\Models\Country');
  }

  public function add_authors($ids)
  {
    foreach ($ids['authors_ids'] as $author_id) {
      BookAuthor::create(['book_id' => $this->id, 'author_id' => $author_id]);
    }
  }
}
