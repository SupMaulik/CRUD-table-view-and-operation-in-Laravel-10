<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\registrationController;
use App\Models\Customer;
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

Route::get('/home/{name}/{id?}',function($name,$id=NULL){

    $demo="<h1> Hello Gi</h1>";
    $data=compact('name','id','demo');
    return view('welcome')->with($data);


});

Route::post('/test',function(){

    echo"This is Test Page";


});


Route::get('/home1',function(){
    return view('home');

});

Route::get('/about',function(){
    return view('about');

});

Route::get('/courses',function(){

   return view('course');
});

Route::get('/mycontrols',[DemoController::class,'index']);
Route::get('/myabout',singleActionController::class);
Route::resource('photo',photoController::class);

//Route for Registration page using Controller
Route::get('form',[registrationController::class,'index']);
//Route for send form form data by post 
Route::post('myform',[registrationController::class,'getregis']);

Route::get('/regform',function(){

    return view('regform');
 });

 Route::get("/customer",function(){

   $customer=Customer::all();
   echo"<pre>";
   print_r($customer->toArray());
 });


 Route::get('/getcustomer',[registrationController::class,'getcust']);
 Route::post('/getcustomer',[registrationController::class,'showcust'])->name('submit.customer');
 Route::get('/customer/view',[registrationController::class,'viewcust']);
 Route::get('/customer/del/{id}',[registrationController::class,'delete_cust'])->name('del_cust');
 Route::get('/customer/edit/{id}',[registrationController::class,'edit_customer'])->name('edit_cust');
 Route::get('/customer/view/{id}',[registrationController::class,'view_customer']);
 Route::post('/customer/update/{id}',[registrationController::class,'update'])->name('cust_update');
 
