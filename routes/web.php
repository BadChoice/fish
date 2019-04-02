<?php

	Auth::routes(['verify' => true]);

	//Route::middleware(['verified', 'user.active'])->group(function () {
		Route::get('/', 'HomeController@index')->middleware("verified")->middleware("user.active")->name("home");
        Route::get('/contact', 'ContactController@index')->middleware("verified")->middleware("user.active")->name("contact");
        Route::get('/resources', 'ResourcesController@index')->middleware("verified")->middleware("user.active")->name("resources");

		Route::post('/lead/typeSegmentsFetch', 'LeadController@fetchSegments')->middleware("verified")->middleware("user.active")->name("lead.fetch");
		Route::resource("lead", 'LeadController');
        Route::get('/lead/{leadId}/download', 'LeadController@download')->middleware("verified")->middleware("user.active")->name("lead.download");

        Route::get('/download/{folder}/{file}', 'DownloadsController@download');
	//});
Route::get('logout', "Auth\LoginController@logout");
