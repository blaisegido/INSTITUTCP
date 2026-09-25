<?php
$page_title = "Formations - Institut CP";
$page_description = "Des formations animées par des experts reconnus pour accompagner les professionnels de la construction.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="formations-page">
    <!-- HERO SECTION (CONSERVÉ STRICTEMENT INTACT) -->
    <section class="formations-cover" aria-labelledby="formations-title">
        <div class="container">
            <nav class="formations-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?php echo $base_url; ?>/">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>Formations</span>
            </nav>

            <div class="formations-cover-grid">
                <div class="formations-cover-copy">
                    <p class="formations-eyebrow">Centre de formation ICP</p>
                    <h1 id="formations-title">Apprendre.<br>Pour construire<br>demain.</h1>
                    <p class="formations-cover-lead">Des formations directement utiles aux professionnels qui font évoluer la construction.</p>
                    <a class="formations-text-link" href="#documentation">
                        Télécharger la documentation <span aria-hidden="true">&#8595;</span>
                    </a>
                </div>

                <figure class="formations-certification">
                    <div class="formations-certification-card">
                        <span class="formations-certification-label">La qualité en action</span>
                        <img src="<?php echo $base_url; ?>/assets/img/formations/certification-qualiopi.png" alt="Certification Qualiopi, processus certifié par la République Française" width="317" height="169" loading="lazy" decoding="async">
                        <span class="formations-certification-stamp" aria-hidden="true">ICP</span>
                    </div>
                </figure>
            </div>

        </div>
    </section>

    <!-- SECTION 1 : INTRODUCTION ÉDITORIALE PRESTIGE -->
    <section class="formations-introduction" aria-labelledby="formations-introduction-title">
        <div class="container formations-intro-container">
            <div class="formations-intro-header">
                <span class="formations-tag">Développer les compétences</span>
                <h2 id="formations-introduction-title">Se former pour rester<br>en mouvement.</h2>
                <div class="formations-intro-badge-card">
                    <div class="formations-intro-badge-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <div>
                        <strong>Transmission d'Excellence</strong>
                        <span>Programmes conçus pour l'impact opérationnel immédiat</span>
                    </div>
                </div>
            </div>
            <div class="formations-intro-body">
                <p class="formations-intro-lead">Dans un secteur en constante évolution, la formation constitue un levier essentiel de performance, d’adaptation et de compétitivité.</p>
                <p>L’Institut des Constructeurs et des Promoteurs propose un programme de formations conçu pour répondre aux enjeux concrets des professionnels de la construction. Animées par des experts reconnus, nos formations allient expertise pointue, pragmatisme et applicabilité immédiate afin d’accompagner durablement les entreprises dans le renforcement stratégique de leurs compétences.</p>
                
                <div class="formations-pillars-row">
                    <div class="formations-pillar-item">
                        <span class="pillar-bullet"></span>
                        <div>
                            <strong>Expertise terrain</strong>
                            <span>Formateurs praticiens et experts en exercice</span>
                        </div>
                    </div>
                    <div class="formations-pillar-item">
                        <span class="pillar-bullet"></span>
                        <div>
                            <strong>Certification Qualiopi</strong>
                            <span>Conformité et éligibilité aux financements</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2 : LES FORMATS PÉDAGOGIQUES -->
    <section class="formations-formats" aria-labelledby="formations-formats-title">
        <div class="container">
            <div class="formations-section-heading">
                <span class="formations-tag">Une approche concrète</span>
                <h2 id="formations-formats-title">Des formats pensés<br>pour vos enjeux.</h2>
                <p>Chaque parcours combine une expertise solide, des cas réels et des outils directement mobilisables dans vos projets opérationnels.</p>
            </div>

            <div class="formations-format-grid">
                <article class="formations-format-card">
                    <span class="formations-format-index">01</span>
                    <h3>Monter en compétence</h3>
                    <p>Acquérir les méthodes, les réflexes et les repères techniques indispensables pour progresser avec assurance et maîtrise.</p>
                    <div class="formations-format-meta">
                        <span>Approfondissement méthodique</span>
                    </div>
                </article>

                <article class="formations-format-card formations-format-card--featured">
                    <span class="formations-format-index">02</span>
                    <h3>Partager les pratiques</h3>
                    <p>Apprendre aux côtés de pairs, confronter les retours d'expérience et enrichir sa grille d'analyse pour décider plus vite et plus juste.</p>
                    <div class="formations-format-meta">
                        <span>Émulation &amp; Réseau de pairs</span>
                    </div>
                </article>

                <article class="formations-format-card">
                    <span class="formations-format-index">03</span>
                    <h3>Transformer le quotidien</h3>
                    <p>Repartir avec des outils concrets, des matrices prêtes à l'emploi et des leviers immédiatement actionnables par vos équipes.</p>
                    <div class="formations-format-meta">
                        <span>Applicabilité terrain immédiate</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECTION 3 : LE CATALOGUE OFFICIEL 2026 -->
    <section class="formations-catalogue" aria-labelledby="catalogue-title">
        <div class="container">
            <div class="formations-catalogue-panel">
                <div class="formations-catalogue-content">
                    <span class="formations-tag formations-tag--light">Édition Officielle 2026</span>
                    <h2 id="catalogue-title">Le catalogue complet des formations.</h2>
                    <p>Retrouvez l’ensemble des modules, programmes détaillés, prérequis et modalités d'inscription de l’Institut CP dans un document complet et synthétique.</p>
                    
                    <div class="formations-catalogue-cta-group">
                        <button class="formations-btn-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>Consulter l'aperçu</span>
                        </button>
                        <a class="formations-btn-download" href="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" download="Catalogue-Formations-ICP-2026.pdf">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            <span>Télécharger le PDF</span>
                        </a>
                    </div>
                </div>

                <div class="formations-catalogue-showcase">
                    <div class="formations-catalogue-card">
                        <div class="formations-catalogue-card-top">
                            <span class="doc-pill">Document PDF</span>
                            <span class="doc-size">312 Ko</span>
                        </div>
                        <div class="formations-catalogue-card-body">
                            <div class="doc-icon-large">
                                <svg width="38" height="38" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
                            </div>
                            <h3>Catalogue Formations</h3>
                            <p>Programme intégral 2026 • ICP Formations</p>
                        </div>
                        <div class="formations-catalogue-card-footer">
                            <button class="doc-action-btn" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">
                                Ouvrir le document &rarr;
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 : CENTRE DE TÉLÉCHARGEMENT & RESSOURCES (NOUVEAU STYLE SANS BORDURE) -->
    <section class="formations-documentation" id="documentation" aria-labelledby="documentation-title">
        <div class="container">
            <div class="formations-section-heading">
                <span class="formations-tag">Ressources &amp; Documents</span>
                <h2 id="documentation-title">Centre de documentation &amp; téléchargements.</h2>
                <p>Retrouvez l’ensemble des pièces administratives, fiches de contact, référentiels et règlements nécessaires à vos démarches de formation.</p>
            </div>

            <div class="formations-docs-hub">
                <!-- Document 1: Catalogue Formations -->
                <div class="doc-tile">
                    <div class="doc-tile-badge-wrapper">
                        <span class="doc-category-badge doc-category--program">Programme Officiel</span>
                        <span class="doc-format-badge">PDF • 312 Ko</span>
                    </div>
                    <div class="doc-tile-content">
                        <div class="doc-tile-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
                            </svg>
                        </div>
                        <div class="doc-tile-text">
                            <h3>Catalogue des Formations 2026</h3>
                            <p>Guide complet des cursus, sessions certifiantes, prérequis et objectifs pédagogiques de l'année.</p>
                        </div>
                    </div>
                    <div class="doc-tile-actions">
                        <button class="btn-doc-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>Aperçu</span>
                        </button>
                        <a class="btn-doc-download" href="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" download="Catalogue-Formations-2026.pdf" aria-label="Télécharger le Catalogue Formations 2026">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            <span>Télécharger</span>
                        </a>
                    </div>
                </div>

                <!-- Document 2: Fiche Contact & Inscription -->
                <div class="doc-tile">
                    <div class="doc-tile-badge-wrapper">
                        <span class="doc-category-badge doc-category--admission">Inscription &amp; Contact</span>
                        <span class="doc-format-badge">PDF • 85 Ko</span>
                    </div>
                    <div class="doc-tile-content">
                        <div class="doc-tile-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="8.5" cy="7" r="4"/>
                                <line x1="20" y1="8" x2="20" y2="14"/>
                                <line x1="23" y1="11" x2="17" y2="11"/>
                            </svg>
                        </div>
                        <div class="doc-tile-text">
                            <h3>Fiche Contact &amp; Inscription</h3>
                            <p>Formulaire officiel de demande d’information, devis de formation et pré-inscription.</p>
                        </div>
                    </div>
                    <div class="doc-tile-actions">
                        <button class="btn-doc-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/fiche-contact-formation.pdf" data-pdf-title="ICP fiche contact formation">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>Aperçu</span>
                        </button>
                        <a class="btn-doc-download" href="<?php echo $base_url; ?>/assets/pdf/formations/fiche-contact-formation.pdf" download="Fiche-Contact-Formation-ICP.pdf" aria-label="Télécharger la fiche contact formation">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            <span>Télécharger</span>
                        </a>
                    </div>
                </div>

                <!-- Document 3: Règlement Intérieur -->
                <div class="doc-tile">
                    <div class="doc-tile-badge-wrapper">
                        <span class="doc-category-badge doc-category--legal">Cadre Réglementaire</span>
                        <span class="doc-format-badge">PDF • 155 Ko</span>
                    </div>
                    <div class="doc-tile-content">
                        <div class="doc-tile-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                        <div class="doc-tile-text">
                            <h3>Règlement Intérieur des Formations</h3>
                            <p>Document de référence régissant les droits, devoirs et conditions de déroulement des sessions.</p>
                        </div>
                    </div>
                    <div class="doc-tile-actions">
                        <button class="btn-doc-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/reglement-interieur-formations.pdf" data-pdf-title="ICP formations règlement intérieur">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>Aperçu</span>
                        </button>
                        <a class="btn-doc-download" href="<?php echo $base_url; ?>/assets/pdf/formations/reglement-interieur-formations.pdf" download="Reglement-Interieur-Formations-ICP.pdf" aria-label="Télécharger le règlement intérieur">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            <span>Télécharger</span>
                        </a>
                    </div>
                </div>

                <!-- Document 4: Fiche Réclamation -->
                <div class="doc-tile">
                    <div class="doc-tile-badge-wrapper">
                        <span class="doc-category-badge doc-category--quality">Démarche Qualité</span>
                        <span class="doc-format-badge">PDF • 81 Ko</span>
                    </div>
                    <div class="doc-tile-content">
                        <div class="doc-tile-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="12" y1="8" x2="12" y2="12"/>
                                <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                        </div>
                        <div class="doc-tile-text">
                            <h3>Fiche de Réclamation Formation</h3>
                            <p>Procédure d'amélioration continue et traitement diligent des signalements pour les apprenants.</p>
                        </div>
                    </div>
                    <div class="doc-tile-actions">
                        <button class="btn-doc-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/fiche-reclamation-formation.pdf" data-pdf-title="ICP fiche réclamation formation">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                            <span>Aperçu</span>
                        </button>
                        <a class="btn-doc-download" href="<?php echo $base_url; ?>/assets/pdf/formations/fiche-reclamation-formation.pdf" download="Fiche-Reclamation-Formation-ICP.pdf" aria-label="Télécharger la fiche de réclamation">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                            <span>Télécharger</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MODAL APERÇU PDF -->
    <div class="pdf-preview-modal" id="pdfPreviewModal" role="dialog" aria-modal="true" aria-labelledby="pdfPreviewTitle" hidden>
        <div class="pdf-preview-backdrop" data-pdf-close></div>
        <div class="pdf-preview-panel">
            <div class="pdf-preview-header">
                <div>
                    <span class="formations-tag">Lecture du document</span>
                    <h2 id="pdfPreviewTitle">Aperçu PDF</h2>
                </div>
                <button class="pdf-preview-close" type="button" data-pdf-close aria-label="Fermer l'aperçu">&times;</button>
            </div>
            <iframe class="pdf-preview-frame" title="Aperçu du document PDF"></iframe>
            <div class="pdf-preview-footer">
                <span>Vous pouvez télécharger le document directement depuis cette fenêtre.</span>
                <a class="formations-btn-download" href="#" download>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                    <span>Télécharger le PDF</span>
                </a>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
