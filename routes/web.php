<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::view('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

Route::middleware(['auth'])->group(function () {
    Route::livewire('invitations/{invitation}/accept', 'pages::teams.accept-invitation')->name('invitations.accept');
});

Route::get('/home', function () {

    $data = [
        "title" => "BACKGROUND TO THE CHACO WAR AND RESOLUTION OF THE CONFLICT",
        "paragraphs" => [
            "Since the 19th century, the definition of the border...",
            "In the absence of agreements...",
            "After the end of the war...",
            "In April 2009..."
        ]
    ];

    return view('home', compact('data'));
});

require __DIR__.'/settings.php';

