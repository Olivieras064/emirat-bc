<!-- FOOTER -->
<footer>
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="footer-brand">E<span>mirat</span></div>
                <p class="footer-desc">
                    Emirat Business Center est votre partenaire de confiance pour tous
                    vos besoins en voyage, visa, immobilier, import-export et
                    formation professionnelle au Togo et à l'international.
                </p>
                <div class="d-flex gap-2">
                    <a href="#" class="social-btn"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-btn"><i class="bi bi-instagram"></i></a>
                    <a href="mailto:emiratbusinesscenter@gmail.com" class="social-btn"><i class="bi bi-envelope"></i></a>
                    <a href="tel:+22899795744" class="social-btn"><i class="bi bi-telephone"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <div class="footer-title">Navigation</div>
                <a href="./" class="footer-link">Accueil</a>
                <a href="./voyage.php" class="footer-link">Voyage & Visa</a>
                <a href="./immobilier.php" class="footer-link">Immobilier</a>
                <a href="./import-export.php" class="footer-link">Import / Export</a>
                <a href="./formation.php" class="footer-link">Formation</a>
                <a href="./contact.php" class="footer-link">Contact</a>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="footer-title">Services</div>
                <a href="./voyage.php" class="footer-link">Billetterie aérienne</a>
                <a href="voyage.php#visa" class="footer-link">Assistance Visa</a>
                <a href="./immobilier.php" class="footer-link">Achat & Location</a>
                <a href="./import-export.php" class="footer-link">Transit & Douane</a>
                <a href="./formation.php" class="footer-link">Formations Pro</a>
                <a href="./contact.php" class="footer-link">Transfert d'argent</a>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="footer-title">Contact</div>
                <div
                    style="
                color: rgba(255, 255, 255, 0.5);
                font-size: 0.88rem;
                line-height: 2;
              ">
                    <div>
                        <i class="bi bi-telephone me-2" style="color: var(--rouge)"></i>+228 99 79 5744
                    </div>
                    <div>
                        <i class="bi bi-telephone me-2" style="color: var(--rouge)"></i>92 33 75 60
                    </div>
                    <div>
                        <i class="bi bi-envelope me-2" style="color: var(--rouge)"></i>emiratbusinesscenter@gmail.com
                    </div>
                    <div>
                        <i class="bi bi-facebook me-2" style="color: var(--rouge)"></i>Emirat House
                    </div>
                    <div>
                        <i class="bi bi-instagram me-2" style="color: var(--rouge)"></i>Emirat House
                    </div>
                </div>
            </div>
        </div>
        <hr class="footer-divider" />
        <div
            class="d-flex flex-wrap justify-content-between align-items-center footer-bottom">
            <span>© 2026 Emirat Business Center. Tous droits réservés.</span>
            <span>Fait par Olivier TOGBE</span>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/main.js"></script>
<script>
    const links = document.querySelectorAll('.nav-link')

    const current = window.location.pathname.split("/").pop()

    for (let i = 0; i < links.length; i++) {
        const link = links[i];

        const href = link.getAttribute('href').split("/").pop()

        if (href === current) {
            link.classList.add('active')
        }
    }
</script>
</body>

</html>