<?php

// Recibir los nombres de los productos
$producto1 = $_POST['producto1'];
$producto2 = $_POST['producto2'];
$producto3 = $_POST['producto3'];

// Recibir los precios
$precio1 = floatval($_POST['precio1']);
$precio2 = floatval($_POST['precio2']);
$precio3 = floatval($_POST['precio3']);

// Realizar la suma de los tres precios
$subtotal = $precio1 + $precio2 + $precio3;

// Aplicar descuento del 0.16 (16%)
$descuento = $subtotal * 0.16;

// Calcular total a pagar
$total = $subtotal - $descuento;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la compra</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 20px;
        }

        .resultado {
            width: 100%;
            max-width: 600px;
            background: white;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
        }

        .encabezado {
            text-align: center;
            margin-bottom: 30px;
        }

        .icono {
            font-size: 55px;
        }

        h1 {
            color: #333;
            margin-top: 10px;
            margin-bottom: 8px;
        }

        .mensaje {
            color: #777;
        }

        .lista {
            margin: 25px 0;
        }

        .item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px;
            margin-bottom: 10px;
            background: #f8f9ff;
            border-radius: 12px;
            border-left: 5px solid #667eea;
        }

        .nombre {
            color: #333;
            font-weight: 600;
        }

        .precio {
            color: #555;
            font-weight: bold;
        }

        .resumen {
            border-top: 2px solid #eee;
            padding-top: 20px;
        }

        .fila {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            color: #555;
        }

        .descuento {
            color: #38a169;
            font-weight: bold;
        }

        .total {
            margin-top: 15px;
            padding: 20px;
            border-radius: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .total span:first-child {
            font-size: 18px;
            font-weight: bold;
        }

        .total span:last-child {
            font-size: 25px;
            font-weight: bold;
        }

        .boton {
            display: block;
            text-align: center;
            text-decoration: none;
            margin-top: 25px;
            padding: 14px;
            border-radius: 12px;
            background: #edf2f7;
            color: #4a5568;
            font-weight: bold;
            transition: 0.3s;
        }

        .boton:hover {
            background: #e2e8f0;
        }
    </style>
</head>

<body>

    <div class="resultado">

        <div class="encabezado">
            <div class="icono">🎉</div>
            <h1>Resumen de compra</h1>
            <p class="mensaje">¡Tu compra ha sido calculada correctamente!</p>
        </div>

        <div class="lista">

            <div class="item">
                <span class="nombre">
                    <?php echo htmlspecialchars($producto1); ?>
                </span>

                <span class="precio">
                    $<?php echo number_format($precio1, 2); ?>
                </span>
            </div>

            <div class="item">
                <span class="nombre">
                    <?php echo htmlspecialchars($producto2); ?>
                </span>

                <span class="precio">
                    $<?php echo number_format($precio2, 2); ?>
                </span>
            </div>

            <div class="item">
                <span class="nombre">
                    <?php echo htmlspecialchars($producto3); ?>
                </span>

                <span class="precio">
                    $<?php echo number_format($precio3, 2); ?>
                </span>
            </div>

        </div>

        <div class="resumen">

            <div class="fila">
                <span>Subtotal:</span>
                <strong>
                    $<?php echo number_format($subtotal, 2); ?>
                </strong>
            </div>

            <div class="fila descuento">
                <span>Descuento (16%):</span>
                <strong>
                    -$<?php echo number_format($descuento, 2); ?>
                </strong>
            </div>

            <div class="total">
                <span>Total a pagar</span>

                <span>
                    $<?php echo number_format($total, 2); ?>
                </span>
            </div>

        </div>

        <a href="index.html" class="boton">
            ← Volver a ingresar productos
        </a>

    </div>

</body>
</html>
