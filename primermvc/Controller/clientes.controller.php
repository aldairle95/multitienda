<?php
require_once 'model/clientes.php';
class clientesController{
 private $model;
 public function __CONSTRUCT(){
 $this->model = new clientes();
 }
 //Llamado plantilla principal
 public function Index(){
 require_once 'view/header.php';
 require_once 'view/clientes/clientes.php';
 require_once 'view/footer.php';
 }
public function Crud(){
 $clie = new clientes();
 if(isset($_REQUEST['idProducto'])){
 $clie = $this->model->Obtener($_REQUEST['idclientes']);
 }
 require_once 'view/header.php';
 require_once 'view/clientes/clientes-editar.php';
 require_once 'view/footer.php';
  }
public function Nuevo(){
 $clie = new clientes();
 require_once 'view/header.php';
 require_once 'view/clientes/clientes-nuevo.php';
 require_once 'view/footer.php';
 }
public function Guardar(){
 $clie = new clientes();
 $clie->codclie = $_REQUEST['codclie'];
 $clie->tdoclie = $_REQUEST['tdoclie'];
 $clie->cedclie = $_REQUEST['cedclie'];
 $clie->nomclie = $_REQUEST['nomclie'];
 $clie->apeclie = $_REQUEST['apeclie'];
 $clie->dirclie = $_REQUEST['dirclie'];
 $clie->telclie = $_REQUEST['telclie'];
 $clie->emailclie = $_REQUEST['emailclie'];
 $clie->fnaciclie = $_REQUEST['fnaciclie'];
 $clie->genclie = $_REQUEST['genclie'];
 $this->model->Registrar($clie);
 header('Location: index.php?c=clientes');
 }
public function Editar(){
 	$clie = new clientes();
 	$clie->codclie = $_REQUEST['codclie'];
 $clie->tdoclie = $_REQUEST['tdoclie'];
 $clie->cedclie = $_REQUEST['cedclie'];
 $clie->nomclie = $_REQUEST['nomclie'];
 $clie->apeclie = $_REQUEST['apeclie'];
 $clie->dirclie = $_REQUEST['dirclie'];
 $clie->telclie = $_REQUEST['telclie'];
 $clie->emailclie = $_REQUEST['emailclie'];
 $clie->fnaciclie = $_REQUEST['fnaciclie'];
 $clie->genclie = $_REQUEST['genclie'];
 $this->model->Registrar($clie);
 header('Location: index.php?c=clientes');
 }
 
public function Eliminar(){
 $this->model->Eliminar($_REQUEST['codclie']);
 header('Location: index.php');
 }
}//no eliminar esta llave ya que cierra el class. 
