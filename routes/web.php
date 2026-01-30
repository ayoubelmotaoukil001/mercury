<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController ;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('groups.index') ;
});

    Route::get('/groups/{group}/add-contacts',[GroupController::class ,'addContacts'])->name('groups.addContacts') ;
    Route::post('/groups/{group}/attach/{contact}'  , [GroupController::class ,'attachContact']) ->name('groups.attachContact') ;

    Route::resource('groups',GroupController::class) ;

    Route::resource('contacts',ContactController ::class) ;
  
