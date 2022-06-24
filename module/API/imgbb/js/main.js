const inpFile = document.querySelector("#formFile");
const preview = document.querySelector(".img-preview");
const form = document.getElementById("formMain");
const btnSend = document.querySelector("#btnSend");
const imgContent = document.querySelector("img-content");
let saveData = [];

inpFile.addEventListener("change", function () {
  const file = this.files[0];
  const fileType = this.files[0].type;
  const image = new Image(100, 100);

  if (file) {
    if (fileType == "image/jpeg" || fileType == "image/png") {
      const reader = new FileReader();
      reader.onload = () => {
        const result = reader.result;
        image.src = result;
        image.className = "img-thumbnail";
        preview.innerHTML = "";
        preview.append(image);
      };
      reader.readAsDataURL(file);
    }
  }
});

let showmessage = (status, message) => {
  btnSend.disabled = false;
  if (status == "error") {
    Notiflix.Notify.Failure(message);
  } else if (status == "success") {
    Notiflix.Notify.Success(message);
  }
};

btnSend.onclick = (e) => {
  e.preventDefault();
  btnSend.desabled = true;
  const data = new FormData(form);
  let date = new Date();
  let time = new String(date.getTime());
  let name = time + Math.floor(Math.random() * 10);
  preview.innetHTML = '<i class="fas fa-circle-notch fa-2x fa-spin"></i>';
  if (data.get("imgName") == "") {
    data.set("imgName", "img" + name);
  }

  sendData(data);
};

const sendData = async (data) => {
  return await fetch("controller/uplPic.php", {
    method: "POST",
    body: data,
  })
    .then((response) => {
      if (response.ok) {
        return response.json();
      } else {
        throw "Error inesperado";
      }
    })
    .then((response) => {
      if (response.error) {
        showmessage("error", response.error);
      } else {
        console.log(response);
      }
    })
    .catch((error) => console.log(error));
};
//https://www.youtube.com/watch?v=DwXoldeS0Yo
