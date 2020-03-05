function teste() {
    tempo = 2
    var parallax = document.getElementById("intro")
    if (tempo == 1){
        parallax.style.background = "URL('midia/back.jpg')"
    } 
    else if(tempo == 2){
        parallax.style.background = "URL('midia/montanha.jpg')"
    }
}
teste()