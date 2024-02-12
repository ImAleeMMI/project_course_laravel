<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SiteCourse;
use App\Http\Controllers\UserController;
use App\Jobs\ContactUs;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

//Rotte sito corsi
Route::get('/', [SiteCourse::class, 'homepage'])->name('pages.homepage');
Route::get('/about', [SiteCourse::class, 'about'])->name('pages.about');

Route::get('/course-detail', [SiteCourse::class, 'courseDetail'])->name('pages.detail');
Route::get('/our-features', [SiteCourse::class, 'ourFeatures'])->name('pages.features');
Route::get('/istructors', [SiteCourse::class, 'istructors'])->name('pages.istructors');
Route::get('/testimonial', [SiteCourse::class, 'testimonial'])->name('pages.testimonial');
Route::get('/contact', [SiteCourse::class, 'contact'])->name('pages.contact');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    //Rotte profilo utente
    Route::get('/user', [UserController::class, 'show'])->name('user.show');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::post('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user', [UserController::class, 'destroy'])->name('user.delete');

    //L'avviso di verifica dell'e-mail
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->middleware('auth')->name('verification.notice');


    //Il gestore della verifica della posta elettronica
    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();

        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');


    //Nuovo invio dell'e-mail di verifica
    Route::post('/email/verification-notification', function (Request $request) {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    })->middleware(['auth', 'throttle:6,1'])->name('verification.send');
});

Route::post('/send-mail', [MailController::class, 'mailData'])->name('send_mail');


//Rotte per il controller dei corsi
Route::get('/course', [CourseController::class, 'course'])->name('pages.course');

