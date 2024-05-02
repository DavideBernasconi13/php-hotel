<?php
include (__DIR__ . '/Views/header.php');
include (__DIR__ . '/Models/hotels.php');


// var_dump($hotels);

// var_dump($tmp);
?>

<main>
    <div class="container">
    <?php include (__DIR__ . '/Views/table.php'); ?>
    </div>

</main>

<?php include (__DIR__ . '/Views/footer.php'); ?>