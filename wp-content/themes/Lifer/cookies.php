<?php

$cookie = "challenge";
$cookie_value = 1;
$cookie_display_amount = 0;

//setcookie("name", "value", time(), "/", COOKIE_DOMAIN);
if (isset($_GET[$cookie])) {

    if (!isset($_COOKIE[$cookie])) {
        setcookie($cookie, $cookie_value, time() + (86400 * 30), "/", COOKIE_DOMAIN);
        //setcookie($cookie, $cookie_value, time() + (86400 * 30), "/");
        $output =  "1 challenge aangesnomen";
        $cookie_display_amount = 1;
    } else {
        $cookie_value = $_COOKIE[$cookie] + 1;
        setcookie($cookie, $cookie_value, time() + (86400 * 30), "/", COOKIE_DOMAIN);
        $output =  $cookie_value . " challenges aangenomen";
        $cookie_display_amount = $cookie_value;
    }
} else if (isset($_COOKIE[$cookie])) {
    $output =  $_COOKIE[$cookie] . " challenges aangenomen";
    $cookie_display_amount = $_COOKIE[$cookie];
} else {
    $output =  "0 challenges aangenomen";
    $cookie_display_amount = 0;
}
