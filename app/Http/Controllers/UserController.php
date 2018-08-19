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

class UserController extends Controller {

    public function showusers() {


        return view('users');
    }

    public function showchangepassword() {

        return view('changepassword');
    }

    public function getUsers() {




        $url = config('constants.TEST_URL');

        $baseurl = $url . '/Account/Users';

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

    public function saveUser(Request $request) {



        $url = config('constants.TEST_URL');
        $baseurl = $url . '/account/users';




        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);

        $dataArray = array(
            'UserName' => $request['username'],
            'Email' => $request['email'],
            'contact' => $request['contact'],
            'Role' => $request['role'],
            'Surname' => $request['surname'],
            'Othernames' => $request['othernames'],
            'Password' => $request['password'],
            'ConfirmPassword' => $request['confirmpassword'],
            'addedby' => session('userid')
        );


        try {

            $response = $client->request('POST', $baseurl, ['json' => $dataArray, 'verify' => false]);

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

    public function updateUser(Request $request) {

        $url = config('constants.TEST_URL');
        $baseurl = $url . '/account/users';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token')
            ],
            'http_errors' => false
        ]);

        $dataArray = array(
            'userId' => $request['userid'],
            'username' => $request['username'],
            'Email' => $request['email'],
            'contact' => $request['contact'],
            'role' => $request['role'],
            'surname' => $request['surname'],
            'othernames' => $request['othernames'],
            'modifiedby' => session('userid'),
            "isActive" => true,
            "activeOn" => null
        );


        try {

            $response = $client->request('PUT', $baseurl, ['json' => $dataArray, 'verify' => false]);

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

    public function deleteUser($userid) {


        $url = config('constants.TEST_URL');

        $baseurl = $url . '/account/users/' . $userid;

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

    public function userDetail($userid) {



        $url = config('constants.TEST_URL');

        $baseurl = $url . '/Account/Users/' . $userid;

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

    public function changePassword(Request $request) {

        $password = $request['password'];

        $url = config('constants.TEST_URL');
        $baseurl = $url . '/changepassword';



        $client = new Client([
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . session('token'),
                'code' => $password
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

    public function resetPassword($userid) {
        return '{
    "status": 0,
    "message": "success"
}';
    }

    public function getAuditLogs() {


        $url = config('constants.TEST_URL');

        $baseurl = $url . '/users';

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

}
