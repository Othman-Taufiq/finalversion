<section class="teaser-box">
<?= getFormErrors(); ?>
    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="action" value="addproduct">

        <div class="d-flex">
            <div class=" m-r">
                <div>
                    <h1 class="bigHeading">Ajouter nouveau produit</h1>
                    <p class="error-message"><?=$notification[1]?? ""?></p>
                    <label class="n-text" for="nom">Nom du produit:</label>
                    <input class="big-inp" type="text" name="nom" id="nom" value= "<?php if(!empty($_POST["nom"])) echo htmlentities($_POST["nom"]) ?>"  required>
                </div>

                <div>
                    <label class="n-text" for="prix">Prix:</label>
                    <input class="big-inp" type="number" name="prix" id="prix"  min = "1" required>
                </div>

                <div>
                    <label class="n-text" for="image">Image:</label>
                    <input class="big-inp" type="file" name="image" id="image" accept="image/*" required>
                </div>
            </div>

            <div>
                <div>
                    <label class="n-text" for="description">Description:</label>
                    <textarea class="big-textarea" name="description" id="description" value= "<?php if(!empty($_POST["description"])) echo htmlentities($_POST["description"]) ?>"  required></textarea>
                </div>
                <div>
                    <input class="big-submit" type="submit" value="Ajouter">
                </div>
            </div>
        </div>
    </form>
</section>

