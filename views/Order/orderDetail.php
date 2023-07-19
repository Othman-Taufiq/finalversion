<!-- Wrapper -->
<div id="wrapper">
    <br><br><br>
    
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Détails de la commande</h1>
            <!-- Table -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Mode de livraison</th>
                            <th>Adresse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $order->getId() ?></td>
                            <td><?= $order->getProduct() ?></td>
                            <td><?= $order->getQuantity() ?></td>
                            <td><?= $order->getDeliveryMode() ?></td>
                            <td><?= $order->getAddress() ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

