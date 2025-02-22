<?php

use App\Livewire\Counter;
use App\Livewire\UsersList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});

Route::get('counter', Counter::class);
Route::get('users', UsersList::class);
