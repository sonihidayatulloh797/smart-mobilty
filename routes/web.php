<?php

use Illuminate\Support\Facades\Route;

// LIVEWIRE
use App\Http\Livewire\AdminDashboard;

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ManajemenKamera;
use App\Http\Livewire\AnalisisKinerjaSimpang1;
use App\Http\Livewire\AnalisisKinerjaSimpang2;
use App\Http\Livewire\AnalisisKinerjaSimpang2Detail;
use App\Http\Livewire\AnalisisKinerjaSimpang3;
use App\Http\Livewire\AnalisisKinerjaSimpang4;

// Landing Page
Route::get('/', function () {
    return view('authentication.login');
});

Route::get('/landing-page', function () {
    return view('landing.index');
})->name('landing-page');

// Admin
Route::get('/admin-dashboard', AdminDashboard::class)->name('admin-dashboard');
// End Admin

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/manajemen-kamera', ManajemenKamera::class)->name('manajemen-kamera');
Route::get('/analisis-kinerja-simpang1', AnalisisKinerjaSimpang1::class)->name('analisis-kinerja-simpang1');
Route::get('/analisis-kinerja-simpang2', AnalisisKinerjaSimpang2::class)->name('analisis-kinerja-simpang2');
Route::get('/analisis-kinerja-simpang2-detail', AnalisisKinerjaSimpang2Detail::class)->name('analisis-kinerja-simpang2-detail');
Route::get('/analisis-kinerja-simpang3', AnalisisKinerjaSimpang3::class)->name('analisis-kinerja-simpang3');
Route::get('/analisis-kinerja-simpang4', AnalisisKinerjaSimpang4::class)->name('analisis-kinerja-simpang4');

Route::get('/traffic', function () {
    return view('traffic');
});
