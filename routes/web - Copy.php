 <?php

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

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('/createFactSheet','HomeController@createFactSheet');
Route::post('saveFactData', 'HomeController@saveFactData');

//Route::get('/createFactSheetPart2/{id}','HomeController@createFactSheetPart2');
Route::get('/createFactSheetPart2','HomeController@createFactSheetPart2');

//Route::post('/createFactSheetPart2','HomeController@createFactSheetPart2');

Route::post('saveFactSheetPart2','HomeController@saveFactSheetPart2');

Route::get('/FactsList','FactSheetController@allFactsList')->name('FactsList');
Route::get('/OwnerList','FactSheetController@allOwnerList');
Route::get('/RentalList','FactSheetController@allRentalList');
Route::get('/BankList','FactSheetController@allBankList');

Route::post('/getFactSheetCode','FactSheetController@getFactSheetCode');
Route::post('/getBranchDetails','FactSheetController@getBranchDetails');

Route::get('/logout', 'HomeController@logout');

Route::get('/downloadPDF/{id}','FactSheetController@downloadPDF');

Route::get('/view/{id}','FactSheetController@view');
Route::get('/edit/{id}','FactSheetController@edit');

Route::post('/updateFactSheetData', 'FactSheetController@updateFactSheetData');

Route::get('/noOfOwner/{id}','FactSheetController@noOfOwner');

Route::get('/editOwnerDetails/{id}','FactSheetController@editOwnerDetails');

Route::post('/updateOwnerDetails', 'FactSheetController@updateOwnerDetails');
Route::get('/agreementToBeRenewList', 'FactSheetController@agreementToBeRenewList');
//Route::get('/agreementRenew/{id}','FactSheetController@agreementRenew');
//Route::post('/saveRenewalData', 'FactSheetController@saveRenewalData');
//Route::get('/agreementRenewedList', 'FactSheetController@agreementRenewedList');

//////////////////////////////////////////////////

//Route::get('/', 'LeaseController@leaseExpire');

Route::get('/view-fact', 'LeaseController@view_fact_sheet');

Route::get('/sendmail', 'LeaseController@fact_sheet_for_mail');

Route::get('/factsheet_renewal', 'HomeController@saveFactSheetDataRenewal');
Route::get('/agreementRenew/{id}','FactSheetRenewController@factSheetRenew');
Route::post('/saveRenewalData', 'FactSheetRenewController@saveRenewalData');
Route::get('/agreementRenewedList', 'FactSheetRenewController@agreementRenewedList');

///////////////////////////////////////////















