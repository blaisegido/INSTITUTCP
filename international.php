<?php
$page_title = "ICP International - Institut CP";
$page_description = "Ouvrir de nouvelles perspectives pour la construction française.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="international-page">
    <section class="international-hero" aria-labelledby="international-title">
        <div class="container">
            <nav class="international-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?php echo $base_url; ?>/">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>ICP International</span>
            </nav>
            <div class="international-hero-grid">
                <div>
                    <p class="international-eyebrow">ICP International</p>
                    <h1 id="international-title">Ouvrir de nouvelles<br>perspectives pour la<br>construction fran&ccedil;aise</h1>
                </div>
                <figure class="international-hero-visual">
                    <img src="<?php echo $base_url; ?>/assets/img/international/international-hero.webp" alt="Fa&ccedil;ade d'un immeuble contemporain">
                </figure>
            </div>
        </div>
    </section>

    <!-- SECTION 1 : MANIFESTE ET VISION STRATÉGIQUE -->
    <section class="intl-section intl-manifesto" aria-labelledby="intl-manifesto-title">
        <div class="container">
            <div class="intl-manifesto-grid">
                <div class="intl-manifesto-lead">
                    <span class="intl-badge">Vision Strat&eacute;gique</span>
                    <h2 id="intl-manifesto-title" class="intl-heading-xl">Connecter les b&acirc;tisseurs fran&ccedil;ais aux meilleures innovations du monde.</h2>
                </div>
                <div class="intl-manifesto-copy">
                    <p class="intl-lead-text">
                        La construction est aujourd&rsquo;hui un secteur en pleine mutation. Les innovations se d&eacute;veloppent &agrave; l&rsquo;&eacute;chelle mondiale, les technologies &eacute;voluent rapidement et les entreprises les plus performantes sont celles qui savent identifier les solutions cr&eacute;atrices de valeur, o&ugrave; qu&rsquo;elles soient.
                    </p>
                    <p class="intl-body-text">
                        Notre ambition est de cr&eacute;er des passerelles entre les acteurs fran&ccedil;ais de la construction et les entreprises les plus innovantes &agrave; travers le monde.
                    </p>
                </div>
            </div>

            <!-- 3 REPÈRES D'EXCELLENCE -->
            <div class="intl-benchmarks">
                <div class="intl-benchmark-card">
                    <span class="intl-benchmark-num">01</span>
                    <h3 class="intl-benchmark-title">Veille Active &amp; Mondiale</h3>
                    <p class="intl-benchmark-desc">D&eacute;tecter les technologies de rupture et nouveaux proc&eacute;d&eacute;s constructifs d&egrave;s leur &eacute;mergence.</p>
                </div>
                <div class="intl-benchmark-card">
                    <span class="intl-benchmark-num">02</span>
                    <h3 class="intl-benchmark-title">S&eacute;lectivit&eacute; &amp; Rigueur</h3>
                    <p class="intl-benchmark-desc">Analyser la maturit&eacute;, la rentabilit&eacute; et la conformit&eacute; aux exigences r&eacute;glementaires fran&ccedil;aises.</p>
                </div>
                <div class="intl-benchmark-card">
                    <span class="intl-benchmark-num">03</span>
                    <h3 class="intl-benchmark-title">Acc&egrave;s Direct aux D&eacute;cideurs</h3>
                    <p class="intl-benchmark-desc">Faciliter des rencontres qualifi&eacute;es entre dirigeants, promoteurs et industriels internationaux.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2 : VEILLE PERMANENTE (GRID BILATÉRALE + VISUEL 1) -->
    <section class="intl-section intl-section--alt" aria-labelledby="intl-chap1-title">
        <div class="container">
            <div class="intl-split-grid">
                <div class="intl-split-content">
                    <div class="intl-chapter-indicator">
                        <span class="intl-chapter-num">01</span>
                        <span class="intl-chapter-tag">Observation &amp; Prospection</span>
                    </div>
                    <h2 id="intl-chap1-title" class="intl-heading-lg">Une veille internationale permanente</h2>
                    <div class="intl-prose">
                        <p class="intl-prose-intro">
                            Chaque ann&eacute;e, des centaines d&rsquo;entreprises d&eacute;veloppent de nouveaux mat&eacute;riaux, des &eacute;quipements performants, des solutions constructives innovantes ou des applications fond&eacute;es sur l&rsquo;intelligence artificielle.
                        </p>
                        <p>
                            Notre mission consiste &agrave; identifier ces innovations, &agrave; les analyser et &agrave; &eacute;valuer leur pertinence pour le march&eacute; fran&ccedil;ais.
                        </p>
                        <p>
                            Cette veille permanente permet &agrave; l&rsquo;ICP de proposer &agrave; ses membres une vision &eacute;largie des &eacute;volutions qui fa&ccedil;onneront la construction de demain.
                        </p>
                    </div>
                    
                    <div class="intl-focus-tags">
                        <span class="intl-tag">Mat&eacute;riaux D&eacute;carbon&eacute;s</span>
                        <span class="intl-tag">Industrialisation &amp; Hors-site</span>
                        <span class="intl-tag">IA &amp; Gestion de Chantier</span>
                        <span class="intl-tag">Performance &Eacute;nerg&eacute;tique</span>
                    </div>
                </div>

                <div class="intl-split-media">
                    <figure class="intl-media-frame">
                        <div class="intl-img-wrap">
                            <img src="<?php echo $base_url; ?>/assets/img/international/international-detail.webp" alt="Structure et d&eacute;tails d'une construction" width="690" height="460" loading="lazy">
                        </div>
                        <figcaption class="intl-media-caption">
                            <span class="intl-caption-icon">&#9670;</span>
                            <span>Les id&eacute;es circulent. Les usages se transforment.</span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3 : FACILITER L'ACCÈS AU MARCHÉ FRANÇAIS -->
    <section class="intl-section" aria-labelledby="intl-chap2-title">
        <div class="container">
            <div class="intl-center-header">
                <div class="intl-chapter-indicator intl-chapter-indicator--center">
                    <span class="intl-chapter-num">02</span>
                    <span class="intl-chapter-tag">D&eacute;ploiement Strat&eacute;gique</span>
                </div>
                <h2 id="intl-chap2-title" class="intl-heading-lg">Faciliter l&rsquo;acc&egrave;s au march&eacute; fran&ccedil;ais</h2>
                <p class="intl-section-subhead">Accompagner l&rsquo;int&eacute;gration des technologies mondiales au sein de l&rsquo;&eacute;cosyst&egrave;me le plus exigeant.</p>
            </div>

            <div class="intl-market-grid">
                <div class="intl-market-card intl-market-card--challenge">
                    <div class="intl-card-head">
                        <span class="intl-card-badge">Le D&eacute;fi</span>
                        <h3>Un cadre r&eacute;glementaire et technique &eacute;lev&eacute;</h3>
                    </div>
                    <p class="intl-card-body">
                        La France repr&eacute;sente l&rsquo;un des march&eacute;s de la construction les plus exigeants d&rsquo;Europe. Pour de nombreuses entreprises internationales, comprendre son fonctionnement, identifier les bons interlocuteurs et &eacute;tablir des relations de confiance constitue un v&eacute;ritable d&eacute;fi.
                    </p>
                </div>

                <div class="intl-market-card intl-market-card--solution">
                    <div class="intl-card-head">
                        <span class="intl-card-badge intl-card-badge--primary">La R&eacute;ponse ICP</span>
                        <h3>Un r&eacute;seau op&eacute;rationnel de r&eacute;f&eacute;rence</h3>
                    </div>
                    <p class="intl-card-body">
                        Gr&acirc;ce &agrave; son r&eacute;seau de constructeurs, de promoteurs, d&rsquo;industriels, de bureaux d&rsquo;&eacute;tudes et d&rsquo;experts, l&rsquo;ICP accompagne les entreprises souhaitant d&eacute;velopper leur pr&eacute;sence sur le march&eacute; fran&ccedil;ais.
                    </p>
                    <p class="intl-card-body">
                        Notre r&ocirc;le est de faciliter les &eacute;changes, de cr&eacute;er des rencontres qualifi&eacute;es et de permettre &agrave; chaque partenaire d&rsquo;appr&eacute;hender les sp&eacute;cificit&eacute;s du secteur dans les meilleures conditions.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4 : SÉLECTIONNER LES INNOVATIONS UTILES (SPLIT + VISUEL 2) -->
    <section class="intl-section intl-section--alt" aria-labelledby="intl-chap3-title">
        <div class="container">
            <div class="intl-split-grid intl-split-grid--reverse">
                <div class="intl-split-content">
                    <div class="intl-chapter-indicator">
                        <span class="intl-chapter-num">03</span>
                        <span class="intl-chapter-tag">S&eacute;lection &amp; Valeur Ajout&eacute;e</span>
                    </div>
                    <h2 id="intl-chap3-title" class="intl-heading-lg">S&eacute;lectionner les innovations utiles</h2>
                    <div class="intl-prose">
                        <p class="intl-prose-intro">
                            L&rsquo;innovation n&rsquo;a de valeur que lorsqu&rsquo;elle r&eacute;pond &agrave; un besoin concret. C&rsquo;est pourquoi l&rsquo;ICP privil&eacute;gie une approche s&eacute;lective fond&eacute;e sur l&rsquo;int&eacute;r&ecirc;t r&eacute;el des professionnels fran&ccedil;ais.
                        </p>
                        <p>
                            Chaque solution &eacute;tudi&eacute;e fait l&rsquo;objet d&rsquo;une analyse portant notamment sur sa maturit&eacute;, sa valeur ajout&eacute;e, sa compatibilit&eacute; avec le march&eacute; fran&ccedil;ais et sa capacit&eacute; &agrave; r&eacute;pondre aux attentes des constructeurs, des promoteurs et de leurs clients.
                        </p>
                        <p>
                            Cette exigence permet &agrave; l&rsquo;Institut de pr&eacute;senter des innovations pertinentes, cr&eacute;dibles et imm&eacute;diatement exploitables.
                        </p>
                    </div>

                    <!-- CRITÈRES D'ANALYSE -->
                    <div class="intl-criteria-grid">
                        <div class="intl-criterion">
                            <span class="intl-criterion-bullet"></span>
                            <div>
                                <strong>Maturit&eacute; Technique</strong>
                                <span>Solutions &eacute;prouv&eacute;es et imm&eacute;diatement activables</span>
                            </div>
                        </div>
                        <div class="intl-criterion">
                            <span class="intl-criterion-bullet"></span>
                            <div>
                                <strong>Valeur &Eacute;conomique</strong>
                                <span>Gains mesurables pour les constructeurs et promoteurs</span>
                            </div>
                        </div>
                        <div class="intl-criterion">
                            <span class="intl-criterion-bullet"></span>
                            <div>
                                <strong>Conformit&eacute; &amp; Normes</strong>
                                <span>Ad&eacute;quation avec les r&eacute;glementations fran&ccedil;aises</span>
                            </div>
                        </div>
                        <div class="intl-criterion">
                            <span class="intl-criterion-bullet"></span>
                            <div>
                                <strong>B&eacute;n&eacute;fice Usager</strong>
                                <span>R&eacute;ponse directe aux attentes des acqu&eacute;reurs finaux</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="intl-split-media">
                    <figure class="intl-media-frame">
                        <div class="intl-img-wrap">
                            <img src="<?php echo $base_url; ?>/assets/img/international/international-meeting.webp" alt="Professionnels r&eacute;unis autour d'un projet" width="620" height="420" loading="lazy">
                        </div>
                        <figcaption class="intl-media-caption">
                            <span class="intl-caption-icon">&#9670;</span>
                            <span>Les bonnes rencontres donnent une direction aux innovations.</span>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5 : PARTENARIATS DURABLES & VISION TOURNÉE VERS L'AVENIR -->
    <section class="intl-section" aria-labelledby="intl-chap4-title">
        <div class="container">
            <div class="intl-duo-layout">
                <div class="intl-duo-column">
                    <div class="intl-chapter-indicator">
                        <span class="intl-chapter-num">04</span>
                        <span class="intl-chapter-tag">Confiance &amp; P&eacute;rennit&eacute;</span>
                    </div>
                    <h2 id="intl-chap4-title" class="intl-heading-md">Construire des partenariats durables</h2>
                    <div class="intl-prose">
                        <p>
                            Nous privil&eacute;gions des collaborations fond&eacute;es sur la confiance, la transparence et une vision commune du d&eacute;veloppement.
                        </p>
                        <p>
                            Notre objectif est de cr&eacute;er des partenariats durables, capables d&rsquo;apporter une valeur tangible aux professionnels fran&ccedil;ais tout en offrant aux entreprises internationales un acc&egrave;s structur&eacute; &agrave; un march&eacute; exigeant et strat&eacute;gique.
                        </p>
                    </div>
                    <div class="intl-card-quote">
                        <p>&laquo;&nbsp;Des alliances solides fond&eacute;es sur la clart&eacute; op&eacute;rationnelle et l&rsquo;int&eacute;r&ecirc;t mutuel.&nbsp;&raquo;</p>
                    </div>
                </div>

                <div class="intl-duo-column">
                    <div class="intl-chapter-indicator">
                        <span class="intl-chapter-num">05</span>
                        <span class="intl-chapter-tag">Horizon 2030 &amp; Prospective</span>
                    </div>
                    <h2 class="intl-heading-md">Une vision tourn&eacute;e vers l&rsquo;avenir</h2>
                    <div class="intl-prose">
                        <p>
                            Les grands d&eacute;fis de demain que sont la transition environnementale, la performance &eacute;nerg&eacute;tique, l&rsquo;industrialisation, l&rsquo;intelligence artificielle, la digitalisation et les nouveaux usages, d&eacute;passent largement les fronti&egrave;res nationales.
                        </p>
                        <p>
                            L&rsquo;ICP est convaincu que les meilleures r&eacute;ponses na&icirc;tront de la rencontre entre les expertises fran&ccedil;aises et les innovations d&eacute;velopp&eacute;es &agrave; travers le monde.
                        </p>
                        <p>
                            Nous affirmons notre volont&eacute; d&rsquo;accompagner cette dynamique et de contribuer &agrave; construire un secteur toujours plus innovant, performant et ouvert sur l&rsquo;international.
                        </p>
                        <p class="intl-prose-highlight">
                            Parce que l&rsquo;innovation ne conna&icirc;t pas de fronti&egrave;res, les opportunit&eacute;s de demain se construisent d&egrave;s aujourd&rsquo;hui.
                        </p>
                    </div>
                </div>
            </div>

            <!-- VISUEL DE CLÔTURE HORIZON -->
            <figure class="intl-future-visual">
                <div class="intl-img-wrap">
                    <img src="<?php echo $base_url; ?>/assets/img/international/international-future.webp" alt="Espace de travail contemporain ouvert sur la ville" width="1160" height="520" loading="lazy">
                </div>
                <figcaption class="intl-media-caption intl-media-caption--center">
                    <span class="intl-caption-icon">&#9670;</span>
                    <span>Une vision fran&ccedil;aise, ouverte sur le monde.</span>
                </figcaption>
            </figure>
        </div>
    </section>

    <!-- SECTION 6 : CITATION MONUMENTALE ÉDITORIALE -->
    <section class="intl-quote-section" aria-label="Devise ICP International">
        <div class="container">
            <div class="intl-quote-frame">
                <span class="intl-quote-mark intl-quote-mark--open" aria-hidden="true">&ldquo;</span>
                <blockquote class="intl-quote-statement">
                    Nous ouvrons les portes du march&eacute; fran&ccedil;ais aux innovations du monde et ouvrons les portes du monde aux professionnels fran&ccedil;ais.
                </blockquote>
                <span class="intl-quote-mark intl-quote-mark--close" aria-hidden="true">&rdquo;</span>
                <div class="intl-quote-author">
                    <strong>Institut des Constructeurs et des Promoteurs</strong>
                    <span>ICP International &mdash; P&ocirc;le Veille &amp; Strat&eacute;gie</span>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 7 : PASSERELLE DE CONTACT & ACTION -->
    <section class="intl-section intl-section--alt" aria-labelledby="intl-cta-title">
        <div class="container">
            <div class="intl-cta-box">
                <div class="intl-cta-content">
                    <span class="intl-badge">Engagement &amp; Coop&eacute;ration</span>
                    <h2 id="intl-cta-title" class="intl-heading-md">Vous d&eacute;veloppez une innovation de rupture ou souhaitez enrichir vos pratiques ?</h2>
                    <p class="intl-body-text">
                        Que vous soyez une entreprise internationale souhaitant aborder le march&eacute; fran&ccedil;ais ou un d&eacute;cideur fran&ccedil;ais en qu&ecirc;te d&rsquo;opportunit&eacute;s technologiques mondiales, nos &eacute;quipes sont &agrave; votre &eacute;coute.
                    </p>
                </div>
                <div class="intl-cta-actions">
                    <a href="<?php echo $base_url; ?>/contact" class="intl-btn intl-btn--primary">
                        Contacter le p&ocirc;le International <span aria-hidden="true">&#8594;</span>
                    </a>
                    <a href="<?php echo $base_url; ?>/a-propos" class="intl-btn intl-btn--secondary">
                        D&eacute;couvrir l&rsquo;Institut
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
