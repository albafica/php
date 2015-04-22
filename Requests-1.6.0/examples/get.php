<?php

// First, include Requests
include('../library/Requests.php');

// Next, make sure Requests can load internal classes
Requests::register_autoloader();

$options = array(
    'proxy' => '10.100.10.100:3128',
);

// Now let's make a request!
$request = Requests::get('http://httpbin.org/get', array('Accept' => 'application/json'), $options);

// Check what we received
var_dump($request);
