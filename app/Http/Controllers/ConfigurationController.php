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

class ConfigurationController extends Controller {

    public function showaudits() {

        $data = $this->getAudits();
//        print_r($data);
//        return;
//        
        
        if ($data['status'] == 0) {
            $dataArray = $data['data'];
           
            return view('auditslogs')->with('data', $dataArray);
        }
        return redirect('errorpage')->with('errordata', $data['message']);
    }

    public function showcases() {

        $cases_data = $this->getCases();


        if ($cases_data['status'] == 0) {
            $dataArray = $cases_data['data'];

            return view('cases')->with('data', $dataArray);
        }
        return redirect('errorpage')->with('errordata', $cases_data['message']);
    }

    public function showagentcases() {

        $agents_data = $this->getAgents();

        if ($agents_data['status'] == 0) {
            $dataArray = $agents_data['data'];

            return view('agentcases')
                            ->with('data', $dataArray);
        }
        return redirect('errorpage')->with('errordata', $agents_data['message']);
    }

    public function getCases() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . '/reports/reportedcases';

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
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getAgentCases($agentid) {
        $url = config('constants.TEST_URL');

        $baseurl = $url . '/reports/reportedcases/' . $agentid;

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
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getSettings() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'settings/drivervehicle';

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
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getTVISettings() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'settings/tvi';

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
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");
            return json_encode($data);
        }
    }

    public function settingsSession() {

        $countries = session('countries');
        $gender = session('gender');
        $models = session('models');
        $vehiclemakes = session('vehiclemakes');
        $vehicletypes = session('vehicletypes');
        $idtypes = session('idtypes');
        $status = session('status');
        $tvi = session('tvi');
        $office = session('office');
        $regime = session('regime');

        $dataArray = array(
            'countries' => $countries,
            'gender' => $gender,
            'models' => $models,
            'vehiclemakes' => $vehiclemakes,
            'vehicletypes' => $vehicletypes,
            'idtypes' => $idtypes,
            'status' => $status,
            'tvi' => $tvi,
            'office' => $office,
            'regime' => $regime
        );


        return json_encode($dataArray);
    }

    public function forgotpassword(Request $request) {

        $data = $request->all();
        $email = $data['email'];

        $reset = $this->resetForgetPassword($email);
        return $reset;
    }

    private function resetForgetPassword($email) {

        return '{"status":0,"message":"reset link sent to email"}';

        $url = config('constants.TEST_URL');

        $baseurl = $url . 'settings/tvi';

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
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");
            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getAgents() {




        $url = config('constants.TEST_URL');

        $baseurl = $url . 'Account/Users';

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
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

    public function getAudits() {
        $url = config('constants.TEST_URL');

        $baseurl = $url . 'audit';

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

            return json_decode($body,true);
        } catch (\RequestException $e) {
            $data = array('status' => 1, 'message' => "Request Exception");
            return json_encode($data);
        } catch (\ClientException $e) {
            $data = array('status' => 1, 'message' => "Client Exception");
            return json_encode($data);
        } catch (\Exception $e) {
            $data = array('status' => 1, 'message' => "Internal Server Error");

            return redirect('errorpage')->with('errordata', $e->getMessage());
        }
    }

}
