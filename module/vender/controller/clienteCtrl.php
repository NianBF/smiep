<?php
require_once('../model/clienteCrud_mdl.php');
require_once('../model/ClienteMdl.php');
$crud = new CrudCliente();
$Cliente = new Cliente();
$Cliente->setId_cliDoc($_POST['id_cliDoc']);
$Cliente->setNombreCli1($_POST['nombreCli1']);
$Cliente->setNombreCli2($_POST['nombreCli2']);
$Cliente->setApellidoCli1($_POST['apellidoCli1']);
$Cliente->setApellidoCli2($_POST['apellidoCli2']);
$Cliente->setDireccionCli($_POST['direccionCli']);
$Cliente->setTelCli($_POST['telCli']);
$Cliente->setEmailCli($_POST['emailCli']);
if (isset($_POST['insertar'])) { //Si se obtiene 'insertar' del $_POST llama a la función de insertar del CRUD
	$crud->insertar($Cliente);
	header('Location: ../?u=v&action=buy');

}