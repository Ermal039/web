let i = 0, text;


text = "Spitali Amerikan në Shqipëri u themelua në Dhjetor 2006 si" +
 "spitali i parë privat në vend. Filloi aktivitetin e tij në Kardiologji dhe" +
 "  Kardiokirurgji me rekrutimin e një stafi profesionistësh të huaj me experiencë " +
 "në këtë fushë dhe me qëllimin që t'ju shërbyer pacientëve brenda dhe jashtë vendit. "+
  "Brenda një viti reduktoi në 85% fluksin e pacientëve kardiakë që linin Shqipërinë "+
 " për t'u kuruar jashtë. Pas këtij suksesi Spitali Amerikan shpejt zgjeroi aktivitetin "+
 " duke u fokusuar në fillim në kirurgji të përgjithshme, ortopedi, kirurgji e syrit e "+
  " urologji deri sa mberriti në kapacitetin e plotë që gëzon sot."


function typing(){
    if(i<text.length){
        document.getElementById("text").innerHTML += text.charAt(i);
        i++;
        setTimeout(typing, 10); // duration of effect in miliseconds
    }
}
typing();



var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none"; 
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 3000); 
}