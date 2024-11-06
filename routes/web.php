<?php

use Illuminate\Support\Facades\Route;

// LIVEWIRE
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\AdminDashboard;
use App\Http\Livewire\AdminDashboardKamera;
use App\Livewire\AdminIntersection;
use App\Http\Livewire\AdminTrafficFlow;
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

Route::get('/landing-page1', function () {
    return view('landing.landing1');
})->name('landing-page1');

Route::get('/landing-page2', function () {
    return view('landing.landing2');
})->name('landing-page2');

Route::get('/landing-page3', function () {
    return view('landing.landing3');
})->name('landing-page3');

// Admin
Route::get('/admin-dashboard', AdminDashboard::class)->name('admin-dashboard');
Route::get('/admin-kamera', AdminDashboardKamera::class)->name('admin-kamera');
Route::get('/admin-traffic-flow', AdminTrafficFlow::class)->name('admin-traffic-flow');
Route::get('/admin-intersection', AdminIntersection::class)->name('admin-intersection');
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
