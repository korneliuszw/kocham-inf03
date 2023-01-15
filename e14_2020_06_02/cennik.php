<!DOCTYPE html>
<html>
    <head>
        <title>Pokoje</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./styl.css">
    </head>
    <body>
        <header class="baner1"> 
            <h2>WYNAJEM POKOI</h2>
        </header>
        <nav class="flex">
            <nav class="menu1">
                <a href="./index.html">POKOJE</a>
            </nav>
            <nav class="menu2">
                <a href="./cennik.php">CENNIK</a>
            </nav>
            <nav class="menu3">
                <a href="./kalkulator.html">KALKULATOR</a>
            </nav>
        </nav>
        <header class="baner2"></header>
        <div class="flex">

        <section class="left"></section>
        <section class="middle">
            <h1>Cennik</h1>
            <table>
                <?php
                    $conn = new mysqli('localhost', 'root', '', 'wynajem');
                    $result = $conn->query('SELECT * FROM pokoje');
                    while ($row = $result->fetch_row()) {
                        echo '<tr>';
                        foreach ($row as $col)
                            printf('<td>%s</td>', $col);
                        echo '</tr>';
                    }
                    $conn->close();
                ?>
            </table>
        </section>
        <section class="right"></section>
        </div>
        <footer>
            <p>Stronę opracował: XXXXXXXXXXXXX</p>
        </footer>
    </body>
</html>