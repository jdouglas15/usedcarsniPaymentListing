<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UsedcarsNI</title>
</head>
<body>

<div class="container" style="margin-top: 1rem;">
    <h2>Used Cars NI Price Calculator </h2>

    <form action="" method="post">
        <div class="form-row">
            <div class="col-4">
                <input type="text" required="" name="customerID" value="123" class="form-control" placeholder="Customer ID">
            </div>
            <div class="col-4">
                <input type="text" required="" name="carMake" value="Ford" class="form-control" placeholder="Car Make">
            </div>
            <div class="col-4">
                <input type="text" required="" name="carValue" value="1200" class="form-control" placeholder="Car Value">
            </div>
            <br><br>
            <div class="col-4">
                <input type="date" required="" name="carLastListed" value="2" class="form-control" placeholder="Car Last Listed">
            </div>
            <button id="submit" type="submit" class="btn btn-primary">Compute</button>
        </div>
    </form>
    
    <?php if(isset($car) && $car instanceof \App\Car): ?>
        <h2 style="margin-top: 1.2rem;">Used Cars NI Price Checker for: <?= $car->getCarMake() . " | " . $car->getCustomerId() ?></h2>
        <table class="table">
            <tr><th>Car Maker</th> <td> <?= $car->getCarMake() ?></td></tr>
            <tr><th>Customer ID</th> <td><?= $car->getCustomerId() ?></td></tr>
            <tr><th>Car Price</th> <td><?= "£" . $car->getCarValue() ?></td></tr>
            <tr><th>Car Last Listed</th> <td><?= $car->getCarLastListed() ?></td></tr>
            <tr><th>Initial Listing Price:</th> <td><?= "£" . $car->listingPrice() ?></td></tr>
            <tr><th>30 day discount check</th> <td><?= $car->listingPriceDateCheck()?></td></tr>
            <tr><th>Final Listing Price</th> <td>
            <?php 
            if($car->listingPriceAdjustmentDateCheck() != $car->listingPrice()) { 
                echo "15% Discount Applied: £" . $car->listingPriceAdjustmentDateCheck();
            } 
            else {
                echo $car->listingPrice(); 
            } ?>
            </td></tr>
        </table>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>