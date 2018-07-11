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

    return view('login');
});

Route::get('/forgotpassword', function () {

    return view('forgotpassword');
});
Route::post('authenticateuser', 'LoginController@authenticateuser');
Route::post('forgotpassword', 'ConfigurationController@forgotpassword');



Route::get('/logout', function() {
    Session::flush();

    return redirect('/');
});
Route::group(['middleware' => 'check-userauth'], function () {

    Route::get('/users/changepassword', function () {

        return view('changepassword');
    });
    Route::get('/users', function () {

        return view('users');
    });
    Route::get('/dashboard', 'DashboardController@showdashboard');

    Route::get('/analytics', function () {

        return view('analyticsreport');
    });

    Route::get('/reports', function () {

        return view('generalreport');
    });

    Route::get('/audits', function () {

        return view('auditslogs');
    });

    Route::get('/agentcases', function () {

        return view('agentcases');
    });

    Route::get('drivers/new', 'DriverController@showdrivers');
    Route::get('drivers/all', 'DriverController@showalldrivers');
    Route::get('drivers/assign', 'DriverController@showassignvehicles');
    Route::get('drivers/blacklisted', 'DriverController@showblacklisteddrivers');

    Route::get('vehicles/new', 'VehicleController@showvehicle');
    Route::get('vehicles/all', 'VehicleController@showallvehicles');

//agentcases
//vehicle/new  
//apis
    Route::get('settings/all', 'ConfigurationController@settingsSession');
    Route::get('tvisettings/all', 'ConfigurationController@getTVISettings');



    Route::get('drivers/getall', 'DriverController@getDrivers');
    Route::get('drivers/information/{driverid}', 'DriverController@getDriverInformation');
    Route::post('driver/new', 'DriverController@saveDriver');
    Route::get('drivers/vehicles', 'DriverController@getDriversVehicles');
    Route::post('driver/assign', 'DriverController@assignVehicles');
    Route::put('driver/update', 'DriverController@updateDriver');
    Route::delete('drivers/{driverno}', 'DriverController@deleteDriver');


    Route::post('vehicle/new', 'VehicleController@saveVehicle');
    Route::get('vehicles/getall', 'VehicleController@getVehicles');
    Route::get('vehicles/information/{vehicleid}', 'VehicleController@getVehicleInformation');
    Route::delete('vehicles/{vehicleno}', 'VehicleController@deleteVehicle');
    Route::put('vehicle/update', 'VehicleController@updateVehicle');

//trips
    Route::get('trip/{tripno}', 'TripController@showTripinfo');
    Route::get('vehicles/{vehicleno}', 'TripController@getVehicleTrips');
    Route::get('drivers/{driverno}', 'TripController@getDriverTrips');
    Route::get('trips/new', 'TripController@showNewTrip');
    Route::get('trips/all', 'TripController@showAllTrips');
    Route::post('trips/new', 'TripController@addTrip');
    Route::put('trips/updatetrip', 'TripController@updateTrip');
    Route::delete('trips/{tripno}', 'TripController@deleteTrip');






    Route::post('users/save', 'UserController@saveUser');
    Route::get('users/all', 'UserController@getUsers');
    Route::get('users/{userid}', 'UserController@userDetail');
    Route::put('users/update', 'UserController@updateUser');
    Route::delete('users/{userid}', 'UserController@deleteUser');
    Route::post('reports/generalreport', 'ReportController@spoolGeneralReport');
    Route::post('reports/agentcases', 'ReportController@agentReport');


    Route::get("search", "ReportController@search");

    Route::get("graphapi", "DashboardController@graphApi");
});
