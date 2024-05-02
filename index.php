<?php
include (__DIR__ . '/Views/header.php');
include (__DIR__ . '/Models/hotels.php');

// var_dump($hotels);
$tmp = "";
foreach ($hotels as $hotel) {

    $tmp .= "<tr><td>{$hotel['name']}</td>
    <td>{$hotel['description']}</td>
    <td>{$hotel['vote']}</td>
    <td>{$hotel['parking']}</td>
    <td>{$hotel['distance_to_center']} km</td>
    </tr>";
}
// var_dump($tmp);
?>

<main>
    <div class="container">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Valutazione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php echo $tmp ?>
                </tr>


            </tbody>
        </table>
    </div>

</main>

<?php include (__DIR__ . '/Views/footer.php'); ?>