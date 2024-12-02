<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Auth::routes(['register' => false, 'verify' => false]);

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['middleware' => ['auth'], 'as' => 'admin.', 'prefix' => 'admin'], function () { 
 
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
   
    Route::put('user/status/{id}', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('user.status');
    
    Route::resource('user', App\Http\Controllers\Admin\UserController::class);
    Route::get('user/remove-image/{id}', [App\Http\Controllers\Admin\UserController::class, 'removeImage'])->name('user.removeImage');

    // Roles
    Route::resource('role', App\Http\Controllers\Admin\RoleController::class);

  // District
   Route::resource('district', App\Http\Controllers\Admin\DistrictController::class);

   Route::resource('city', App\Http\Controllers\Admin\CityController::class );


   Route::resource('customer', App\Http\Controllers\Admin\CustomerController::class );


    // User_profile
    Route::get('edit-profile', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('user.edit-profile');
  
    Route::view('edit-profile-user', 'users.edit_profile')->name('edit_profile');

    Route::get('get-states', [App\Http\Controllers\Admin\UserController::class, 'getStates'])->name('user.get-states');
    Route::post('update-profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('user.update-profile');

    Route::get('getstates', [App\Http\Controllers\Master\GroundController::class, 'getStates'])->name('get.states');
    Route::get('getcities', [App\Http\Controllers\Master\GroundController::class, 'getCities'])->name('get.cities');
   
    Route::resource('product', App\Http\Controllers\Admin\ProductController::class);
    
    Route::get('get-district', [App\Http\Controllers\Admin\CityController::class, 'getDistricts'])->name('city.get-district');



});

Route::resource('inward', App\Http\Controllers\inward\InwardController::class);
