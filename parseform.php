<?php
use App\Car;

require_once __DIR__ . '/vendor/autoload.php';

if(isset($_POST['customerID'])){
    $customerID = (int) $_POST['customerID'];
    $carMake = $_POST['carMake'];
    $carValue = $_POST['carValue'];
    $carLastListed = $_POST['carLastListed'];
    
    $car = new Car($customerID, $carMake, $carValue, $carLastListed);
    // $car->setMarks($php, $java, $nodejs, $ruby, $cplusplus);
}


