<?php

// First, include Requests
include('../library/Requests.php');

// Next, make sure Requests can load internal classes
Requests::register_autoloader();

$options = array(
    'proxy' => '10.100.10.100:3128',
);

// Now let's make a request!
$request = Requests::post('http://httpbin.org/post', array(), array('mydata' => 'something'), $options);

// Check what we received
var_dump($request->body);
