<?php

include __DIR__ . "/Controllers/auth.php";
include __DIR__ . "/Views/header.php";


?>
<main class="container">
    <?php
    if (!empty($_GET['error'])) {
        echo "<div class='alert alert-danger'>Email o password errati</div>";
    }
    ?>
    <div class="login  d-flex justify-content-center align-items-center mt-4">
        <form action="login.php" method="post">

            <h2>Accedi</h2>

            <div class="input">
                <input type="email" name="email" placeholder="Inserisci la tua mail">
                <label for="email">Email</label>
                <span></span>
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="Inserisci la password">
                <label for="email">Password</label>
                <span></span>
            </div>

            <div class="link">
                <a href="#">Password dimenticata?</a>
                <a href="#">Registrati</a>
            </div>

            <input type="submit" value="Accedi">

        </form>
    </div>

</main>

<?php
include __DIR__ . "/Views/footer.php";
?>