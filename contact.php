<?php
$title = "Contact - Emirat Business Center";
include 'includes/header.php' ?>

<section class="page-hero">
  <div class="container" style="position:relative;z-index:2;">
    <nav aria-label="breadcrumb" class="mb-3">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href=".././">Accueil</a></li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>
    </nav>
    <div class="section-label mb-3" style="background:rgba(255,255,255,0.1);color:rgba(255,255,255,0.85);">📬 Contactez-nous</div>
    <h1>Nous sommes à<br/>votre écoute</h1>
    <p class="mt-3">Une question, un projet, un devis ? Notre équipe répond dans les plus brefs délais.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="row g-5">
      <!-- Info Contact -->
      <div class="col-lg-5">
        <div class="contact-card">
          <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:8px;">Informations de contact</h3>
          <p style="color:var(--text-muted);font-size:0.9rem;margin-bottom:32px;">N'hésitez pas à nous contacter par l'un des moyens ci-dessous. Nous vous répondrons rapidement.</p>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="bi bi-telephone-fill"></i></div>
            <div>
              <h5>Téléphone</h5>
              <p><a href="tel:+22899795744" style="color:var(--text-dark);">+228 99 79 5744</a></p>
              <p><a href="tel:+22892337560" style="color:var(--text-dark);">92 33 75 60</a></p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="bi bi-envelope-fill"></i></div>
            <div>
              <h5>Email</h5>
              <p><a href="mailto:emiratbusinesscenter@gmail.com" style="color:var(--text-dark);">emiratbusinesscenter@gmail.com</a></p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="bi bi-facebook"></i></div>
            <div>
              <h5>Réseaux Sociaux</h5>
              <p>Facebook & Instagram : <strong>Emirat House</strong></p>
            </div>
          </div>

          <div class="contact-info-item">
            <div class="contact-icon"><i class="bi bi-clock-fill"></i></div>
            <div>
              <h5>Horaires d'ouverture</h5>
              <p>Lun – Sam : 08h00 – 18h00</p>
            </div>
          </div>

          <!-- Social links -->
          <div class="d-flex gap-2 mt-4">
            <a href="#" class="social-btn" style="background:rgba(192,57,43,0.08);color:var(--rouge);border-color:rgba(192,57,43,0.15);">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="#" class="social-btn" style="background:rgba(192,57,43,0.08);color:var(--rouge);border-color:rgba(192,57,43,0.15);">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="mailto:emiratbusinesscenter@gmail.com" class="social-btn" style="background:rgba(192,57,43,0.08);color:var(--rouge);border-color:rgba(192,57,43,0.15);">
              <i class="bi bi-envelope"></i>
            </a>
            <a href="tel:+22899795744" class="social-btn" style="background:rgba(192,57,43,0.08);color:var(--rouge);border-color:rgba(192,57,43,0.15);">
              <i class="bi bi-whatsapp"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Formulaire -->
      <div class="col-lg-7">
        <div class="contact-card">
          <h3 style="font-size:1.5rem;font-weight:800;margin-bottom:8px;">Envoyer un message</h3>
          <p style="color:var(--text-muted);font-size:0.9rem;margin-bottom:32px;">Remplissez le formulaire ci-dessous et nous vous contacterons dans les 24h.</p>

          <form id="contactForm">
            <div class="row g-3">
              <div class="col-md-6">
                <label style="font-size:0.82rem;font-weight:600;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;display:block;margin-bottom:8px;">Prénom & Nom *</label>
                <input type="text" class="form-control-custom" placeholder="Jean Dupont" required/>
              </div>
              <div class="col-md-6">
                <label style="font-size:0.82rem;font-weight:600;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;display:block;margin-bottom:8px;">Téléphone *</label>
                <input type="tel" class="form-control-custom" placeholder="+228 XX XX XX XX" required/>
              </div>
              <div class="col-12">
                <label style="font-size:0.82rem;font-weight:600;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;display:block;margin-bottom:8px;">Email</label>
                <input type="email" class="form-control-custom" placeholder="votre@email.com"/>
              </div>
              <div class="col-12">
                <label style="font-size:0.82rem;font-weight:600;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;display:block;margin-bottom:8px;">Service concerné</label>
                <select class="form-control-custom" style="appearance:none;cursor:pointer;">
                  <option value="">Sélectionnez un service…</option>
                  <option>Agence de Voyage & Billetterie</option>
                  <option>Assistance Visa</option>
                  <option>Immobilier</option>
                  <option>Import – Export / Transit Douane</option>
                  <option>Centre de Formation</option>
                  <option>Transfert d'Argent</option>
                  <option>Communication Événementielle</option>
                  <option>Autre</option>
                </select>
              </div>
              <div class="col-12">
                <label style="font-size:0.82rem;font-weight:600;color:var(--text-muted);letter-spacing:0.5px;text-transform:uppercase;display:block;margin-bottom:8px;">Votre message *</label>
                <textarea class="form-control-custom" rows="5" placeholder="Décrivez votre besoin ou votre projet…" required></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-rouge w-100" style="justify-content:center;padding:16px;font-size:1rem;">
                  <i class="bi bi-send-fill me-2"></i> Envoyer le message
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Services rapides -->
    <div class="row g-3 mt-5">
      <div class="col-12">
        <h4 style="font-weight:800;margin-bottom:24px;text-align:center;">Accès rapide à nos services</h4>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a href="voyage.php" style="display:block;text-align:center;padding:20px 10px;background:var(--gris-clair);border-radius:var(--radius);transition:var(--transition);color:var(--text-dark);" class="service-card">
          <div style="font-size:2rem;margin-bottom:8px;">✈️</div>
          <div style="font-size:0.82rem;font-weight:600;">Voyage & Tours</div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a href="voyage.php#visa" style="display:block;text-align:center;padding:20px 10px;background:var(--gris-clair);border-radius:var(--radius);transition:var(--transition);color:var(--text-dark);" class="service-card">
          <div style="font-size:2rem;margin-bottom:8px;">🛂</div>
          <div style="font-size:0.82rem;font-weight:600;">Assistance Visa</div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a href="immobilier.php" style="display:block;text-align:center;padding:20px 10px;background:var(--gris-clair);border-radius:var(--radius);transition:var(--transition);color:var(--text-dark);" class="service-card">
          <div style="font-size:2rem;margin-bottom:8px;">🏠</div>
          <div style="font-size:0.82rem;font-weight:600;">Immobilier</div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a href="import-export.php" style="display:block;text-align:center;padding:20px 10px;background:var(--gris-clair);border-radius:var(--radius);transition:var(--transition);color:var(--text-dark);" class="service-card">
          <div style="font-size:2rem;margin-bottom:8px;">🚢</div>
          <div style="font-size:0.82rem;font-weight:600;">Import / Export</div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a href="formation.php" style="display:block;text-align:center;padding:20px 10px;background:var(--gris-clair);border-radius:var(--radius);transition:var(--transition);color:var(--text-dark);" class="service-card">
          <div style="font-size:2rem;margin-bottom:8px;">🎓</div>
          <div style="font-size:0.82rem;font-weight:600;">Formation</div>
        </a>
      </div>
      <div class="col-6 col-md-4 col-lg-2">
        <a href="tel:+22899795744" style="display:block;text-align:center;padding:20px 10px;background:var(--rouge);border-radius:var(--radius);transition:var(--transition);color:#fff;" class="service-card">
          <div style="font-size:2rem;margin-bottom:8px;">📞</div>
          <div style="font-size:0.82rem;font-weight:600;">Appeler maintenant</div>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
