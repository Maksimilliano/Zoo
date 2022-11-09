<body>
<?php
require_once './vendor/autoload.php';




$cat = new Max\Zoo\Entities\Cat();
$dog = new Max\Zoo\Entities\Dog();
$bear = new Max\Zoo\Entities\Bear();
$bird = new Max\Zoo\Entities\Bird();

$animals = array($cat, $dog, $bear, $bird);
foreach ($animals as $x => $x_animal) {
    echo "<div>";
    echo $x_animal->speak();
    echo $x_animal->move();
    echo "</div>";
}




?>


</body>
