<footer class="footer d-flex-sbetween2">
    <div class="d-flex-col footer-links">
        <a href="#">Produits</a>
        <a href="#">Articles</a>
        <a href="#">Temoignages</a>
        <a href="#">Qui sommes-nous</a>
    </div>
    <div class="d-flex-col footer-links">
        <a href="#">Mentions legales</a>
        <a href="#">Parametres de Cookie</a>
        <a href="#">Protections de donnée</a>
        <a href="#">Conditions General de Ventes</a>
    </div>
    <div class="d-flex-col footer-links">
        <a href="#">Service Clients</a>
        <a href="<?= URL_SITE; ?>?p=contact">Nous Contacter</a>
        <a href="<?= URL_SITE; ?>?p=faq">Question fréquentes</a>
        <a href="<?= URL_SITE; ?>?p=viewtestimonies">L'avis de nos clients</a>
    </div>
    <div class="d-flex-col">
        <form class="m-b" method="post">
            <h3 class="whiteHeading">Newsletter</h3>
            <p class="n-textWhite">Abonnez-vous à notre newsletter, et profitez de  nos bons <br> plans et réduction toute l'année.</p>
            <input type="hidden" name = "action" value = "newsletter">
            <input class="newsletter-inp" type="email" name="email" placeholder="Email">
            <input class="newsletter-submit" type="submit" value="S'inscrire">
        </form>
        <h3 class="whiteHeading">Suivez nous</h3>
        <div class="footer-icon-box d-flex">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
        </div>
    </div>
</footer>






<script src="<?= URL_SITE; ?>assets/main.js"></script>
</body>
</html>