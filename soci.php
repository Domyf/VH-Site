<!DOCTYPE HTML>
<html lang="it">
    <head>
        <meta charset="utf-8" />
        <title>Soci</title>
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
                <a href="restituisci.php"><button type="button"class="btn btn-menu ">Restituisci</button></a>
                <a href="soci.php"><button type="button"class="btn btn-menu btn-selected">Soci</button></a>
            </div>
        </div>
        <div id="container">
            <form action="soci.php" method="post">
				<select name="codicefiscale" value="Codice Fiscale">
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
                
                <div id = "data-input">
	                Dal<input type="date" name="start" min="2000-01-01" class="datepicker"></br>
	                Al<input type="date" name="end" min="2020-01-01" class="datepicker">
                </div>
                                
                <input type="submit" value="Cerca" class="btn btn-restituisci">
            </form>
                </div>
                <div>
                <?php
		            include 'connect.php';
		            $result;
		            if (isset($_POST["start"]) && isset($_POST["end"])) {
		                //QUERY 2
		                $socio = $_POST["codicefiscale"];
		                $inizio = $_POST["start"];
		                $fine = $_POST["end"];
		                $sql = "SELECT * FROM Noleggi WHERE socio=$socio 
								AND (SELECT Auto FROM Noleggi WHERE ('$inizio' <= Inizio && '$inizio' >= Fine)";
		                $result = mysqli_query($conn, $sql);
		            } else {
		             	echo 'Nessuna auto nollegiata';
		            }
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
        	</div>
        <div class="footer footer-registra">Realizzato da Dawid Grzelczyk e Domenico Ferraro</div>
    </body>
</html>