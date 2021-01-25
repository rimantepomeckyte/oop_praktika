<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="view/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid pt-4">
    <?php

    use Vehicles\Car;

    $vehicle1 = new Car('Audi', 'A6', "All wheel (4х4)", 2009);
    $vehicle1->addOtherVehicleData(8000, 1480, "yes",
        240, 5, 'Car made by the German automaker Audi');
    $vehicle2 = new Car('Hyundai', 'i30', "Front wheel drive (FWD)", 2017);
    $vehicle2->addOtherVehicleData(11650, 1320, "yes",
        180, 5, 'Brand new car made by The Hyundai Motor Company');
    $vehicle3 = new Car('BMW', '520', "Rear wheel drive (RWD)", 2011);
    $vehicle3->addOtherVehicleData(8500, 1470, "yes",
        260, 5, 'Great auto');

    ?>
    <h2 class="row d-flex justify-content-center bg-secondary py-2">Cars</h2>
    <table class='table table-bordered table-sm text-center w-75 mx-auto'>
        <thead>
        <tr class='table-primary'>
            <th>Make</th>
            <th>Model</th>
            <th>Driven wheels</th>
            <th>Year</th>
            <th>Price (€)</th>
            <th>Weight (kg)</th>
            <th>Is engine</th>
            <th>Max speed (km/h)</th>
            <th>Seats</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($vehicle1->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($vehicle2->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($vehicle3->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <?php
    use Vehicles\Motorcycle;

    $motorcycle1 = new Motorcycle('Suzuki', 'GSX-R', "Superbikes", 2011);
    $motorcycle1->addOtherVehicleData(12500, 243, "yes",
    210, 1, 'Brand new motorcycle');
    $motorcycle2 = new Motorcycle('Harley-Davidson','FLHX', 'Choppers', 2012);
    $motorcycle2->addOtherVehicleData(10700, 290, "yes", 190, 2,
        "Tons of extras: upgraded rear shocks, diamond black collection floorboards, aquatic av bluetooth radio with upgraded 6.5 speakers");
    ?>

    <h2 class="row d-flex justify-content-center bg-secondary py-2">Motorcycles</h2>
    <table class='table table-bordered table-sm text-center w-75 mx-auto'>
        <thead>
        <tr class='table-success'>
            <th>Make</th>
            <th>Model</th>
            <th>Motorcycle type</th>
            <th>Year</th>
            <th>Price (€)</th>
            <th>Weight (kg)</th>
            <th>Is engine</th>
            <th>Max speed (km/h)</th>
            <th>Seats</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($motorcycle1->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        <tr>
            <?php foreach ($motorcycle2->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>
    <?php
    use Vehicles\Bicycle;

    $bicycle1 = new Bicycle('Forme Curbar', 3, 7);
    $bicycle1->addOtherVehicleData(500, 9, "no",
    25, 1, 'Hydroformed 6061 lightweight nimble Frame. 100mm Travel Suntour XCE suspension fork.'); ?>

    <h2 class="row d-flex justify-content-center bg-secondary py-2">Bicycles</h2>
    <table class='table table-bordered table-sm text-center w-75 mx-auto'>
        <thead>
        <tr class='table-warning'>
            <th>Make</th>
            <th>Model</th>
            <th>Number Of Gears</th>
            <th>Price (€)</th>
            <th>Weight (kg)</th>
            <th>Is engine</th>
            <th>Max speed (km/h)</th>
            <th>Seats</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <?php foreach ($bicycle1->getVehicleData() as $value): ?>
                <td><?= $value; ?></td>
            <?php endforeach; ?>
        </tr>
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>