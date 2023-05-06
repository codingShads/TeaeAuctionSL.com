<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminControlloer;
use App\Http\Controllers\InvoiceController;

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

Route::get('/register', [AuthController::class, 'loadRegister']);
Route::post('/register', [AuthController::class, 'userRegister'])->name('userRegister');

Route::get('/login', function(){
    return redirect('/');
});

Route::get('/forgetPassword', [AuthController::class, 'forgetpassword']);
Route::post('/forgetPassword', [AuthController::class, 'forgetpass'])->name('forgetpass');

Route::get('/', [AuthController::class, 'loadLogin']);
Route::post('/login', [AuthController::class,'userLogin'])->name('userLogin');

// Route::get('/admin/createinvoice', [AdminController::class, 'create'])->name('create');




Route::group(['middleware'=>['web','forAdmin']], function(){
    Route::get('/admin/dashboard', [AuthController::class, 'adminDashboard']);
    Route::post('/add-invoice', [AdminController::class, 'addinvoice'])->name('addinvoice');
    Route::get('/showInvoice/{id}', [AdminController::class, 'showInvoice'])->name('showInvoice');
    Route::post('/edit-invoice', [AdminController::class, 'editinvoice'])->name('editinvoice');
    Route::post('/delete-invoice', [AdminController::class, 'deleteinvoice'])->name('deleteinvoice');
    
    Route::get('/admin/valuation', [AdminController::class, 'valuationboard']);
    Route::get('/showforvaluation/{id}',[AdminController::class, 'showValuation'])->name('showValuation');
    Route::post('/edit-valuation', [AdminController::class, 'editvaluation'])->name('editvaluation');
    Route::post('/add-valuation', [AdminController::class, 'addValuation'])->name('addValuation');
    Route::post('/delete-valuation', [AdminController::class, 'deletevaluation'])->name('deletevaluation');
    Route::get('/showValution2/{id}', [AdminController::class, 'showvaluation2'])->name('showvaluation2');
    Route::post('/edit-valuation2', [AdminController::class, 'editvaluationmodule'])->name('editvaluationmodule');
    Route::post('/add-user',[AdminController::class, 'addUSER'])->name('addUSER');
    Route::post('/edit-user',[AdminController::class, 'editUSER'])->name('editUSER');
    Route::post('/delete-user',[AdminController::class, 'deleteUser'])->name('deleteUser');


    Route::get('/admin/auction', [AdminController::class, 'auctionPage']);

    Route::get('/admin/users', [AdminController::class, 'userDashboard']);
    Route::get('send-mail', [AdminController::class, 'indexmain']);
    
});

Route::group(['middleware'=>['web','forUsers']], function(){
    Route::get('/users/dashboard', [AdminController::class, 'frontuserDashboard']);
    Route::get('/users/auctionitems', [AdminController::class, 'auctionItemsummary'])->name('auctionItemsummary');
    Route::get('/users/auctionProduct/{id}', [AdminController::class, 'auctionboard'])->name('auctionboard');
    
    Route::get('/bidProduct', [AdminController::class, 'bidStart']);
    Route::post('/placeBid',[AdminController::class, 'placeBid'])->name('placeBid');
});


Route::get('/invoiceUser/invoice', [InvoiceController::class, 'invoicedashboard']);

Route::get('/logout', [AuthController::class, 'logout']);