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

class VehicleController extends Controller {

    public function showvehicle() {

        return view('newvehicle');
    }

    public function showallvehicles() {

        return view('allvehicles');
    }

    public function getVehicles() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'vehicles';

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
            $data = array('status' => 1, 'message' => "Request Exception" );
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" );
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" );

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getVehicleInformation($vehicleid) {

        $information = $this->getVehicleDetail($vehicleid);
        $trips = new TripController();
        $alltrips = $trips->getVehicleTrips($vehicleid);

        return view('vehicleinformation')->with('information', $information)
                        ->with('trips', $alltrips);
    }

    public function getVehicleDetail($vehicleid) {

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'vehicles/' . $vehicleid;

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
            $data = array('status' => 1, 'message' => "Request Exception" );
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" );
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" );

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function saveVehicle(Request $request) {

        $data = $request->all();



        $url = config('constants.TEST_URL');

        $baseurl = $url . 'vehicles';



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
            $data = array('status' => 1, 'message' => "Request Exception" );
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" );
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" );

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function deleteVehicle($vehicleno) {

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'vehicles/' . $vehicleno;



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
            $data = array('status' => 1, 'message' => "Request Exception" );
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" );
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" );

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function updateVehicle(Request $request) {

        $data = $request->all();
        $vehicle_no = $data['vehicleno'];

        return \GuzzleHttp\json_encode($data);

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'vehicles/' . $vehicle_no;



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
            $data = array('status' => 1, 'message' => "Request Exception" );
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception" );
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error" );

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

}
