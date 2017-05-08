<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="homestyle.css">
        <title>Home</title>
    </head>
    <body>
        <div class="topnav" id="homeTopNav">
            <a href="#home">Home</a>
            <a href="#news">Elemento 2</a>
            <a href="#contact">Elemento 3</a>
            <a href="#about">Elemento 4</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="showMenu()">&#9776;</a>
        </div>
        <div class="page-content">
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <div class="card">
                <!--<img src="img_avatar.png" alt="Domenico" style="width:100%">-->
                <div class="card-content">
                    <h4><b>Nome Cognome</b></h4> 
                    <p>Titolo Tesina</p> 
                </div>
            </div>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
            <p>Contenuto pagina</p>
        </div>
        <div class="footer"></div>
        <script>
            function showMenu() {
                var x = document.getElementById("homeTopNav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>
    </body>
</html>
