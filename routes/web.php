<?php


use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes

|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which 
| contains the "web" middleware group. Now create something great!
|
// */
Route::get('/', function(){
  return view('welcome');

	 // $role = Role::find(11);
 	// $user = auth()->user();

	 // $role->givePermissionTo('kontrakmanajemen3'); 
 // $user->givePermissionTo('kontrakmanajemen2'); 

 // $user->assignRole('programstudi');
	//*
	// if(auth()->user()->hasRole('gjmf')){
	// 	return 'Oke';
	// }


 });
// Auth::routes();

Auth::routes();

Route::view('/home', 'home')->middleware('auth');

// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/','HomeController@index')->name('home');
// Route::get('/login','AuthController@login')->name('login');
// Route::post('/postlogin','AuthController@postlogin');
// Route::get('/logout','AuthController@logout');

//Route::group(['middleware'=>['auth','checkRole:dosen']],function(){


	Route::get('/dashboard','dashboardController@index');
	Route::get('/dashboard/kkrdtw','dashboardController@kkrdPerTW')->name('kkrd-pertw');
	Route::get('/dashboard/kkrplmtw','dashboardController@kkrplmPerTW')->name('kkrplm-pertw');
	Route::get('/dashboard/kktksetw','dashboardController@kktksePerTW')->name('kktkse-pertw');
	Route::get('/dashboard/kktitw','dashboardController@kktiPerTW')->name('kkti-pertw');

	Route::get('/dashboard/kkrd2tw','dashboardController@kkrd2PerTw')->name('kkrd2-pertw');
	Route::get('/dashboard/kkrplm2tw','dashboardController@kkrplm2PerTw')->name('kkrplm2-pertw');
	Route::get('/dashboard/kktkse2tw','dashboardController@kktkse2PerTw')->name('kktkse2-pertw');
	Route::get('/dashboard/kkti2tw','dashboardController@kkti2PerTw')->name('kkti2-pertw');
	// Route::get('search','dashboardController@search');





// 	Route::get('/plottingdosen','plottingdosenController@index');
// 	Route::get('/plottingdosen/create','plottingdosenController@create')->name('create');
// 	Route::post('/plottingdosen/', 'plottingdosenController@store');
	
// 	Route::get('/plottingdosen/{id}', 'plottingdosenController@show');

// 	Route::get('/kirimemail','plottingdosenemailController@email');
// //});

// 	Route::get('/plottingdosen/download/{file}', 'plottingdosenController@download');


	Route::middleware('role:rd')->group(function(){
	Route::get('/pkrd','PkrdController@index');
	Route::post('/pkrd/create','pkrdController@create');
	Route::get('/pkrd/{id}/edit','pkrdController@edit');
	Route::post('/pkrd/{id}/update','pkrdController@update');
	Route::get('/pkrd/{id}/delete','pkrdController@delete');
	// Route::get('/pkrd/exportPdf','pkrdController@exportPdf');

	});

	Route::middleware('role:rplm')->group(function(){
	Route::get('/pkrplm','pkrplmController@index');
	Route::post('/pkrplm/create','PkrplmController@create');
	Route::get('/pkrplm/{id}/edit','PkrplmController@edit');
	Route::post('/pkrplm/{id}/update','PkrplmController@update');
	Route::get('/pkrplm/{id}/delete','PkrplmController@delete');
	Route::get('/pkrplm/export','PkrplmController@export');
	Route::get('/pkrplm/exportPdf','PkrplmController@exportPdf');
	});

	Route::middleware('role:tkse')->group(function(){
	Route::get('/pktkse','pktkseController@index');
	Route::post('/pktkse/create','PktkseController@create');
	Route::get('/pktkse/{id}/edit','PktkseController@edit');
	Route::post('/pktkse/{id}/update','PktkseController@update');
	Route::get('/pktkse/{id}/delete','PktkseController@delete');
	Route::get('/pktkse/export','PktkseController@export');
	Route::get('/pktkse/exportPdf','PktkseController@exportPdf');
	});

	Route::middleware('role:ti')->group(function(){
	Route::get('/pkti','pktiController@index');
	Route::post('/pkti/create','PktiController@create');
	Route::get('/pkti/{id}/edit','PktiController@edit');
	Route::post('/pkti/{id}/update','PktiController@update');
	Route::get('/pkti/{id}/delete','PktiController@delete');
	Route::get('/pkti/export','pktiController@export');
	Route::get('/pkti/exportPdf','PktiController@exportPdf');
	});



	

	Route::middleware('role:rd')->group(function(){
		// Route::get('/kmrd/hibaheksternal','KmrdController@hibaheksternal')->name('hibaheksternal');
	Route::post('/kmrd/hibaheksternal/create','HibaheksternalController@create');
	Route::get('/kmrd/hibaheksternal/{id}/edithe','HibaheksternalController@edithe');
	Route::post('/kmrd/hibaheksternal/{id}/update','HibaheksternalController@update');
	Route::get('/kmrd/hibaheksternal/{id}/delete','HibaheksternalController@delete');
	
	

	// Route::get('/kmrd/publikasiseminar' , 'KmrdController@publikasiseminar')->name('publikasiseminar');
	Route::post('/kmrd/publikasiseminar/create','PublikasiseminarController@create');
	Route::get('/kmrd/publikasiseminar/{id}/editps','PublikasiseminarController@editps');
	Route::post('/kmrd/publikasiseminar/{id}/update','PublikasiseminarController@update');
	Route::get('/kmrd/publikasiseminar/{id}/delete','PublikasiseminarController@delete');
	// Route::get('/kmrd/publikasiseminar/export','PublikasiseminarController@export');
	// Route::get('/kmrd/publikasiseminar/exportPdf','PublikasiseminarController@exportPdf');


	// Route::get('/kmrd/rekognisi','KmrdController@rekognisi')->name('rekognisi');
	Route::post('/kmrd/rekognisi/create','RekognisiController@create');
	Route::get('/kmrd/rekognisi/{id}/editre','RekognisiController@editre');
	Route::post('/kmrd/rekognisi/{id}/update','RekognisiController@update');
	Route::get('/kmrd/rekognisi/{id}/delete','RekognisiController@delete');
	// Route::get('/kmrd/rekognisi/export','RekognisiController@export');
	// Route::get('/kmrd/rekognisi/exportPdf','RekognisiController@exportPdf');

	// Route::get('/kmrd/abdimaseksternal','KmrdController@abdimaseksternal')->name('abdimaseksternal');
	Route::post('/kmrd/abdimaseksternal/create','AbdimaseksternalController@create');
	Route::get('/kmrd/abdimaseksternal/{id}/editae','AbdimaseksternalController@editae');
	Route::post('/kmrd/abdimaseksternal/{id}/update','AbdimaseksternalController@update');
	Route::get('/kmrd/abdimaseksternal/{id}/delete','AbdimaseksternalController@delete');
	// Route::get('/kmrd/abdimaseksternal/export','AbdimaseksternalController@export');
	// Route::get('/kmrd/abdimaseksternal/exportPdf','AbdimaseksternalController@exportPdf');



	// Route::get('/kmrd/haki', 'KmrdController@haki')->name('haki');
	Route::post('/kmrd/haki/create','HakiController@create');
	Route::get('/kmrd/haki/{id}/edithk','HakiController@edithk');
	Route::post('/kmrd/haki/{id}/update','HakiController@update');
	Route::get('/kmrd/haki/{id}/delete','HakiController@delete');
	// Route::get('/kmrd/haki/export','HakiController@export');
	// Route::get('/kmrd/haki/exportPdf','HakiController@exportPdf');


	});
	// Route::get('/kmrd','KmrdController@index')->name('index');


	

	Route::middleware('role:rplm')->group(function(){
	// Route::get('/kmrplm','KmrplmController@index')->name('index');


	// Route::get('/kmrplm/kmrplmhibaheksternal','KmrplmController@kmrplmhibaheksternal')->name('kmrplmhibaheksternal');
	Route::post('/kmrplm/kmrplmhibaheksternal/create','KmrplmhibaheksternalController@create');
	Route::get('/kmrplm/kmrplmhibaheksternal/{id}/edithe','KmrplmhibaheksternalController@edithe');
	Route::post('/kmrplm/kmrplmhibaheksternal/{id}/update','KmrplmhibaheksternalController@update')->name('update');
	Route::get('/kmrplm/kmrplmhibaheksternal/{id}/delete','KmrplmhibaheksternalController@delete');
	// Route::get('/kmrplm/kmrplmhibaheksternal/export','KmrplmhibaheksternalController@export');
	// Route::get('/kmrplm/kmrplmhibaheksternal/exportPdf','KmrplmhibaheksternalController@exportPdf');


    // Route::get('/kmrplm/kmrplmpublikasiseminar','KmrplmController@kmrplmpublikasiseminar')->name('kmrplmpublikasiseminar');
	Route::post('/kmrplm/kmrplmpublikasiseminar/create','KmrplmpublikasiseminarController@create');
	Route::get('/kmrplm/kmrplmpublikasiseminar/{id}/editps','KmrplmpublikasiseminarController@editps');
	Route::post('/kmrplm/kmrplmpublikasiseminar/{id}/update','KmrplmpublikasiseminarController@update');
	Route::get('/kmrplm/kmrplmpublikasiseminar/{id}/delete','KmrplmpublikasiseminarController@delete');
	// Route::get('/kmrplm/kmrplmpublikasiseminar/export','KmrplmpublikasiseminarController@export');
	// Route::get('/kmrplm/kmrplmpublikasiseminar/exportPdf','KmrplmpublikasiseminarController@exportPdf');

    // Route::get('/kmrplm/kmrplmrekognisi','KmrplmController@kmrplmrekognisi')->name('kmrplmrekognisi');
	Route::post('/kmrplm/kmrplmrekognisi/create','KmrplmrekognisiController@create');
	Route::get('/kmrplm/kmrplmrekognisi/{id}/editre','KmrplmrekognisiController@editre');
	Route::post('/kmrplm/kmrplmrekognisi/{id}/update','KmrplmrekognisiController@update');
	Route::get('/kmrplm/kmrplmrekognisi/{id}/delete','KmrplmrekognisiController@delete');
	// Route::get('/kmrplm/kmrplmrekognisi/export','KmrplmrekognisiController@export');
	// Route::get('/kmrplm/kmrplmrekognisi/exportPdf','KmrplmrekognisiController@exportPdf');

    // Route::get('/kmrplm/kmrplmabdimaseksternal','KmrplmController@kmrplmabdimaseksternal')->name('kmrplmabdimaseksternal');
	Route::post('/kmrplm/kmrplmabdimaseksternal/create','KmrplmabdimaseksternalController@create');
	Route::get('/kmrplm/kmrplmabdimaseksternal/{id}/editae','KmrplmabdimaseksternalController@editae');
	Route::post('/kmrplm/kmrplmabdimaseksternal/{id}/update','KmrplmabdimaseksternalController@update');
	Route::get('/kmrplm/kmrplmabdimaseksternal/{id}/delete','KmrplmabdimaseksternalController@delete');
	// Route::get('/kmrplm/kmrplmabdimaseksternal/export','KmrplmabdimaseksternalController@export');
	// Route::get('/kmrplm/kmrplmabdimaseksternal/exportPdf','KmrplmabdimaseksternalController@exportPdf');


    // Route::get('/kmrplm/kmrplmhaki','KmrplmController@kmrplmhaki')->name('kmrplmhaki');
	Route::post('/kmrplm/kmrplmhaki/create','KmrplmhakiController@create');
	Route::get('/kmrplm/kmrplmhaki/{id}/edithk','KmrplmhakiController@edithk');
	Route::post('/kmrplm/kmrplmhaki/{id}/update','KmrplmhakiController@update');
	Route::get('/kmrplm/kmrplmhaki/{id}/delete','KmrplmhakiController@delete');
	// Route::get('/kmrplm/kmrplmhaki/export','KmrplmhakiController@export');
	// Route::get('/kmrplm/kmrplmhaki/exportPdf','KmrplmhakiController@exportPdf');
	});






	Route::middleware('role:tkse')->group(function(){
	// Route::get('/kmtkse','KmtkseController@index')->name('index');
	
	// Route::get('/kmtkse/kmtksehe','KmtkseController@kmtksehe')->name('kmtksehe');
	Route::post('/kmtkse/kmtksehe/create','KmtkseheController@create');
	Route::get('/kmtkse/kmtksehe/{id}/edithe','KmtkseheController@edithe');
	Route::post('/kmtkse/kmtksehe/{id}/update','KmtkseheController@update');
	Route::get('/kmtkse/kmtksehe/{id}/delete','KmtkseheController@delete');
	// Route::get('/kmtkse/kmtksehe/export','KmtkseheController@export');
	// Route::get('/kmtkse/kmtksehe/exportPdf','KmtkseheController@exportPdf');

	// Route::get('/kmtkse/kmtkseps','KmtkseController@kmtkseps')->name('kmtkseps');
	Route::post('/kmtkse/kmtkseps/create','KmtksepsController@create');
	Route::get('/kmtkse/kmtkseps/{id}/editps','KmtksepsController@editps');
	Route::post('/kmtkse/kmtkseps/{id}/update','KmtksepsController@update');
	Route::get('/kmtkse/kmtkseps/{id}/delete','KmtksepsController@delete');
	// Route::get('/kmtkse/kmtkseps/export','KmtksepsController@export');
	// Route::get('/kmtkse/kmtkseps/exportPdf','KmtksepsController@exportPdf');


	// Route::get('/kmtkse/kmtksere','KmtkseController@kmtksere')->name('kmtksere');
	Route::post('/kmtkse/kmtksere/create','KmtksereController@create');
	Route::get('/kmtkse/kmtksere/{id}/editre','KmtksereController@editre');
	Route::post('/kmtkse/kmtksere/{id}/update','KmtksereController@update');
	Route::get('/kmtkse/kmtksere/{id}/delete','KmtksereController@delete');
	// Route::get('/kmtkse/kmtksere/export','KmtksereController@export');
	// Route::get('/kmtkse/kmtksere/exportPdf','KmtksereController@exportPdf');


	// Route::get('/kmtkse/kmtkseae','KmtkseController@kmtkseae')->name('kmtkseae');
	Route::post('/kmtkse/kmtkseae/create','KmtkseaeController@create');
	Route::get('/kmtkse/kmtkseae/{id}/editae','KmtkseaeController@editae');
	Route::post('/kmtkse/kmtkseae/{id}/update','KmtkseaeController@update');
	Route::get('/kmtkse/kmtkseae/{id}/delete','KmtkseaeController@delete');
	// Route::get('/kmtkse/kmtkseae/export','KmtkseaeController@export');
	// Route::get('/kmtkse/kmtkseae/exportPdf','KmtkseaeController@exportPdf');

	// Route::get('/kmtkse/kmtksehk','KmtkseController@kmtksehk')->name('kmtksehk');
	 Route::post('/kmtkse/kmtksehk/create','KmtksehkController@create');
	Route::get('/kmtkse/kmtksehk/{id}/edithk','KmtksehkController@edithk');
	Route::post('/kmtkse/kmtksehk/{id}/update','KmtksehkController@update');
	Route::get('/kmtkse/kmtksehk/{id}/delete','KmtksehkController@delete');
	// Route::get('/kmtkse/kmtksehk/export','KmtksehkController@export');
	// Route::get('/kmtkse/kmtksehk/exportPdf','KmtksehkController@exportPdf');
	});


	// Route::get('/kmti','KmtiController@index')->name('index');

	Route::middleware('role:ti')->group(function(){
	// Route::get('/kmti/kmtihe','KmtiController@kmtihe')->name('kmtihe');
	Route::post('/kmti/kmtihe/create','KmtiheController@create');
	Route::get('/kmti/kmtihe/{id}/edithe','KmtiheController@edithe');
	Route::post('/kmti/kmtihe/{id}/update','KmtiheController@update');
	Route::get('/kmti/kmtihe/{id}/delete','KmtiheController@delete');
	// Route::get('/kmti/kmtihe/export','KmtiheController@export');
	// Route::get('/kmti/kmtihe/exportPdf','KmtiheController@exportPdf');



	// Route::get('/kmti/kmtips','KmtiController@kmtips')->name('kmtips');
	Route::post('/kmti/kmtips/create','KmtipsController@create');
	Route::get('/kmti/kmtips/{id}/editps','KmtipsController@editps');
	Route::post('/kmti/kmtips/{id}/update','KmtipsController@update');
	Route::get('/kmti/kmtips/{id}/delete','KmtipsController@delete');
	// Route::get('/kmti/kmtips/export','KmtipsController@export');
	// Route::get('/kmti/kmtips/exportPdf','KmtipsController@exportPdf');

	// Route::get('/kmti/kmtire','KmtiController@kmtire')->name('kmtire');
	Route::post('/kmti/kmtire/create','KmtireController@create');
	Route::get('/kmti/kmtire/{id}/editre','KmtireController@editre');
	Route::post('/kmti/kmtire/{id}/update','KmtireController@update');
	Route::get('/kmti/kmtire/{id}/delete','KmtireController@delete');
	// Route::get('/kmti/kmtire/export','KmtireController@export');
	// Route::get('/kmti/kmtire/exportPdf','KmtireController@exportPdf');


	// Route::get('/kmti/kmtiae','KmtiController@kmtiae')->name('kmtiae');
	Route::post('/kmti/kmtiae/create','KmtiaeController@create');
	Route::get('/kmti/kmtiae/{id}/editae','KmtiaeController@editae');
	Route::post('/kmti/kmtiae/{id}/update','KmtiaeController@update');
	Route::get('/kmti/kmtiae/{id}/delete','KmtiaeController@delete');
	// Route::get('/kmti/kmtiae/export','KmtiaeController@export');
	// Route::get('/kmti/kmtiae/exportPdf','KmtiaeController@exportPdf');

	// Route::get('/kmti/kmtihk','KmtiController@kmtihk')->name('kmtihk');
	Route::post('/kmti/kmtihk/create','KmtihkController@create');
	Route::get('/kmti/kmtihk/{id}/edithk','KmtihkController@edithk');
	Route::post('/kmti/kmtihk/{id}/update','KmtihkController@update');
	Route::get('/kmti/kmtihk/{id}/delete','KmtihkController@delete');
	// Route::get('/kmti/kmtihk/export','KmtihkController@export');
	// Route::get('/kmti/kmtihk/exportPdf','KmtihkController@exportPdf');
	});










	Route::get('/rd','profilController@indexRd');
	Route::post('/rd/create','profilController@createRd')->name('createRd');
	Route::get('/rd/{id}/edit','profilController@editRd')->name('editRd');
	Route::post('/rd/{id}/update','profilController@updateRd')->name('updateRd');
	Route::get('/rd/{id}/delete','profilController@deleteRd')->name('deleteRd');


	Route::get('/rplm','profilController@indexRplm');
	Route::post('/rplm/create','profilController@createRplmTes1')->name('createRplmTes1');
	Route::get('/rplm/{id}/edit','profilController@editRplm')->name('editRplm');
	Route::post('/rplm/{id}/update','profilController@updateRplm')->name('updateRplm');
	Route::get('/rplm/{id}/delete','profilController@deleteRplm')->name('deleteRplm');

	Route::get('/tkse','profilController@indexTkse');
	Route::post('/tkse/create','profilController@createTkse')->name('createTkse');
	Route::get('/tkse/{id}/edit','profilController@editTkse')->name('editTkse');
	Route::post('/tkse/{id}/update','profilController@updateTkse')->name('updateTkse');
	Route::get('/tkse/{id}/delete','profilController@deleteTkse')->name('deleteTkse');


	Route::get('/ti','profilController@indexTi');
	Route::post('/ti/create','profilController@createTi')->name('createTi');
	Route::get('/ti/{id}/edit','profilController@editTi')->name('editTi');
	Route::post('/ti/{id}/update','profilController@updateTi')->name('updateTi');
	Route::get('/ti/{id}/delete','profilController@deleteTi')->name('deleteTi');





	Route::get('/topic','TopicController@index');
	Route::post('/topic/create','TopicController@create')->name('createTopic');
	Route::get('/topic/{id}/edit','TopicController@edit');
	Route::post('/topic/{id}/update','TopicController@update');
	Route::get('/topic/{id}/delete','TopicController@delete');



    Route::group(['middleware' =>['permission:kontrakmanajemen']], function(){

    	Route::get('/kmrd','KmrdController@index')->name('index');

		Route::get('/kmrd/hibaheksternal','KmrdController@hibaheksternal')->name('hibaheksternal');
		Route::get('/kmrd/hibaheksternal/export','HibaheksternalController@export');
		
		Route::get('/kmrd/hibaheksternal/export/{tw}','HibaheksternalController@exportPerTW');
		// Route::get('kmrd/hibaheksternal/exportPdf/{tw}','HibaheksternalController@exportPdf')->name('export-pdf-hibaheksternal');

		Route::get('/kmrd/publikasiseminar' , 'KmrdController@publikasiseminar')->name('publikasiseminar');
		Route::get('/kmrd/publikasiseminar/export','PublikasiseminarController@export');
		Route::get('/kmrd/publikasiseminar/exportPdf','PublikasiseminarController@exportPdf');
		Route::get('/kmrd/publikasiseminar/export/{tw}','PublikasiseminarController@exportPerTW');

		Route::get('/kmrd/rekognisi','KmrdController@rekognisi')->name('rekognisi');
		Route::get('/kmrd/rekognisi/export','RekognisiController@export');
		// Route::get('/kmrd/rekognisi/exportPdf','RekognisiController@exportPdf');
		Route::get('/kmrd/rekognisi/export/{tw}','RekognisiController@exportPerTW');

		Route::get('/kmrd/abdimaseksternal','KmrdController@abdimaseksternal')->name('abdimaseksternal');
		Route::get('/kmrd/abdimaseksternal/export','AbdimaseksternalController@export');
		Route::get('/kmrd/abdimaseksternal/exportPdf','AbdimaseksternalController@exportPdf');
		Route::get('/kmrd/abdimaseksternal/export/{tw}','AbdimaseksternalController@exportPerTW');

		Route::get('/kmrd/haki', 'KmrdController@haki')->name('haki');
		Route::get('/kmrd/haki/export','HakiController@export');
		Route::get('/kmrd/haki/exportPdf','HakiController@exportPdf');
		Route::get('/kmrd/haki/export/{tw}','HakiController@exportPerTW');
    });


    Route::group(['middleware' =>['permission:kontrakmanajemen1']], function(){

    	Route::get('/kmrplm','KmrplmController@index')->name('index');

	   	Route::get('/kmrplm/kmrplmhibaheksternal','KmrplmController@kmrplmhibaheksternal')->name('kmrplmhibaheksternal');
		Route::get('/kmrplm/kmrplmhibaheksternal/export','KmrplmhibaheksternalController@export');
		Route::get('/kmrplm/kmrplmhibaheksternal/exportPdf','KmrplmhibaheksternalController@exportPdf');
		Route::get('/kmrplm/kmrplmhibaheksternal/export/{tw}','KmrplmhibaheksternalController@exportPerTW');


	    Route::get('/kmrplm/kmrplmpublikasiseminar','KmrplmController@kmrplmpublikasiseminar')->name('kmrplmpublikasiseminar');
		Route::get('/kmrplm/kmrplmpublikasiseminar/export','KmrplmpublikasiseminarController@export');
		Route::get('/kmrplm/kmrplmpublikasiseminar/exportPdf','KmrplmpublikasiseminarController@exportPdf');
		Route::get('/kmrplm/kmrplmpublikasiseminar/export/{tw}','KmrplmpublikasiseminarController@exportPerTW');
		

	    Route::get('/kmrplm/kmrplmrekognisi','KmrplmController@kmrplmrekognisi')->name('kmrplmrekognisi');
		Route::get('/kmrplm/kmrplmrekognisi/export','KmrplmrekognisiController@export');
		Route::get('/kmrplm/kmrplmrekognisi/exportPdf','KmrplmrekognisiController@exportPdf');
		Route::get('/kmrplm/kmrplmrekognisi/export/{tw}','KmrplmrekognisiController@exportPerTW');


	    Route::get('/kmrplm/kmrplmabdimaseksternal','KmrplmController@kmrplmabdimaseksternal')->name('kmrplmabdimaseksternal');
		Route::get('/kmrplm/kmrplmabdimaseksternal/export','KmrplmabdimaseksternalController@export');
		Route::get('/kmrplm/kmrplmabdimaseksternal/exportPdf','KmrplmabdimaseksternalController@exportPdf');
		Route::get('/kmrplm/kmrplmabdimaseksternal/export/{tw}','KmrplmabdimaseksternalController@exportPerTW');

	    Route::get('/kmrplm/kmrplmhaki','KmrplmController@kmrplmhaki')->name('kmrplmhaki');
		Route::get('/kmrplm/kmrplmhaki/export','KmrplmhakiController@export');
		Route::get('/kmrplm/kmrplmhaki/exportPdf','KmrplmhakiController@exportPdf'); 
		Route::get('/kmrplm/kmrplmhaki/export/{tw}','KmrplmhakiController@exportPerTW');

    });

    	Route::group(['middleware' =>['permission:kontrakmanajemen2']], function(){

    	Route::get('/kmtkse','KmtkseController@index')->name('index');

			Route::get('/kmtkse/kmtksehe','KmtkseController@kmtksehe')->name('kmtksehe');
			Route::get('/kmtkse/kmtksehe/export','KmtkseheController@export');
			Route::get('/kmtkse/kmtksehe/exportPdf','KmtkseheController@exportPdf');
			Route::get('/kmtkse/kmtksehe/export/{tw}','KmtkseheController@exportPerTW');

			Route::get('/kmtkse/kmtkseps','KmtkseController@kmtkseps')->name('kmtkseps');
			Route::get('/kmtkse/kmtkseps/export','KmtksepsController@export');
			// Route::get('/kmtkse/kmtkseps/exportPdf','KmtksepsController@exportPdf');
			Route::get('/kmtkse/kmtkseps/export/{tw}','KmtksepsController@exportPerTW');


			Route::get('/kmtkse/kmtksere','KmtkseController@kmtksere')->name('kmtksere');
			Route::get('/kmtkse/kmtksere/export','KmtksereController@export');
			// Route::get('/kmtkse/kmtksere/exportPdf','KmtksereController@exportPdf');
			Route::get('/kmtkse/kmtksere/export/{tw}','KmtksereController@exportPerTW');


			Route::get('/kmtkse/kmtkseae','KmtkseController@kmtkseae')->name('kmtkseae');
			Route::get('/kmtkse/kmtkseae/export','KmtkseaeController@export');
			Route::get('/kmtkse/kmtkseae/exportPdf','KmtkseaeController@exportPdf');
			Route::get('/kmtkse/kmtkseae/export/{tw}','KmtkseaeController@exportPerTW');

			Route::get('/kmtkse/kmtksehk','KmtkseController@kmtksehk')->name('kmtksehk');
			Route::get('/kmtkse/kmtksehk/export','KmtksehkController@export');
			Route::get('/kmtkse/kmtksehk/exportPdf','KmtksehkController@exportPdf');
			Route::get('/kmtkse/kmtksehk/export/{tw}','KmtksehkController@exportPerTW');


    });


	    	Route::group(['middleware' =>['permission:kontrakmanajemen3']], function(){

	    	Route::get('/kmti','KmtiController@index')->name('index');

	    	Route::get('/kmti/kmtihe','KmtiController@kmtihe')->name('kmtihe');
			Route::get('/kmti/kmtihe/export','KmtiheController@export');
			Route::get('/kmti/kmtihe/exportPdf','KmtiheController@exportPdf');
			Route::get('/kmti/kmtihe/export/{tw}','KmtiheController@exportPerTW');



			Route::get('/kmti/kmtips','KmtiController@kmtips')->name('kmtips');
			Route::get('/kmti/kmtips/export','KmtipsController@export');
			Route::get('/kmti/kmtips/exportPdf','KmtipsController@exportPdf');
			Route::get('/kmti/kmtips/export/{tw}','KmtipsController@exportPerTW');


			Route::get('/kmti/kmtire','KmtiController@kmtire')->name('kmtire');
			Route::get('/kmti/kmtire/export','KmtireController@export');
			Route::get('/kmti/kmtire/exportPdf','KmtireController@exportPdf');
			Route::get('/kmti/kmtire/export/{tw}','KmtireController@exportPerTW');



			Route::get('/kmti/kmtiae','KmtiController@kmtiae')->name('kmtiae');
			Route::get('/kmti/kmtiae/export','KmtiaeController@export');
			Route::get('/kmti/kmtiae/exportPdf','KmtiaeController@exportPdf');
			Route::get('/kmti/kmtiae/export/{tw}','KmtiaeController@exportPerTW');

			Route::get('/kmti/kmtihk','KmtiController@kmtihk')->name('kmtihk');
			Route::get('/kmti/kmtihk/export','KmtihkController@export');
			Route::get('/kmti/kmtihk/exportPdf','KmtihkController@exportPdf');
			Route::get('/kmti/kmtihk/export/{tw}','KmtihkController@exportPerTW');




    });

	    	Route::group(['middleware' =>['permission:plottingdosen']], function(){

			Route::get('/plottingdosen','plottingdosenController@index');
			Route::get('/plottingdosen/create','plottingdosenController@create')->name('create');//kk,prodi
			Route::post('/plottingdosen/', 'plottingdosenController@store');//kk,prodi
			Route::get('/kirimemail','plottingdosenemailController@email');//kk
			Route::get('/kirimemail2','plottingdosenemailController@email2');//kk
		//});
			Route::get('/plottingdosen/download/{file}', 'plottingdosenController@download');//kk,prodi
			Route::get('/plottingdosen/{id}/delete', 'plottingdosenController@delete');






    });

	  //   	Route::group(['middleware' =>['permission:plottingdosen']], function(){
			// Route::get('/pkrd','PkrdController@index');
			// Route::post('/pkrd/create','pkrdController@create');
			// Route::get('/pkrd/{id}/edit','pkrdController@edit');
			// Route::post('/pkrd/{id}/update','pkrdController@update');
			// Route::get('/pkrd/{id}/delete','pkrdController@delete');
			// Route::get('/pkrd/exportPdf','pkrdController@exportPdf');

			// 




    // });
			Route::group(['middleware' =>['permission:cetakpk']], function(){
			Route::get('/cetakpk','CetakpkController@index');
			Route::get('search','CetakpkController@search');
			Route::post('/export-cetak-pk','CetakpkController@exportCetakPK')->name('export-cetak-pk');






    });




	













 

//});
//Route::group(['middleware'=>['auth','checkRole:dosen,kk']],function(){
		//Route::get('/dashboard','DashboardController@index');
//

