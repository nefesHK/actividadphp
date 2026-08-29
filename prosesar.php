<?php

// Recibir los nombres de los productos
$producto1 = $_POST['producto1'];
$producto2 = $_POST['producto2'];
$producto3 = $_POST['producto3'];

// Recibir los precios
$precio1 = (float) $_POST['precio1'];
$precio2 = (float) $_POST['precio2'];
$precio3 = (float) $_POST['precio3'];

// Sumar los precios
$suma = $precio1 + $precio2 + $precio3;

// Calcular el descuento del 16%
$descuento = $suma * 0.16;

// Calcular el total a pagar
$total = $suma - $descuento;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>

    <h1>Resumen de compra</h1>

    <h3>Productos:</h3>

    <p>
        <?php echo $producto1; ?> -
        $<?php echo number_format($precio1, 2); ?>
    </p>

    <p>
        <?php echo $producto2; ?> -
        $<?php echo number_format($precio2, 2); ?>
    </p>

    <p>
        <?php echo $producto3; ?> -
        $<?php echo number_format($precio3, 2); ?>
    </p>

    <hr>

    <p>
        <strong>Suma de los precios:</strong>
        $<?php echo number_format($suma, 2); ?>
    </p>

    <p>
        <strong>Descuento (16%):</strong>
        $<?php echo number_format($descuento, 2); ?>
    </p>

    <p>
        <strong>Total a pagar:</strong>
        $<?php echo number_format($total, 2); ?>
    </p>

</body>
</html>
