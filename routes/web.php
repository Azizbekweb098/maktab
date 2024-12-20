<?php

use App\Http\Controllers\Admin\ahborot\GeleriyaController;
use App\Http\Controllers\Admin\ahborot\InfografikaController;
use App\Http\Controllers\Admin\ahborot\maktabNewsController;
use App\Http\Controllers\Admin\BolimBoshligiController;
use App\Http\Controllers\Admin\ManaviyatchiController;
use App\Http\Controllers\Admin\RahbariyatController;
use App\Http\Controllers\Admin\talim\oneSemenaControlller;
use App\Http\Controllers\Admin\talim\qoshimchaDarsControlller;
use App\Http\Controllers\Admin\talim\sportTograraklari;
use App\Http\Controllers\Admin\talim\twoSemenaControlller;
use App\Http\Controllers\Admin\Teachers\BirinchiController;
use App\Http\Controllers\Admin\Teachers\IkkinchiController;
use App\Http\Controllers\Admin\Teachers\MutaxasizController;
use App\Http\Controllers\Admin\Teachers\OliyController;
use App\Http\Controllers\Admin\UserCreateController;
use App\Http\Controllers\Admin\YoshlarY;
use App\Http\Controllers\Admin\ZamDirektorController;
use App\Http\Controllers\MaktabController;
use App\Http\Controllers\ProfileController;


use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('maktab');
});



Route::middleware(['auth', 'verified'])->group( function() {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    
    })->middleware(['auth', 'verified'])->name('dashboard');
//   rahbariyat start
    Route::resource('user', UserCreateController::class)->names('users');
    Route::resource('rahbariyat', RahbariyatController::class)->names('rahbariyat');
    Route::resource('zam', ZamDirektorController::class)->names('zams');
    Route::resource('manaviyatchi', ManaviyatchiController::class)->names('manaviyatchi');
    Route::resource('bolim', BolimBoshligiController::class)->names('bolim');
    Route::resource('yoshlar', YoshlarY::class)->names('yoshlar');
    // rahbariyatcontroller

    // oqitvuchilar start
 Route::resource('oliy', OliyController::class)->names('oliy');
 Route::resource('birinchi', BirinchiController::class)->names('birinchi');
 Route::resource('ikkinchi', IkkinchiController::class)->names('ikkinchi');
 Route::resource('mutaxasiz', MutaxasizController::class)->names('mutaxasiz');
//  oqituvchi end

// talim start
Route::resource('one-smena', oneSemenaControlller::class)->names('smena-1');
Route::resource('towo-smena', twoSemenaControlller::class)->names('smena-2');
Route::resource('qoshimcha-darslar', qoshimchaDarsControlller::class)->names('q-darslar');
Route::resource('sport-togaraklar', sportTograraklari::class)->names('sport-t');
// talim end
// ahborot yangiliklar start
Route::resource('maktabNews', maktabNewsController::class)->names('news');
Route::resource('geleriya', GeleriyaController::class)->names('galeriya');
Route::resource('infografika', InfografikaController::class)->names('infografika');

});

// asosiy panel
Route::get('maktab-task', [MaktabController::class, 'maktabtask'])->name('maktab-task.index');
Route::get('maktab-rahbariyat', [MaktabController::class, 'rahbariyat'])->name('maktab-rahbariyat.index');
Route::get('maktab-teachers', [MaktabController::class, 'teachers'])->name('maktab-teachers.index');
Route::get('maktab-rekvizit', [MaktabController::class, 'rekvizit'])->name('maktab-rekvizit.index');
// end asosiy panel



























Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
