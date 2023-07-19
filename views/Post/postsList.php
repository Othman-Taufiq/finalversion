<!-- Wrapper -->
<div id="wrapper">
    <br><br><br>
    
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Liste de tous les articles</h1>
            <!-- Table -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Date de création</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $post) { ?>
                            <tr>
                                <td><?= $post->getId() ?></td>
                                <td><a href="<?= URL_SITE; ?>?p=viewpost&id=<?= $post->getId() ?>"><?= $post->getTitre() ?></a></td>
                               <td><?= $post->getDescription() ?></td>
                                <td><?= $post->getDateCreation() ?></td>
                                <td><img src="<?= URL_SITE; ?><?= $post->getImagePath() ?>" alt="Image du produit"></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
