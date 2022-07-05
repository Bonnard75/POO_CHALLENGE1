
<?php

    require_once 'Bicycle.php';
    require_once 'Car.php';

    $car1 = new Car('purple', 2, 'diesel');
    $car2 = new Car('white', 4, 'essence');
    $bicycle1 = new Bicycle('blue');
    $bicycle2 = new Bicycle('orange');

    echo $car1->start();
    echo '<br>';
    echo $car1->forward();
    echo '<br>';
    echo $car1->getCurrentSpeed();
    echo '<br>';
    echo $car1->brake();
    echo '<br> speed car : ' . $car1->getCurrentSpeed() . 'km/h' . '<br>';
    echo '<br>';
    echo $car2->start();
    echo '<br>';
    echo $car2->forward();
    echo '<br>';
    echo $car2->brake();
    echo '<br> speed car : ' . $car2->getCurrentSpeed() . 'km/h' . '<br>';
    echo '<br>';
    echo $bicycle1->getColor();
    echo '<br>';
    echo $bicycle1->forward();
    echo '<br>';
    echo $bicycle1->getCurrentSpeed();
    echo '<br>';
    echo $bicycle1->brake();
    echo '<br>';
    echo $bicycle2->getColor();
    echo '<br>';
    echo $bicycle2->forward();
    echo '<br>';
    echo $bicycle2->getCurrentSpeed();
    echo '<br>';
    echo $bicycle2->brake();