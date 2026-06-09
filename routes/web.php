<?php
use App\Http\Controllers\EcorregionesChaco\EcoController;
use App\Http\Controllers\GuerraChaco\GuerraController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\GuerraChaco\HomeController;


Route::view('/menu', 'menu')->name('menu');


//rutas guerra del chaco

Route::view('/', 'welcome', [
])->name('welcome');

Route::get('/proyectoguerra', [HomeController::class, 'index'])->name('home');


Route::get ('/guerra/{year}', [GuerraController::class, 'year'])
    ->where('year', '1932|1933|1934|1935')
        ->name('guerra.year')
    ;


//rutas ecorregiones

Route::get('/proyectoecorregiones', [EcoController::class, 'vistaPr'])
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

