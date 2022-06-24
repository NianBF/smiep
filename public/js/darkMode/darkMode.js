function createCookie(name, value, timeInSeconds) {
  let date = new Date();
  date.setTime(date.getTime() + timeInSeconds * 1000);
  let expires = "; expires=" + date.toGMTString();

  document.cookie = name + "=" + value + expires + "; path=/";
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) == " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function cambiarModo() {
  const cuerpoweb = document.body;
  const linksito = document.getElementById("mod");
  const isDarkModeOn = cuerpoweb.classList.toggle("oscuro");
  linksito.classList.toggle("modi");
  createCookie("isDarkModeOn", isDarkModeOn.toString(), 60 * 60 * 24); // 1 day expiry date
}

window.onload = function () {
  const isDarkModeOn = getCookie("isDarkModeOn");
  if (isDarkModeOn === "true") {
    const cuerpoweb = document.body;
    const linksito = document.getElementById("mod");
    cuerpoweb.classList.toggle("oscuro");
    linksito.classList.toggle("modi");
  }
};
