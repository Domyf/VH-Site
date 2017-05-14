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
                //QUERY C
                //$sql = "INSERT INTO noleggi (`auto`, `socio`, `inizio`, `fine`, `auto_restituita`, `codice_noleggio`) VALUES ($targa, $codfis, $inizio, $fine, 0, NULL)";
                //$result = mysqli_query($conn, $sql);
                echo '<form action="noleggia.php?auto=$targa" method="POST" style="margin-right: 10px; font-size: 18px;">';
            ?>
                Dal<input type="date" name="start" class="datepicker"><br>
                Al<input type="date" name="end" class="datepicker">
                <select name="codfis" value="Codice Fiscale">
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
                <input type="submit" value="Noleggia" class="btn btn-noleggia" style="margin-left: 100px; margin-top: 30px;">
            </form>
        </div>
        <div class="footer footer-registra">Realizzato da Dawid Grzelczyk e Domenico Ferraro</div>
    </body>
</html>