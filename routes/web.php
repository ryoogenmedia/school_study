<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home\Index::class)->name('index');

Route::name('course.')->prefix('course')->group(function () {
  Route::get('/', \App\Livewire\Course\Index::class)->name('index');
  Route::get('/detail/{slug}', \App\Livewire\Course\Detail::class)->name('detail');
});

Route::name('event.')->prefix('event')->group(function () {
  Route::get('/', \App\Livewire\Event\Index::class)->name('index');
  Route::get('/detail/{slug}', \App\Livewire\Event\Detail::class)->name('detail');
});

Route::name('gallery.')->prefix('gallery')->group(function () {
  Route::get('/', \App\Livewire\Gallery\Index::class)->name('index');
});

Route::name('news.')->prefix('news')->group(function () {
  Route::get('/', \App\Livewire\News\Index::class)->name('index');
  Route::get('/detail/{slug}', \App\Livewire\News\Detail::class)->name('detail');
});

Route::name('contact.')->prefix('contact')->group(function () {
  Route::get('/', \App\Livewire\Contact\Index::class)->name('index');
});

Route::middleware('guest')->group(function () {
  Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth')->group(function () {
  Route::prefix('dashboard')->group(function () {
    Route::get('/logout', function () {
      Auth::logout();
      return redirect()->route('login');
    })->name('logout');

    Route::name('dashboard.')->group(function () {
      Route::get('/', \App\Livewire\Dashboard\Index::class)->name('index');

      Route::get('/slider', \App\Livewire\Dashboard\Slider\Index::class)->name('slider.index');

      Route::get('/jurusan', \App\Livewire\Dashboard\Jurusan\Index::class)->name('jurusan.index');
      Route::get('/jurusan/create', \App\Livewire\Dashboard\Jurusan\Create::class)->name('jurusan.create');

      Route::get('/event', \App\Livewire\Dashboard\Event\Index::class)->name('event.index');
      Route::get('/gallery', \App\Livewire\Dashboard\Gallery\Index::class)->name('gallery.index');
      Route::get('/news', \App\Livewire\Dashboard\News\Index::class)->name('news.index');
      Route::get('/message', \App\Livewire\Dashboard\Message\Index::class)->name('message.index');
      Route::get('/admin', \App\Livewire\Dashboard\Admin\Index::class)->name('admin.index');
    });
  });
});
