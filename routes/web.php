<?php

use App\Models\Listings;
use App\View\Components\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ListingController;
use Illuminate\Routing\Route as RoutingRoute;

// use Illuminate\Support\Facades\Route;





// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing 

// All listings
 Route::get('/',  [ListingController::class, 'index']);






// Show Create form
Route::get('/listings/create',  [ListingController::class, 'create'])->middleware('auth');

 //Store listing data
 Route::post('/listings',[ListingController::class, 'store'] )->middleware('auth');


 // Show edit form
 Route::get('/listings/{listing}/edit',[ListingController::class, 'edit'] )->middleware('auth');
 
 // Update Listings
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

 // Delete Listings
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
 
 
 //Single Listing
 Route::get('/listings/{listing}',[ListingController::class, 'show'] );


//Show Register / Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');


//Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in User
Route::post('users/authenticate', [UserController::class, 'authenticate']);




 
Route::get('/hello', function(){
     return view('welcome');
});
Route::get('/about', function(){
     return view('about');
});