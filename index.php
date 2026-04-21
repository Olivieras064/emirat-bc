<?php
$title = "Emirat Business Center – Votre partenaire au Togo";
include 'includes/header.php' ?>

<!-- HERO -->
<section class="hero">
  <div class="hero-blob hero-blob-1"></div>
  <div class="hero-blob hero-blob-2"></div>
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 hero-content">
        <div class="hero-badge animate-up d1">
          <span></span>
          Votre partenaire de confiance
        </div>
        <h1 class="animate-up d2">
          Votre <em>Business</em><br />Center au Togo
        </h1>
        <p class="animate-up d3">
          Services de voyage, visa, immobilier, import-export et formation
          professionnelle. Tout ce qu'il vous faut, en un seul endroit.
        </p>
        <div class="d-flex flex-wrap gap-3 animate-up d4">
          <a href="./voyage.php" class="btn-rouge">
            <i class="bi bi-airplane-fill"></i> Nos services voyage
          </a>
          <a href="./contact.php" class="btn-outline-blanc">
            <i class="bi bi-chat-dots"></i> Nous contacter
          </a>
        </div>

        <div class="hero-stats">
          <div class="stat-item">
            <div class="stat-num">
              <span data-target="500" data-suffix="+">0+</span>
            </div>
            <div class="stat-label">Clients servis</div>
          </div>
          <div class="stat-item">
            <div class="stat-num">
              <span data-target="7" data-suffix="">0</span>
            </div>
            <div class="stat-label">Services offerts</div>
          </div>
          <div class="stat-item">
            <div class="stat-num">
              <span data-target="5" data-suffix=" pays">0</span>
            </div>
            <div class="stat-label">Destinations visa</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-none d-lg-block hero-image-wrap">
        <img
          src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=700&q=80&auto=format&fit=crop"
          alt="Équipe professionnelle Emirat"
          class="hero-main-img" />
        <div class="hero-card-float card-1">
          <div class="d-flex align-items-center gap-3">
            <div
              style="
                    width: 44px;
                    height: 44px;
                    border-radius: 10px;
                    background: rgba(192, 57, 43, 0.2);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.3rem;
                  ">
              ✈️
            </div>
            <div>
              <div style="color: #fff; font-weight: 700; font-size: 0.9rem">
                Visa Express
              </div>
              <div
                style="color: rgba(255, 255, 255, 0.5); font-size: 0.78rem">
                Schengen, USA, Canada…
              </div>
            </div>
          </div>
        </div>
        <div class="hero-card-float card-2">
          <div class="d-flex align-items-center gap-3">
            <div
              style="
                    width: 44px;
                    height: 44px;
                    border-radius: 10px;
                    background: rgba(243, 156, 18, 0.2);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    font-size: 1.3rem;
                  ">
              🏠
            </div>
            <div>
              <div style="color: #fff; font-weight: 700; font-size: 0.9rem">
                Immobilier
              </div>
              <div
                style="color: rgba(255, 255, 255, 0.5); font-size: 0.78rem">
                Achat, vente, location
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- NOS SERVICES -->
<section class="section" id="services">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label mx-auto">🎯 Nos Services</div>
      <h2 class="section-title">Tout ce dont vous avez besoin</h2>
      <p class="section-subtitle mx-auto">
        Emirat Business Center vous offre une gamme complète de services
        professionnels pour concrétiser vos projets.
      </p>
    </div>

    <div class="row g-4">
      <!-- Voyage & Tours -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card">
          <div class="service-card-img-wrap">
            <img
              src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=600&q=80&auto=format&fit=crop"
              alt="Agence de voyage"
              class="service-card-img" />
            <div
              class="service-badge"
              style="background: var(--rouge); color: #fff">
              Tours & Voyage
            </div>
          </div>
          <div class="service-card-body">
            <div
              class="service-icon"
              style="
                    background: rgba(192, 57, 43, 0.1);
                    color: var(--rouge);
                  ">
              ✈️
            </div>
            <h3>Agence de Voyage</h3>
            <p>
              Billetterie aérienne, assurance voyage, réservation d'hôtel,
              circuits touristiques et transfert d'argent international.
            </p>
            <a href="./voyage.php" class="service-link">Découvrir <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Visa -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card">
          <div class="service-card-img-wrap">
            <img
              src="https://images.unsplash.com/photo-1569982175971-d92b01cf8694?w=600&q=80&auto=format&fit=crop"
              alt="Assistance visa"
              class="service-card-img" />
            <div
              class="service-badge"
              style="background: var(--bleu-mid); color: #fff">
              Visa
            </div>
          </div>
          <div class="service-card-body">
            <div
              class="service-icon"
              style="
                    background: rgba(21, 101, 192, 0.1);
                    color: var(--bleu-mid);
                  ">
              🛂
            </div>
            <h3>Assistance Visa</h3>
            <p>
              Visa Schengen, USA, Canada et plus. Accompagnement complet
              pour vos visas d'études, travail, tourisme et affaires.
            </p>
            <a href="voyage.php#visa" class="service-link">Découvrir <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Immobilier -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card">
          <div class="service-card-img-wrap">
            <img
              src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=80&auto=format&fit=crop"
              alt="Immobilier"
              class="service-card-img" />
            <div
              class="service-badge"
              style="background: #e67e22; color: #fff">
              Immobilier
            </div>
          </div>
          <div class="service-card-body">
            <div
              class="service-icon"
              style="background: rgba(230, 126, 34, 0.1); color: #e67e22">
              🏠
            </div>
            <h3>Agence Immobilière</h3>
            <p>
              Achat, vente, location et entretien de terrains, maisons,
              immeubles. Vente de matériaux de construction.
            </p>
            <a href="./immobilier.php" class="service-link">Découvrir <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Import Export -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card">
          <div class="service-card-img-wrap">
            <img
              src="https://images.unsplash.com/photo-1494412574643-ff11b0a5c1c3?w=600&q=80&auto=format&fit=crop"
              alt="Import Export"
              class="service-card-img" />
            <div
              class="service-badge"
              style="background: #0097a7; color: #fff">
              Commerce
            </div>
          </div>
          <div class="service-card-body">
            <div
              class="service-icon"
              style="background: rgba(0, 151, 167, 0.1); color: #0097a7">
              🚢
            </div>
            <h3>Import – Export</h3>
            <p>
              Transit, dédouanement, import et export international. Gestion
              complète de vos opérations commerciales transfrontalières.
            </p>
            <a href="./import-export.php" class="service-link">Découvrir <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Formation -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card">
          <div class="service-card-img-wrap">
            <img
              src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=80&auto=format&fit=crop"
              alt="Centre de formation"
              class="service-card-img" />
            <div
              class="service-badge"
              style="background: var(--bleu); color: #fff">
              Formation
            </div>
          </div>
          <div class="service-card-body">
            <div
              class="service-icon"
              style="background: rgba(26, 58, 92, 0.1); color: var(--bleu)">
              🎓
            </div>
            <h3>Centre de Formation</h3>
            <p>
              Formations professionnelles clé sur table. Des programmes
              adaptés aux besoins du marché africain et international.
            </p>
            <a href="./formation.php" class="service-link">Découvrir <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <!-- Transfert d'argent -->
      <div class="col-lg-4 col-md-6">
        <div class="service-card">
          <div class="service-card-img-wrap">
            <img
              src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=600&q=80&auto=format&fit=crop"
              alt="Transfert argent"
              class="service-card-img" />
            <div
              class="service-badge"
              style="background: #27ae60; color: #fff">
              Finance
            </div>
          </div>
          <div class="service-card-body">
            <div
              class="service-icon"
              style="background: rgba(39, 174, 96, 0.1); color: #27ae60">
              💸
            </div>
            <h3>Transfert d'Argent</h3>
            <p>
              Services de transfert rapide via Wari, TMoney, Flooz et autres
              plateformes. Simple, rapide et sécurisé.
            </p>
            <a href="./contact.php" class="service-link">Nous contacter <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- POURQUOI NOUS -->
<section class="section why-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <div
          class="section-label"
          style="
                background: rgba(255, 255, 255, 0.1);
                color: rgba(255, 255, 255, 0.8);
              ">
          ⭐ Pourquoi nous choisir
        </div>
        <h2 class="section-title" style="color: #fff">
          Un partenaire fiable pour tous vos projets
        </h2>
        <div class="divider-rouge my-3"></div>
        <p
          style="
                color: rgba(255, 255, 255, 0.6);
                font-weight: 300;
                font-size: 1rem;
              ">
          Emirat Business Center regroupe l'expertise et la passion pour
          vous offrir des services de haute qualité, adaptés à vos besoins.
        </p>
        <a href="./contact.php" class="btn-rouge mt-4">Prendre contact <i class="bi bi-arrow-right ms-2"></i></a>
      </div>
      <div class="col-lg-7">
        <div class="feature-item">
          <div class="feature-icon">🌍</div>
          <div class="feature-text">
            <h4>Réseau International</h4>
            <p>
              Connexions solides avec des partenaires en Europe, Amérique du
              Nord, Brésil et Chine pour vous faciliter chaque démarche.
            </p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon">⚡</div>
          <div class="feature-text">
            <h4>Traitement Rapide</h4>
            <p>
              Vos dossiers sont traités avec diligence et efficacité. Nous
              respectons vos délais et tenons nos engagements.
            </p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon">🛡️</div>
          <div class="feature-text">
            <h4>Services Sécurisés & Fiables</h4>
            <p>
              Confidentialité, transparence et intégrité dans toutes nos
              transactions. Votre confiance est notre priorité.
            </p>
          </div>
        </div>
        <div class="feature-item">
          <div class="feature-icon">🤝</div>
          <div class="feature-text">
            <h4>Accompagnement Personnalisé</h4>
            <p>
              Une équipe dédiée à votre écoute pour vous guider à chaque
              étape de vos projets, qu'ils soient grands ou petits.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DESTINATIONS -->
<section class="section">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-label mx-auto">🌎 Destinations</div>
      <h2 class="section-title">Nos destinations phares</h2>
      <p class="section-subtitle mx-auto">
        Nous facilitons l'obtention de vos visas pour les destinations les
        plus demandées.
      </p>
    </div>
    <div class="row g-3">
      <div class="col-6 col-md-4 col-lg-2">
        <div class="dest-card">
          <img
            src="https://images.unsplash.com/photo-1503614472-8c93d56e92ce?w=400&q=80&auto=format&fit=crop"
            alt="Canada" />
          <div class="dest-overlay">
            <div class="dest-flag">🇨🇦</div>
            <div class="dest-name">Canada</div>
            <span class="dest-tag">Visa dispo</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="dest-card">
          <img
            src="https://images.unsplash.com/photo-1485738422979-f5c462d49f74?w=400&q=80&auto=format&fit=crop"
            alt="USA" />
          <div class="dest-overlay">
            <div class="dest-flag">🇺🇸</div>
            <div class="dest-name">USA</div>
            <span class="dest-tag">Visa dispo</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="dest-card">
          <img
            src="https://images.unsplash.com/photo-1499856871958-5b9627545d1a?w=400&q=80&auto=format&fit=crop"
            alt="Schengen Europe" />
          <div class="dest-overlay">
            <div class="dest-flag">🇪🇺</div>
            <div class="dest-name">Schengen</div>
            <span class="dest-tag">Visa dispo</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="dest-card">
          <img
            src="https://images.unsplash.com/photo-1518639192441-8fce0a366e2e?w=400&q=80&auto=format&fit=crop"
            alt="Brésil" />
          <div class="dest-overlay">
            <div class="dest-flag">🇧🇷</div>
            <div class="dest-name">Brésil</div>
            <span class="dest-tag">Visa dispo</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div class="dest-card">
          <img
            src="https://images.unsplash.com/photo-1547981609-4b6bfe67ca0b?w=400&q=80&auto=format&fit=crop"
            alt="Chine" />
          <div class="dest-overlay">
            <div class="dest-flag">🇨🇳</div>
            <div class="dest-name">Chine</div>
            <span class="dest-tag">Visa dispo</span>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <div
          class="dest-card"
          style="
                background: linear-gradient(
                  135deg,
                  var(--rouge),
                  var(--rouge-dark)
                );
              ">
          <div
            class="dest-overlay"
            style="
                  background: linear-gradient(
                    135deg,
                    rgba(192, 57, 43, 0.8),
                    rgba(150, 40, 27, 0.9)
                  );
                ">
            <div class="dest-flag" style="font-size: 2.5rem">+</div>
            <div class="dest-name">Et plus…</div>
            <span class="dest-tag">Nous consulter</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section cta-section">
  <div class="container text-center position-relative" style="z-index: 2">
    <h2 class="mb-3" style="font-size: clamp(1.8rem, 3.5vw, 2.8rem)">
      Votre projet de voyage, notre objectif
    </h2>
    <p class="mb-5 mx-auto" style="max-width: 500px">
      Contactez-nous dès aujourd'hui et obtenez une assistance personnalisée
      pour tous vos besoins.
    </p>
    <div class="d-flex justify-content-center flex-wrap gap-3">
      <a
        href="tel:+22899795744"
        class="btn-rouge"
        style="background: #fff; color: var(--rouge)">
        <i class="bi bi-telephone-fill"></i> Appeler maintenant
      </a>
      <a href="./contact.php" class="btn-outline-blanc">
        <i class="bi bi-send"></i> Envoyer un message
      </a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>