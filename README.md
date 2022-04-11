# usedcarsniPaymentListing

Functionality
- running on localhost using XAMPP
- Using a JSON call similar to the examples that is:
----------------------------------------------------------

curl -X POST http://localhost/usedcarsni/index.php \
   -H 'Content-Type: application/json' \
   -d '{"requestId": 13,"customerID": 12345,"vehicleId": 2456,  "carMake": "Ford", "carLastListed": 2018-11-04 ,"carValue": 4000 }'

----------------------------------------------------------
- car price between 1000 and 5000 the listing price is 7.99, over 5000 it is 14.99, and free for less 1000.  ->listingPrice() 
- if last listing is within 30 days, the listing price is reduced by 15% ->listingPriceAdjustmentDateCheck()


Known Issues


Areas for Improvements
- Unit testing
- Implementing lumen