<?php
$date = date("Y-m-d H:i:s");
?>
<?= getFormErrors(); ?>
<!-- Formulaire -->
<form method="POST" action="" enctype="multipart/form-data">
    <input type="hidden" name="action" value="addorder">
    
    <label for="id_utilisateur">ID Utilisateur:</label><br>
    <input type="number" name="id_utilisateur" id="id_utilisateur" required><br>
    
    <label for="product">Produit:</label><br>
    <select name="product" id="product" required>
        <option value="produit1">Produit 1</option>
        <option value="produit2">Produit 2</option>
        <!-- Ajoutez d'autres options ici -->
    </select><br>
    
    <label for="quantity">Quantité:</label><br>
    <input type="number" name="quantity" id="quantity" min="1" required><br>
    
    <label for="delivery">Mode de livraison:</label><br>
    <select name="delivery" id="delivery" required>
        <option value="livraison1">Livraison 1</option>
        <option value="livraison2">Livraison 2</option>
        <!-- Ajoutez d'autres options ici -->
    </select><br>
    
    <label for="address">Adresse de livraison:</label><br>
    <select name="address" id="address" required>
        <option value="adresse1">Adresse 1</option>
        <option value="adresse2">Adresse 2</option>
        <!-- Ajoutez d'autres options ici -->
    </select><br>
    
    <label for="date">Date:</label><br>
    <input type="text" name="date" id="date" value="<?php echo $date; ?>" readonly><br>
    
    <input type="submit" value="Ajouter">
</form>
