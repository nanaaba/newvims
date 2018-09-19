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
use App\Http\Controllers\ConfigurationController;

class DashboardController extends Controller {

    public function showDashboard() {

        $dashboard_data = $this->dashboardData();

        $config = new ConfigurationController();

        $cases_data = $config->getCases();


//        if ($cases_data['status'] == 0) {
//            $dataArray = $cases_data['data'];
//
//            return view('cases')->with('data', $dataArray);
//        }
        if ($dashboard_data['status'] == 0 && $cases_data['status'] == 0) {
            $dataArray = $dashboard_data['data'];
            $cases = $cases_data['data'];

            return view('dashboard')->with('data', $dataArray)->with("cases", $cases);
        }
        return redirect('errorpage')->with('errordata', $dashboard_data['message']);
    }

    public function dashboardData() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'dashboard/counters/yearly';

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

            return json_decode($body, true);
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception: ");
            return $data;
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception:");
            return $data;
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error: ");
            return $data;
        }
    }

    public function graphApi() {

        $dashboard_data = $this->dashboardData();
        if ($dashboard_data['status'] == 0) {
            $dataArray = $dashboard_data['data'];


            $dashboard_api = $dataArray['CarGraph'];

            $periods = array();
            $cars_entering = array();
            $cars_expiring = array();
            $cars_exited = array();
            $cars_overstayed = array();

            foreach ($dashboard_api as $value) {

                array_push($periods, $value['period']);
                array_push($cars_entering, $value['carsEntered']);
                array_push($cars_expiring, $value['carsExpiring']);
                array_push($cars_exited, $value['carsExited']);
                array_push($cars_overstayed, $value['carsOverStayed']);
            }
            $result = array(
                "status" => 0,
                "period" => $periods,
                "carsEntering" => $cars_entering,
                "carsExpiring" => $cars_expiring,
                "carsExiting" => $cars_exited,
                "carsOverStaying" => $cars_overstayed,
                "detail" => array(
                    "carsEntered" => $dataArray['carsEntered'],
                    "carsExpiring" => $dataArray['carsExpiring'],
                    "carsExited" => $dataArray['carsExited'],
                    "carsOverStayed" => $dataArray['carsOverStayed'],
                )
            );
            return \GuzzleHttp\json_encode($result);
        }

        $result = array(
            "status" => 1,
            "message" => "Dashboard Api Error"
        );
        return \GuzzleHttp\json_encode($result);
    }

    
    
       public function dashboardTrends($period) {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'dashboard/trends/'.$period;

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

            return json_decode($body, true);
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception: " );
            return $data;
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception:" );
            return $data;
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error: " );
            return $data;
        }
    }

}
