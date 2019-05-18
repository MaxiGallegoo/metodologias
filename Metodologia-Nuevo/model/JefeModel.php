<?php

class JefeModel
{
 private $db;

  function __construct()
  {
    $this->db = $this->Connect();
  }
  function Connect(){
    return new PDO('mysql:host=localhost;'
    .'dbname=mapa;charset=utf8'
    , 'root', 'root');
  }

  function GetUsuarios()
  {
  }

  function GetUsuario($user)
  {
  }

  function InsertarUsuario($usuario, $contraseña)
  {
  }

  function BorrarUsuario($idUsuario)
  {
  }

}


  ?>
