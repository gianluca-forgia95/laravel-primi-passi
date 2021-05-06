<?php

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
    return view('welcome');
});

Route::get('/home', function () {
    return "<h1>Welcome to home page</h1>";
});

Route::get('/about-us', function () {
    return "<h1>About Us</h1> 
     <ul>
      <li>Chi Siamo</li>
      <li>Contatti</li>
      <li>Profili Social</li>
     </ul> ";
});

Route::get('/img', function () {
    return "<img src='https://media-exp1.licdn.com/dms/image/C4E0BAQFMUZFU4aihpw/company-logo_200_200/0/1567776941409?e=2159024400&v=beta&t=D413GMpbn-JfWimTa0jyb_zeb5eU9uKJvCL8doO9ivU' alt='Logo Laravel'>";
});

Route::get('/login', function () {
    return "<h4>Sign Up to this Website</h4>
    <label>Name</label>
    <input type='text' placeholder='Inserisci il tuo nome'>
    <label>E-mail</label>
    <input type='text' placeholder='Inserisci la tua E-Mail'>
    <button>Start Now!</button>";
});

Route::get('/github-profile', function () {
    return "<h1>My Github Link</h1> <a href='https://github.com/gianluca-forgia95'>Profile</a>";
});