<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('contact_companies', 'Admin\ContactCompaniesController');
    Route::post('contact_companies_mass_destroy', ['uses' => 'Admin\ContactCompaniesController@massDestroy', 'as' => 'contact_companies.mass_destroy']);
    Route::resource('clinics', 'Admin\ClinicsController');
    Route::post('clinics_mass_destroy', ['uses' => 'Admin\ClinicsController@massDestroy', 'as' => 'clinics.mass_destroy']);
    Route::post('clinics_restore/{id}', ['uses' => 'Admin\ClinicsController@restore', 'as' => 'clinics.restore']);
    Route::delete('clinics_perma_del/{id}', ['uses' => 'Admin\ClinicsController@perma_del', 'as' => 'clinics.perma_del']);
    Route::resource('tasks', 'Admin\TasksController');
    Route::post('tasks_mass_destroy', ['uses' => 'Admin\TasksController@massDestroy', 'as' => 'tasks.mass_destroy']);
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::post('permissions_mass_destroy', ['uses' => 'Admin\PermissionsController@massDestroy', 'as' => 'permissions.mass_destroy']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::resource('task_statuses', 'Admin\TaskStatusesController');
    Route::post('task_statuses_mass_destroy', ['uses' => 'Admin\TaskStatusesController@massDestroy', 'as' => 'task_statuses.mass_destroy']);
    Route::resource('locations', 'Admin\LocationsController');
    Route::post('locations_mass_destroy', ['uses' => 'Admin\LocationsController@massDestroy', 'as' => 'locations.mass_destroy']);
    Route::post('locations_restore/{id}', ['uses' => 'Admin\LocationsController@restore', 'as' => 'locations.restore']);
    Route::delete('locations_perma_del/{id}', ['uses' => 'Admin\LocationsController@perma_del', 'as' => 'locations.perma_del']);
    Route::resource('bookings', 'Admin\BookingsController');
    Route::post('bookings_mass_destroy', ['uses' => 'Admin\BookingsController@massDestroy', 'as' => 'bookings.mass_destroy']);
    Route::post('bookings_restore/{id}', ['uses' => 'Admin\BookingsController@restore', 'as' => 'bookings.restore']);
    Route::delete('bookings_perma_del/{id}', ['uses' => 'Admin\BookingsController@perma_del', 'as' => 'bookings.perma_del']);
    Route::resource('task_tags', 'Admin\TaskTagsController');
    Route::post('task_tags_mass_destroy', ['uses' => 'Admin\TaskTagsController@massDestroy', 'as' => 'task_tags.mass_destroy']);
    Route::resource('websites', 'Admin\WebsitesController');
    Route::post('websites_mass_destroy', ['uses' => 'Admin\WebsitesController@massDestroy', 'as' => 'websites.mass_destroy']);
    Route::post('websites_restore/{id}', ['uses' => 'Admin\WebsitesController@restore', 'as' => 'websites.restore']);
    Route::delete('websites_perma_del/{id}', ['uses' => 'Admin\WebsitesController@perma_del', 'as' => 'websites.perma_del']);
    Route::resource('task_calendars', 'Admin\TaskCalendarsController');
    Route::resource('analytics', 'Admin\AnalyticsController');
    Route::post('analytics_mass_destroy', ['uses' => 'Admin\AnalyticsController@massDestroy', 'as' => 'analytics.mass_destroy']);
    Route::post('analytics_restore/{id}', ['uses' => 'Admin\AnalyticsController@restore', 'as' => 'analytics.restore']);
    Route::delete('analytics_perma_del/{id}', ['uses' => 'Admin\AnalyticsController@perma_del', 'as' => 'analytics.perma_del']);
    Route::resource('adwords', 'Admin\AdwordsController');
    Route::post('adwords_mass_destroy', ['uses' => 'Admin\AdwordsController@massDestroy', 'as' => 'adwords.mass_destroy']);
    Route::post('adwords_restore/{id}', ['uses' => 'Admin\AdwordsController@restore', 'as' => 'adwords.restore']);
    Route::delete('adwords_perma_del/{id}', ['uses' => 'Admin\AdwordsController@perma_del', 'as' => 'adwords.perma_del']);
    Route::resource('lca_dashboards', 'Admin\LcaDashboardsController');
    Route::resource('analytical_dashboards', 'Admin\AnalyticalDashboardsController');
    Route::resource('adwords_dashboards', 'Admin\AdwordsDashboardsController');
    Route::resource('call_metrics', 'Admin\CallMetricsController');
    Route::resource('bookings_dashboards', 'Admin\BookingsDashboardsController');
    Route::resource('zipcodes', 'Admin\ZipcodesController');
    Route::post('zipcodes_mass_destroy', ['uses' => 'Admin\ZipcodesController@massDestroy', 'as' => 'zipcodes.mass_destroy']);
    Route::post('zipcodes_restore/{id}', ['uses' => 'Admin\ZipcodesController@restore', 'as' => 'zipcodes.restore']);
    Route::delete('zipcodes_perma_del/{id}', ['uses' => 'Admin\ZipcodesController@perma_del', 'as' => 'zipcodes.perma_del']);
    Route::resource('api_tests', 'Admin\ApiTestsController');
    Route::post('api_tests_mass_destroy', ['uses' => 'Admin\ApiTestsController@massDestroy', 'as' => 'api_tests.mass_destroy']);
    Route::post('api_tests_restore/{id}', ['uses' => 'Admin\ApiTestsController@restore', 'as' => 'api_tests.restore']);
    Route::delete('api_tests_perma_del/{id}', ['uses' => 'Admin\ApiTestsController@perma_del', 'as' => 'api_tests.perma_del']);
    Route::resource('tracking_numbers', 'Admin\TrackingNumbersController');
    Route::post('tracking_numbers_mass_destroy', ['uses' => 'Admin\TrackingNumbersController@massDestroy', 'as' => 'tracking_numbers.mass_destroy']);
    Route::post('tracking_numbers_restore/{id}', ['uses' => 'Admin\TrackingNumbersController@restore', 'as' => 'tracking_numbers.restore']);
    Route::delete('tracking_numbers_perma_del/{id}', ['uses' => 'Admin\TrackingNumbersController@perma_del', 'as' => 'tracking_numbers.perma_del']);

    Route::model('messenger', 'App\MessengerTopic');
    Route::get('messenger/inbox', 'Admin\MessengerController@inbox')->name('messenger.inbox');
    Route::get('messenger/outbox', 'Admin\MessengerController@outbox')->name('messenger.outbox');
    Route::resource('messenger', 'Admin\MessengerController');


 
});
