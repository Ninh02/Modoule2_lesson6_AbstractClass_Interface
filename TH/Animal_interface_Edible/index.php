<?php
include('Animals/Chicken.php');
include('Animals/Tiger.php');

echo('---- Animals<br>');
$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach ($animals as $animal) {
    echo $animal->makeSound() . '<br>';
}