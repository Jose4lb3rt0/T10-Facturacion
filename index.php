<?php
    require 'layout.php';
    require_once 'clases/cliente.php';
    require_once 'clases/producto.php';
    require_once 'clases/factura.php';

    $cliente1 = new Cliente("Juan", "Perez", 12345678, 30, "juan@gmail.com", 99283456);

    $producto1 = new Producto("Laptop", 1500);
    $producto2 = new Producto("Mouse", 20);

    $factura1 = new Factura($cliente1);

?>
    <body>
        <div class="p-4">
            <h1 class="text-5xl font-bold flex justify-center text-gray-800">¡Bienvenido!</h1>
            <h1 class="text-xl font-semibold  flex justify-center text-gray-700 mb-4">Crea una nueva facturación</h1>
            <hr class=""></hr>
            <?php 
                /*$factura1->agregarProducto($producto1);
                $factura1->agregarProducto($producto2);
            
                $factura1->mostrarFactura();*/
            ?>
        </div>
    </body>
