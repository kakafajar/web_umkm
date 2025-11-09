<?php

use App\Livewire\Landing;
use App\Livewire\ProdukCrud;
use Illuminate\Support\Facades\Route;

Route::get('/', Landing::class);
Route::get('/admin', ProdukCrud::class)->name('admin');
