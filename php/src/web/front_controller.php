<?php
require_once '../dispatcher.php';
require_once '../routing.php';
require_once '../controllers.php';
require_once '../business.php';
require_once '../../vendor/autoload.php';

const pageImgCount=12;
session_start();

$action_url = $_GET['action'];
dispatch($routing, $action_url);
