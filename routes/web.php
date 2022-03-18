<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;

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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');



/*
|--------------------------------------------------------------------------
| Web Routes For Frontend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/courses', 'App\Http\Controllers\Frontend\PageController@course')->name('course.page');
Route::get('/course-details/{slug}', 'App\Http\Controllers\Frontend\PageController@course_details')->name('course-details.page');
Route::get('/contact-us', 'App\Http\Controllers\Frontend\PageController@contact')->name('contact');
Route::post('/message-send', 'App\Http\Controllers\Frontend\PageController@contact_send')->name('send_msg');
// Authenticated User pages
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/student-profile', 'App\Http\Controllers\Frontend\PageController@std_dashboard')->name('std.dashboard');
    Route::post('/edit-student-profile/{id}', 'App\Http\Controllers\Frontend\PageController@edit_student')->name('std.edit');
    Route::get('/batch/admission/{slug}', 'App\Http\Controllers\Frontend\PageController@std_admission')->name('std.admission');
});



/*
|--------------------------------------------------------------------------
| Web Routes For Backend
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Dashboard link starts here
Route::middleware(['auth', 'verified', 'role'])->group(function() {
    
    Route::group([ 'prefix'=>'admin' ], function() {
        Route::get('/dashboard', 'App\Http\Controllers\Backend\PageController@index')->name('admin.dashboard');
        Route::get('/blank', function() {
            return view('backend.pages.blank');
        });
    
        // Routes for branch management
        Route::group(['prefix'=>'/branch'], function() {
            Route::get('/view', 'App\Http\Controllers\Backend\BranchController@index')->name('branch.view');
            Route::get('/create', 'App\Http\Controllers\Backend\BranchController@create')->name('branch.create');
            Route::post('/store', 'App\Http\Controllers\Backend\BranchController@store')->name('branch.store');
            Route::get('/edit/{id}', 'App\Http\Controllers\Backend\BranchController@edit')->name('branch.edit');
            Route::post('/update/{id}', 'App\Http\Controllers\Backend\BranchController@update')->name('branch.update');
            Route::post('/delete/{id}', 'App\Http\Controllers\Backend\BranchController@destroy')->name('branch.delete');
        });
    
        // Routes for mentor management
        Route::group(['prefix' => '/mentor'], function() {
            Route::get('/view', 'App\Http\Controllers\Backend\MentorController@index')->name('mentor.view');
            Route::get('/create', 'App\Http\Controllers\Backend\MentorController@create')->name('mentor.create');
            Route::post('/store', 'App\Http\Controllers\Backend\MentorController@store')->name('mentor.store');
            Route::get('/edit/{id}', 'App\Http\Controllers\Backend\MentorController@edit')->name('mentor.edit');
            Route::post('/update/{id}', 'App\Http\Controllers\Backend\MentorController@update')->name('mentor.update');
            Route::post('/delete/{id}', 'App\Http\Controllers\Backend\MentorController@destroy')->name('mentor.delete');
        });
    
        // Routes for course management
        Route::group(['prefix' => '/course'], function() {
            Route::get('/view', 'App\Http\Controllers\backend\CourseController@index')->name('course.view');
            Route::get('/create', 'App\Http\Controllers\backend\CourseController@create')->name('course.create');
            Route::post('/store', 'App\Http\Controllers\backend\CourseController@store')->name('course.store');
            Route::get('/edit/{id}', 'App\Http\Controllers\backend\CourseController@edit')->name('course.edit');
            Route::post('/update/{id}', 'App\Http\Controllers\backend\CourseController@update')->name('course.update');
            Route::post('/delete/{id}', 'App\Http\Controllers\backend\CourseController@destroy')->name('course.delete');
        });
    
        // Routes for curriculum management
        Route::group(['prefix'=>'/curriculum'], function() {
            Route::get('/view', 'App\Http\Controllers\backend\CurriculumController@index')->name('curriculum.view');
            Route::get('/create', 'App\Http\Controllers\backend\CurriculumController@create')->name('curriculum.create');
            Route::post('/store', 'App\Http\Controllers\backend\CurriculumController@store')->name('curriculum.store');
            Route::get('/edit/{id}', 'App\Http\Controllers\backend\CurriculumController@edit')->name('curriculum.edit');
            Route::post('/update/{id}', 'App\Http\Controllers\backend\CurriculumController@update')->name('curriculum.update');
            Route::post('/delete/{id}', 'App\Http\Controllers\backend\CurriculumController@destroy')->name('curriculum.delete');
        });
    
        // Routes for coupon management
        Route::group(['prefix'=>'/coupon'], function() {
            Route::get('/view', 'App\Http\Controllers\backend\CouponController@index')->name('coupon.view');
            Route::get('/create', 'App\Http\Controllers\backend\CouponController@create')->name('coupon.create');
            Route::post('/store', 'App\Http\Controllers\backend\CouponController@store')->name('coupon.store');
            Route::get('/edit/{id}', 'App\Http\Controllers\backend\CouponController@edit')->name('coupon.edit');
            Route::post('/update/{id}', 'App\Http\Controllers\backend\CouponController@update')->name('coupon.update');
            Route::post('/delete/{id}', 'App\Http\Controllers\backend\CouponController@destroy')->name('coupon.delete');
        });
    
        // Routes for batch management
        Route::group(['prefix'=>'/batch'], function() {
            Route::get('/view', 'App\Http\Controllers\backend\BatchController@index')->name('batch.view');
            Route::get('/create', 'App\Http\Controllers\backend\BatchController@create')->name('batch.create');
            Route::post('/store', 'App\Http\Controllers\backend\BatchController@store')->name('batch.store');
            Route::get('/edit/{id}', 'App\Http\Controllers\backend\BatchController@edit')->name('batch.edit');
            Route::post('/update/{id}', 'App\Http\Controllers\backend\BatchController@update')->name('batch.update');
            Route::post('/delete/{id}', 'App\Http\Controllers\backend\BatchController@destroy')->name('batch.delete');
        });
    });
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/admission/pay', [SslCommerzPaymentController::class, 'index'])->name('admission.pay');
Route::post('/pay', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


require __DIR__.'/auth.php';
