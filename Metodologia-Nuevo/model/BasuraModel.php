<?php

class BasuraModel
{
  private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }

  function Connect()
  {
    return new PDO('mysql:host=localhost;'
    .'dbname=mapa;charset=utf8'
    , 'root', 'root');
  }

  function GetLugares()
  {
  }

  function GetLugar($id)
  {
  }

  function InsertarLugar($value)
  {
  }

  function BorrarLugar($id_producto)
  {
  }

}


 ?>
