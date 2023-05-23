<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "pageTitle" => "Home"
    ]);
})->name("home");

Route::get("/about", function () {
    return view("about", [
        "pageTitle" => "About",
        "name" => "Alfat Ardiansa"
    ]);
});

Route::get("/login", [LoginController::class, "index"])->name("login")->middleware("guest");
Route::post("/login", [LoginController::class, "authenticate"]);
Route::get("/logout", [LoginController::class, "logout"]);

Route::get("/registration", [RegistrationController::class, "index"]);
Route::post("/registration", [RegistrationController::class, "store"]);
Route::delete("/registration/{id}", [RegistrationController::class, "destroy"]);

Route::get("/admin", [AdminController::class, "index"])->middleware("auth");
