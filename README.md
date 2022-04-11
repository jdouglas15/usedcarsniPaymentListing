# usedcarsniPaymentListing

Functionality
- running on localhost using XAMPP
- Using a JSON call similar to the examples that is:
----------------------------------------------------------

curl -X POST http://localhost/usedcarsni/index.php \
   -H 'Content-Type: application/json' \
   -d '{"requestId": 13,"customerID": 12345,"vehicleId": 2456,  "carMake": "Ford", "carLastListed":"11/04/2022" ,"carValue": 4000 }'

----------------------------------------------------------

Example of response

{"Request ID:":13,"Customer ID":12345,"Vehicle ID":2456,"Car Make:":"Ford","Car Last Listed:":"11\/04\/2022","Initial Listing Price:":"7.99","30 day discount check:":"This car has been listed in the last 30 days. Discount applied","Final Listing Price:":"6.79"}%     

-----------------------------------------------------------

- car price between 1000 and 5000 the listing price is 7.99, over 5000 it is 14.99, and free for less 1000.  ->listingPrice() 
- if last listing is within 30 days, the listing price is reduced by 15% ->listingPriceAdjustmentDateCheck()

- Validation on IDs and listing date (needs to be not null and > current date)


Other Info
- I had created a functioning form for posting the car info (form.php), decided not to go with it because it was probably overkill. I left it in so you can see my working

Areas for Improvements
- Unit testing
- Implementing lumen
