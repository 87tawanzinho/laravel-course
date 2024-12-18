
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;


// no controller chama a view
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);


Route::get('/contact', function () {
    return view('contact');
});

