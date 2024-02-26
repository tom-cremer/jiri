<?php

use App\Http\Controllers\JiriController;

const BASE_PATH = __DIR__.'/..';
require BASE_PATH.'/core/helpers/functions.php';

require base_path('vendor/autoload.php');













$controller = new JiriController();
$controller->index();

