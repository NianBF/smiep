/**
 * Variables de botoness, clases y pasos del formulario
 */
const form = document.querySelector(".contact-form");
const slidePage = document.querySelector(".slide-page");
const page = document.querySelector(".page");
const page1 = document.querySelector(".page1");
const infTi = document.querySelector(".infTi");

const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const submitBtn = document.querySelector(".submit");

const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;

/**
 * Avanzar página formulario por pasos
*/

const nextStyleProgresBar = function (){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
}


nextBtnFirst.addEventListener("click", function(event){
  if(formulario.doc.value !=0){   
    event.preventDefault();nextStyleProgresBar()
  }
});
nextBtnSec.addEventListener("click", function(event){
  if ((formulario.nombreCli1.value !=0) && (formulario.apellidoCli1.value !=0)) {
    
    event.preventDefault();nextStyleProgresBar()
  }
});
const backStyleProgresBar = function(){
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

