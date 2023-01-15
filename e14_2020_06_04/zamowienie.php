<?php
    function wstaw() {
        $db = new mysqli('localhost', 'root', '', 'sklep');
        $stmt = $db->prepare('INSERT INTO zamowienia(imie, nazwisko, adres_email) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $_POST['imie'], $_POST['nazwisko'], $_POST['email']);
        $stmt->execute();
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') wstaw();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sklep</title>
    <link rel="stylesheet" href="./styl.css">
</head>
<body>
    <header>
        <h1>Ozdoby - sklep</h1>
    </header>
    <div class="flex">
        <aside class="left">
            <h2>OZDOBY</h2>
            <a href="./galeria.html">Galeria</a>
            <a href="./zamowienie.php">Zamówienie</a>
        </aside>
        <main class="middel">
            <p>Dodaj użytkownika</p>
            <form action='./zamowienie.php' method='POST'>
                <label for="imie">Imię: </label>
                <input type="text" name="imie" id="imie"><br/>
                <label for="nazwisko">Nazwisko: </label>
                <input type="text" name="nazwisko" id="nazwisko"><br/>
                <label for="email">e-mail: </label>
                <input type="email" name="email" id="email"><br/>
                <button type="submit">Wyslij</button>
            </form>
        </main>
        <section class="right">
            <img src="./animacja.gif">
        </section>
    </div>
    <footer>
        <h3>Autor strony: XXXXXXXXXX</h3>
    </footer>
</body>
</html>