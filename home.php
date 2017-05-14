<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="homestyle.css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="script.js"></script>
        <title>Car Sharing</title>
    </head>
    <body onload="cambia_slide()">
<!--        <div style="background: rgba(255,255,255,0); width: 100%;">
        <div class="topnav horizontal-centered" id="homeTopNav">
            <a href="" target="_self" class="menu-selected">Home</a>
            <a href="" target="_self">Aggiungi</a>
            <a href="" target="_self">Restituisci</a>
            <a href="" target="_self">Soci</a>
            <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="showMenu()">&#9776;</a>
        </div>
        </div>-->
        
<!--        <div id ="foto_auto" class = "horizontal-centered">
        	<div id = "slider"></div>
                <div id = "desc">
                    <div style="font-size: 28px; margin-top: 20px;">L'auto più costosa</div>
                    <div style="font-size: 16px; margin-top: 40px;">Marca</div>
                    <div style="font-size: 26px;">Renault</div>
                    <div style="font-size: 16px; margin-top: 14px;">Modello</div>
                    <div style="font-size: 26px;">Clio</div>
                    <div style="font-size: 30px; margin-top: 30px;">€25/giorno</div>
                    <button type="button" class="btn btn-noleggia car-slider-btn">Noleggia</button>
                </div>
        </div>-->
        
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
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div class="car-item">
                <img class="car-img" src="img/auto/DF486TY.jpg">
                <div class="car-descr" style="text-align: center;">
                    <div style="font-size: 12px; margin-top: 10px;">Marca</div>
                    <div>Renault</div>
                    <div style="font-size: 12px; margin-top: 10px;">Modello</div>
                    <div>Clio</div>
                    <div style="margin-top: 40px;">€25/giorno</div>
                    <button type="button"class="btn btn-noleggia car-item-btn">Noleggia</button>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div class="footer"><div style="text-align: center;">Realizzato da Dawid e Domenico Ferraro</div></div>
    </body>
</html>
