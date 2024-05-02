<?php
include (__DIR__ . '/Views/header.php');



function printHotel()
{
    include (__DIR__ . '/Models/hotels.php');
    // var_dump($hotels);
    foreach ($hotels as $hotel) {
        $tmp = "<div>" . "nome: " . $hotel['name'] . " descrizione: " . $hotel['description'] . " parcheggio: " . $hotel['parking'] . " valutazione: " . $hotel['vote'] . " distanza dal centro: " . $hotel['distance_to_center'] . "</div>";
        echo $tmp;
    }
}
printHotel();
?>

<main>
    qui ci va la tabella degli hotel
</main>

<?php include (__DIR__ . '/Views/footer.php'); ?>