<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


Route::get('/contact_us', [TaskController::class, 'index']);
Route::get('/contact_us/{id}', [TaskController::class, 'show']);
















// Route::get('/about', function () {
//     $name = 'Amro';
//     $age = '12';
//     // return view('about', [
//     //     'name'=> $name,
//     //     'age'=> $age
//     // ]);
//     return view('about',compact('name','age'));
// });

// Route::get('/contact_us', function () {
//     $name = 'Amro';
//     $age = '12';
//     return view('contact_us', [
//         'name'=> $name,
//         'age'=> $age
//     ]);
// });

// Route::get('about', function () {

//     return view('about');
// });
// Route::post('about', function () {

//     return view('about');
// });
// Route::get('show', function () {
//     $tasks = [
//         'task1',
//         'task2',
//         'task3'
//     ];
//     return view('show',compact('tasks'));
// });

// Route::get('about/task/{id}', function ($id) {
//     $tasks = [
//         'task1',
//         'task2',
//         'task3'
//     ];
//     $task = $tasks[$id-1];
//     return view('about',compact('task'));
// });
