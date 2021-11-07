<?php

require_once 'Car.php';
$Voiture = new Car(20, true);

try
{
echo $Voiture -> start();

} catch (Exception $e){

    echo $e;
    $Voiture->setHasParkBrake(false);
    echo $Voiture -> start();
    
}finally {
    echo "<br><br>Ma voiture roule comme un donut 🚗";
}

echo '<br><br>il fait nuit';

$phares = $Voiture -> switchOn();

if ($phares === true){
    echo '<br><br>Les phares sont allumés';
}
echo '<br><hr>';

require_once 'Bicycle.php';
$bike = new Bicycle('blue',1 );

echo $bike -> forward();
$bike->setCurrentSpeed(5); //<-- try some speed yourself !!
echo '<br><br>Le vélo roule à '. $bike -> getCurrentSpeed() . ' km/h';

$lamp = $bike -> switchOn();

if ($lamp === true){
    echo '<br><br>Le phare est allumé';
} else if ($lamp === false){
    echo '<br><br>Accélère si tu veux de la lumière!';
}

echo '<br><hr>';

require_once 'Skateboard.php';
$skate = new Skateboard ('green', 0);

echo $skate-> foot();
echo '<br> Vitesse du skateboard : ' . $skate->getCurrentSpeed() . ' km/h' . '<br>';