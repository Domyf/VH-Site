<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Index</title>
        
        <link rel="stylesheet" href="indexstyle.css" type="text/css">
        <link rel="stylesheet" href="css/fontello.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body onload="cambia_slide()">
        <div id = "container">
			<div id = "header">VH <i calss = "icon-clock"></i></div>
			
			<div id = "slider"></div>
			
			<div id = "data">
				08/Maggio/2017</br>
				Lunedi</br>
				20:21</br>
				<a href="localhost/VH-Site/home.php" target="_blank">
					<div class="clock">
						<i class=""></i>
					</div>
				</a>
			</div>
			<div style = "clear: both;"></div>
			
			<div id = "button">PULSANTE HOME</div>
			<div style = "clear: both;"></div>
			
			<div id = "footer">
				Realizzato da Dawid Jakub Grzelczyk and Domenico Ferraro &copy; Tutti diritti riservati
			</div>
        </div> 
        
        
        <script>
	        var comodo = -1;
			
			function cambia_slide()
			{
				comodo++;
				if (comodo>2) comodo =0;
				
				var file ="<img src=\"img/slide/slide"+comodo+".jpg\"/>";
				
				document.getElementById("slider").innerHTML = file;
				
				setTimeout("cambia_slide()", 5000)
			}
		</script>
        
    </body>
</html>
