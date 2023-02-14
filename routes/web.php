<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursecategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\VideoController;


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

//home routes

Route::get('/',[HomeController::class,'index'])->name('home')->middleware('notloggedIn');
Route::get('/course/{id}',[HomeController::class,'course'])->name('course');
Route::get('/login',[UserController::class,'login'])->name('login')->middleware('loggedIn');
Route::get('/register',[UserController::class,'register'])->name('register')->middleware('loggedIn');
Route::post('/signup',[UserController::class,'signup'])->name('signup');
Route::post('/signin',[UserController::class,'signin'])->name('signin');
Route::get('/logout',[UserController::class,'logout'])->name('logout');

//catgories route
Route::post('/create.category',[CoursecategoryController::class,'create'])->name('create.category');
Route::get('/categories',[CoursecategoryController::class,'index'])->name('categories');
Route::get('/edit.category/{id}',[CoursecategoryController::class,'edit'])->name('category.edit');
Route::put('/update.category/{id}',[CoursecategoryController::class,'update'])->name('update.category');
Route::get('/add-category',[CoursecategoryController::class,'add'])->name('add.category');
Route::get('/delete.category/{id}',[CoursecategoryController::class,'delete'])->name('delete.category');
//admin side
//subcategories route
Route::post('/create.subcategory',[SubcategoryController::class,'create'])->name('create.subcategory');
Route::get('/subcategories',[SubcategoryController::class,'index'])->name('subcategories');
Route::get('/edit.subcategory/{id}',[SubcategoryController::class,'edit'])->name('subcategory.edit');
Route::put('/update.subcategory/{id}',[SubcategoryController::class,'update'])->name('update.subcategory');
Route::get('/add.subcategory',[SubcategoryController::class,'add'])->name('add.subcategory');
Route::get('/delete.subcategory/{id}',[SubcategoryController::class,'delete'])->name('delete.subcategory');
// Route::post('/api/create-category',[CourseCategory::class,'create']);
Route::get('/admin',[AdminController::class,'index'])->name('admin');

//Course routes
// Route::get('/course',[CourseController::class,'index'])->name('course')->middleware('notloggedIn');
Route::get('/courses',[CourseController::class,'courses'])->name('courses')->middleware('notloggedIn');
Route::get('/addcourse',[CourseController::class,'addcourse'])->name('addcourse')->middleware('notloggedIn');
Route::post('/createcourse',[CourseController::class,'createcourse'])->name('createcourse')->middleware('notloggedIn');
Route::put('/updatecourse/{id}',[CourseController::class,'update'])->name('update.course');
Route::get('/delete.course/{id}',[CourseController::class,'delete'])->name('delete.course');
Route::get('/view.course/{id}',[CourseController::class,'view'])->name('view.course');
Route::get('/edit.course/{id}',[CourseController::class,'edit'])->name('edit.course');
Route::get('/subcategory',[CourseController::class,'subcategory'])->name('subcategory');

//Lessons routes
Route::get('/lessons',[LessonController::class,'index'])->name('lessons')->middleware('notloggedIn');
Route::get('/addlesson',[LessonController::class,'add'])->name('add.lesson')->middleware('notloggedIn');
Route::post('/createlesson',[LessonController::class,'create'])->name('create.lesson')->middleware('notloggedIn');
Route::put('/updatelesson/{id}',[LessonController::class,'update'])->name('update.lesson')->middleware('notloggedIn');
Route::get('/delete.lesson/{id}',[LessonController::class,'delete'])->name('delete.lesson')->middleware('notloggedIn');
Route::get('/edit.lesson/{id}',[LessonController::class,'edit'])->name('edit.lesson')->middleware('notloggedIn');

//videos routes
Route::get('/videolessons',[VideoController::class,'index'])->name('videos')->middleware('notloggedIn');
Route::get('/addvideo',[VideoController::class,'add'])->name('add.video')->middleware('notloggedIn');
Route::post('/createvideo',[VideoController::class,'create'])->name('create.video')->middleware('notloggedIn');
Route::put('/updatevideo/{id}',[VideoController::class,'update'])->name('update.video')->middleware('notloggedIn');
Route::get('/delete.video/{id}',[VideoController::class,'delete'])->name('delete.video')->middleware('notloggedIn');
Route::get('/edit.video/{id}',[VideoController::class,'edit'])->name('edit.video')->middleware('notloggedIn');
// Route::get('/getlesson',[VideoController::class,'getlesson'])->name('getlesson')->middleware('notloggedIn');