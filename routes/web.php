<?php

use App\Http\Controllers\ComicController;
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

Route::get("/", function(){
  return redirect("/comic");
});

//Create
Route::get("/comic/create", [ComicController::class, "create"])->name("comic.create");
Route::post("/comic", [ComicController::class, "store"])->name("comic.store");

//Read
Route::get('/comic', [ComicController::class, "index"])->name("home.index");
Route::get("/comic/{comic}", [ComicController::class, "show"])->name("comic.show");

//Update
Route::get("/comic/{comic}/edit",[ComicController::class, "edit"])->name("comic.edit");
Route::put("/comic/{comic}",[ComicController::class, "update"])->name("comic.update");

//Delete
Route::delete("/comic/{comic}",[ComicController::class, "destroy"])->name("comic.destroy");