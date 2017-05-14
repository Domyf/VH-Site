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
	<div style="background: black; width: 100%;">
	<div class="topnav horizontal-centered" id="homeTopNav">
            <a href="" target="_self" class="menu-selected">Home</a>
            <a href="" target="_self">Aggiungi</a>
            <a href="" target="_self">Restituisci</a>
            <a href="" target="_self">Soci</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="showMenu()">&#9776;</a>
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