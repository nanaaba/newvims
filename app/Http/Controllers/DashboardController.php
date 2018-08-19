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

class DashboardController extends Controller {

    public function showDashboard() {

        $dashboard_data = $this->dashboardData();
        if ($dashboard_data['status'] == 0) {
            $dataArray = $dashboard_data['data'];

            return view('dashboard')->with('data', $dataArray);
        }
        return redirect('errorpage')->with('errordata', $dashboard_data['message']);
    }

    public function dashboardData() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'dashboard';

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
            $data = array('status' => 1, 'message' => "Request Exception: " . $e->getMessage());
            return $data;
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception:" . $e->getMessage());
            return $data;
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error: " . $e->getMessage());
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

}
