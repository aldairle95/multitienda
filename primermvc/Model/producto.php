<?php
class producto
{

//Atributo para conexión a SGBD
private $pdo;
//Atributos del objeto proveedor 
public $codpro;
public $codbapro;
public $nompro;
 public $despro;
 public $prepro;
 public $fecelapro;
 public $fecvenpro;
 public $fotpro;
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
 $stm = $this->pdo->prepare("SELECT * FROM producto");
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
public function Obtener($codpro)
{
 try
 {
 //Sentencia SQL para selección de datos utilizando
 //la cláusula Where para especificar el nit del proveedor.
 $stm = $this->pdo->prepare("SELECT * FROM producto WHERE codpro = ?");
 //Ejecución de la sentencia SQL utilizando el parámetro nit.
 $stm->execute(array($codpro));
 return $stm->fetch(PDO::FETCH_OBJ);
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
//Este método elimina la tupla proveedor dado un nit.
public function Eliminar($codpro)
{
 try
 {
 //Sentencia SQL para eliminar una tupla utilizando
 //la cláusula Where.
 $stm = $this->pdo->prepare("DELETE FROM producto WHERE codpro = ?");
 $stm->execute(array($codpro));
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
 $sql = "UPDATE producto SET
 	codbapro = ? ,
nompro = ? ,
despro = ? ,
prepro = ? ,
fecelapro = ? ,
fecvenpro = ? ,
fotpro = ? 
 	WHERE codpro = ?";
 //Ejecución de la sentencia a partir de un arreglo.
 $this->pdo->prepare($sql)
 ->execute(
 array(
 $data->codbapro,
 $data->nompro,
 $data->despro,
 $data->prepro,
 $data->fecelapro,
 $data->fecvenpro,
 $data->fotpro,
 $data->codpro

 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
//Método que registra un nuevo proveedor a la tabla.
public function Registrar(producto $data)
{
 try
 {
 //Sentencia SQL.
 $sql = "INSERT INTO producto (codpro, codbapro,nompro,despro,prepro,fecelapro, fecvenpro, fotpro)
 VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
 $this->pdo->prepare($sql)
 ->execute(
 	array(
 		$data->codpro,
		 $data->codbapro,
		 $data->nompro,
		 $data->despro,
		 $data->prepro,
		 $data->fecelapro,
		 $data->fecvenpro,
		 $data->fotpro,
		 )
 );
 } catch (Exception $e)
 {
 die($e->getMessage());
 }
}
}
