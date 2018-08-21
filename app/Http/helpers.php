<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function checkifuserisauthentcated() {
    if (Session::has('token')) {
        return true;
    } else {
        return false;
    }
}


function checkAdminRole() {
    if (Session::has('role') == "Administrator") {
        return true;
    } else {
        return false;
    }
}

function checkAgentRole() {
    if (Session::has('role') == "Agent") {
        return true;
    } else {
        return false;
    }
}