<?php
//Se incluye el modelo donde conectará el controlador.
require_once "model/clientes.php";
class clientesController{
 private $model;
 //Creación del modelo
 public function __CONSTRUCT(){
 $this->model = new clientes();
 }
 //Llamado plantilla principal
 public function Index(){
 require_once 'view/header.php';
 require_once 'view/clientes/clientes.php';
 require_once 'view/footer.php';
 }
 //Llamado a la vista proveedor-editar
 public function Crud( ){
 $pvd = new clientes();
 //Se obtienen los datos del proveedor a editar.
 if(isset($_REQUEST['docclie'])){
 $pvd = $this->model->Obtener($_REQUEST['docclie']);
 }
 //Llamado de las vistas.
 require_once 'view/header.php';
 require_once 'view/clientes/clientes-editar.php';
 require_once 'view/footer.php';
 }
//Llamado a la vista proveedor-nuevo
 public function Nuevo(){
 $pvd = new clientes();
 //Llamado de las vistas.
 require_once 'view/header.php';
 require_once 'view/clientes/clientes-nuevo.php';
 require_once 'view/footer.php';
 }
//Método que registrar al modelo un nuevo proveedor.
 public function Guardar(){
 $pvd = new clientes();
 //Captura de los datos del formulario (vista)
 $pvd->codclie = $_REQUEST['codclie'];
 $pvd->tdoclie = $_REQUEST['tdoclie'];
 $pvd->cedclie = $_REQUEST['cedclie'];
 $pvd->nomclie = $_REQUEST['nomclie'];
 $pvd->apeclie = $_REQUEST['apeclie'];
 $pvd->dirclie = $_REQUEST['dirclie'];
 $pvd->telclie = $_REQUEST['telclie'];
 $pvd->emailclie = $_REQUEST['emailclie'];
 $pvd->fnaciclie = $_REQUEST['fnaciclie'];
 $pvd->genclie = $_REQUEST['genclie'];
 //Registro al modelo proveedor.
 $this->model->Registrar($pvd);
 //header() es usado para enviar encabezados HTTP sin formato.
 //”Location:” No solamente envía el encabezado al navegador, sino que 
 //también devuelve el código de status (302) REDIRECT al 
 //navegador
 header('Location: index.php');
 }
//Método que modifica el modelo de un proveedor.
 public function Editar(){
 $pvd = new proveedor();
 $pvd->nit = $_REQUEST['nit'];
 $pvd->razonS = $_REQUEST['razonS'];
 $pvd->dir = $_REQUEST['dir'];
 $pvd->tel = $_REQUEST['tel'];
 $this->model->Actualizar($pvd);
 header('Location: index.php');
 }
//Método que elimina la tupla proveedor con el NIT dado.
 public function Eliminar(){
 $this->model->Eliminar($_REQUEST['nit']);
 header('Location: index.php');
 }
}//no borrar ya que es la llave que cierra el class.
