<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?
    
    require_once "model/Empleado.php";

$empleado1= new empleado("maria", "maria","maria", 3001);
echo $empleado1 -> pagarImpuesto();

$empleado2= new empleado("sara", "sara","sara", 2999);
echo "<br>".$empleado2 -> pagarImpuesto();
    
    
    ?>
</body>
</html>