<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Strona</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
    <main>
        <header>
           <span id="baner">Przychodnia "Nowe życie"</span>
        </header>
        <nav>
            <ul>
                <li>O przychodni</li>
                <li>Godziny otwarcia</li>
                <li>Pracownicy</li>
            </ul>
        </nav>

        <section>
           <img src="baner1.jpg" alt="">
            <h1>O przychodni</h1>
            <p>Nasza przychodnia działa od 2009 roku. Posiadamy szereg wykształconych specjalistów, którzy pomogą na każdą dolegliwość. Położenie na uboczu sprawia, że nie mamy zbyt dużych kolejek w poczekalni. Przyjdź, a przyjmiemy cię cw ciągu 45 min</p>
        </section>
        <section>
            <h1>Godziny otwarcia</h1>
            <table>
                <tr>
                    <td>Poniedziałek</td>
                    <td>Wtorek</td>
                    <td>Środa</td>
                    <td>Czwartek</td>
                    <td>Piątek</td>
                </tr>
                <tr>
                    <td>9:00-17:00</td>
                    <td>8:00-16:00</td>
                    <td>8:00-16:00</td>
                    <td>8:00-16:00</td>
                    <td>8:00-15:00</td>
                </tr>
            </table>
        </section>
        <section>
            <h1>Pracownicy</h1>
            <?php
                $polaczenie = new mysqli('localhost','root','','przychodnia');
                if ($polaczenie->connect_error){
                    die("nie udało sie" . $polaczenie->connect_error);
                } else {
                echo "połączenie powiodło się";
                }
            ?>
        </section>
        <footer>

        </footer>
    </main>
</body>
</html>
