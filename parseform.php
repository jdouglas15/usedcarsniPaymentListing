<?php
use App\Car;

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['customerID'])){
    $customerID = (int) $_POST['customerID'];
    $carMake = $_POST['carMake'];
    $carValue = $_POST['carValue'];
    $carLastListed = $_POST['carLastListed'];
    $requestId = "0";
    
    $car = new Car($customerID, $requestId ,$carMake, $carValue, $carLastListed);
}


