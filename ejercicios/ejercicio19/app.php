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
    if(isset($_COOKIE['deseos'])){
      $deseos = unserialize($_COOKIE['deseos']);
    }else{
      $deseos = [];
    }
 
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
    if (isset($_COOKIE['deseos'])){
      $deseos = unserialize($_COOKIE['deseos']);
}else{
  $deseos = [];

}
$deseos[] = $_POST['deseos'];
setcookie('deseos',serialize($deseos),time() + 60*60*2);
    header('Location: index.php?method=home');
  }

  public function delete(){

    setcookie('deseos','',time() - 1);

  header('Location: index.php?method=home');
  }

  public function delete1(){

    setcookie('deseos','',time() - 1);

    header('Location: index.php?method=home');
  }

}
