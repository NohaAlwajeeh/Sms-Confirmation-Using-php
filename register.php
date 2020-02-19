<?php

class Register
{
  private $full_name;
  private $email;
  private $password;
  private $pdo;
  $dsn="mysql:host=localhost;dbname=verfcation;charset=utf8";
  $user='root';
  $pass="";
  function __construct($data)
  {

    $options=array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC );
    $dbobject=new PDO($dsn,$user,$pass,$options);
    $dbobject->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    // code...
  }
}


 ?>
