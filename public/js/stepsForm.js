/**
 * Variables de botoness, clases y pasos del formulario
 */
const form = document.querySelector("form");
const slidePage = document.querySelector(".slide-page");
const page = document.querySelector(".page");
const page1 = document.querySelector(".page1");
const infTi = document.querySelector(".infTi");


const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");

const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
//Anuncio
const btninfo = document.querySelector(".info");
const closeinfo = document.querySelector(".closer");
const info = document.querySelector(".anuncio");

btninfo.addEventListener("click", function(event){
  event.preventDefault();
  info.style.display = "inline-block";
  form.style.display = "none";
});

closeinfo.addEventListener("click", function(event){
  event.preventDefault();
  info.style.display = "none";
  form.style.display = "inline-block";
  //page.style.display = "none";
});

/**
 * Avanzar página formulario por pasos
*/

let nextStyleProgresBar = function (){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
}


nextBtnFirst.addEventListener("click", function(event){
  if(formulario.id_doc.value>0){   
    event.preventDefault();nextStyleProgresBar()
  }
});
nextBtnSec.addEventListener("click", function(event){
  if (formulario.nombre1.value>0 && formulario.apellido1.value>0) {
    event.preventDefault();nextStyleProgresBar()
    
  }
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();nextStyleProgresBar()
});

/**
 * boton para enviar
*/
/* submitBtn.addEventListener("click", function(){
  nextPage()
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
}); */


/**
 * retroceder página formulario por pasos
*/

let backStyleProgresBar = function(){
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
}
prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.display = "block";
  page.style.display = "none";
  backStyleProgresBar()
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  page.style.display = "block";
  page1.style.display = "none";
  backStyleProgresBar()

});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  page1.style.display = "block";
  infTi.style.display = "none";
  backStyleProgresBar()

});
