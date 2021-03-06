<!DOCTYPE HTML>
<html lang="it">
    <head>
        <meta charset="utf-8" />
        <title>Noleggia</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="restituiscistyle.css" type="text/css">
        <link rel="stylesheet" href="homestyle.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <div style = "position: relative;" class="car-list-menu" >
            <div class="horizontal-centered">
                <a href="home.php"><button type="button"class="btn btn-menu">Home</button></a>
                <a href="aggiungi.php"><button type="button"class="btn btn-menu">Aggiungi</button></a>
                <a href="restituisci.php"><button type="button"class="btn btn-menu">Restituisci</button></a>
                <a href="soci.php"><button type="button"class="btn btn-menu">Soci</button></a>
            </div>
        </div>
        <div id="container">
            <?php 
                include 'connect.php';
                $targa = $_GET["auto"];
                $codfis = $_POST["codfis"];
                $inizio = $_POST["start"];
                $fine = $_POST["end"];
                //QUERY C
                if (isset($targa) && isset($codfis) && isset($inizio) && isset($fine)) {
                    $sql = "INSERT INTO noleggi (`auto`, `socio`, `inizio`, `fine`, `auto_restituita`, `codice_noleggio`) VALUES ($targa, $codfis, $inizio, $fine, 0, NULL)";
                    $result = mysqli_query($conn, $sql);
                    echo '<p style ="font-size: 24px;">Auto noleggiata!</p>';
                } else {
                    echo '<p style ="font-size: 24px;">Dati immessi errati</p>';
                }
            ?>
        </div>
        <div class="footer footer-registra">Realizzato da Dawid Grzelczyk e Domenico Ferraro</div>
    </body>
</html>