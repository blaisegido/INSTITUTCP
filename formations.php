<?php
$page_title = "Formations - INSTITUT CP";
$page_description = "Formations exécutives et programmes de montée en compétences dispensés par des leaders d'opinion.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div style="padding-top: calc(var(--navbar-height) + 3rem);">
    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Montée en compétences</div>
                <h1 class="section-title">Formations de Haut Niveau</h1>
                <p class="section-description">
                    Des programmes certifiants conçus pour renforcer les capacités de décision, le leadership et l'agilité stratégique.
                </p>
            </div>

            <div class="grid-cards">
                <div class="card">
                    <h3 class="card-title">Executive Leadership</h3>
                    <p class="card-text">
                        Maîtrisez les leviers du management moderne et de la conduite du changement en environnement complexe.
                    </p>
                </div>
                <div class="card">
                    <h3 class="card-title">Gouvernance & Stratégie</h3>
                    <p class="card-text">
                        Optimisez la gouvernance d'entreprise et les politiques de gestion des risques.
                    </p>
                </div>
                <div class="card">
                    <h3 class="card-title">Transformations Digitales</h3>
                    <p class="card-text">
                        Incorporez les technologies émergentes et la culture de l'innovation au cœur de votre organisation.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
