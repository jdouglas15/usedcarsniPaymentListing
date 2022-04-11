<?php
use App\Car;


require_once __DIR__ . '/vendor/autoload.php';
$dateNow = date("Y-m-d");

// Get the JSON contents
$json = file_get_contents('php://input');

// decode the json data
$data = json_decode($json);

if(isset($data->customerID)){
    $customerID = is_int($data->customerID) ? $data->customerID : 0; //set to 0 if not int
    $carMake = $data->carMake;
    $carValue = $data->carValue; 
    $carLastListed = empty($data->carLastListed) || $data->carLastListed > $dateNow ? "No Appropriate Date Recieved" : $data->carLastListed; //checks if date recieved is, a) a date b) less than today's date
    $requestId = is_int($data->requestId) ? $data->requestId : 0; //set to 0 if not int
    $vehicleId = is_int($data->vehicleId) ? $data->vehicleId : 0; //set to 0 if not int
    
    $car = new Car($customerID, $requestId, $vehicleId, $carMake, $carValue, $carLastListed);

    header('Content-Type: application/json; charset=utf-8');
    $response = array(
        "Request ID:" => $car->getRequestId(),
        "Customer ID" => $car->getCustomerId(),
        "Vehicle ID" => $car->getVehicleId(),
        "Car Make:" => $car->getCarMake(),
        "Car Last Listed:" => $car->getCarLastListed(),
        "Initial Listing Price:" => $car->listingPrice(),
        "30 day discount check:" => $car->listingPriceDateCheck(),
        "Final Listing Price:" => $car->listingPriceAdjustmentDateCheck()
    );
    echo json_encode($response);
}