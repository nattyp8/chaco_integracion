<?php

use App\Http\Controllers\GuerraController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\HomeController;

Route::view('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('welcome');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::livewire('invitations/{invitation}/accept', 'pages::teams.accept-invitation')->name('invitations.accept');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get ('/guerra/{year}', [GuerraController::class, 'year'])
    ->where('year', '1932|1933|1934|1935')
    ->name('guerra.year')
;


require __DIR__.'/settings.php';

