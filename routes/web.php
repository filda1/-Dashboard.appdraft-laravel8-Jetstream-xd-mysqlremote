<?php

use Illuminate\Support\Facades\Route;
use App\Models\Team;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
   
    //$datos= Team::find(1);
    //return view('contact',compact('posts','rooms','engs'));
    //return view('dashboard', compact('azul'));
    //$datos = ['posts' => $azul];
    
    //$datos = ['posts' => "azul"];

   //return view('dashboard')->with("datos", $datos);
    //return view('dashboard')->with('azul', $azul);

    return view('dashboard');
    
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/todo', function () {

    return view('todo');
    
})->name('todo');


 Route::middleware(['auth:sanctum', 'verified'])->get('/getmsg', function () {

    //return json_encode($a);
 $msg = "This is a simple message.";
 //return response()->json(array('msg'=> $msg), 200);
 return json_encode(msg );
 });



//Livewire
/**
 * 
 *Route::middleware(['auth:sanctum', 'verified'])->get('/todo', [\App\Http\Livewire\Pasta\Nombre::class])

  
 */

Route::middleware(['auth:sanctum', 'verified'])->post('/docid', [\App\Http\Livewire\Todo\Show::class]);