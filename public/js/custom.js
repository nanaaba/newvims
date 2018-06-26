/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function () {

    var url = window.location.hostname + '/VIMS';

    getSettings();
    function getSettings() {


        $.ajax({
            url: "../settings/all",
            type: "GET",
            dataType: 'json',
            success: function (response) {
                //var data = response.data;
                var countries = response.countries;
                var idtypes = response.idtypes;
                var vehicleModels = response.models;
                var vehicleTypes = response.vehicletypes;
                var vehicleMakes = response.vehiclemakes;
                var statusCodes = response.status;
                var gender = response.gender;
                var tvi = response.tvi;
                var office = response.office;
                var regime = response.regime;

                $('.countries').append(countries);
                $('.vehicletypes').append(vehicleTypes);
                $('.models').append(vehicleModels);
                $('.vehiclemakes').append(vehicleMakes);
                $('.statuscodes').append(statusCodes);
                $('.gender').append(gender);
                $('.idtypes').append(idtypes);
                $('.regimes').append(tvi);
                $('.offices').append(office);
                $('.tviTypes').append(regime);

            }

        });
    }


});