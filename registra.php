<!DOCTYPE HTML>
<html lang="it">
<head>
	<meta charset="utf-8" />
	<title>Registra</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
    <link rel="stylesheet" href="registrastyle.css" type="text/css">
    <link rel="stylesheet" href="homestyle.css">
    
</head>
<body>
	<div class="car-list-menu">
            <div class="horizontal-centered">
            <button type="button"class="btn btn-menu btn-selected">Home</button>
            <button type="button"class="btn btn-menu">Aggiungi</button>
            <button type="button"class="btn btn-menu">Restituisci</button>
            <button type="button"class="btn btn-menu">Soci</button>
            <div style="float:right;">
            </div>
            </div>
        </div>
		<div id="contianer">
			<form action="" method="post">
					
					<input type="text" name= "marca" placeholder="marca" 
					onfocus="this.placeholder=''"  onblur="this.placeholder='marca'">
					
					<input type="text" name= "modello" placeholder="modello" 
					onfocus="this.placeholder=''"  onblur="this.placeholder='modello'">
					
					<input type="text" name= "targa" placeholder="targa" 
					onfocus="this.placeholder=''"  onblur="this.placeholder='targa'">
					
					<input type="text" name= "costo" placeholder="costo/giorno" 
					onfocus="this.placeholder=''"  onblur="this.placeholder='costo/giorno'">
								
					<input type="submit" value="Registra" class ="btn btn-registra">
			</form>
		</div>
		<div class="footer footer-registra"></div>
</body>
</html>