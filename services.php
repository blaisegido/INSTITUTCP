<?php
$page_title = "Services - Institut CP";
$page_description = "Des services fiables, réactifs et directement opérationnels pour les professionnels de la construction.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="services-page">
    <!-- HERO SECTION (CONSERVÉ STRICTEMENT INTACT) -->
    <section class="services-cover" aria-labelledby="services-title">
        <div class="container">
            <nav class="services-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?php echo $base_url; ?>/">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>Services</span>
            </nav>

            <div class="services-cover-grid">
                <div class="services-cover-copy">
                    <p class="services-eyebrow">L’accompagnement ICP</p>
                    <h1 id="services-title">Des réponses<br>pour avancer.</h1>
                    <p class="services-cover-lead">Accompagner les professionnels de la construction dans leurs enjeux d’aujourd’hui et de demain.</p>
                    <p class="services-cover-text">L’Institut des Constructeurs et des Promoteurs met à la disposition de ses membres un ensemble de services conçus pour répondre aux exigences d’un secteur en constante évolution.</p>
                    <div class="services-cover-actions">
                        <a class="services-text-link" href="#accompagnements">
                            Découvrir les services <span aria-hidden="true">&#8595;</span>
                        </a>
                    </div>
                </div>

                <figure class="services-cover-figure">
                    <div class="services-cover-image-shell">
                        <img src="<?php echo $base_url; ?>/assets/img/home/plans.webp" alt="Plans de construction, outils de mesure et clés posés sur une table de travail" width="900" height="600" loading="lazy" decoding="async">
                        <span class="services-cover-tag">Le plan de réponse ICP</span>
                        <div class="services-plan-mark" aria-hidden="true">
                            <span></span>
                            <i></i><i></i><i></i><i></i><i></i>
                        </div>
                    </div>
                </figure>
            </div>
        </div>
    </section>

    <!-- SECTION 1 : INTRODUCTION ÉDITORIALE PRESTIGE -->
    <section class="services-introduction" aria-labelledby="services-introduction-title">
        <div class="container services-intro-container">
            <div class="services-intro-header">
                <span class="services-tag">Une expertise mobilisable</span>
                <h2 id="services-introduction-title">Une réponse utile,<br>au bon moment.</h2>
                <div class="services-intro-badge-card">
                    <div class="services-intro-badge-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        </svg>
                    </div>
                    <div>
                        <strong>Sécurisation Stratégique</strong>
                        <span>Des solutions concrètes pour décider avec certitude</span>
                    </div>
                </div>
            </div>
            
            <div class="services-intro-body">
                <p class="services-intro-lead">Notre ambition est de permettre aux dirigeants, à leurs collaborateurs et à leurs partenaires de bénéficier d’un accompagnement fiable, réactif et directement opérationnel.</p>
                <p>Chaque service proposé par l’ICP poursuit le même objectif fondamental : apporter des réponses concrètes afin de faciliter la prise de décision, renforcer la sécurité juridique et économique des entreprises et contribuer activement à leur pérennité.</p>
                
                <div class="services-pillars-row">
                    <div class="services-pillar-item">
                        <span class="services-pillar-bullet"></span>
                        <div>
                            <strong>Fiabilité &amp; Rigueur</strong>
                            <span>Expertises éprouvées et validées par le terrain</span>
                        </div>
                    </div>
                    <div class="services-pillar-item">
                        <span class="services-pillar-bullet"></span>
                        <div>
                            <strong>Réactivité Continue</strong>
                            <span>Prise en charge rapide de vos problématiques</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2 : LES PÔLES DE SERVICES ICP -->
    <section class="services-catalogue" id="accompagnements" aria-labelledby="services-catalogue-title">
        <div class="container">
            <div class="services-section-heading">
                <span class="services-tag">Les services ICP</span>
                <h2 id="services-catalogue-title">Des expertises reliées<br>aux réalités du terrain.</h2>
                <p>Un ensemble cohérent de ressources et de compétences pour éclairer, protéger et faire progresser chaque décision d'entreprise.</p>
            </div>

            <div class="services-grid">
            <!-- ESPACE ASSISTANCE JURIDIQUE : STYLE AFRICAIN SOBRE & STATUTAIRE -->
            <div class="services-legal-african">
                <div class="services-legal-african-pattern" aria-hidden="true"></div>
                <div class="services-legal-african-inner">
                    <div class="services-legal-african-main">
                        <div class="services-legal-african-eyebrow">
                            <span class="african-gold-tag">Pôle d’Excellence Juridique</span>
                        </div>
                        <h3 class="services-legal-african-title">Assistance juridique &amp; Conseil d’experts</h3>
                        <p class="services-legal-african-quote">« La sagesse d'anticiper, la force de protéger les bâtisseurs. »</p>
                        <p class="services-legal-african-text">
                            Nos membres bénéficient d’un accompagnement dédié sur l’ensemble des problématiques juridiques liées à leur activité. Les réponses apportées par nos juristes et experts permettent de sécuriser vos contrats, d'anticiper les risques contentieux et d’apporter rapidement des solutions adaptées aux situations rencontrées sur le terrain.
                        </p>
                        <div class="services-legal-african-badge">
                            <svg class="african-emblem-icon" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M12 3v18M5 7h14M7 7l-3 6h6L7 7Zm10 0-3 6h6l-3-6ZM5 20h14"/>
                            </svg>
                            <span>Protection, équité et sécurité pour chaque projet</span>
                        </div>
                    </div>

                    <div class="services-legal-african-pillars">
                        <div class="african-pillar-card">
                            <div class="african-pillar-marker">
                                <span class="african-pillar-num">01</span>
                                <span class="african-pillar-dash"></span>
                            </div>
                            <div class="african-pillar-content">
                                <h4>Sécurisation Contractuelle</h4>
                                <p>Audit et rédaction de vos contrats, sous-traitance, marchés et garanties pour prévenir tout déséquilibre.</p>
                            </div>
                        </div>

                        <div class="african-pillar-card">
                            <div class="african-pillar-marker">
                                <span class="african-pillar-num">02</span>
                                <span class="african-pillar-dash"></span>
                            </div>
                            <div class="african-pillar-content">
                                <h4>Prévention des Litiges</h4>
                                <p>Anticipation des risques contentieux et accompagnement réactif en négociation et résolution amiable.</p>
                            </div>
                        </div>

                        <div class="african-pillar-card">
                            <div class="african-pillar-marker">
                                <span class="african-pillar-num">03</span>
                                <span class="african-pillar-dash"></span>
                            </div>
                            <div class="african-pillar-content">
                                <h4>Conseil Opérationnel Direct</h4>
                                <p>Accès privilégié à nos juristes spécialisés dans le secteur de la construction et de la promotion.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Service 2 : Veille réglementaire et économique -->
                <article class="service-card">
                    <div class="service-card-top">
                        <div class="service-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3a9 9 0 1 0 9 9M12 7a5 5 0 1 0 5 5M12 11a1 1 0 1 0 1 1M19 5l-5.8 5.8"/></svg>
                        </div>
                        <span class="service-card-focus">Anticiper</span>
                    </div>
                    <div class="service-card-body">
                        <h3>Veille réglementaire et économique</h3>
                        <p>L’ICP assure une veille permanente des évolutions législatives, réglementaires, techniques et économiques ayant un impact sur les métiers de la construction. Cette information est sélectionnée, analysée et synthétisée afin d’être directement exploitable dans vos arbitrages.</p>
                    </div>
                    <div class="service-card-footer">
                        <span class="service-meta-tag">Décryptage normatif &amp; Marché</span>
                    </div>
                </article>

                <!-- Service 3 : Formations professionnelles -->
                <article class="service-card">
                    <div class="service-card-top">
                        <div class="service-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 5.5A3.5 3.5 0 0 1 7.5 5H12v14H7.5A3.5 3.5 0 0 0 4 22V5.5ZM20 5.5A3.5 3.5 0 0 0 16.5 5H12v14h4.5A3.5 3.5 0 0 1 20 22V5.5Z"/></svg>
                        </div>
                        <span class="service-card-focus">Développer</span>
                    </div>
                    <div class="service-card-body">
                        <h3>Formations certifiantes</h3>
                        <p>Parce que les compétences constituent un levier essentiel de performance, l’ICP déploie un programme de formations professionnelles certifié Qualiopi, couvrant les principaux enjeux juridiques, techniques, commerciaux, managériaux et environnementaux du secteur.</p>
                    </div>
                    <div class="service-card-footer">
                        <span class="service-meta-tag">Certification Qualiopi &amp; Pratique métier</span>
                    </div>
                </article>

                <!-- Service 4 : Innovation -->
                <article class="service-card">
                    <div class="service-card-top">
                        <div class="service-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M18.4 5.6l-2.8 2.8M8.4 15.6l-2.8 2.8"/><circle cx="12" cy="12" r="3.5"/></svg>
                        </div>
                        <span class="service-card-focus">Explorer</span>
                    </div>
                    <div class="service-card-body">
                        <h3>Innovation &amp; Prospective</h3>
                        <p>Identifier les solutions qui feront la différence demain fait partie intégrante de notre mission. L’ICP analyse les nouveaux matériaux, les technologies émergentes, les solutions numériques et l’intelligence artificielle afin d’accompagner ses membres dans la mutation de leurs pratiques.</p>
                    </div>
                    <div class="service-card-footer">
                        <span class="service-meta-tag">Transition écologique &amp; Numérique</span>
                    </div>
                </article>

                <!-- Service 5 : Réseau et partage d'expérience -->
                <article class="service-card">
                    <div class="service-card-top">
                        <div class="service-card-icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="m8.3 10.8 7.4-3.6M8.3 13.2l7.4 3.6"/></svg>
                        </div>
                        <span class="service-card-focus">Relier</span>
                    </div>
                    <div class="service-card-body">
                        <h3>Réseau &amp; Partage d’expérience</h3>
                        <p>L’Institut favorise les échanges qualifiés entre professionnels, experts et partenaires institutionnels. Cette dynamique collective permet à chacun de confronter ses retours d’expérience, d’adopter les meilleures pratiques et de développer des opportunités d’affaires durables.</p>
                    </div>
                    <div class="service-card-footer">
                        <span class="service-meta-tag">Synergies &amp; Cercles d'échanges</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- SECTION 3 : NOTRE MANIÈRE D'AGIR -->
    <section class="services-utility" aria-labelledby="services-utility-title">
        <div class="container services-utility-container">
            <div class="services-utility-intro">
                <span class="services-tag">Notre manière d’agir</span>
                <h2 id="services-utility-title">Une approche résolument fondée sur l’utilité.</h2>
                <p>Au-delà du catalogue de services, l’ICP se distingue par une approche rigoureuse et pragmatique. Notre priorité constante est d’apporter des solutions concrètes, immédiatement mobilisables et créatrices de valeur pour les professionnels qui nous accordent leur confiance.</p>
            </div>

            <div class="services-utility-cards">
                <div class="utility-card">
                    <span class="utility-card-index">01</span>
                    <h3>Précision Stratégique</h3>
                    <p>Des analyses fouillées et documentées pour lever toute incertitude juridique, technique ou réglementaire.</p>
                </div>

                <div class="utility-card">
                    <span class="utility-card-index">02</span>
                    <h3>Agilité &amp; Proximité</h3>
                    <p>Un accès direct et fluide aux experts de l'Institut, sans intermédiation lourde ni délai superflu.</p>
                </div>

                <div class="utility-card">
                    <span class="utility-card-index">03</span>
                    <h3>Impact Opérationnel</h3>
                    <p>Des préconisations et outils directement transposables sur vos opérations et chantiers au quotidien.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 : SIGNATURE & ENGAGEMENT ICP -->
    <section class="services-signature" aria-labelledby="services-signature-title">
        <div class="container">
            <div class="services-signature-panel">
                <span class="services-tag services-tag--light">L’engagement ICP</span>
                <h2 id="services-signature-title">Faire de chaque<br>décision un levier.</h2>
                <p>Parce que chaque décision engage la trajectoire de votre entreprise, nous mettons notre expertise, notre réseau et notre maîtrise du secteur au service de votre réussite pérenne.</p>
                
                <div class="services-signature-actions">
                    <a class="services-btn-primary" href="<?php echo $base_url; ?>/a-propos">
                        <span>Découvrir l'Institut</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                    <a class="services-btn-secondary" href="<?php echo $base_url; ?>/espace-membres">
                        <span>Accès Membres</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
