<?php

use App\Http\Controllers\Client\ProjectController;
use App\Http\Controllers\Client\NewsController;
use App\Http\Controllers\Client\MembersController;
use App\Http\Controllers\Client\PortfolioController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\DesignRequestsController;
use App\Models\Projects;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts/welcome');
});

Route::get('/', function () {
    return view('layouts/top');
});

Route::get('/', function () {
    return view('layouts/footer');
});

Route::get('/', function () {
    return view('pages/home');
});

Route::get('/portfolio', [PortfolioController::class, 'clientIndex'])->name('client.portfolio');

Route::get('/model', function () {
    return view('pages/model');
});

// Route::get('/team', function () {
//     return view('pages/team');
// });
Route::get('/team', [MembersController::class, 'clientTeamIndex'])->name('client.member');

Route::get('/about', function () {
    return view('pages/about');
});

Route::resource('/contact', ContactController::class)->except(['show']);


// ===== SITE MỚI =====
Route::prefix('new')->group(function () {
    Route::get('/', function () {
        return view('figmaUI.layouts.top');
    });

    Route::get('/', function () {
        return view('figmaUI.layouts.footer');
    });

    Route::get('/', function () {
        return view('figmaUI.layouts.welcome');
    });

    // Route::get('/', function () {
    //     return view('figmaUI.pages.splash');
    // })->name('new.splash');

    Route::get('/', function(){
        return redirect()->route('client.project');
    });
    Route::get('/project', [ProjectController::class, 'clientProject'])->name('client.project');
    Route::get('/project/details-project/{project:slug}', [ProjectController::class, 'detailsProject'])->name('details.project');


    Route::get('/studio', function () {
        return view('figmaUI.pages.studio');
    });

    Route::get('member', [MembersController::class, 'clientMember']);

    Route::get('/news', [NewsController::class, 'clientIndex'])->name('client.news');
    Route::get('/news/{news:slug}', [NewsController::class , 'detailsNews'])->name('details.news');

    Route::get('/address', function () {
        return view('figmaUI.pages.address');
    });

    Route::resource('/designrequest', DesignRequestsController::class)->except(['show']);
});

// Routes admin
Route::prefix('admin')->name('admin.')->group(function () {
    require __DIR__ . '/admin.php';
});
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');
