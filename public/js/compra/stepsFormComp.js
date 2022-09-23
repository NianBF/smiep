/**
 * Variables de botoness, clases y pasos del formulario
 */
 const form = document.querySelector(".contact-form");
 const slidePage = document.querySelector(".slide-page");
 const page = document.querySelector(".page");
 
 const nextBtnFirst = document.querySelector(".firstNext");
 const prevBtnSec = document.querySelector(".prev-1");
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
 
 const nextStyleProgresBar = function (){
   bullet[current - 1].classList.add("active");
   progressCheck[current - 1].classList.add("active");
   progressText[current - 1].classList.add("active");
   current += 1;
 }
 
 
 nextBtnFirst.addEventListener("click", function(event){
   if((formulario.id_compra.value!=0) && (formulario.cantidadCP.value!=0)&& (formulario.descr.value!=0)){   
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
 
 