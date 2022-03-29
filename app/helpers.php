<?php

if (! function_exists('date_formatted')) {
    function date_formatted($date){
        return date('d/m/Y', strtotime($date));
    }
}
if (! function_exists('money')) {
    function money($numeric){
        return number_format($numeric, 2, ',', '.');
    }
}
if (!function_exists('time_counter')){
    function time_counter() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float) $usec + (float)$sec);
    }
}