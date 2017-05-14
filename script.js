function showMenu() {
    var x = document.getElementById("homeTopNav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

var comodo = -1;
function cambia_slide() {
    comodo++;
    if (comodo>2) comodo =0;
    var file ="<img src=\"img/slide/slide"+comodo+".jpg\"/>";
    document.getElementById("slider").innerHTML = file;
    setTimeout("cambia_slide()", 5000);
}

var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1;} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}