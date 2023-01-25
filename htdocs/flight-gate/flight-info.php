<?php

require 'helpers.php';

$user_id = $_GET['user_id'];
$dept_info = departure_info_for($user_id);
$airport_name = airport_name_from($dept_info['airport_code']);
$flight = $dept_info['flight'];
$dest = $dept_info['destination'];

require 'flight-info.view.php';
