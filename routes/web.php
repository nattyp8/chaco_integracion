<?php
use App\Http\Controllers\EcoController;
use App\Http\Controllers\GuerraController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\HomeController;

Route::view('/', 'welcome', [
])->name('welcome');

// Route::prefix('{current_team}')
//     ->middleware(['auth', 'verified', EnsureTeamMembership::class])
//     ->group(function () {
//         Route::view('dashboard', 'dashboard')->name('dashboard');
//     });


// Route::middleware(['auth'])->group(function () {
//     Route::livewire('invitations/{invitation}/accept', 'pages::teams.accept-invitation')->name('invitations.accept');
// });

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get ('/guerra/{year}', [GuerraController::class, 'year'])
    ->where('year', '1932|1933|1934|1935')
        ->name('guerra.year')
    ;

Route::get('/vistaPrincipal', [EcoController::class, 'vistaPr'])
    ->name('vistaPrincipal');

Route::get('/ecorregiones', [EcoController::class, 'ecoVista']);

Route::get('/ecorregiones/{region}', [EcoController::class, 'contReg'])
    ->name('contReg');

Route::get('/precipitaciones', [EcoController::class, 'precVista']);

Route::get('/zonasclimaticas', [EcoController::class, 'zonasVista']);

Route::get('/zonasclimaticas/{region}', [EcoController::class, 'contRegV'])
    ->name('contRegV');

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['es', 'en'])) {
        session(['locale' => $locale]);
    }

    return redirect()->back();
})->name('lang.switch');



require __DIR__.'/settings.php';

