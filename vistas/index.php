<?php
require 'layout.php';
require_once '../clases/cliente.php';
require_once '../clases/producto.php';
require_once '../clases/factura.php';

$cliente1 = new Cliente("Juan", "Perez", 75923456, 99283456);

$producto1 = new Producto("Laptop", 1500);
$producto2 = new Producto("Mouse", 20);

$factura1 = new Factura($cliente1);

?>

<body>
    <div class="p-4">
        <h1 class="text-5xl font-bold flex justify-center text-gray-800">¡Bienvenido!</h1>
        <h1 class="text-xl font-semibold  flex justify-center text-gray-700 mb-4">Crea una nueva facturación</h1>
        <hr class="">
        </hr>

        <?php
        /*$factura1->agregarProducto($producto1);
                $factura1->agregarProducto($producto2);
            
                $factura1->mostrarFactura();*/
        ?>


        <div class="flex p-4 justify-center gap-5">
            <div class="bg-white p-8 rounded-lg shadow-lg w-1/2 max-w-xl">
                <form method="POST" action="agregar_cliente.php">
                    <div class="flex items-center gap-1 text-2xl font-bold text-gray-700 mb-5 justify-center">
                        <i class="fa-solid fa-user"></i>
                        <h2 class=" text-center">Agregar Cliente</h2>
                    </div>
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-600 font-semibold mb-2">Nombre del Cliente:</label>
                        <input type="text" id="nombre" name="nombre" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Ingresa el nombre" required>
                    </div>
                    <div class="mb-4">
                        <label for="apellido" class="block text-gray-600 font-semibold mb-2">Apellido del Cliente:</label>
                        <input type="text" id="apellido" name="apellido" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Ingresa el apellido" required>
                    </div>
                    <div class="mb-4">
                        <label for="dni" class="block text-gray-600 font-semibold mb-2">DNI:</label>
                        <input type="text" id="dni" name="dni" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Ingresa el DNI" required>
                    </div>
                    <div class="mb-4">
                        <label for="telefono" class="block text-gray-600 font-semibold mb-2">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="w-full p-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none" placeholder="Ingresa el telefono" required>
                    </div>
                </form>
            </div>

            <div class="bg-white p-8 rounded-lg shadow-lg w-1/2 max-w-xl">
                <div class="flex items-center gap-1 text-2xl font-bold text-gray-700 mb-5 justify-center">
                    <i class="fa-solid fa-burger"></i>
                    <h2 class=" text-center">Agregar Producto</h2>
                </div>
                <table class="bg-white shadow-md rounded-lg max-w-xl w-full mb-4">
                    <thead>
                        <tr class="bg-blue-500 text-white text-left">
                            <th class="rounded-tl-lg py-2 px-4">Producto</th>
                            <th class="py-2 px-4 text-center">Precio (S/)</th>
                            <th class="rounded-tr-lg py-2 px-4 text-center">Llevar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($productos as $producto): ?>
                            <tr class="border-b">
                                <td class="py-2 px-4"><?php echo $producto->getNombre(); ?></td>
                                <td class="py-2 px-4 text-center"><?php echo number_format($producto->getPrecio(), 2); ?></td>
                                <td class="py-2 px-4 flex justify-center">
                                    <input type="checkbox" data-precio="<?php echo $producto->getPrecio(); ?>" onchange="calcularTotal()">
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <strong class="flex justify-center">Total: S/ <span id="total">0.00</span></strong>
            </div>
        </div>

        <div class="flex justify-center mt-5">
            <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-600 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all duration-300">
                Agregar factura
            </button>
        </div>

    </div>

    <script>
        function calcularTotal() {
            let total = 0;
            const checkboxes = document.querySelectorAll('input[type="checkbox"]');
            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    total += parseFloat(checkbox.getAttribute('data-precio'));
                }
            });
            document.getElementById('total').textContent = total.toFixed(2);
        }
    </script>
</body>