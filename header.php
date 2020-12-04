<?php // Example 26-2: header.php
  session_start();

echo <<<_INIT
<!DOCTYPE html> 
<html>
  <head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'> 
    <link rel='stylesheet' href='node_modules/bulma/css/bulma.min.css'>

_INIT;

  require_once 'functions.php';

  $userstr = 'Bienvenido a DULCE-MANIA';

  if (isset($_SESSION['user']))
  {
    $user     = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr  = "Logueado como: $user";
  }
  else $loggedin = FALSE;

echo <<<_MAIN
    <title>DULCE-MANIA: $userstr</title>
  </head>
  <body>
  <section class="section center">
    <div class="container">
      <h1 class="title">
        DULCE MANIA
      </h1>
      <p class="subtitle is-warning" >
        La Mesa De Dulces Que Siempre Soñaste
      </p>
   


_MAIN;

  if ($loggedin)
  {
echo <<<_LOGGEDIN
        <div class="section buttons center">
          <button class="button is-info">Princial</button>
          <button class="button is-success">Mi Carrito</button>
          <button class="button is-warning">Cerrar sesion</button>
        </div>
         </div>
  </section>
_LOGGEDIN;
  }
  else
  {
echo <<<_GUEST
        <div class="section buttons center">
          <button class="button is-info">Princial</button>
          <a href="login.html" class="button is-danger">Inicia sesión</a>
        </div>
          </div>
  </section>  
        
_GUEST;
  }
?>
