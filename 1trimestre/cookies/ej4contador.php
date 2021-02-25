<?
// Incluir en vuestro servidor un contador que indique al usuario el número de veces que ha accedido al sitio.
  if (!isset($_COOKIE['contador'])) {
    $contador=0;
  }else{
    setcookie("contador", $_COOKIE['contador'], time()-3600);
    $contador=$_COOKIE['contador'] +1;
  }

    setcookie("contador", $contador, time()+3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
  <h1>página web</h1>
  <?
  echo "Has accedido ". $_COOKIE['contador'] ." veces a esta página";
  ?>
        
    </form>
</body>
</html>