<!-- Wrapper -->
<div id="wrapper">
    <br><br><br>
    
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Détails du post</h1>
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
                        <tr>
                            <td><?= $post->getId() ?></td>
                            <td><?= $post->getTitre() ?></td>
                            <td><?= $post->getDescription() ?></td>
                            <td><?= $post->getDateCreation() ?></td>
                            <td><img src="<?= URL_SITE; ?><?= $post->getImagePath() ?>" alt="Image du post"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
