<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Apps\CoverLetterController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/app/{slug}', [HomeController::class, 'showApp'])->name('app.show');
Route::post('/app/{slug}/generate', [CoverLetterController::class, 'generate'])->name('app.generate');




// use App\Http\Controllers\ProfileController;
// use Illuminate\Foundation\Application;
// use Illuminate\Support\Facades\Route;
// use Inertia\Inertia;

// use App\Http\Controllers\Frontend\HomeController;
// use App\Http\Controllers\Apps\CoverLetterController;
// use App\Http\Controllers\Admin\DashboardController;

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/app/{slug}', [HomeController::class, 'showApp'])->name('app.show');
// Route::post('/app/{slug}/generate', [CoverLetterController::class, 'generate'])->name('app.generate');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
