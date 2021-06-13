<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styl6.css">
        <title>Odloty samolotów</title>
    </head>
    <body>
        <section id="baner1">
            <h2>Odloty z lotniska</h2>
        </section>
        <section id="baner2">
            <img src="zad6.png" alt="logotyp">
        </section>
        <section id="glowny">
            <h4>tabela odlotów</h4>
            <table>
                <tr>
                    <th>lp.</th>
                    <th>numer rejsu</th>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>status</th>
                </tr>
                <?php
                    $db = mysqli_connect("localhost", "root", "", "egzamin");
                    $res = mysqli_query($db, "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC");
                    while ($row=mysqli_fetch_row($res)){
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                ?>
            </table>
        </section>
        <section id="stopka1">
            <!-- Tu powinien znaleźć się pierwszy screen tj. kw1.jpg -->
            <a href="zad6.png" target="_blank">Pobierz obraz</a>
        </section>
        <section id="stopka2">
            <?php
                if (isset($_COOKIE["visit"])){
                    echo "<p><b>Miło nam, że nas znowu odwiedziłeś</b></p>";
                } else{
                    setcookie($name="visit", $expires=3600);
                    echo "<p><i>Dzień dobry! Sprawdź regulamin naszej strony</i></p>";
                }
            ?>
        </section>
        <section id="stopka3">
            Autor: PESEL
        </section>
    </body>
</html>