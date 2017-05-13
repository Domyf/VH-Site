<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="homestyle.css">
        <title>Home</title>
    </head>
    <body>
        <div style="background: black; position: fixed; width: 100%;">
        <div class="topnav horizontal-centered" id="homeTopNav">
            <a href="#home">Home</a>
            <a href="#news">Elemento 2</a>
            <a href="#contact">Elemento 3</a>
            <a href="#about">Elemento 4</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="showMenu()">&#9776;</a>
        </div>
        </div>
        <div class="page-content horizontal-centered">
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
