<?php
session_start();
if (!isset($_SESSION["userId"])) {
    session_destroy();
    header("location: login.php");
    die;
}
include (__DIR__ . '/Views/header.php');
include (__DIR__ . '/Models/hotels.php');


// var_dump($hotels);

// var_dump($tmp);
?>

<main>
    <div class="container">
        <div class="spacer"></div>
        <div class="wrapper-table">
            <?php include (__DIR__ . '/Views/table.php'); ?>
        </div>
    </div>
    <div class="spacer"></div>

</main>

<?php include (__DIR__ . '/Views/footer.php'); ?>