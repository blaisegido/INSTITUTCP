<?php
$page_title = "L'Institut des Constructeurs et des Promoteurs";
$page_description = "D&eacute;couvrez la vocation, la vision et les engagements de l'Institut des Constructeurs et des Promoteurs.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="about-page">
    <section class="about-cover" aria-labelledby="about-title">
        <div class="container">
            <nav class="about-breadcrumb" aria-label="Fil d'Ariane">
                <a href="<?php echo $base_url; ?>/">Accueil</a>
                <span aria-hidden="true">/</span>
                <span>L&rsquo;Institut</span>
            </nav>

            <div class="about-cover-grid">
                <div class="about-cover-copy">
                    <p class="about-eyebrow">Institut CP &middot; Depuis le terrain</p>
                    <h1 id="about-title">Faire avancer<br>ceux qui construisent.</h1>
                    <p class="about-cover-lead">
                        L&rsquo;Institut des Constructeurs et des Promoteurs r&eacute;unit les professionnels qui veulent comprendre les mutations du secteur, d&eacute;cider avec justesse et transformer les enjeux en opportunit&eacute;s.
                    </p>
                    <div class="about-cover-actions">
                        <a class="about-text-link" href="#vocation">
                            D&eacute;couvrir notre vocation <span aria-hidden="true">&#8595;</span>
                        </a>
                        <p class="about-cover-note">Ind&eacute;pendance <span aria-hidden="true">&middot;</span> Expertise <span aria-hidden="true">&middot;</span> Transmission</p>
                    </div>
                </div>

                <figure class="about-cover-figure">
                    <div class="about-cover-image-shell">
                        <span class="about-cover-index" aria-hidden="true">01 / 06</span>
                        <img src="<?php echo $base_url; ?>/assets/img/home/salle_de_reunion.webp" alt="Des professionnels r&eacute;unis autour d&rsquo;une table de travail">
                    </div>
                    <figcaption>Une communaut&eacute; engag&eacute;e, des &eacute;changes utiles, des d&eacute;cisions mieux inform&eacute;es.</figcaption>
                </figure>
            </div>
        </div>
    </section>

    <section class="about-manifesto" id="vocation" aria-labelledby="vocation-title">
        <div class="container">
            <div class="about-section-intro">
                <p class="about-eyebrow about-eyebrow--blue">Notre vocation</p>
                <h2 id="vocation-title">Une institution utile aux d&eacute;cideurs.</h2>
            </div>

            <div class="about-manifesto-layout">
                <p class="about-manifesto-statement">
                    Depuis sa cr&eacute;ation, l&rsquo;ICP accompagne les constructeurs, promoteurs, am&eacute;nageurs et l&rsquo;ensemble des acteurs engag&eacute;s dans la construction neuve.
                </p>
                <div class="about-manifesto-copy">
                    <p>
                        Notre r&ocirc;le est de cr&eacute;er les conditions de d&eacute;cisions plus sereines et d&rsquo;un d&eacute;veloppement durable. Nous concevons chaque action au plus pr&egrave;s des besoins exprim&eacute;s par les professionnels.
                    </p>
                    <p>
                        Ici, l&rsquo;expertise ne reste pas th&eacute;orique&nbsp;: elle devient un rep&egrave;re, une m&eacute;thode et un levier d&rsquo;action.
                    </p>
                </div>
            </div>

            <div class="about-priorities" aria-label="Nos trois priorit&eacute;s">
                <article>
                    <span>01</span>
                    <h3>Gagner du temps</h3>
                    <p>Des outils et des formats directement applicables dans l&rsquo;activit&eacute; quotidienne.</p>
                </article>
                <article>
                    <span>02</span>
                    <h3>S&eacute;curiser les d&eacute;cisions</h3>
                    <p>Une lecture claire des enjeux r&eacute;glementaires, &eacute;conomiques et strat&eacute;giques.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>D&eacute;velopper l&rsquo;activit&eacute;</h3>
                    <p>Des rencontres et des partenariats qui font na&icirc;tre de nouvelles perspectives.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-method" aria-labelledby="method-title">
        <div class="container about-method-grid">
            <div class="about-method-heading">
                <p class="about-eyebrow about-eyebrow--blue">Notre mani&egrave;re d&rsquo;agir</p>
                <h2 id="method-title">Une structure ind&eacute;pendante, proche des r&eacute;alit&eacute;s.</h2>
                <p>
                    L&rsquo;ICP n&rsquo;est pas une f&eacute;d&eacute;ration traditionnelle. C&rsquo;est un partenaire op&eacute;rationnel qui privil&eacute;gie les r&eacute;ponses rapides, concr&egrave;tes et activables.
                </p>
            </div>

            <ol class="about-method-list">
                <li><span>01</span><p>Anticiper les &eacute;volutions r&eacute;glementaires.</p></li>
                <li><span>02</span><p>Accompagner les dirigeants dans leurs choix strat&eacute;giques.</p></li>
                <li><span>03</span><p>D&eacute;velopper les comp&eacute;tences des &eacute;quipes.</p></li>
                <li><span>04</span><p>Identifier les innovations qui comptent vraiment.</p></li>
                <li><span>05</span><p>Relier les bonnes expertises aux bons projets.</p></li>
            </ol>
        </div>
    </section>

    <section class="about-perspective" id="vision" aria-labelledby="vision-title">
        <div class="container">
            <div class="about-perspective-panel">
                <div class="about-perspective-title">
                    <p class="about-eyebrow about-eyebrow--light">Regarder devant</p>
                    <h2 id="vision-title">Transformer les mutations en mouvement.</h2>
                </div>
                <div class="about-perspective-content">
                    <p>
                        Transition environnementale, nouveaux modes constructifs, pression r&eacute;glementaire, intelligence artificielle&nbsp;: le secteur se transforme profond&eacute;ment. L&rsquo;ICP aide ses membres &agrave; anticiper ces &eacute;volutions plut&ocirc;t qu&rsquo;&agrave; les subir.
                    </p>
                    <p class="about-perspective-emphasis">
                        Notre ambition&nbsp;: faire des changements de march&eacute; des opportunit&eacute;s de d&eacute;veloppement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-network" aria-labelledby="network-title">
        <div class="container about-network-grid">
            <div>
                <p class="about-eyebrow about-eyebrow--blue">Un r&eacute;seau de confiance</p>
                <h2 id="network-title">La force du collectif, l&rsquo;exigence du concret.</h2>
            </div>
            <div class="about-network-copy">
                <p>
                    Au fil des ann&eacute;es, l&rsquo;ICP a r&eacute;uni plusieurs centaines de constructeurs, promoteurs, am&eacute;nageurs, experts et partenaires. Cette pluralit&eacute; des regards nourrit les &eacute;changes de bonnes pratiques et l&rsquo;&eacute;mergence de collaborations durables.
                </p>
                <a class="about-text-link about-text-link--dark" href="<?php echo $base_url; ?>/espace-membres">Rejoindre le r&eacute;seau <span aria-hidden="true">&#8594;</span></a>
            </div>
        </div>
    </section>

    <section class="about-standards" aria-labelledby="standards-title">
        <div class="container">
            <div class="about-section-intro about-section-intro--center">
                <p class="about-eyebrow about-eyebrow--blue">Nos rep&egrave;res</p>
                <h2 id="standards-title">Une exigence qui se mesure dans les actes.</h2>
            </div>
            <div class="about-standards-grid">
                <article>
                    <span>01</span>
                    <h3>Ind&eacute;pendance</h3>
                    <p>Des recommandations guid&eacute;es par l&rsquo;int&eacute;r&ecirc;t des professionnels accompagn&eacute;s.</p>
                </article>
                <article>
                    <span>02</span>
                    <h3>Expertise</h3>
                    <p>Des sp&eacute;cialistes reconnus et une information fiable, actualis&eacute;e, exploitable.</p>
                </article>
                <article>
                    <span>03</span>
                    <h3>R&eacute;activit&eacute;</h3>
                    <p>Des r&eacute;ponses op&eacute;rationnelles, parce que les d&eacute;cisions n&rsquo;attendent pas.</p>
                </article>
                <article>
                    <span>04</span>
                    <h3>Innovation</h3>
                    <p>Une veille constante pour identifier les solutions qui feront la diff&eacute;rence demain.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="about-commitment" aria-labelledby="commitment-title">
        <div class="container">
            <div class="about-commitment-inner">
                <p class="about-eyebrow about-eyebrow--light">Notre engagement</p>
                <h2 id="commitment-title">&Ecirc;tre utile.<br>Chaque jour.</h2>
                <p>
                    Chaque service, chaque partenariat et chaque rencontre poursuit le m&ecirc;me objectif&nbsp;: apporter une valeur concr&egrave;te aux professionnels qui nous font confiance.
                </p>
            </div>
        </div>
    </section>

    <section class="about-founder" id="gouvernance" aria-labelledby="founder-title">
        <div class="container about-founder-grid">
            <figure class="about-founder-portrait">
                <img src="<?php echo $base_url; ?>/assets/img/home/olivier_burot.webp?v=1.0.1" alt="Olivier Burot, fondateur et pr&eacute;sident de l&rsquo;Institut CP" width="720" height="900" loading="lazy" decoding="async">
                <figcaption>
                    <strong>Olivier Burot</strong>
                    <span>Fondateur et Pr&eacute;sident</span>
                </figcaption>
            </figure>

            <div class="about-founder-letter">
                <p class="about-eyebrow about-eyebrow--blue">&Eacute;dito de la Pr&eacute;sidence</p>
                <h2 id="founder-title">Le mot du fondateur</h2>
                <blockquote>
                    <p>
                        Depuis pr&egrave;s de dix ans, j&rsquo;ai la conviction que les professionnels de la construction ont besoin d&rsquo;une structure diff&eacute;rente&nbsp;: ind&eacute;pendante, r&eacute;active et profond&eacute;ment ancr&eacute;e dans les r&eacute;alit&eacute;s du terrain.
                    </p>
                    <p>
                        Notre ambition n&rsquo;a jamais &eacute;t&eacute; de faire plus, mais de faire mieux&nbsp;: apporter des r&eacute;ponses concr&egrave;tes, favoriser les rencontres utiles et identifier les innovations qui cr&eacute;eront la valeur de demain.
                    </p>
                </blockquote>
                <p class="about-founder-signature">Olivier Burot</p>
            </div>
        </div>
    </section>

    <section class="about-press" id="presse" aria-label="Espace presse">
        <div class="container">
            <p>Institut CP &middot; Construire des perspectives communes pour les professionnels de l&rsquo;immobilier et de la construction.</p>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
