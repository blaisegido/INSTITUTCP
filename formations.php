<?php
$page_title = "Formations - Institut CP";
$page_description = "Des formations anim&eacute;es par des experts reconnus pour accompagner les professionnels de la construction.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<main class="formations-page">
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
                    <p class="formations-cover-lead">Des formations directement utiles aux professionnels qui font &eacute;voluer la construction.</p>
                    <a class="formations-text-link" href="#documentation">
                        T&eacute;l&eacute;charger la documentation <span aria-hidden="true">&#8595;</span>
                    </a>
                </div>

                <figure class="formations-certification">
                    <div class="formations-certification-card">
                        <span class="formations-certification-label">La qualit&eacute; en action</span>
                        <img src="<?php echo $base_url; ?>/assets/img/formations/certification-qualiopi.png" alt="Certification Qualiopi, processus certifi&eacute; par la R&eacute;publique Fran&ccedil;aise" width="317" height="169">
                        <span class="formations-certification-stamp" aria-hidden="true">ICP</span>
                    </div>
                </figure>
            </div>

        </div>
    </section>

    <section class="formations-introduction" aria-labelledby="formations-introduction-title">
        <div class="container formations-introduction-grid">
            <div>
                <p class="formations-eyebrow formations-eyebrow--blue">D&eacute;velopper les comp&eacute;tences</p>
                <h2 id="formations-introduction-title">Se former pour rester<br>en mouvement.</h2>
            </div>
            <div class="formations-introduction-copy">
                <p>Dans un secteur en constante &eacute;volution, la formation constitue un levier essentiel de performance, d&rsquo;adaptation et de comp&eacute;titivit&eacute;.</p>
                <p>L&rsquo;Institut des Constructeurs et des Promoteurs propose un programme de formations con&ccedil;u pour r&eacute;pondre aux enjeux concrets des professionnels de la construction. Anim&eacute;es par des experts reconnus, nos formations allient expertise, pragmatisme et applicabilit&eacute; imm&eacute;diate afin d&rsquo;accompagner durablement les entreprises dans le d&eacute;veloppement de leurs comp&eacute;tences.</p>
            </div>
        </div>
    </section>

    <section class="formations-formats" aria-labelledby="formations-formats-title">
        <div class="container">
            <div class="formations-section-heading formations-section-heading--formats">
                <div>
                    <p class="formations-eyebrow formations-eyebrow--blue">Une approche concr&egrave;te</p>
                    <h2 id="formations-formats-title">Des formats pens&eacute;s<br>pour vos enjeux.</h2>
                    <p>Chaque parcours combine une expertise solide, des cas r&eacute;els et des outils directement mobilisables dans vos projets.</p>
                </div>
            </div>

            <div class="formations-format-grid">
                <article class="formations-format-card">
                    <span class="formations-format-number">01</span>
                    <h3>Monter en comp&eacute;tence</h3>
                    <p>Acqu&eacute;rir les m&eacute;thodes et les rep&egrave;res n&eacute;cessaires pour progresser avec confiance.</p>
                </article>
                <article class="formations-format-card formations-format-card--accent">
                    <span class="formations-format-number">02</span>
                    <h3>Partager les pratiques</h3>
                    <p>Apprendre avec des professionnels et confronter les exp&eacute;riences pour mieux d&eacute;cider.</p>
                </article>
                <article class="formations-format-card">
                    <span class="formations-format-number">03</span>
                    <h3>Transformer le quotidien</h3>
                    <p>Repartir avec des outils concrets, adapt&eacute;s aux r&eacute;alit&eacute;s de vos &eacute;quipes.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="formations-catalogue" aria-labelledby="catalogue-title">
        <div class="container">
            <div class="formations-catalogue-panel">
                <div class="formations-catalogue-copy">
                    <p class="formations-eyebrow formations-eyebrow--blue">Le programme</p>
                    <h2 id="catalogue-title">Le catalogue formations.</h2>
                    <p>Retrouvez l&rsquo;ensemble des formations de l&rsquo;Institut CP dans un document clair, pr&ecirc;t &agrave; &ecirc;tre partag&eacute; avec vos &eacute;quipes.</p>
                    <button class="formations-download-primary" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">
                        <span>T&eacute;l&eacute;charger le catalogue</span>
                        <svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M12 3v12m0 0 4-4m-4 4-4-4M5 21h14"/></svg>
                    </button>
                </div>
                <div class="formations-catalogue-file">
                    <span class="formations-catalogue-file-type">PDF</span>
                    <span class="formations-catalogue-file-title">Catalogue<br>formations<br>2026</span>
                    <div class="formations-catalogue-file-actions">
                        <button class="formations-preview-button formations-preview-button--light" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">Aper&ccedil;u</button>
                        <button class="formations-catalogue-file-arrow" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026" aria-label="Ouvrir l'aper&ccedil;u du catalogue formations 2026">&#8595;</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="formations-documentation" id="documentation" aria-labelledby="documentation-title">
        <div class="container">
            <div class="formations-section-heading">
                <div>
                    <p class="formations-eyebrow formations-eyebrow--blue">Ressources utiles</p>
                    <h2 id="documentation-title">T&eacute;l&eacute;charger la<br>documentation.</h2>
                    <p>Les documents essentiels pour pr&eacute;parer, suivre et encadrer votre parcours de formation.</p>
                </div>
            </div>

            <div class="formations-documents-grid">
                <article class="formation-document">
                    <span class="formation-document-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9l-6-6Z"/><path d="M14 3v6h6M8 15h8M8 18h5"/></svg></span>
                    <span class="formation-document-copy"><strong>Catalogue formations</strong><small>Programme de formations 2026</small></span>
                    <span class="formation-document-actions"><button class="formation-document-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">Voir</button><button class="formation-document-action" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/catalogue-formations-2026.pdf" data-pdf-title="Catalogue formations 2026">PDF <b aria-hidden="true">&#8595;</b></button></span>
                </article>

                <article class="formation-document">
                    <span class="formation-document-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9l-6-6Z"/><path d="M14 3v6h6M8 15h8M8 18h5"/></svg></span>
                    <span class="formation-document-copy"><strong>ICP fiche contact formation</strong><small>Formulaire de demande d&rsquo;information</small></span>
                    <span class="formation-document-actions"><button class="formation-document-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/fiche-contact-formation.pdf" data-pdf-title="ICP fiche contact formation">Voir</button><button class="formation-document-action" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/fiche-contact-formation.pdf" data-pdf-title="ICP fiche contact formation">PDF <b aria-hidden="true">&#8595;</b></button></span>
                </article>

                <article class="formation-document">
                    <span class="formation-document-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 3H6a2 2 0 0 0-2 2h12a2 2 0 0 0 2-2V9l-6-6Z"/><path d="M14 3v6h6M8 15h8M8 18h5"/></svg></span>
                    <span class="formation-document-copy"><strong>ICP formations r&egrave;glement int&eacute;rieur</strong><small>Document de r&eacute;f&eacute;rence</small></span>
                    <span class="formation-document-actions"><button class="formation-document-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/reglement-interieur-formations.pdf" data-pdf-title="ICP formations r&egrave;glement int&eacute;rieur">Voir</button><button class="formation-document-action" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/reglement-interieur-formations.pdf" data-pdf-title="ICP formations r&egrave;glement int&eacute;rieur">PDF <b aria-hidden="true">&#8595;</b></button></span>
                </article>

                <article class="formation-document">
                    <span class="formation-document-icon" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 3H6a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9l-6-6Z"/><path d="M14 3v6h6M8 15h8M8 18h5"/></svg></span>
                    <span class="formation-document-copy"><strong>ICP fiche r&eacute;clamation formation</strong><small>Formulaire de r&eacute;clamation</small></span>
                    <span class="formation-document-actions"><button class="formation-document-preview" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/fiche-reclamation-formation.pdf" data-pdf-title="ICP fiche r&eacute;clamation formation">Voir</button><button class="formation-document-action" type="button" data-pdf-preview="<?php echo $base_url; ?>/assets/pdf/formations/fiche-reclamation-formation.pdf" data-pdf-title="ICP fiche r&eacute;clamation formation">PDF <b aria-hidden="true">&#8595;</b></button></span>
                </article>
            </div>
        </div>
    </section>

    <div class="pdf-preview-modal" id="pdfPreviewModal" role="dialog" aria-modal="true" aria-labelledby="pdfPreviewTitle" hidden>
        <div class="pdf-preview-backdrop" data-pdf-close></div>
        <div class="pdf-preview-panel">
            <div class="pdf-preview-header">
                <div>
                    <p class="formations-eyebrow formations-eyebrow--blue">Lecture du document</p>
                    <h2 id="pdfPreviewTitle">Aper&ccedil;u PDF</h2>
                </div>
                <button class="pdf-preview-close" type="button" data-pdf-close aria-label="Fermer l'aper&ccedil;u">&times;</button>
            </div>
            <iframe class="pdf-preview-frame" title="Aper&ccedil;u du document PDF"></iframe>
            <div class="pdf-preview-footer">
                <span>Vous pouvez t&eacute;l&eacute;charger le document depuis cette fen&ecirc;tre.</span>
                <a class="formations-download-primary" href="#" download>T&eacute;l&eacute;charger le PDF <span aria-hidden="true">&#8595;</span></a>
            </div>
        </div>
    </div>
</main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
