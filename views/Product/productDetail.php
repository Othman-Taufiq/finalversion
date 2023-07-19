
<!-- Wrapper -->
<div id="wrapper">
    <br><br><br>
    
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Détails du produit</h1>
            <!-- Table -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nom du Produit</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $product->getId() ?></td>
                            <td><?= $product->getNomProduit() ?></td>
                            <td><?= $product->getDescription() ?></td>
                            <td><?= $product->getPrixVente() ?></td>
                            <td><img src="<?= URL_SITE; ?><?= $product->getImagePath() ?>" alt="Image du produit"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
