<!DOCTYPE HTML>
<html lang="it">
    <head>
        <meta charset="utf-8" />
        <title>Restituisci</title>
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="stylesheet" href="restituiscistyle.css" type="text/css">
        <link rel="stylesheet" href="homestyle.css">
    </head>
    <body>
        <div style = "position: relative;" class="car-list-menu" >
            <div class="horizontal-centered">
                <a href="home.php"><button type="button"class="btn btn-menu">Home</button></a>
                <a href="aggiungi.php"><button type="button"class="btn btn-menu">Aggiungi</button></a>
                <a href="restituisci.php"><button type="button"class="btn btn-menu btn-selected">Restituisci</button></a>
                <a href="soci.php"><button type="button"class="btn btn-menu">Soci</button></a>
            </div>
        </div>
        <div id="container">
            <?php 
                include 'connect.php';
                
                if (isset($_POST["CodFis"])) {
                    $cf = $_POST["CodFis"];
                    echo $cf;
                }
            ?>
            <p style="font-size: 24px;">Restituzione eseguita con successo!</p>
        </div>
        <div class="footer footer-registra">Realizzato da Dawid Grzelczyk e Domenico Ferraro</div>
    </body>
</html>