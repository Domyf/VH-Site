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
            <form action="" method="post">
                <select name="Targa" placeholder="Targa">
                    <option disabled selected value>Scegli la targa</option>
                <?php
                include 'connect.php';

                $sql = "SELECT targa FROM Auto";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row["targa"].'">'.$row["targa"].'</option>';
                    }
                }
                $conn->close();
                ?>
                </select>
                <select name="CodFis" value="Codice Fiscale">
                    <option disabled selected value>Scegli il codice fiscale</option>
                <?php
                include 'connect.php';

                $sql = "SELECT CF FROM Soci";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<option value="'.$row["CF"].'">'.$row["CF"].'</option>';
                    }
                }
                $conn->close();
                ?>
                </select>
                <input type="submit" value="Restituisci" class="btn btn-restituisci">
            </form>
        </div>
        <div class="footer footer-registra">Realizzato da Dawid Grzelczyk e Domenico Ferraro</div>
    </body>
</html>