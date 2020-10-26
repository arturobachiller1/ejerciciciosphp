<?php

class app  
{

  public function run()
  {
    if(isset($_GET['method'])){
      $method = $_GET['method'];
    }else{
      $method = 'login';
    }
    $this-> $method();
  }


  public function home(){
    include('views/home.php');
  }

  public function login(){
    include("views/login.php");


  }
  public function auth(){

    $name = $_POST['name'];
    $password = $_POST['password'];
    setcookie('name',$name,time() + 60*60*2);
    setcookie('password',$password, time() + 60*60*2);

    header('Location: index.php?method=home');

  }

  public function new(){
    $deseos = [];
    $deseos[] = $_POST['deseos'];
    //preguntar sobre unserialize y serialize
    $deseos = unserialize($_COOKIE['deseos']);
    setcookie('deseos',serialize($deseos),time() + 60*60*2);

  
    header('Location: index.php?method=home');
  }

}
