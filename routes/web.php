<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Admin\AdminConsultationController;
use App\Http\Controllers\Client\ConsultationController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', fn () => view('pages.about'))->name('about');
Route::get('/contact', fn () => view('pages.contact'))->name('contact');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/services/{id}', [ServiceController::class, 'show'])
    ->name('services.show');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/{portfolio}', [PortfolioController::class, 'show'])
    ->name('portfolio.show');

Route::get('/auth/google', [GoogleController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [GoogleController::class, 'callback']);
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::get('/consultations',[\App\Http\Controllers\Client\ConsultationController::class, 'index'])
        ->name('client.consultations.index');
    Route::get('/consultation', [ConsultationController::class, 'create'])
        ->name('consultation.create');
    Route::post('/consultation', [ConsultationController::class, 'store'])
        ->name('consultation.store');
    Route::get('/consultations/{consultation}',[ConsultationController::class, 'show'])
        ->name('client.consultations.show');

    Route::get('/dashboard/notifications', function () {
    auth()->user()->unreadNotifications->markAsRead();
    return view('client.notifications.index', [
        'notifications' => auth()->user()->notifications
        ]);
    })->middleware('auth')->name('client.notifications');


});


// ADMIN //
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {return view('admin.dashboard');})
        ->name('dashboard');

    // Consultation (tanpa ubah logic lama)
    Route::resource('consultations', AdminConsultationController::class)
        ->only(['index', 'show', 'update']);

    Route::post('/consultations/{consultation}/status',[AdminConsultationController::class, 'updateStatus'])
        ->name('consultations.status');

    Route::get('/consultations/{consultation}/export',[AdminConsultationController::class, 'export'])
        ->name('consultations.export');

    // Portfolio
    Route::resource('portfolios', AdminPortfolioController::class);
});



// Route::get('/', function () {
//     return view('pages.home');
// });



