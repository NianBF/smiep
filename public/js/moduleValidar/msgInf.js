const msgInf = function () {
const form = document.querySelector(".contact-form");
const btninfo = document.querySelector(".info");
const closeinfo = document.querySelector(".closer");
const info = document.querySelector(".anuncio");

btninfo.addEventListener("click", function(){
  
  info.style.display = "inline-block";
  form.style.display = "none";
});

closeinfo.addEventListener("click", function(){
 
  info.style.display = "none";
  form.style.display = "inline-block";
  //page.style.display = "none";
});  
}

export default msgInf;