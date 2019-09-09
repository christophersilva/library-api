<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
  return $router->app->version();
});

  $router->get('languages', 'LanguagesController@index');
  $router->get('languages/{id}', 'LanguagesController@show');
  $router->post('languages', 'LanguagesController@create');
  $router->put('languages/{id}', 'LanguagesController@update');
  $router->delete('languages/{id}', 'LanguagesController@destroy');

  $router->get('countries', 'CountriesController@index');
  $router->get('countries/{id}', 'CountriesController@show');
  $router->post('countries', 'CountriesController@create');
  $router->put('countries/{id}', 'CountriesController@update');
  $router->delete('countries/{id}', 'CountriesController@destroy');

  $router->get('programming_languages', 'ProgrammingLanguagesController@index');
  $router->get('programming_languages/{id}', 'ProgrammingLanguagesController@show');
  $router->post('programming_languages', 'ProgrammingLanguagesController@create');
  $router->put('programming_languages/{id}', 'ProgrammingLanguagesController@update');
  $router->delete('programming_languages/{id}', 'ProgrammingLanguagesController@destroy');

  $router->get('authors', 'AuthorsController@index');
  $router->get('authors/{id}', 'AuthorsController@show');
  $router->post('authors', 'AuthorsController@create');
  $router->put('authors/{id}', 'AuthorsController@update');
  $router->delete('authors/{id}', 'AuthorsController@destroy');
  $router->get('authors/{id}/books', 'AuthorsController@books');

  $router->get('books', 'BooksController@index');
  $router->get('books/{id}', 'BooksController@show');
  $router->post('books', 'BooksController@create');
  $router->put('books/{id}', 'BooksController@update');
  $router->delete('books/{id}', 'BooksController@destroy');
  $router->get('books/{id}/authors', 'BooksController@authors');
