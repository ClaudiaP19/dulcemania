<?php // Example 26-4: index.php
use Illuminate\Database\Capsule\Manager as DB;
session_start();
require_once 'header.php';
require 'vendor\autoload.php';
require 'config\database.php';

$productos = DB::table('productos')->get();

  echo "<div class='container center'>Bienvenido";

  if ($loggedin) echo " $user, estas logueado";
  else           echo ' Inicia sesión para comprar';

?>
</div>
<section class="section center">
    <div class="container">
      <h1 class="title">Productos</h1>
        <div class="columns is-mobile">
            <?php
            foreach ($productos as $producto){
                echo "<div class='column'>
                        <figure class='image is-200x200px'>
                          <img src='images/$producto->id_producto.jpg'>
                        </figure>
                        <h2 class='title'>$producto->nombre</h2>
                        <p>$producto->descripcion</p>
                        <button class='button is-info'>$$producto->precio</button>
                        </div>";
            }
            ?>
        </div>

    </div>
  </section>
<?php
  echo <<<_END
  
    <div data-role="footer">
      <h4>Sistema web para venta de mesas de dulces</i></h4>
    </div>
  </body>
</html>
_END;
?>
