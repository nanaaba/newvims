<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\ConfigurationController;

class LoginController extends Controller {

    public function authenticateuser(Request $request) {

        $data = $request->all(); // This will get all the request data.

        $username = $request['username'];
        $password = $request['password'];

        return $this->userAuthentication($username, $password);
    }

    public function userAuthentication($username, $password) {




        $url = config('constants.TEST_URL');

        $baseurl = $url . 'account/token';



        $client = new Client();

        try {


            $response = $client->post($baseurl, [
                'form_params' => [
                    'grant_type' => 'password',
                    'username' => $username,
                    'password' => $password
                ]
            ]);
            $body = $response->getBody();

            $bodyObj = json_decode($body);

            if ($response->getStatusCode() == 200) {

                $this->setSettings();
                session(['username' => $bodyObj->fullname]);
                session(['role' => $bodyObj->role]);

                session(['token' => $bodyObj->access_token]);
                $data = array('status' => 0, 'message' => 'success' . $bodyObj->userName);
                return json_encode($data);
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {


            $data = array('status' => 1, 'message' => "Username or password mismatch");
            return json_encode($data);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $data = array('status' => 1, 'message' => "System Error.PLease Contact System Administrator.");
            return json_encode($data);
        }
    }

    public function setSettings() {


        $config = new ConfigurationController();
        $tvi = $config->getTVISettings();
        $general = $config->getSettings();
        $general_settings = json_decode($general, true);
        $tvi_settings = json_decode($tvi, true);

        $countries = $general_settings['data']['countries'];
        $vehicleTypes = $general_settings['data']['vehicleTypes'];
        $statusCodes = $general_settings['data']['statusCodes'];
        $idTypes = $general_settings['data']['idTypes'];
        $vehicleMakes = $general_settings['data']['vehicleMakes'];
        $vehicleModels = $general_settings['data']['vehicleModels'];
        $genders = $general_settings['data']['genders'];
//tvi
        $tviTypes = $tvi_settings['data']['tviTypes'];
        $offices = $tvi_settings['data']['offices'];
        $regimes = $tvi_settings['data']['regimes'];

        $countrystring = "";
        $vehicletypeString = "";
        $statusString = "";
        $idtypesString = "";
        $vehiclemakesString = "";
        $modelString = "";
        $genderString = "";
        $tviString = "";
        $officeString = "";
        $regimeString = "";

        foreach ($tviTypes as $value) {
            $tviString .= "<option value='" . $value['tviTypeId'] . "'>" . $value['name'] . "</option>";
        }
        foreach ($offices as $value) {
            $officeString .= "<option value='" . $value['officeCode'] . "'>" . $value['name'] . "</option>";
        }
        foreach ($regimes as $value) {
            $regimeString .= "<option value='" . $value['regimeId'] . "'>" . $value['name'] . "</option>";
        }

        foreach ($countries as $value) {
            $countrystring .= "<option value='" . $value['code'] . "'>" . $value['name'] . "</option>";
        }

        foreach ($vehicleTypes as $value) {
            $vehicletypeString .= "<option value='" . $value['typeId'] . "'>" . $value['name'] . "</option>";
        }

        foreach ($statusCodes as $value) {
            $statusString .= "<option value='" . $value['code'] . "'>" . $value['name'] . "</option>";
        }
        foreach ($idTypes as $value) {
            $idtypesString .= "<option value='" . $value['idTypeId'] . "'>" . $value['name'] . "</option>";
        }
        foreach ($vehicleMakes as $value) {
            $vehiclemakesString .= "<option value='" . $value['makeId'] . "'>" . $value['name'] . "</option>";
        }
        foreach ($vehicleModels as $value) {
            $modelString .= "<option value='" . $value['modelId'] . "'>" . $value['name'] . "</option>";
        }
        foreach ($genders as $value) {
            $genderString .= "<option value='" . $value['genderId'] . "'>" . $value['name'] . "</option>";
        }

        session(['countries' => $countrystring]);
        session(['gender' => $genderString]);
        session(['models' => $modelString]);
        session(['vehiclemakes' => $vehiclemakesString]);
        session(['vehicletypes' => $vehicletypeString]);
        session(['idtypes' => $idtypesString]);
        session(['status' => $statusString]);
        session(['tvi' => $tviString]);
        session(['office' => $officeString]);
        session(['regime' => $regimeString]);
    }

}
