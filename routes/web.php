<?php
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\{
    HomeController,
    AboutController,
    RealisationController,
    BlogController,
    ContactController
};

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [AuthController::class, 'login'])->name('login');

Route::post('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/a-propos', [AboutController::class, 'index'])->name('about');
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisations');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-email', [MailController::class, 'sendEmail'])->name('send.email');

Route::middleware('auth')->group(function () {

    //realisation
Route::get('/realisations/create', [RealisationController::class, 'create'])->name('realisations.create');
Route::post('/realisations', [RealisationController::class, 'store'])->name('realisations.store');

    //blog post
Route::get('/post/create', [BlogController::class, 'create'])->name('post.create');
Route::post('/post', [BlogController::class, 'store'])->name('post.store');

});

