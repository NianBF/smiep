import { alertEstructura } from "../alertEstructura.js";


export const documento = function (event){
  let mensaje = "completa el campo documento, solo ingrese numeros";
  alertEstructura(event,mensaje)
}

export const nombre = function (event){
  let mensaje ="completa el campo primer nombre"
  alertEstructura(event,mensaje)
}

export const apellido = function (event){
  let mensaje = "completa el campo primer apellido"
  alertEstructura(event,mensaje)
}

export const nomUsu = function (event){
  let mensaje ="completa el campo usuario"
  alertEstructura(event, mensaje) 
}

export const email = function (event){
  let mensaje = "Por favor ingrese el correo institucional"
  alertEstructura(event,mensaje)
}

export const direccion = function (event) {
  let mensaje = "completa el campo direccion"
  alertEstructura(event,mensaje)
}

export const fecNac = function(event){
  let mensaje = "completa el campo fecha de nacimiento"
  alertEstructura(event,mensaje)
}

export const passW = function (event){
 let mensaje = "La contraseña debe tener entre 6 a 18 caracteres y debe contener 1 mayuscula, 1 minuscula, 2 numeros, 1 caracter especial"
 alertEstructura(event,mensaje)
}

export const telefono = function(event){
  let mensaje = "completa el campo numero de contacto"
  alertEstructura(event,mensaje)
}