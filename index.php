<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Auth;
use App\classes\Product;
use App\classes\Student;

$home = new Home();
$home->index();