<?php
session_start();
if (isset($_SESSION["userId"])) {
    header("location: index.php");
}

include __DIR__ . "/../Models/user.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    //recupero il valore della mail e della password e le metto in due variabili
    $email = $_POST['email'];
    $psw = $_POST['password'];
    //filtro sull'array degli user per cercare l'utente
    $authenticated = array_filter($users, function ($user) use ($email, $psw) {
        return $user['email'] == $email && $user['password'] == $psw;
    });
    //restituisce i valori dell'utente nel DB
    //var_dump($authenticated);
    //se il valore risultante dall'array è > 0: 
    // prendi l'array $authenticated e dividilo 
    //setta le chiavi di id utente e nome nella sessione
    if (count($authenticated) > 0) {
        $user = array_shift($authenticated);
        $_SESSION['userId'] = $user['id'];
        $_SESSION['name'] = $user['name'];
    }
    // redirect a index.php
    header('location: index.php');
}