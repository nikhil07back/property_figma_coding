<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/error', function () {
    abort(500);
});

require __DIR__.'/auth.php';

Route::get('/verify-email',function() {
    return view('pages.auth.verify-email');
});

Route::get('/add-phone',function() {
    return view('pages.auth.add-phone');
});

Route::get('/completed',function() {
    return view('pages.auth.completed');
});

Route::get('/company-details',function() {
    return view('pages.auth.company-details');
});

Route::get('/select-plan',function() {
    return view('pages.auth.select-plan');
});

Route::get('/billing-address',function() {
    return view('pages.auth.billing-address');
});


Route::get('/payment',function() {
    return view('pages.auth.payment');
});

Route::get('/user-dashboard',function() {
    return view('pages.dashboards.index');
});

Route::prefix('/properties')->group(function () {

    Route::get('/all',function() {
        return view('pages.properties.all-properties');
    });

    Route::get('/create',function() {
        return view('pages.properties.create-property');
    });

    Route::get('/create/shift',function() {
        return view('pages.properties.create-shift');
    });

    Route::get('/create/checkpoints',function() {
        return view('pages.properties.checkpoints');
    });

    Route::get('/create/checkpoints/morning-shift',function() {
        return view('pages.properties.checkpoint-morning-shift');
    });

    Route::get('/create/routes',function() {
        return view('pages.properties.routes');
    });

    Route::get('/create/assign-guards',function() {
        return view('pages.properties.assign-guards');
    });

});

Route::prefix('/guards')->group(function () {

    Route::get('/all',function() {
        return view('pages.guards.guards-list');
    });

    Route::get('/add',function() {
        return view('pages.guards.add-guard');
    });

    Route::get('/edit',function() {
        return view('pages.guards.edit-guard');
    });

});

Route::get('/reports',function() {
    return view('pages.reports.reports');
});
Route::get('/delete',function() {
    return view('pages.reports.delete');
});


// shift routes is here


Route::prefix('/shift')->group(function () {

    Route::get('/all',function() {
        return view('pages.shift.all-shift');
    });

    Route::get('/edit',function() {
        return view('pages.shift.edit-shift');
    });

    Route::get('/checkpoint',function() {
        return view('pages.shift.checkpoint-shift');
    });

    Route::get('/checkpoint/edit',function() {
        return view('pages.shift.edit-checkpoint-shift');
    });

    Route::get('/routes',function() {
        return view('pages.shift.routes-shift');
    });


    Route::get('/assign-guards',function() {
        return view('pages.shift.assign-guards-shift');
    });


});
