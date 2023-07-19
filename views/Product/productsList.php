<section class="p-f-nav pd">
        <div class="pd">
            <h1 class="bigHeading t-justify">Produits</h1>
            <div class="product-wrapper">
                <div class="product">
                    <div class="product-img-wrapper">
                        <img src="<?= URL_SITE; ?>assets/images/acai.png" alt="">
                    </div>
                    <h2 class="product-title">ACAI BERRY</h2>
                    <p class="product-prix">Prix: 30€</p>
                    <a class="product-btn" href="#">Voir Produit</a>
                </div>
                <div class="product">
                    <div class="product-img-wrapper">
                        <img src="<?= URL_SITE; ?>assets/images/acai.png" alt="">
                    </div>
                    <h2 class="product-title">ACAI BERRY</h2>
                    <p class="product-prix">Prix: 30€</p>
                    <a class="product-btn" href="#">Voir Produit</a>
                </div>
                <div class="product">
                    <div class="product-img-wrapper">
                        <img src="<?= URL_SITE; ?>assets/images/acai.png" alt="">
                    </div>
                    <h2 class="product-title">ACAI BERRY</h2>
                    <p class="product-prix">Prix: 30€</p>
                    <a class="product-btn" href="#">Voir Produit</a>
                </div>
                <div class="product">
                    <div class="product-img-wrapper">
                        <img src="<?= URL_SITE; ?>assets/images/acai.png" alt="">
                    </div>
                    <h2 class="product-title">ACAI BERRY</h2>
                    <p class="product-prix">Prix: 30€</p>
                    <a class="product-btn" href="#">Voir Produit</a>
                </div>
            </div>
           

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
                        <?php foreach ($produits as $produit) { ?>
                            <tr>
                                <td><?= $produit->getId() ?></td>
                                <td><a href="?p=viewproduct&id=<?= $produit->getId() ?>"><?= $produit->getNomProduit() ?></a></td>
                                <td><?= $produit->createSummary() ?></td>
                                <td><?= $produit->getPrixVente() ?></td>
                                <td><img src="<?= $produit->getImagePath() ?>" alt="Image du produit"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
