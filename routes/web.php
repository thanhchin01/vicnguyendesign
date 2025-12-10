<?php


use App\Http\Controllers\Client\PortfolioController;
use App\Http\Controllers\ProjectsController;
use Aws\RolesAnywhere\RolesAnywhereClient;
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

Route::get('/team', function () {
    return view('pages/team');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/contact', function () {
    return view('pages/contact');
});


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

    Route::get('/', function () {
        return view('figmaUI.pages.splash');
    })->name('new.splash');

    Route::get('/project', function () {
        return view('figmaUI.pages.project_home');
    });

    Route::get('/project/details-project', function () {
        return view('figmaUI.pages.project_details');
    });

    Route::get('/studio', function () {
        return view('figmaUI.pages.studio');
    });

    Route::get('/member', function () {
        return view('figmaUI.pages.member');
    });

    Route::get('/news', function () {
        return view('figmaUI.pages.news');
    });

    Route::get('/news/details', function () {
        return view('figmaUI.pages.news_details');
    });

    Route::get('/address', function () {
        return view('figmaUI.pages.address');
    });

    Route::get('/contact', function () {
        return view('figmaUI.pages.contact');
    });
});

// Routes admin
Route::prefix('admin')->name('admin.')->group(function () {
    require __DIR__ . '/admin.php';
});
