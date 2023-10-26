<?php
class clientes
{

//Atributo para conexión a SGBD
private $pdo;
//Atributos del objeto proveedor 
public $codclie;
public $tdoclie;
public $cedclie;
public $nomclie;
public $apeclie;
public $dirclie;
public $telclie;
public $emailclie;
public $fnaciclie;
public $genclie;
//Método de conexión a SGBD.
public function __CONSTRUCT()
{
 try
 {
 $this->pdo = Database::Conectar();
 }
 catch(Exception $e)
 {
 die($e->getMessage());
 }
}
//Este método selecciona todas las tuplas de la tabla
//proveedor en caso de error se muestra por pantalla
public function Listar()
{
 try
 {
 $result = array();
 //Sentencia SQL para selección de datos.
 $stm = $this->pdo->prepare("SELECT * FROM clientes");
 //Ejecución de la sentencia SQL.
 $stm->execute();
 //fetchAll — Devuelve un array que contiene todas las filas del conjunto
 //de resultados
 return $stm->fetchAll(PDO::FETCH_OBJ);
 }
 catch(Exception $e)
 {
 //Obtener mensaje de error.
 die($e->getMessage());
 }
}

//Este método obtiene los datos del proveedor a partir del nit
//utilizando SQL.
public function Obtener($codclie)
{
 try
 {
 //Sentencia SQL para selección de datos utilizando
 //la cláusula Where para especificar el nit del proveedor.
 $stm = $this->pdo->prepare("SELECT * FROM clientes WHERE codclie = ?");
 //Ejecución de la sentencia SQL utilizando el parámetro nit.
 $stm->execute(array($codclie));
 return $stm->fetch(PDO::FETCH_OBJ);
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
//Este método elimina la tupla proveedor dado un nit.
public function Eliminar($codclie)
{
 try
 {
 //Sentencia SQL para eliminar una tupla utilizando
 //la cláusula Where.
 $stm = $this->pdo->prepare("DELETE FROM clientes WHERE codclie = ?");
 $stm->execute(array($codclie));
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
//Método que actualiza una tupla a partir de la cláusula
//Where y el nit del proveedor.
public function Actualizar($data)
{
 try
 {
 //Sentencia SQL para actualizar los datos.
 $sql = "UPDATE clientes SET
 	tdoclie = ?,
	cedclie = ?,
	nomclie = ?,
	apeclie = ?,
	dirclie = ?,
	telclie = ?,
	emailclie = ?,
	fnaciclie = ?,
 	genclie = ?
 	WHERE codclie = ?";
 //Ejecución de la sentencia a partir de un arreglo.
 $this->pdo->prepare($sql)
 ->execute(
 array(
 $data->tdoclie,
 $data->cedclie,
 $data->nomclie,
 $data->apeclie,
 $data->dirclie,
 $data->telclie,
 $data->emailclie,
 $data->fnaciclie,
 $data->genclie,
 $data->codclie
 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
//Método que registra un nuevo proveedor a la tabla.
public function Registrar(clientes $data)
{
 try
 {
 //Sentencia SQL.
 $sql = "INSERT INTO clientes (codclie,tdoclie,cedclie,nomclie,apeclie,dirclie,telclie,emailclie,fnaciclie, genclie)
 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
 $this->pdo->prepare($sql)
 ->execute(
 	array(
		$data->codclie,
		$data->tdoclie,
 $data->cedclie,
 $data->nomclie,
 $data->apeclie,
 $data->dirclie,
 $data->telclie,
 $data->emailclie,
 $data->fnaciclie,
 $data->genclie,
 
		 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
}
