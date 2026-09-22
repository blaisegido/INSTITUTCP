<?php
$page_title = "Services - Institut CP";
$page_description = "Des services fiables, r&eacute;actifs et directement op&eacute;rationnels pour les professionnels de la construction.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="services-page">
    <section class="services-cover" aria-labelledby="services-title">
        <div class="container">
            <nav class="services-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?php echo $base_url; ?>/">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>Services</span>
            </nav>

            <div class="services-cover-grid">
                <div class="services-cover-copy">
                    <p class="services-eyebrow">L&rsquo;accompagnement ICP</p>
                    <h1 id="services-title">Des r&eacute;ponses<br>pour avancer.</h1>
                    <p class="services-cover-lead">Accompagner les professionnels de la construction dans leurs enjeux d&rsquo;aujourd&rsquo;hui et de demain.</p>
                    <p class="services-cover-text">L&rsquo;Institut des Constructeurs et des Promoteurs met &agrave; la disposition de ses membres un ensemble de services con&ccedil;us pour r&eacute;pondre aux exigences d&rsquo;un secteur en constante &eacute;volution.</p>
                    <div class="services-cover-actions">
                        <a class="services-text-link" href="#accompagnements">
                            D&eacute;couvrir les services <span aria-hidden="true">&#8595;</span>
                        </a>
                        <p class="services-cover-note">Fiabilit&eacute; <span aria-hidden="true">&middot;</span> R&eacute;activit&eacute; <span aria-hidden="true">&middot;</span> Action</p>
                    </div>
                </div>

                <figure class="services-cover-figure">
                    <div class="services-cover-image-shell">
                        <img src="<?php echo $base_url; ?>/assets/img/home/plans.webp" alt="Plans de construction, outils de mesure et cl&eacute;s pos&eacute;s sur une table de travail">
                        <span class="services-cover-tag">Le plan de r&eacute;ponse ICP</span>
                        <div class="services-plan-mark" aria-hidden="true">
                            <span></span>
                            <i></i><i></i><i></i><i></i><i></i>
                        </div>
                    </div>
                    <figcaption>Transformer la complexit&eacute; du secteur en leviers d&rsquo;action.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="services-introduction" aria-labelledby="services-introduction-title">
        <div class="container services-introduction-grid">
            <div>
                <p class="services-eyebrow services-eyebrow--blue">Une expertise mobilisable</p>
                <h2 id="services-introduction-title">Une r&eacute;ponse utile, au bon moment.</h2>
            </div>
            <div class="services-introduction-copy">
                <p>Notre ambition est de permettre aux dirigeants, &agrave; leurs collaborateurs et &agrave; leurs partenaires de b&eacute;n&eacute;ficier d&rsquo;un accompagnement fiable, r&eacute;actif et directement op&eacute;rationnel.</p>
                <p>Chaque service propos&eacute; par l&rsquo;ICP poursuit le m&ecirc;me objectif&nbsp;: apporter des r&eacute;ponses concr&egrave;tes afin de faciliter la prise de d&eacute;cision, renforcer la s&eacute;curit&eacute; des entreprises et contribuer &agrave; leur d&eacute;veloppement.</p>
            </div>
        </div>
    </section>

    <section class="services-catalogue" id="accompagnements" aria-labelledby="services-catalogue-title">
        <div class="container">
            <div class="services-section-heading">
                <div>
                    <p class="services-eyebrow services-eyebrow--blue">Les services ICP</p>
                    <h2 id="services-catalogue-title">Des expertises reli&eacute;es<br>aux r&eacute;alit&eacute;s du terrain.</h2>
                </div>
                <p>Un ensemble coh&eacute;rent de ressources pour &eacute;clairer, prot&eacute;ger et faire progresser chaque d&eacute;cision.</p>
            </div>

            <div class="services-grid">
                <article class="service-card service-card--law" data-focus="S&eacute;curiser">
                    <div class="service-card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v18M5 7h14M7 7l-3 6h6L7 7Zm10 0-3 6h6l-3-6ZM5 20h14"/></svg>
                    </div>
                    <h3>Assistance juridique</h3>
                    <p>Nos membres b&eacute;n&eacute;ficient d&rsquo;un accompagnement sur l&rsquo;ensemble des probl&eacute;matiques juridiques li&eacute;es &agrave; leur activit&eacute;. Les r&eacute;ponses apport&eacute;es par nos experts permettent de s&eacute;curiser les d&eacute;cisions et d&rsquo;apporter rapidement des solutions adapt&eacute;es aux situations rencontr&eacute;es sur le terrain.</p>
                </article>

                <article class="service-card service-card--watch" data-focus="Anticiper">
                    <div class="service-card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3a9 9 0 1 0 9 9M12 7a5 5 0 1 0 5 5M12 11a1 1 0 1 0 1 1M19 5l-5.8 5.8"/></svg>
                    </div>
                    <h3>Veille r&eacute;glementaire et &eacute;conomique</h3>
                    <p>L&rsquo;ICP assure une veille permanente des &eacute;volutions l&eacute;gislatives, r&eacute;glementaires, techniques et &eacute;conomiques ayant un impact sur les m&eacute;tiers de la construction. Cette information est s&eacute;lectionn&eacute;e, analys&eacute;e et pr&eacute;sent&eacute;e de mani&egrave;re claire afin d&rsquo;&ecirc;tre directement exploitable.</p>
                </article>

                <article class="service-card service-card--training" data-focus="D&eacute;velopper">
                    <div class="service-card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 5.5A3.5 3.5 0 0 1 7.5 5H12v14H7.5A3.5 3.5 0 0 0 4 22V5.5ZM20 5.5A3.5 3.5 0 0 0 16.5 5H12v14h4.5A3.5 3.5 0 0 1 20 22V5.5Z"/></svg>
                    </div>
                    <h3>Formations</h3>
                    <p>Parce que les comp&eacute;tences constituent un levier essentiel de performance, l&rsquo;ICP d&eacute;veloppe un programme de formations anim&eacute; par des sp&eacute;cialistes reconnus, couvrant les principaux enjeux juridiques, techniques, commerciaux, manag&eacute;riaux et li&eacute;s aux nouvelles technologies.</p>
                </article>

                <article class="service-card service-card--innovation" data-focus="Explorer">
                    <div class="service-card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v4M12 17v4M3 12h4M17 12h4M5.6 5.6l2.8 2.8M15.6 15.6l2.8 2.8M18.4 5.6l-2.8 2.8M8.4 15.6l-2.8 2.8"/><circle cx="12" cy="12" r="3.5"/></svg>
                    </div>
                    <h3>Innovation</h3>
                    <p>Identifier les solutions qui feront la diff&eacute;rence demain fait partie de notre mission. L&rsquo;ICP assure une veille permanente sur les nouveaux mat&eacute;riaux, les technologies &eacute;mergentes, les solutions num&eacute;riques et l&rsquo;intelligence artificielle afin d&rsquo;accompagner ses membres dans l&rsquo;&eacute;volution de leurs m&eacute;tiers.</p>
                </article>

                <article class="service-card service-card--network" data-focus="Relier">
                    <div class="service-card-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="m8.3 10.8 7.4-3.6M8.3 13.2l7.4 3.6"/></svg>
                    </div>
                    <h3>R&eacute;seau et partage d&rsquo;exp&eacute;rience</h3>
                    <p>L&rsquo;Institut favorise les &eacute;changes entre professionnels, experts et partenaires. Cette dynamique permet &agrave; chacun de b&eacute;n&eacute;ficier de retours d&rsquo;exp&eacute;rience, de bonnes pratiques et d&rsquo;opportunit&eacute;s de collaboration dans un climat de confiance.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="services-utility" aria-labelledby="services-utility-title">
        <div class="container services-utility-grid">
            <div class="services-utility-mark" aria-hidden="true">
                <span>ICP</span>
                <i></i><i></i><i></i>
            </div>
            <div>
                <p class="services-eyebrow services-eyebrow--blue">Notre mani&egrave;re d&rsquo;agir</p>
                <h2 id="services-utility-title">Une approche fond&eacute;e sur l&rsquo;utilit&eacute;</h2>
                <p>Au-del&agrave; des services propos&eacute;s, l&rsquo;ICP se distingue par une approche r&eacute;solument pragmatique. Notre priorit&eacute; est d&rsquo;apporter des solutions concr&egrave;tes, rapidement mobilisables et cr&eacute;atrices de valeur pour les professionnels qui nous accordent leur confiance.</p>
            </div>
        </div>
    </section>

    <section class="services-signature" aria-labelledby="services-signature-title">
        <div class="container">
            <div class="services-signature-inner">
                <p class="services-eyebrow services-eyebrow--light">L&rsquo;engagement ICP</p>
                <h2 id="services-signature-title">Faire de chaque<br>d&eacute;cision un levier.</h2>
                <p>Parce que chaque d&eacute;cision compte, nous mettons notre expertise, notre r&eacute;seau et notre connaissance du secteur au service de votre r&eacute;ussite.</p>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
