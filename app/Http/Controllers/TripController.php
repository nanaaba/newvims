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

class TripController extends Controller {

    public function showTripinfo($tripno) {

        $details = $this->getTripInfo($tripno);

        return view('tripinformation')->with('details', $details);
    }

    public function showAllTrips() {

        $details = $this->getAllTrips();

        return view('alltrips')->with('details', $details);
    }

    public function showNewTrip() {
        return view('newtrip');
    }

    public function getVehicleTrips($vehicleno) {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips/vehicle/' . $vehicleno;

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

    public function getDriverTrips($driverno) {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips/driver/' . $driverno;

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

    public function getTripInfo($tripno) {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips/' . $tripno;

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

    public function getAllTrips() {

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips';

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

    public function addTrip(Request $request) {

        $data = $request->all();


        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips';



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

    public function updateTrip(Request $request) {

        $data = $request->all();

        $tripno = $data['tripno'];

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips/' . $tripno;



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

    public function deleteTrip($tripno) {




        $url = config('constants.TEST_URL');

        $baseurl = $url . 'trips/' . $tripno;



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
