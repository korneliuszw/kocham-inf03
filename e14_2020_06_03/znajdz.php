<!DOCTYPE html>
<html>

<head>
    <title>Kwiaty</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./styl.css">
</head>
<body>
    <header>
        <h1>Moje kwiaty</h1>
    </header>
    <div class="flex">
        <aside>
            <h3>Kwiaty dla Ciebie!</h3>
            <a href="https://www.swiatkwiatow.pl/">Rozpoznaj kwiaty</a>
            <a href="./znajdz.php">Znajdź kwiaciarnię</a>
            <img src="./gozdzik.jpg" alt="Goździk">
        </aside>
        <main>
            <div>
                <img src="./gerbera.jpg" alt="Gerbera">
                <img src="./gozdzik.jpg" alt="Goździk">
                <img src="./roza.jpg" alt="Róża">
            </div>
            <p>Podaj miejscowość, w której poszukujesz kwiaciarni:</p>
            <form method="POST" action="./znajdz.php">
                <input type="text" name="miasto">
                <button type="submit">SPRAWDŹ</button>
            </form>
            <?php
            if (!isset($_POST['miasto'])) return;
            $conn = new mysqli("localhost", "root", "", "kwiaciarnia");
            $query = $conn->prepare("SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = ?");
            $query->bind_param("s", $_POST['miasto']);
            $query->execute();
            $result = $query->get_result();
            while ($row = $result->fetch_assoc()) {
                printf("%s, %s<br>", $row['nazwa'], $row['ulica']);
            }
            $conn->close();
            ?>
        </main>
    </div>
    <footer>
        <h3>Stronę opracował: XXXXXXXXXX</h3>
    </footer>
</body>

</html>