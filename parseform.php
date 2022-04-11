<?php
use App\Car;


require_once __DIR__ . '/vendor/autoload.php';

// Get the JSON contents
$json = file_get_contents('php://input');

// decode the json data
$data = json_decode($json);

if(isset($data->customerID)){
    $customerID = $data->customerID;
    $carMake = $data->carMake;
    $carValue = $data->carValue;
    $carLastListed = empty($data->carLastListed) ? "No Date Recieved" : $data->carLastListed;
    $requestId = $data->requestId;
    $vehicleId = $data->vehicleId;
    
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