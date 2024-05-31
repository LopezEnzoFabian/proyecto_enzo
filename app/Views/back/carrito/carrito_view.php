<div class="container mt-3 mb-3">
    <div class="carts">
        <div class="heading">
            <h2 style="margin-bottom: 60px; border-color: #023e8a;">Productos en tu Carrito</h2>
        </div>
        <?php
        $session = session();
        $cart = \Config\Services::cart();
        $cartContents = $cart->contents();

        // Verifica si el carrito está vacío
        if (empty($cartContents)) {
            echo '<div class="text" align="center">Para agregar productos al carrito, haz clic en "Comprar"</div>';
        } else {
        ?>
            <div class="table">
                <table class="table table-bordered table-hover table-striped ml-3">
                    <tr>
                        <td><b>ID</b></td>
                        <td><b>Producto</b></td>
                        <td><b>Precio</b></td>
                        <td><b>Cantidad</b></td>
                        <td><b>Total</b></td>
                    </tr>
                    <?php
                    // Crear formulario para actualizar carrito
                    echo form_open('carrito_actualiza');
                    $gran_total = 0;
                    $i = 1;

                    foreach ($cartContents as $item) {
                        echo  form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo  form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo  form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo  form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo  form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $item['name']; ?></td>
                            <td>$ <?php echo number_format($item['price'], 2); ?></td>
                            <td><?php echo $item['qty']; ?></td>
                            <?php
                            $subtotal = $item['price'] * $item['qty'];
                            $gran_total += $subtotal;
                            ?>
                            <td>$ <?php echo number_format($subtotal, 2); ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr class="table-light">
                        <td colspan="4"><b>Total:</b></td>
                        <td>$ <?php echo number_format($gran_total, 2); ?></td>
                    </tr>
                    <tr class="table-light">
                        <td colspan="5" align="right">
                            <!-- Botón para borrar carrito -->
                            <input type="button" class="btn btn-danger btn-sm m-2" value="Borrar Carrito" onclick="window.location = 'borrar'">
                            <!-- Botón para confirmar compra -->
                            <input type="button" class="btn btn-success btn-sm m-2" value="Comprar" onclick="confirmarCompra()">
                        </td>
                    </tr>
                </table>
                <?php echo form_close(); ?>
            </div>
        <?php } ?>
    </div>
</div>