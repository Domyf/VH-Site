<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="homestyle.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="script.js"></script>
        <title>Car Sharing</title>
    </head>
    <body>
        <div class="car-list-menu">
            <div class="horizontal-centered">
            <button type="button"class="btn btn-menu btn-selected">Home</button>
            <button type="button"class="btn btn-menu">Aggiungi</button>
            <button type="button"class="btn btn-menu">Restituisci</button>
            <button type="button"class="btn btn-menu">Soci</button>
            <div style="float:right;">
                <form style="margin-right: 10px; font-size: 18px;">Dal<input type="date" name="start" min="2000-01-02" class="datepicker">
                    Al<input type="date" name="end" min="2000-01-02" class="datepicker">
                    <input type="submit" value="Aggiorna" class="btn btn-aggiorna">
                </form>
            </div>
            </div>
        </div>
        <div class="page-content horizontal-centered">
        <?php
            include 'connect.php';
            //$sql = "SELECT * FROM Auto WHERE Targa IN (SELECT Auto FROM Noleggi WHERE AutoRestituita = 0);";
            $sql = "SELECT * FROM Auto";
            //$sql = 'SELECT * FROM Noleggi WHERE $codfiscale = socio AND ($utenteInizio >= inizio AND $utenteFine <= fine);';
            //$sql = "UPDATE Noleggi SET autoRestituita = 1 WHERE Auto = $targa && Socio = $codiceFiscale";
            //Eseguo la query
            //$result = $conn->query($sql);
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="car-item">'
                    . '<img class="car-img" src="img/auto/'.$row["targa"].'.jpg">'
                    . '<div class="car-descr" style="text-align: center;">'
                    . '<div style="font-size: 12px; margin-top: 10px;">Marca</div>'
                    . '<div>'.$row["marca"].'</div>'
                    . '<div style="font-size: 12px; margin-top: 10px;">Modello</div>'
                    . '<div>'.$row["modello"].'</div>'
                    . '<div style="margin-top: 40px;">€'.$row["costo_giornaliero"].'/giorno.</div>'
                    . '<button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button></div></div>';
                }
            }
        ?>
            <div style="clear:both;"></div>
        </div>
        <div class="footer"><div style="text-align: center;">Realizzato da Dawid e Domenico Ferraro</div></div>
    </body>
</html>
