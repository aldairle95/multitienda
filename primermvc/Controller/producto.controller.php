<?php
require_once 'model/producto.php';
class ProductoController{
 private $model;
 public function __CONSTRUCT(){
 $this->model = new producto();
 }
 //Llamado plantilla principal
 public function Index(){
 require_once 'view/header.php';
 require_once 'view/producto/producto.php';
 require_once 'view/footer.php';
 }
public function Crud(){
 $prod = new producto();
 if(isset($_REQUEST['codpro'])){
 $prod = $this->model->Obtener($_REQUEST['codpro']);
 }
 require_once 'view/header.php';
 require_once 'view/producto/producto-editar.php';
 require_once 'view/footer.php';
  }
public function Nuevo(){
 $prod = new producto();
 require_once 'view/header.php';
 require_once 'view/producto/producto-nuevo.php';
 require_once 'view/footer.php';
 }
public function Guardar(){
 $prod = new producto();
 $prod->codpro = $_REQUEST['codpro'];
 $prod->codbapro = $_REQUEST['codbapro'];
 $prod->nompro = $_REQUEST['nompro'];
 $prod->despro = $_REQUEST['despro'];
 $prod->prepro = $_REQUEST['prepro'];
 $prod->fecelapro = $_REQUEST['fecelapro'];
 $prod->fecvenpro = $_REQUEST['fecvenpro'];
 $prod->fotpro = $_REQUEST['fotpro'];
 $this->model->Registrar($prod);
 header('Location: index.php?c=producto');
 }
public function Editar(){
 $prod = new producto();
 $prod->codpro = $_REQUEST['codpro'];
 $prod->codbapro = $_REQUEST['codbapro'];
 $prod->nompro = $_REQUEST['nompro'];
 $prod->despro = $_REQUEST['despro'];
 $prod->prepro = $_REQUEST['prepro'];
 $prod->fecelapro = $_REQUEST['fecelapro'];
 $prod->fecvenpro = $_REQUEST['fecvenpro'];
 $prod->fotpro = $_REQUEST['fotpro'];
$this->model->Actualizar($prod);
 header('Location: index.php?c=producto');
 }
public function Eliminar(){
 $this->model->Eliminar($_REQUEST['codpro']);
 header('Location: index.php');
 }
}//no eliminar esta llave ya que cierra el class. 
