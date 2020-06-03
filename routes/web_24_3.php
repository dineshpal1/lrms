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
Route::get('/createFactSheet','HomeController@createFactSheet')->middleware('Viewcache');
Route::post('saveFactData', 'HomeController@saveFactData');

Route::get('/createFactSheet2','HomeController@createFactSheet2');

//Route::get('/createFactSheetPart2/{id}','HomeController@createFactSheetPart2');
Route::get('/createFactSheetPart2','HomeController@createFactSheetPart2');

//Route::post('/createFactSheetPart2','HomeController@createFactSheetPart2');

Route::post('saveFactSheetPart2','HomeController@saveFactSheetPart2');

Route::get('/FactsList','FactSheetController@allFactsList');
Route::get('/OwnerList','FactSheetController@allOwnerList');
Route::get('/RentalList','FactSheetController@allRentalList');
Route::get('/BankList','FactSheetController@allBankList');

Route::post('/getFactSheetCode','FactSheetController@getFactSheetCode');
Route::post('/getBranchDetails','FactSheetController@getBranchDetails');

Route::get('/logout', 'HomeController@logout');

Route::get('/downloadPDF/{id}','FactSheetController@downloadPDF');
Route::get('/downloadMessPDF/{id}','FactSheetController@downloadMessPDF');
Route::get('/viewnew/{id}','FactSheetController@viewnew');

Route::get('/view/{id}','FactSheetController@view');
Route::get('/edit/{id}','FactSheetController@edit');

Route::post('/updateFactSheetData', 'FactSheetController@updateFactSheetData');

Route::get('/noOfOwner/{id}','FactSheetController@noOfOwner');

Route::get('/editOwnerDetails/{id}','FactSheetController@editOwnerDetails');

Route::post('/updateOwnerDetails', 'FactSheetController@updateOwnerDetails');
Route::get('/agreementToBeRenewList', 'FactSheetController@agreementToBeRenewList');
Route::get('/agreementRenew/{id}','FactSheetController@agreementRenew');
Route::post('/saveRenewalData', 'FactSheetController@saveRenewalData');
Route::post('/saveFactSheetRenewalData', 'FactSheetController@saveFactSheetRenewalData');
Route::get('/agreementRenewedList', 'FactSheetController@agreementRenewedList');

Route::get('downloadImage/{id}','FactSheetController@downloadImage');

Route::get('pagenotfound',['as'=>'notfound','uses'=>'HomeController@pagenotfound']);


Route::post('/changeStatus','FactSheetController@changeStatus');

Route::post('/addMoreOwnerDetails','FactSheetController@addMoreOwnerDetails');

Route::post('/addMoreNoOfOwner','FactSheetController@addMoreNoOfOwner');
Route::get('test22','HomeController@test22');




//////////////////////////////////////////////////

//Route::get('/', 'LeaseController@leaseExpire');

Route::get('/view-fact', 'LeaseController@view_fact_sheet');

Route::get('/sendmail', 'LeaseController@fact_sheet_for_mail');
Route::get('/rent/{id}', 'ConvertToExcelController@rentAgreement');
Route::get('/export/{id}', 'ConvertToExcelController@export');
Route::get('/word/{id}', 'ConvertToExcelController@exportToWord');

Route::get('/messword/{id}', 'ConvertToExcelController@exportToMessWord');

Route::get('/uplaod/{id}', 'FactSheetRenewController@uploadFactsheet');
Route::post('/saveUpload', 'FactSheetRenewController@saveUploadFactsheet');



/////////////////////////////////////////// START REPORT SECTION //////////////


Route::get('/RentalsNextDueReport','ReportController@RentalsNextDueReport');
Route::get('/rental_revision','ReportController@rentalRevision');
Route::get('/excelExportRentalRevision','ReportController@excelExportRentalRevision');
Route::get('/excelExportRentalNextDue','ReportController@excelExportRentalNextDue');


////////////ROUTE FOR ALL MASTER////////////////////////////
Route::get("state","All_Masters@showAllStates");
Route::get("addState","All_Masters@addStates");
Route::post("saveStates","All_Masters@saveState");

Route::get("allBank","All_Masters@showAllbanks");
Route::get("addBank","All_Masters@addBanks");
Route::post("saveBanks","All_Masters@saveBank");

Route::get("allCity","All_Masters@showAllCity");
Route::get("addCity","All_Masters@addCity");
Route::post("saveCity","All_Masters@saveCity");

Route::get("allBranch","All_Masters@showAllBranch");
Route::get("addBranch","All_Masters@addBranch");
Route::post("saveBranch","All_Masters@saveBranch");


/////////////////////////////////////////// START API SECTION //////////////

Route::get('/getInvoiceById','ApiController@getInvoiceById');

Route::get('/getCheckData','ApiController@getCheckData');





















