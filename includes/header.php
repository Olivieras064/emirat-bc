<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title; ?></title>
    <meta
        name="description"
        content="Emirat Business Center : Agence de voyage, Visa, Immobilier, Import-Export, Formation professionnelle. Tél: +228 99 79 5744" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <!-- TOPBAR + NAVBAR -->
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex gap-4">
                    <a href="tel:+22899795744"><i class="bi bi-telephone-fill me-1"></i>+228 99 79 5744</a>/
                    <a href="tel:+22892337560">+228 92 33 75 60</a>
                    <a href="mailto:emiratbusinesscenter@gmail.com"><i class="bi bi-envelope-fill me-1"></i>emiratbusinesscenter@gmail.com</a>
                </div>
                <div class="d-flex gap-3">
                    <a href="#"><i class="bi bi-facebook"></i></a>
                    <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-emirat navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand navbar-brand-wrap" href="./">
                <div>
                    <div class="brand-logo-text">E<span>mirat</span></div>
                    <span class="brand-sub">Business Center</span>
                </div>
            </a>
            <button
                class="navbar-toggler border-0"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMain">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-1">
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./voyage.php">Voyage & Visa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./immobilier.php">Immobilier</a>
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link nav-link-custom"
                            href="./import-export.php">Import / Export</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom" href="./formation.php">Formation</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a
                            class="nav-link nav-link-custom nav-cta"
                            href="./contact.php">Nous contacter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>