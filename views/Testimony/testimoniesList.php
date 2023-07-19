<!-- Main -->
<section id="main" class="wrapper">
    <div class="inner">
        <h1 class="major">List of All Testimonies</h1>
        <!-- Table -->
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Creation Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($testimonies as $testimony) { ?>
                    <tr>
                        <td><?= $testimony->getId() ?></td>
                        <td><a href="<?= URL_SITE; ?>?p=viewtestimony&id=<?= $testimony->getId() ?>"><?= $testimony->getTitre() ?></a></td>
                  
                        <td><?= $testimony->getDateCreation() ?></td>
                        <td><img src="<?= URL_SITE; ?><?= $testimony->getImagePath() ?>" alt="Testimony Image"></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
