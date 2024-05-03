<?php
$tmp = "";
//controllo stringa su parking 
function checkParcheggio($dato)
{
    if ($dato) {
        $parking = 'Possibilità di parcheggio';
    } else {
        $parking = 'Non c\'è parcheggio';
    }
    return $parking;
}

foreach ($hotels as $hotel) {
    $tmp .= "<tr><td>" . $hotel['name'] . "</td>" .
        "<td>{$hotel['description']}</td>
    <td>{$hotel['vote']}</td>
    <td>" . checkParcheggio($hotel['parking']) . " </td>
    <td>{$hotel['distance_to_center']} km</td>
    </tr>";
}
?>
<table class="table table-sm table-striped m-0">
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