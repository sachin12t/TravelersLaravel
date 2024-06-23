<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\HomeController;
use App\Http\controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});
############################################################################################################
/*home controller*/
Route::get("/",[HomeController::class,'index'])->name('home');
Route::get("/about",[HomeController::class,'about'])->name('about');
Route::get("/blog",[HomeController::class,'blog'])->name('blog');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/insertcontact',[HomeController::class,'insertcontact'])->name('insertcontact');

Route::get('/destination',[HomeController::class,'destination'])->name('destination');
Route::get('/guide',[HomeController::class,'guide'])->name('guide');
Route::get('/package',[HomeController::class,'package'])->name('package');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/single',[HomeController::class,'single'])->name('single');
Route::get('/testimonial',[HomeController::class,'testimonial'])->name('testimonial');

################################################################################################## 
  //admin route
  Route::get('admin/dasboard',[AdminController::class,'dasboard'])->name('dasboard');

        //form_destination route
  Route::get('/admin/form_destination',[AdminController::class,'form_destination'])->name('form_destination');
  Route::POST('/admin/insert_destination',[AdminController::class,'insert_destination'])->name('insert_destination');
  Route::get('/admin/show_destination',[AdminController::class,'show_destination'])->name('show_destination');
  Route::get('/admin/ddelete{id}',[AdminController::class,'ddelete'])->name('ddelete');

  ####################################################################################################
  //packages route
  Route::get('/admin/form_packages',[AdminController::class,'form_packages'])->name('form_packages');
  Route::POST('/admin/insert_packages',[AdminController::class,'insert_packages'])->name('insert_packages');
  Route::get('/admin/show_packages',[AdminController::class,'show_packages'])->name('show_packages');
  //update package
  Route::get('/admin/update_package{id}',[AdminController::class,'update_package'])->name('update_package');
  Route::POST('/admin/post_package',[AdminController::class,'post_package'])->name('post_package');

  Route::get('/admin/pdelete{id}',[AdminController::class,'pdelete'])->name('pdelete');

  ######################################################################################
  Route::get('/admin/show_contact',[AdminController::class,'show_contact'])->name('show_contact');
  Route::get('/admin/cdel{id}',[AdminController::class,'cdel'])->name('cdel');












