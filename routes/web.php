<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarContactController;
use App\Http\Controllers\CarBookingController;
use App\Http\Controllers\AddCategoryController;
use App\Http\Controllers\Products;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about',function(){
//  return view('aboutus');
// });

// // load your Home page routing
// Route::get('/',function(){
//     return view('ecom.index');
// });

// Route::get('/Our-Services',function(){
//     return view('ecom.services');
// });

// Route::get('/Contact-Us',function(){
//     return view('ecom.contactus');
// });


// Route::get('/Feedback',function(){
//     return view('ecom.feedback');
// });

// Taxi cab templates routing here
// Route::get('/',[CarController::class, 'index']);
// // contact us
// Route::get('/contact-us',[CarContactController::class, 'index']);
// Route::post('/contact-us',[CarContactController::class, 'store']);

// Route::get('/booking',[CarBookingController::class, 'index']);
// // load about us
// Route::get('/about-us',function(){
//     return view('car.about');
// });
// Route::get('/ourservices',function(){
//     return view('car.services');
// });

// default Register | Login | session routing by Livewire


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
// add category routing

});

//add category routing
Route::get('/addcategory',[AddCategoryController::class,'index']);
Route::post('/addcategory',[AddCategoryController::class,'store']);
Route::get('/managecategory',[AddCategoryController::class,'show']);
Route::get('/managecategory/{id}',[AddCategoryController::class,'destroy']);
Route::get('/editcategory/{id}',[AddCategoryController::class,'edit']);
Route::post('/editcategory/{id}',[AddCategoryController::class,'update']);
// add products routing
Route::get('/addproducts',[Products::class,'index']);
Route::post('/addproducts',[Products::class,'store']);
Route::get('/manageproduct',[Products::class,'show']);
Route::get('/manageproduct/{id}',[Products::class,'destroy']);
Route::get('/editproduct/{id}',[Products::class,'edit']);
Route::post('/editproduct/{id}',[Products::class,'update']);






