<?php
$page_title = "Nos Services - INSTITUT CP";
$page_description = "Explorez nos services d'accompagnement, de conseil stratégique et d'accélération d'opportunités.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div style="padding-top: calc(var(--navbar-height) + 3rem);">
    <section class="section">
        <div class="container">
            <div class="section-header">
                <div class="section-subtitle">Expertises</div>
                <h1 class="section-title">Nos Services</h1>
                <p class="section-description">
                    Des solutions sur-mesure pour accélérer la croissance de vos projets et consolider votre positionnement.
                </p>
            </div>

            <div class="grid-cards">
                <div class="card">
                    <h3 class="card-title">Conseil Stratégique</h3>
                    <p class="card-text">
                        Diagnostic, analyse d'opportunités et formulation de trajectoires de développement à haut niveau.
                    </p>
                </div>
                <div class="card">
                    <h3 class="card-title">Mise en Réseau C-Level</h3>
                    <p class="card-text">
                        Accès privilégié à un écosystème de dirigeants, investisseurs et experts sectoriels.
                    </p>
                </div>
                <div class="card">
                    <h3 class="card-title">Ingénierie de Projets</h3>
                    <p class="card-text">
                        Structuration et déploiement d'initiatives complexes à l'échelle nationale et internationale.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
