<?php


use App\Http\Controllers\dashboard\ZoneController;
use Illuminate\Foundation\Application;
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

Auth::routes();
//Route::get('/logout',function (){
//    \Illuminate\Support\Facades\Auth::logout();
Route::get('/', function () {

    return view('auth.login');
})->name('home');

//})->name('dashboard.logout');

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

        Route::group(['middleware' => ['auth'], 'as' => 'dashboard.', 'prefix' => '/dashboard', 'namespace' => 'App\Http\Controllers\dashboard'], function () {


            Route::resource('/zones', 'ZoneController');
            Route::resource('/invoicesbase', 'InvoiceBaseController');
            Route::resource('/invoiceshowclient', 'invoiceshowclientController');
            Route::get('/invoicesAll', 'InvoiceBaseController@invoicesAll')->name('invoicesAll');
            Route::get('/invoicesAll/{id}', 'InvoiceBaseController@invoicesAllShow')->name('invoicesAll.show');
            Route::resource('/users', 'UserController');
            Route::resource('/invoiceType', 'InvoiceTypeController');
            Route::resource('/blocks', 'AuthController');
            Route::resource('/units', 'UnitController');
            Route::resource('/installments', 'InstallmentController');
            Route::resource('/clients', 'ClientController');
            Route::get('/clients/{id}/create', 'ClientController@createinvoice');
            Route::resource('/invoices', 'InvoiceController');
            Route::resource('/employees', 'EmployeeController');
            Route::resource('/sections', 'SectionController');
            Route::resource('/notes', 'NoteController');
            Route::resource('/services', 'ServiceController');
            Route::resource('/repairs', 'RepairController');
            Route::resource('/prices', 'PriceController');
            Route::resource('/unitstatus', 'UnitStatusController');
            Route::get('/zoneSelectBlock/{id}', 'ZoneController@zoneSelectBlock')->name('zoneSelectBlock');
            Route::get('/BlockSelectUnit/{id}', 'ZoneController@BlockSelectUnit')->name('BlockSelectUnit');

            Route::resource('/roles', 'RoleController');
            Route::post('/selecteddata', 'RoleController@selecteddata')->name('roles.selecteddata');


            Route::resource('/categories', 'CategoryController');
            Route::resource('/products', 'ProductController');

            Route::get('/reports', 'UnitController@Reports')->name('reports');
             Route::get('/invoicetype/{id}', 'ZoneController@invoicetype')->name('invoicetype');


        });
    });





