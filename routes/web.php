<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home\Index::class)->name('index');

Route::name('course.')->prefix('course')->group(function () {
  Route::get('/', \App\Livewire\Course\Index::class)->name('index');
});

Route::name('event.')->prefix('event')->group(function () {
  Route::get('/', \App\Livewire\Event\Index::class)->name('index');
});

Route::name('gallery.')->prefix('gallery')->group(function () {
  Route::get('/', \App\Livewire\Gallery\Index::class)->name('index');
});

Route::name('news.')->prefix('news')->group(function () {
  Route::get('/', \App\Livewire\News\Index::class)->name('index');
});

Route::name('contact.')->prefix('contact')->group(function () {
  Route::get('/', \App\Livewire\Contact\Index::class)->name('index');
});
