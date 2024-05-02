<?php
$tmp = "";
//controllo stringa su parking 




foreach ($hotels as $hotel) {
    $tmp .= "<tr><td>{$hotel['name']}</td>
    <td>{$hotel['description']}</td>
    <td>{$hotel['vote']}</td>
    <td>{if($hotel[parking]) {
            echo 'Possibilità di parcheggio';
        } else {
            echo 'Non c\'è parcheggio';
        }</td>
    <td>{$hotel['distance_to_center']} km</td>
    </tr>";
}
?>

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