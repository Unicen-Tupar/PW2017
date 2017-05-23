<?php
class ModelTareas
{
  private $db;
  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
            .'dbname=db_tareas;charset=utf8',
            'root', '');
  }

  function GetTareas()
  {
    $consulta = $this->db->prepare("SELECT * FROM tarea");
    $result = $consulta->execute();
    return $consulta->fetchAll();
  }
  function InsertarTarea($nombre, $descripcion)
  {
    $consulta = $this->db->prepare("INSERT INTO tarea (nombre, descripcion) ".
                "VALUES (?,?)");
    $result = $consulta->execute(array($nombre,$descripcion));
    //muestra errores por pantalla
    //var_dump($consulta->errorInfo());
  }
}

 ?>
