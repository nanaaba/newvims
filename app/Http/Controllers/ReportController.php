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

class ReportController extends Controller {

    public function showreport() {

        return view('generalreport');
    }

    public function spoolGeneralReport(Request $request) {


        return ' {
    "status": 0,
    "message": "success",
    "data": [
        {
            "id": "2",
            "chassisNumber": "GR 2010 13",
            "ownerName": "Elliot Kitisipui",
            "vehicleType": "toyota",
            "gender": "male",
            "datePurchased": "2017-10-11 ",
            "country": "Togo",
            "overstayeddays": "3",
            "fuelCapacity": "1.8",
            "transmission": "Automatic",
            "mileage": "13002022",
            "dueDate": "2017-11-10",
            "entryDate": "2017-11-01",
            "customData": "",
            "dvlaData": ""
        },
         {
            "id": "2",
            "chassisNumber": "GR 2010 13",
            "ownerName": "Mathias Bassaw",
            "vehicleType": "Nissan",
            "gender": "male",
            "datePurchased": "2017-10-11 ",
            "country": "Cote Dvoire",
            "overstayeddays": "2",
            "fuelCapacity": "1.8",
            "transmission": "Automatic",
            "mileage": "13002022",
            "dueDate": "2017-11-10",
            "entryDate": "2017-11-01",
            "customData": "",
            "dvlaData": ""
        },
         {
            "id": "2",
            "chassisNumber": "GR 2929 13",
            "ownerName": "Ama Ansah",
            "vehicleType": "Benz",
            "gender": "female",
            "datePurchased": "2017-10-11 ",
            "country": "China",
            "overstayeddays": "3",
            "fuelCapacity": "1.8",
            "transmission": "Automatic",
            "mileage": "13002022",
            "dueDate": "2017-11-10",
            "entryDate": "2017-11-01",
            "customData": "",
            "dvlaData": ""
        }    
    ]
}';
        $url = config('constants.TEST_URL');

        $baseurl = $url . '/generalreport';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        $date = "'" . $request['daterange'] . "'";

        $daterange = explode('-', $date);
        $start_date = substr($daterange[0], 1);
        $end_date = substr($daterange[1], 0, -1);

        $new_start_date = date("Y-m-d", strtotime($start_date));
        $new_end_date = date("Y-m-d", strtotime($end_date));

        $dataArray = array(
            'toll' => $request['reportlevel'],
            'category' => $request['car_type'],
            'cashier' => $request['car_brand'],
            'region' => $request['country_of_origin'],
            'startdate' => $new_start_date,
            'enddate' => $new_end_date
        );


        try {

            $response = $client->request('POST', $baseurl, ['json' => $dataArray, 'verify' => false]);

            $body = $response->getBody();
            // $bodyObj = json_decode($body);


            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function agentReport(Request $request) {

        return ' {
    "status": 0,
    "message": "success",
    "data": [
        {
            "id": "2",
            "chassisNumber": "GR 2010 13",
            "ownerName": "Elliot Kitisipui",
            "vehicleType": "toyota",
            "gender": "male",
            "datePurchased": "2017-10-11 ",
            "country": "Togo",
            "overstayeddays": "3",
            "fuelCapacity": "1.8",
            "transmission": "Automatic",
            "mileage": "13002022",
            "dueDate": "2017-11-10",
            "entryDate": "2017-11-01",
            "customData": "",
            "dvlaData": ""
        },
         {
            "id": "2",
            "chassisNumber": "GR 2010 13",
            "ownerName": "Mathias Bassaw",
            "vehicleType": "Nissan",
            "gender": "male",
            "datePurchased": "2017-10-11 ",
            "country": "Cote Dvoire",
            "overstayeddays": "2",
            "fuelCapacity": "1.8",
            "transmission": "Automatic",
            "mileage": "13002022",
            "dueDate": "2017-11-10",
            "entryDate": "2017-11-01",
            "customData": "",
            "dvlaData": ""
        },
         {
            "id": "2",
            "chassisNumber": "GR 2929 13",
            "ownerName": "Ama Ansah",
            "vehicleType": "Benz",
            "gender": "female",
            "datePurchased": "2017-10-11 ",
            "country": "China",
            "overstayeddays": "3",
            "fuelCapacity": "1.8",
            "transmission": "Automatic",
            "mileage": "13002022",
            "dueDate": "2017-11-10",
            "entryDate": "2017-11-01",
            "customData": "",
            "dvlaData": ""
        }    
    ]
}';


        $url = config('constants.TEST_URL');

        $baseurl = $url . '/generalreport';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        $date = "'" . $request['daterange'] . "'";

        $daterange = explode('-', $date);
        $start_date = substr($daterange[0], 1);
        $end_date = substr($daterange[1], 0, -1);

        $new_start_date = date("Y-m-d", strtotime($start_date));
        $new_end_date = date("Y-m-d", strtotime($end_date));

        $dataArray = array(
            'toll' => $request['tollpoints'],
            'category' => $request['categories'],
            'cashier' => $request['cashiers'],
            'region' => $request['regions'],
            'district' => $request['districts'],
            'startdate' => $new_start_date,
            'enddate' => $new_end_date
        );


        try {

            $response = $client->request('POST', $baseurl, ['json' => $dataArray, 'verify' => false]);

            $body = $response->getBody();
            // $bodyObj = json_decode($body);


            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function spoolInconsistentCases(Request $request) {

        $url = config('constants.TEST_URL');

        $baseurl = $url . '/generalreport';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'token' => session('token')
            ],
            'http_errors' => false
        ]);
        $date = "'" . $request['daterange'] . "'";

        $daterange = explode('-', $date);
        $start_date = substr($daterange[0], 1);
        $end_date = substr($daterange[1], 0, -1);

        $new_start_date = date("Y-m-d", strtotime($start_date));
        $new_end_date = date("Y-m-d", strtotime($end_date));

        $dataArray = array(
            'toll' => $request['tollpoints'],
            'category' => $request['categories'],
            'cashier' => $request['cashiers'],
            'region' => $request['regions'],
            'district' => $request['districts'],
            'startdate' => $new_start_date,
            'enddate' => $new_end_date
        );


        try {

            $response = $client->request('POST', $baseurl, ['json' => $dataArray, 'verify' => false]);

            $body = $response->getBody();
            // $bodyObj = json_decode($body);


            if ($response->getStatusCode() == 200) {

                return $body;
            }
            return $response->getStatusCode();
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

    public function search(Request $request) {
        $param = $request->input('searchparam');
        
        if(empty($param)){
            
                return redirect('/');

        }
        
        $results = $this->searchQuery($param);

        return view('searchresults')
                        ->with('searchparam', $param)
                        ->with('results', $results);
    }

    public function searchQuery($searchparam) {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'vehicles/search/'.$searchparam;

        $client = new Client([
            'headers' => [
                'Accept' => 'application/json'
            ],
            'http_errors' => false
        ]);
        try {

            $response = $client->request('GET', $baseurl);

            $body = $response->getBody();
            return $body;
        } catch (RequestException $e) {
            return 'Http Exception : ' . $e->getMessage();
        } catch (Exception $e) {
            return 'Internal Server Error:' . $e->getMessage();
        }
    }

}
