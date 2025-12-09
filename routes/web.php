<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\UploadController;
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
// Route::get('/portfolio', function () {
//     return view('pages/portfolio');
// });

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

//Ckfinder
// Route::prefix('ckfinder')->group(function () {
//    \CKFinder\CKFinder::routes();
// });


// site Admin
Route::prefix('admin')->group(function () {
    //2. Login...
    // Route::get('/login', function () {
    //     return view('Admin.layouts.login');
    // });
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'postLogin'])->name('postLogin');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/forgotpassword', function () {
        return view('Admin.layouts.forgot-password');
    });
});
Route::middleware(['auth:admin'])->prefix('admin')->group(function () {

    //1. Layout
    Route::get('/', function () {
        return view('Admin.layouts.top');
    });

    Route::get('/', function () {
        return view('Admin.layouts.footer');
    });

    Route::get('/', function () {
        return view('Admin.layouts.sidebar');
    });

    Route::get('/', function () {
        return view('Admin.layouts.welcome');
    });


     Route::get('/profile', function () {
        return view('Admin.layouts.profile');
    });
    Route::get('profile', [AuthController::class, 'profile'])->name('profile');

    Route::get('/', function () {
        return view('Admin.pages.home.home');
    })->name('admin.home');


    //2. Routes cho Portfolio
    // Route::get('/portfolio', function () {
    //     return view('Admin.pages.portfolio.index');
    // });
    Route::resource('portfolio', PortfolioController::class)->except(['show']);


    // 3. Routes cho Project
    // Route::get('/project', function () {
    //     return view('Admin.pages.project.project');
    // });

    // Route::get('/editproject', function () {
    //     return view('Admin.pages.project.editproject');
    // });

    // Route::get('/createproject', function () {
    //     return view('Admin.pages.project.createproject');
    // });
    Route::resource('project', ProjectsController::class)->except(['show']);


    // 4. Routes cho News
    // Route::get('/news', function () {
    //     return view('Admin.pages.news.news');
    // });

    // Route::get('/editnews', function () {
    //     return view('Admin.pages.news.editnews');
    // });

    // Route::get('/createnews', function () {
    //     return view('Admin.pages.news.createnews');
    // });
    Route::resource('news', NewsController::class)->except(['show']);
    Route::post('/upload-image', [UploadController::class, 'upload']);

    //5. Members
    // Route::get('/member', function () {
    //     return view('Admin.pages.member.member');
    // });

    // Route::get('/editmember', function () {
    //     return view('Admin.pages.member.editmember');
    // });

    // Route::get('/createmember', function () {
    //     return view('Admin.pages.member.createmember');
    // });

     Route::resource('members', MembersController::class)->except(['show']);


    //6. notice
    Route::get('/notice', function () {
        return view('Admin.pages.notice.notice');
    });

    Route::get('/details-notice', function () {
        return view('Admin.pages.notice.details-notice');
    });
});
