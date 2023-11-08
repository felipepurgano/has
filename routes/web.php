<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoValidationController;


Route::get('/contato', [ContatoValidationController::class, 'createUserContato']);
Route::post('/contato', [ContatoValidationController::class, 'UserContato'])->name('validate.contato');
Route::get('/', function(){
    return view('home');
});
Route::get('/o-que-e', function(){
    return view('o-que-e');
});
Route::get('/cuidados', function(){
    return view('cuidados');
});
Route::get('/classificacao', function(){
    return view('classificacao');
});