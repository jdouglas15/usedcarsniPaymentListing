<?php
namespace App;

/**
 * All of this information is entirely private to this class.
 * Clients can only access the information by using the various methods defined in this class
 */
class Car
{
    
    /**
     * The ID of the customer
     * @var int $customerID
     */
    private $customerID, $requestId;
    private $carMake, $carValue, $carLastListed;
    
    /**Create a new Car object 
     * @param $customerID, the id number of this student as int
     * @param $carMake, the name of this student as a string
     * @param $carValue, the value of the car
     * @param $carLastListed, last time the car was listed
     */
    public function __construct(int $customerID, int $requestId, string $carMake, float $carValue, string $carLastListed)
    {
        $this->customerID = $customerID;
        $this->requestId = $requestId;
        $this->carMake = $carMake;
        $this->carValue = $carValue;
        $this->carLastListed = $carLastListed;

    }
    
    /**
     * get the id of the customer
     * @return int
     */
    public function getCustomerId(): int
    {
        return $this->customerID;
    }

    /**
     * get the id of the api request
     * @return int
     */
    public function getRequestId(): int
    {
        return $this->requestId;
    }

    /**
     * get the car maker name
     * @return string
     */
    public function getCarMake(): string
    {
        return $this->carMake;
    }

    /**
     * get the value of the car
     * @return float
     */
    public function getCarValue(): float
    {
        return $this->carValue;
    }

    
    /**
     * get the value of the car
     * @return string
     */
    public function getCarLastListed(): string
    {
        return $this->carLastListed;
    }
    
    /**
     * set and return listing price
     * @return float
     */
    public function listingPrice(): float
    {
        if ($this->getCarValue() < 1000) {
            return $this->listingPrice = "0";
        }
        if ($this->getCarValue() > 1000 && $this->getCarValue() < 5000) {
            return $this->listingPrice = "7.99";
        }
        if ($this->getCarValue() >= 5000) {
            return $this->listingPrice = "14.99";
        }
        else {
            return $this->listingPrice = "0";
        }
    }
    
    /**
     * set and return listing alert if listing is < 30 days old or less
     * @return string
     */
    public function listingPriceDateCheck(): string
    {
        
        if (strtotime($this->getCarLastListed()) > strtotime('-30 days')) {
            return $this->listingPriceCheck = "This car has been listed in the last 30 days. Discount applied";
        } else {
            return $this->listingPriceCheck = "No previous listing in the last 30 days found for this car";
        }
    }

    /**
     * set and return listing price if listing is < 30 days old
     * @return float
     */
    public function listingPriceAdjustmentDateCheck(): float
    {
        if (strtotime($this->getCarLastListed()) > strtotime('-30 days')) {
            $this->priceAdjustment = $this->listingPrice - ($this->listingPrice * 0.15);
            return round($this->priceAdjustment, 2);
        } else {
            return $this->listingPrice();
        }
    }

}