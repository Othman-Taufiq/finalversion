<!-- Wrapper -->
<div id="wrapper">
    <br><br><br>
    
    <!-- Main -->
    <section id="main" class="wrapper">
        <div class="inner">
            <h1 class="major">Détails du témoignage</h1>
            <!-- Table -->
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Date de création</th>
                            <th>Image</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $testimony->getId() ?></td>
                            <td><?= $testimony->getTitre() ?></td>
                            <td><?= $testimony->getDescription() ?></td>
                            <td><?= $testimony->getDateCreation() ?></td>
                            <td><img src="<?= URL_SITE; ?><?= $testimony->getImagePath() ?>" alt="Testimony Image"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
