<div class="container d-flex align-items-center align-content-around">
    <div class="user-place">
        <h4><i class="fa fa-user-circle m-3" aria-hidden="true"></i>Benvenuto <?= $_SESSION["name"] ?></h4>
        <a href="logout.php" class="btn btn-danger">Esci</a>
    </div>

    <form id="search" action="index.php" methods="GET">
        <input type="text" placeholder="Inserisci un valore...">
        <select name="filtro">
            <option value="all">Mostra tutti</option>
            <option value="parcheggio">con parcheggio</option>
            <option value="senzaParcheggio">Senza parcheggio</option>
        </select>
        <button type="submit" class="bg-success">Invia</button>
        <button type="reset">reset</button>
    </form>
</div>