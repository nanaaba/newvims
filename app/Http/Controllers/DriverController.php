<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\TripController;

class DriverController extends Controller {

    public function showdrivers() {

        return view('newdriver');
    }

    public function showassignvehicles() {
        return view('assignvehicles');
    }

    public function showalldrivers() {

        return view('alldrivers');
    }

    public function showblacklisteddrivers() {
        return view('blacklisteddrivers');
    }

    public function getDrivers() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers';

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);
            $body = $response->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getDriverInformation($driverid) {

        $information = $this->getDriverDetail($driverid);
        $trips = new TripController();
        $alltrips = $trips->getDriverTrips($driverid);

        return view('driverinformation')->with('information', $information)->with('trips', $alltrips);
    }

    public function getDriverDetail($driverid) {

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers/' . $driverid;

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);
            $body = $response->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function saveDriver(Request $request) {

        $data = $request->all();




        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);





        try {

            $response = $client->request('POST', $baseurl, ['json' => $data, 'verify' => false]);
            $body = $response->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getDriversVehicles() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers/assignments';

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);

            $body = $response->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function assignVehicles(Request $request) {

        $data = $request->all();

        $driver = $data['driver'];
        $vehicles = $data['vehicles'];
        $dataarray = array();
        $response = array();
        foreach ($vehicles as $value) {

            $dataarray['driverRegNo'] = $driver;
            $dataarray['vehicleRegNo'] = $value;
            $dataarray['remarks'] = "test remarks";


            array_push($response, $dataarray);
        }


        $dataArray = array(
            'assignments' => $response
        );


        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers/assignments';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);




        try {

            $responses = $client->request('POST', $baseurl, ['json' => $dataArray, 'verify' => false]);

            $body = $responses->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function updateDriver(Request $request) {

        $data = $request->all();

        $driver_no = $data['driverno'];


        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers/' . $driver_no;


        print_r(json_encode($data));

        return;


        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);




        try {

            $response = $client->request('PUT', $baseurl, ['json' => $data, 'verify' => false]);

            $body = $response->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function deleteDriver($driverno) {




        $url = config('constants.TEST_URL');

        $baseurl = $url . 'drivers/' . $driverno;



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);




        try {

            $response = $client->request('DELETE', $baseurl);
            $body = $response->getBody();

            return $body;
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" . $e->getMessage());
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" . $e->getMessage());

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

}
