<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio T3-20</title>
</head>

<body>
  <p><a href="../../index.php">Inicio</a></p>
  <h1>Ejercicio T3-20</h1>
  <p>Igual que el ejercicio anterior pero esta vez se debe pintar una pirámide hueca.</p>
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label>Altura
      <input type="number" name="h" required><br />
    </label>
    <label>
      <input type="radio" name="ico" value="img/icon1.png" required /><img src="img/icon1.png" alt="ico" width="24"
        height="24">
      <input type="radio" name="ico" value="img/icon2.png" /><img src="img/icon2.png" alt="ico" width="24" height="24">
      <input type="radio" name="ico" value="img/icon3.png" /><img src="img/icon3.png" alt="ico" width="24" height="24">
      <input type="radio" name="ico" value="img/icon4.png" /><img src="img/icon4.png" alt="ico" width="24" height="24">
      <input type="radio" name="ico" value="img/icon5.png" /><img src="img/icon5.png" alt="ico" width="24" height="24">
    </label><br />
    <input type="submit" name="Enviar" value="Enviar">
  </form>
  <?php if(isset($_POST['Enviar'])):
    $icono = $_POST['ico'];
    for ($i = 0; $i<$_POST['h']; $i++) {
        // espacios
        for ($j = $_POST['h'] - $i; $j>1 ; $j--) {            
            echo "<img src='img/icon0.png' alt='ico' width='32' height='32'>";
        }
        // primer icono
        if($i!=0) {
          echo "<img src='", $icono ,"' alt='ico' width='32' height='32'>";
        }
        if($i!=$_POST['h']-1):
        // espacios centrales
          for($j = 1; $j<$i*2; $j++):
            echo "<img src='img/icon0.png' alt='ico' width='32' height='32'>";
          endfor;
        else:         
          for($j=1;$j<$_POST['h']*2-2;$j++):
            echo "<img src='", $icono ,"' alt='ico' width='32' height='32'>";
          endfor;
        endif;
        // ultimo icono        
        echo "<img src='", $icono ,"' alt='ico' width='32' height='32'>";        
        echo "<br/>";
    }    
    endif;?>
</body>

</html>