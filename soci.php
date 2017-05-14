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
            <form action="" method="post">
				<input type="text" name="c. fiscale" placeholder="c. fiscale">            	
                <input type="text" name="Targa" placeholder="Targa">
                <div id = "data-input">
	                Dal<input type="date" name="start" min="2000-01-01" class="datepicker"></br>
	                Al<input type="date" name="end" min="2020-01-01" class="datepicker">
                </div>
                
                <input type="submit" value="Cerca" class="btn btn-restituisci">
            </form>
        </div>
        <div class="footer footer-registra">Realizzato da Dawid Grzelczyk e Domenico Ferraro</div>
    </body>
</html>