<?php


class conexion
{


  public $Server = "";
  public $DbName = "";
  public $User = "";
  public $Pswd = "";

  public function __construct()
  {
    $this->Server = "localhost";
    $this->DbName = "usuarios";
    $this->User = "root";
    $this->Pswd = "";
  }

  function ConnSuccesfull()
  {
    $conn = mysqli_connect($this->Server, $this->User, $this->Pswd, $this->DbName);
    if ($conn) return $conn;
  }
}


// $Conn = new conexion();
// $Conn->SetConnection();
