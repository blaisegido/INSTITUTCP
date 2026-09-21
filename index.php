<?php
$page_title = "Accueil - INSTITUT CP";
$page_description = "Construire plus qu'un réseau. Créer de la valeur. Découvrez l'Institut CP, vos formations, expertises et réseau international.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<!-- HERO SECTION (FULLSCREEN 100VH WITH VIDEO BACKGROUND) -->
<section class="hero-section">
    <!-- YouTube Video Background Container -->
    <div class="hero-video-wrapper">
        <div id="youtube-hero-player"></div>
    </div>

    <!-- Dark Overlay Layer -->
    <div class="hero-overlay"></div>

    <!-- Hero Content Center -->
    <div class="hero-content">
        <!-- Sleek Minimalist Badge -->
        <div class="hero-badge-sleek">
            <span class="hero-badge-line"></span>
            L'Excellence en Réseau
            <span class="hero-badge-line"></span>
        </div>

        <!-- H1 Title Strictly 2 Lines -->
        <h1 class="hero-title">
            <span class="line">Construire plus qu'un réseau.</span>
            <span class="line">Créer de la valeur.</span>
        </h1>

        <p class="hero-subtitle">
            L'Institut CP réunit les leaders, décideurs et experts pour propulser l'innovation, transmettre le savoir et bâtir des opportunités durables à l'échelle internationale.
        </p>

        <div class="hero-cta-group">
            <a href="espace-membres.php" class="btn btn-primary">
                Nous rejoindre
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
            <a href="services.php" class="btn btn-secondary">
                Nos expertises
            </a>
        </div>
    </div>
</section>

<!-- PRESENTATION SECTION (IMMEDIATELY BELOW HERO WITH STYLISH VIDEO PLAYER) -->
<section class="presentation-section">
    <div class="container">
        <div class="presentation-grid">
            <!-- Left Side: Text Content -->
            <div class="presentation-content reveal-on-scroll">
                <div class="presentation-tag">
                    Présentation & Ambition
                </div>

                <p class="presentation-text-p1">
                    L'ICP accompagne les constructeurs, promoteurs et aménageurs en leur donnant accès à des expertises, des services, des formations, des partenaires stratégiques et des innovations sélectionnées pour répondre aux enjeux d'aujourd'hui et anticiper ceux de demain.
                </p>

                <p class="presentation-text-p2">
                    Chaque action est guidée par une même ambition : faire gagner nos membres en performance, en temps et en perspectives de développement.
                </p>

                <!-- Editorial Mottos Layout (Clean Human Design, No Box Frames) -->
                <div class="presentation-motto-list">
                    <span class="motto-item">Informer</span>
                    <span class="motto-divider">/</span>
                    <span class="motto-item">Accompagner</span>
                    <span class="motto-divider">/</span>
                    <span class="motto-item">Connecter</span>
                    <span class="motto-divider">/</span>
                    <span class="motto-item">Innover</span>
                </div>
            </div>

            <!-- Right Side: Custom Interactive Video Player -->
            <div class="presentation-video-container reveal-on-scroll">
                <div class="custom-video-wrapper">
                    <!-- Local MP4 Video showing native first frame -->
                    <video class="custom-video-element" loop playsinline preload="metadata">
                        <source src="assets/videos/IMG_0588.mp4#t=0.1" type="video/mp4">
                        Votre navigateur ne prend pas en charge la lecture de cette vidéo.
                    </video>

                    <!-- Sleek Centered Play Button Overlay -->
                    <div class="video-play-overlay">
                        <div class="big-play-btn" title="Lire la vidéo">
                            <svg width="32" height="32" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Custom Glassmorphism Controls Bar -->
                    <div class="video-controls-bar">
                        <button class="control-btn video-btn-play" title="Lecture / Pause">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </button>

                        <button class="control-btn video-btn-mute" title="Activer / Couper le son">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M16.5 12c0-1.77-1.02-3.29-2.5-4.03v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51C20.63 14.91 21 13.5 21 12c0-4.28-2.99-7.86-7-8.77v2.06c2.89.86 5 3.54 5 6.71zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06c1.38-.31 2.63-.95 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"/>
                            </svg>
                        </button>

                        <div class="video-progress-container" title="Avancement">
                            <div class="video-progress-fill"></div>
                        </div>

                        <div class="video-time-display">0:00 / 0:00</div>

                        <button class="control-btn video-btn-fullscreen" title="Plein écran">
                            <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT SECTION: VOS PILIERS D'EXCELLENCE (STRATEGIC VISION WITH SUBTLE BACKGROUND IMAGE) -->
<section class="section strategic-vision-section">
    <div class="container">
        <div class="section-header reveal-on-scroll">
            <!-- Sleek Badge Style matched to Hero -->
            <div class="hero-badge-sleek" style="margin-bottom: 0.75rem;">
                <span class="hero-badge-line"></span>
                Notre Offre d'Excellence
                <span class="hero-badge-line"></span>
            </div>

            <h2 class="section-title">Une vision stratégique globale</h2>
            <p class="section-description">
                Découvrez comment l'Institut CP façonne l'avenir à travers des pôles d'action à fort impact.
            </p>
        </div>

        <div class="grid-cards reveal-on-scroll">
            <!-- Card 1: L'Institut -->
            <div class="card">
                <div class="card-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                    </svg>
                </div>
                <h3 class="card-title">L'Institut</h3>
                <p class="card-text">
                    Un Think Tank & Do Tank engagé à créer des passerelles entre les esprits brillants et les décideurs économiques.
                </p>
            </div>

            <!-- Card 2: Services -->
            <div class="card">
                <div class="card-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="card-title">Services & Expertises</h3>
                <p class="card-text">
                    Accompagnement sur-mesure, conseil stratégique et solutions d'accélération pour organisations et leaders.
                </p>
            </div>

            <!-- Card 3: Formations -->
            <div class="card">
                <div class="card-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                        <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0112 20.055a11.952 11.952 0 01-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                    </svg>
                </div>
                <h3 class="card-title">Formations de Pointe</h3>
                <p class="card-text">
                    Programmes de haut niveau dispensés par des praticiens renommés pour développer vos compétences exécutives.
                </p>
            </div>

            <!-- Card 4: International -->
            <div class="card">
                <div class="card-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <h3 class="card-title">Réseau International</h3>
                <p class="card-text">
                    Une présence mondiale facilitant les connexions transfrontalières et les opportunités de partenariat d'affaires.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- INSTITUT DES CONSTRUCTEURS ET DES PROMOTEURS SECTION -->
<section class="icp-about-section">
    <div class="container">
        <!-- Section Header with Single Line Title -->
        <div class="icp-about-header reveal-on-scroll">
            <div class="hero-badge-sleek" style="margin-bottom: 0.75rem; color: var(--color-accent-blue);">
                <span class="hero-badge-line"></span>
                À propos de notre Institution
                <span class="hero-badge-line"></span>
            </div>
            
            <!-- Strictly Single Line Title -->
            <h2 class="icp-title-single-line">INSTITUT DES CONSTRUCTEURS ET DES PROMOTEURS</h2>
            
            <p class="icp-about-intro">
                Au cœur des mutations de l'industrie immobilière et urbaine, l'Institut des Constructeurs et des Promoteurs (ICP) s'impose comme la plateforme de référence pour les acteurs majeurs du secteur. À travers la veille réglementaire, l'analyse prospective et les formations d'excellence, l'ICP accompagne les décideurs pour transformer les défis d'aujourd'hui en opportunités stratégiques.
            </p>
        </div>

        <!-- Next-Gen Immersive Luxury Carousel -->
        <div class="icp-nextgen-carousel reveal-on-scroll">
            <div class="nextgen-viewport">
                <div class="nextgen-track">
                    <!-- Slide 1: Le marché de la construction neuve -->
                    <div class="nextgen-card">
                        <div class="nextgen-card-bg">
                            <img src="assets/img/home/carrousel_1.webp" alt="Le marché de la construction neuve" loading="lazy">
                        </div>
                        <div class="nextgen-card-overlay"></div>
                        <div class="nextgen-card-body">
                            <div class="nextgen-top-meta">
                                <span class="nextgen-tag">Décryptage &amp; Perspectives</span>
                                <span class="nextgen-number">01</span>
                            </div>
                            <div class="nextgen-bottom-content">
                                <h3 class="nextgen-title">Le marché de la construction neuve</h3>
                                <p class="nextgen-desc">
                                    État des lieux complet sur la dynamique des ouvertures de chantier, les taux d'intérêt et les perspectives d'investissement dans la construction neuve en France.
                                </p>
                                <a href="services.php" class="nextgen-link-btn">
                                    Explorer l'analyse
                                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: Les mesures phares de la loi ELAN -->
                    <div class="nextgen-card">
                        <div class="nextgen-card-bg">
                            <img src="assets/img/home/carrousel_2.webp" alt="Les mesures phares de la loi ELAN" loading="lazy">
                        </div>
                        <div class="nextgen-card-overlay"></div>
                        <div class="nextgen-card-body">
                            <div class="nextgen-top-meta">
                                <span class="nextgen-tag">Cadre Réglementaire</span>
                                <span class="nextgen-number">02</span>
                            </div>
                            <div class="nextgen-bottom-content">
                                <h3 class="nextgen-title">Les mesures phares de la loi ELAN</h3>
                                <p class="nextgen-desc">
                                    Décryptage approfondi des évolutions législatives, des simplifications administratives et des impacts directs pour la promotion et l'aménagement urbain.
                                </p>
                                <a href="linstitut.php" class="nextgen-link-btn">
                                    Consulter le dossier
                                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: LE BAROMÈTRE DE L'IMMOBILIER NEUF -->
                    <div class="nextgen-card">
                        <div class="nextgen-card-bg">
                            <img src="assets/img/home/carrousel_3.webp" alt="LE BAROMÈTRE DE L'IMMOBILIER NEUF" loading="lazy">
                        </div>
                        <div class="nextgen-card-overlay"></div>
                        <div class="nextgen-card-body">
                            <div class="nextgen-top-meta">
                                <span class="nextgen-tag">Observatoire Exclusif</span>
                                <span class="nextgen-number">03</span>
                            </div>
                            <div class="nextgen-bottom-content">
                                <h3 class="nextgen-title">LE BAROMÈTRE DE L'IMMOBILIER NEUF</h3>
                                <p class="nextgen-desc">
                                    Indicateurs clés trimestriels, suivi des prix du mètre carré, volume de ventes réservées et tendances prospectives par région.
                                </p>
                                <a href="formations.php" class="nextgen-link-btn">
                                    Découvrir le baromètre
                                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Next-Gen Controls Bar with Timeline -->
            <div class="nextgen-controls">
                <div class="nextgen-timeline-container">
                    <div class="nextgen-timeline-bar"></div>
                </div>

                <div class="nextgen-arrows">
                    <button class="nextgen-arrow-btn nextgen-prev" title="Précédent">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>

                    <button class="nextgen-arrow-btn nextgen-next" title="Suivant">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PUBLICATIONS SECTION (HORIZONTAL ENCARTS WITH IMAGES) -->
<section class="publications-section">
    <div class="container">
        <!-- Section Header -->
        <div class="pub-header reveal-on-scroll">
            <div class="hero-badge-sleek" style="margin-bottom: 0.75rem; color: var(--color-accent-blue);">
                <span class="hero-badge-line"></span>
                Veille &amp; Information
                <span class="hero-badge-line"></span>
            </div>
            <h2 class="pub-main-title">PUBLICATIONS</h2>
            <p class="pub-intro-text text-justify">
                L'Institut des Constructeurs et des Promoteurs propose à ses adhérents, au travers de ses publications, d'avoir accès facilement au meilleur de l'actualité et de l'information. Des actualités très terrain et des informations très pratiques qui donnent aux membres constructeurs de maisons individuelles et promoteurs immobiliers un service de premier plan.
            </p>
        </div>

        <!-- Horizontal Encarts Stack with Images -->
        <div class="pub-encarts-stack reveal-on-scroll">

            <!-- Encart 1: Livres publiés -->
            <article class="pub-encart">
                <div class="pub-encart-img-wrap">
                    <img src="assets/img/home/pub_livres.webp" alt="Livres publiés" class="pub-encart-img" loading="lazy">
                    <div class="pub-encart-img-overlay"></div>
                    <span class="pub-encart-num-badge">01</span>
                </div>
                <div class="pub-encart-body">
                    <span class="pub-encart-kicker">Édition Annuelle</span>
                    <h3 class="pub-encart-title">Livres publiés</h3>
                    <p class="pub-encart-desc text-justify">L'Institut des Constructeurs et des Promoteurs édite chaque année un livre lié aux enjeux pour les promoteurs immobiliers, constructeurs de maisons individuelles et aménageurs.</p>
                </div>
                <a href="linstitut.php" class="pub-encart-cta">
                    Consulter les éditions
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Encart 2: Fiches d'infos pro -->
            <article class="pub-encart">
                <div class="pub-encart-img-wrap">
                    <img src="assets/img/home/pub_fiches.webp" alt="Fiches d'infos pro" class="pub-encart-img" loading="lazy">
                    <div class="pub-encart-img-overlay"></div>
                    <span class="pub-encart-num-badge">02</span>
                </div>
                <div class="pub-encart-body">
                    <span class="pub-encart-kicker">Veille Terrain</span>
                    <h3 class="pub-encart-title">Fiches d'infos pro</h3>
                    <p class="pub-encart-desc text-justify">Les Informations PRO apportent aux membres de l'Institut toute la veille nécessaire et pratique dans les domaines juridique, économique, législatif… C'est une veille très performante !</p>
                </div>
                <a href="services.php" class="pub-encart-cta">
                    Accéder au flux pro
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Encart 3: Guide Solutions Habitat -->
            <article class="pub-encart">
                <div class="pub-encart-img-wrap">
                    <img src="assets/img/home/pub_guide.webp" alt="Guide Solutions Habitat" class="pub-encart-img" loading="lazy">
                    <div class="pub-encart-img-overlay"></div>
                    <span class="pub-encart-num-badge">03</span>
                </div>
                <div class="pub-encart-body">
                    <span class="pub-encart-kicker">Innovations</span>
                    <h3 class="pub-encart-title">Guide Solutions Habitat</h3>
                    <p class="pub-encart-desc text-justify">L'Institut met à disposition de ses membres un guide très précis sur les solutions et innovations dans les domaines du financement, de la commercialisation et des solutions constructives.</p>
                </div>
                <a href="services.php#solutions" class="pub-encart-cta">
                    Explorer le guide
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

            <!-- Encart 4: Presse -->
            <article class="pub-encart pub-encart--dark">
                <div class="pub-encart-img-wrap">
                    <img src="assets/img/home/pub_presse.webp" alt="Presse" class="pub-encart-img" loading="lazy">
                    <div class="pub-encart-img-overlay"></div>
                    <span class="pub-encart-num-badge">04</span>
                </div>
                <div class="pub-encart-body">
                    <span class="pub-encart-kicker">Espace Médias</span>
                    <h3 class="pub-encart-title">Presse</h3>
                    <p class="pub-encart-desc text-justify">Vous êtes journaliste, blogueur, influenceur ? Retrouvez ici nos derniers communiqués et dossiers de presse pour couvrir l'actualité de l'Institut des Constructeurs et des Promoteurs.</p>
                </div>
                <a href="linstitut.php#presse" class="pub-encart-cta pub-encart-cta--accent">
                    Découvrir
                    <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </article>

        </div>
    </div>
</section>

<!-- NOTRE ADN PROFESSIONNEL SECTION (ARCHITECTURAL EXECUTIVE EDITORIAL) -->
<section class="section dna-master-section">
    <div class="container">
        
        <!-- Section Header -->
        <div class="dna-section-heading reveal-on-scroll">
            <div class="hero-badge-sleek" style="margin-bottom: 0.75rem; color: var(--color-accent-blue);">
                <span class="hero-badge-line"></span>
                Tribune du Président
                <span class="hero-badge-line"></span>
            </div>
            <h2 class="dna-main-title">Notre ADN professionnel</h2>
        </div>

        <!-- Master Editorial & Monumental Metrics Spread -->
        <div class="dna-editorial-grid reveal-on-scroll">
            
            <!-- Column 1: Executive Manifesto (Left) -->
            <div class="dna-manifesto-column">
                <div class="dna-quote-mark" aria-hidden="true">“</div>
                
                <blockquote class="dna-manifesto-quote">
                    <p class="dna-lead-statement">
                        « Notre dynamique est portée par notre capacité à nous différencier, à questionner et, ce faisant, à bousculer les idées reçues et les modèles préconçus. »
                    </p>
                    <p class="dna-narrative-text">
                        Si être différent implique d’être précurseur alors oui nous le sommes. Mais c’est une posture exigeante. Nous devons donc rester agiles dans l’action en préservant notre fonctionnement startup et dynamiques dans la réflexion, à l’écoute des signaux de vos marchés et capables de vous proposer de nouveaux modes opératoires et les services attendus.
                    </p>
                </blockquote>

                <!-- Executive Signature -->
                <div class="dna-executive-signature">
                    <div class="dna-monogram-badge">
                        <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="26" height="26">
                            <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                        </svg>
                    </div>
                    <div class="dna-sig-details">
                        <span class="dna-sig-name">Olivier BUROT</span>
                        <span class="dna-sig-title">Président — Institut des Constructeurs et des Promoteurs</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Monumental Strategic Metrics (Right) -->
            <div class="dna-metrics-column">
                
                <!-- Metric 1: 98% Innovations -->
                <div class="dna-metric-block">
                    <div class="dna-metric-stat-row">
                        <span class="dna-metric-digit" data-target="98">98</span>
                        <span class="dna-metric-symbol">%</span>
                    </div>
                    <h3 class="dna-metric-heading">d'Innovations</h3>
                    <p class="dna-metric-subtext">
                        Solutions de rupture, nouveaux modèles constructifs et ingénierie stratégique intégrés pour l'ensemble de nos adhérents.
                    </p>
                    <div class="dna-metric-track">
                        <div class="dna-metric-bar bar-98"></div>
                    </div>
                </div>

                <!-- Subtle Hairline Separator -->
                <div class="dna-metric-divider" aria-hidden="true"></div>

                <!-- Metric 2: 95% Ressources en téléchargement -->
                <div class="dna-metric-block">
                    <div class="dna-metric-stat-row">
                        <span class="dna-metric-digit" data-target="95">95</span>
                        <span class="dna-metric-symbol">%</span>
                    </div>
                    <h3 class="dna-metric-heading">des Ressources en téléchargement</h3>
                    <p class="dna-metric-subtext">
                        Fiches d'infos pro, baromètres trimestriels, guides techniques et synthèses réglementaires en libre accès continu.
                    </p>
                    <div class="dna-metric-track">
                        <div class="dna-metric-bar bar-95"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ILS PARLENT DE NOUS — TESTIMONIALS CAROUSEL -->
<section class="testimonials-section">
    <div class="container">

        <!-- Section Header -->
        <div class="testimonials-header reveal-on-scroll">
            <div class="hero-badge-sleek" style="margin-bottom: 0.75rem; color: var(--color-accent-blue);">
                <span class="hero-badge-line"></span>
                Témoignages
                <span class="hero-badge-line"></span>
            </div>
            <h2 class="testimonials-title">Ils parlent de nous</h2>
            <p class="testimonials-intro">Découvrez ce que nos membres disent de l'Institut des Constructeurs et des Promoteurs.</p>
        </div>

        <!-- Carousel Wrapper -->
        <div class="testi-carousel reveal-on-scroll" id="testiCarousel">
            <div class="testi-viewport">
                <div class="testi-track" id="testiTrack">

                <!-- Testimonial 1: Artisan, homme -->
                <div class="testi-slide">
                    <div class="testi-card">
                        <div class="testi-quote-mark" aria-hidden="true">"</div>
                        <blockquote class="testi-quote">
                            L'InstitutCP m'a permis de gagner un temps précieux. Les dossiers et outils proposés sont concrets et directement applicables à mon activité.
                        </blockquote>
                        <div class="testi-author">
                            <div class="testi-avatar testi-avatar--male">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="26" height="26" aria-hidden="true">
                                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testi-author-info">
                                <span class="testi-name">Un artisan du bâtiment</span>
                                <a href="https://institutcp.com/#" class="testi-location">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 21s-8-7.5-8-12a8 8 0 0 1 16 0c0 4.5-8 12-8 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                    Île-de-France
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2: Constructeur, homme -->
                <div class="testi-slide">
                    <div class="testi-card">
                        <div class="testi-quote-mark" aria-hidden="true">"</div>
                        <blockquote class="testi-quote">
                            L'Institut m'apporte des informations très pratiques et des outils qui aident mon entreprise au quotidien&nbsp;! En plus l'inscription est à un coût très compétitif&nbsp;! Bravo&nbsp;!
                        </blockquote>
                        <div class="testi-author">
                            <div class="testi-avatar testi-avatar--male">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="26" height="26" aria-hidden="true">
                                    <path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/>
                                </svg>
                            </div>
                            <div class="testi-author-info">
                                <span class="testi-name">Un constructeur</span>
                                <a href="https://institutcp.com/#" class="testi-location">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 21s-8-7.5-8-12a8 8 0 0 1 16 0c0 4.5-8 12-8 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                    Poitou-Charente
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3: Promoteur, femme -->
                <div class="testi-slide">
                    <div class="testi-card">
                        <div class="testi-quote-mark" aria-hidden="true">"</div>
                        <blockquote class="testi-quote">
                            L'Institut est vraiment dans nos préoccupations quotidiennes&nbsp;! J'y ai trouvé des solutions de commercialisation&nbsp;! Le SVP juridique est vraiment bien&nbsp;!
                        </blockquote>
                        <div class="testi-author">
                            <div class="testi-avatar testi-avatar--female">
                                <svg viewBox="0 0 24 24" fill="currentColor" width="26" height="26" aria-hidden="true">
                                    <path d="M12 2C9.24 2 7 4.24 7 7c0 1.95 1.12 3.63 2.76 4.47-.46.33-.87.72-1.22 1.17C6.9 14.7 6 16.98 6 20h12c0-3.02-.9-5.3-2.54-7.36-.35-.45-.76-.84-1.22-1.17C15.88 10.63 17 8.95 17 7c0-2.76-2.24-5-5-5zm0 2c1.66 0 3 1.34 3 3 0 .78-.3 1.49-.8 2.02-.45.47-.8 1.05-.8 1.98h-2.8c0-.93-.35-1.51-.8-1.98A2.99 2.99 0 0 1 9 7c0-1.66 1.34-3 3-3z"/>
                                </svg>
                            </div>
                            <div class="testi-author-info">
                                <span class="testi-name">Un promoteur</span>
                                <a href="https://institutcp.com/#" class="testi-location">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M12 21s-8-7.5-8-12a8 8 0 0 1 16 0c0 4.5-8 12-8 12z"/><circle cx="12" cy="9" r="2.5"/></svg>
                                    PACA
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                </div><!-- /.testi-track -->
            </div><!-- /.testi-viewport -->

            <!-- Navigation Dots -->
            <div class="testi-dots" id="testiDots" role="tablist" aria-label="Témoignages">
                <button class="testi-dot testi-dot--active" data-index="0" role="tab" aria-label="Témoignage 1"></button>
                <button class="testi-dot" data-index="1" role="tab" aria-label="Témoignage 2"></button>
                <button class="testi-dot" data-index="2" role="tab" aria-label="Témoignage 3"></button>
            </div>

            <!-- Prev / Next arrows -->
            <button class="testi-arrow testi-arrow--prev" id="testiPrev" aria-label="Témoignage précédent">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="testi-arrow testi-arrow--next" id="testiNext" aria-label="Témoignage suivant">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 18l6-6-6-6"/></svg>
            </button>

        </div><!-- /.testi-carousel -->

        <!-- Partner Banner GRDF / Livre Blanc RE2020 -->
        <div class="testi-banner-wrap reveal-on-scroll">
            <a href="https://www.grdf.fr/entreprises/gaz-recevez-le-guide-re2020?utm_source=site&utm_medium=banniere&utm_campaign=icp" target="_blank" rel="noopener noreferrer" class="testi-partner-banner" title="Découvrez notre livre blanc RE2020 — GRDF">
                <img src="assets/img/home/LIVRES_BLANCS.webp" alt="GRDF — Comment construire bas carbone ? Découvrez notre livre blanc RE2020" class="testi-partner-banner-img" loading="lazy">
            </a>
        </div>

    </div>
</section>

<!-- SECTION NOUS CONTACTER (BLEU AVEC TOP OBLIQUE ET BOXES CONNECTÉES FOND BLANC) -->
<section class="contact-oblique-section" id="contact">
    <div class="container contact-container">

        <!-- Section Header -->
        <div class="contact-section-header reveal-on-scroll">
            <div class="hero-badge-sleek hero-badge-sleek--light" style="margin-bottom: 0.75rem;">
                <span class="hero-badge-line"></span>
                Contact & Informations
                <span class="hero-badge-line"></span>
            </div>
            <h2 class="contact-section-title">Nous contacter</h2>
            <p class="contact-section-subtitle">Notre équipe et nos experts sont à votre écoute pour vous accompagner au quotidien.</p>
        </div>

        <!-- Connected White Colored Boxes -->
        <div class="contact-boxes-row reveal-on-scroll">

            <!-- Box 1: Adresse -->
            <div class="contact-box contact-box--address">
                <div class="contact-box-accent-bar"></div>
                <div class="contact-box-top">
                    <div class="contact-box-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3 class="contact-box-title">Adresse</h3>
                </div>
                <div class="contact-box-body">
                    <p class="contact-box-detail">
                        32/34 avenue Kléber<br>
                        75016 Paris
                    </p>
                    <p class="contact-box-phone">
                        <span class="contact-label">Tél :</span> <a href="tel:0189534711">01 89 53 47 11</a>
                    </p>
                </div>
                <div class="contact-box-footer">
                    <a href="https://institutcp.com/contact/" class="contact-box-action" target="_blank" rel="noopener noreferrer">
                        <span>Accès & Plan</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Box 2: E-mail -->
            <div class="contact-box contact-box--email">
                <div class="contact-box-accent-bar"></div>
                <div class="contact-box-top">
                    <div class="contact-box-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                        </svg>
                    </div>
                    <h3 class="contact-box-title">
                        <a href="https://institutcp.com/contact/" target="_blank" rel="noopener noreferrer" class="contact-title-link">E-mail</a>
                    </h3>
                </div>
                <div class="contact-box-body">
                    <p class="contact-box-detail">
                        <a href="mailto:contact@institutcp.com" class="contact-link-main">contact@institutcp.com</a>
                    </p>
                    <p class="contact-box-web">
                        <span class="contact-label">Site :</span> <a href="https://www.institutcp.com" target="_blank" rel="noopener noreferrer">www.institutcp.com</a>
                    </p>
                </div>
                <div class="contact-box-footer">
                    <a href="https://institutcp.com/contact/" class="contact-box-action" target="_blank" rel="noopener noreferrer">
                        <span>Formulaire de contact</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>

            <!-- Box 3: Nous rejoindre -->
            <div class="contact-box contact-box--join">
                <div class="contact-box-accent-bar"></div>
                <div class="contact-box-top">
                    <div class="contact-box-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <line x1="19" x2="19" y1="8" y2="14"/>
                            <line x1="22" x2="16" y1="11" y2="11"/>
                        </svg>
                    </div>
                    <h3 class="contact-box-title">
                        <a href="https://institutcp.com/wp-content/uploads/2023/06/Bulletin-dadhesion-Institut-2023.pdf" target="_blank" rel="noopener noreferrer" class="contact-title-link">Nous rejoindre</a>
                    </h3>
                </div>
                <div class="contact-box-body">
                    <p class="contact-box-detail">
                        Téléchargez directement notre formulaire et bulletin d'adhésion Institut CP.
                    </p>
                </div>
                <div class="contact-box-footer">
                    <a href="https://institutcp.com/wp-content/uploads/2023/06/Bulletin-dadhesion-Institut-2023.pdf" class="contact-box-action contact-box-action--pdf" target="_blank" rel="noopener noreferrer">
                        <span>Bulletin d'adhésion (PDF)</span>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></svg>
                    </a>
                </div>
            </div>

            <!-- Box 4: Nous suivre -->
            <div class="contact-box contact-box--social">
                <div class="contact-box-accent-bar"></div>
                <div class="contact-box-top">
                    <div class="contact-box-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"/>
                            <circle cx="6" cy="12" r="3"/>
                            <circle cx="18" cy="19" r="3"/>
                            <line x1="8.59" x2="15.42" y1="13.51" y2="17.49"/>
                            <line x1="15.41" x2="8.59" y1="6.51" y2="10.49"/>
                        </svg>
                    </div>
                    <h3 class="contact-box-title">Nous suivre</h3>
                </div>
                <div class="contact-box-body">
                    <p class="contact-box-detail">
                        Rejoignez notre communauté sur les réseaux professionnels :
                    </p>
                    <div class="contact-social-grid">
                        <a href="https://www.linkedin.com" target="_blank" rel="noopener noreferrer" class="contact-social-pill" aria-label="LinkedIn Institut CP">
                            <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z"/></svg>
                            <span>LinkedIn</span>
                        </a>
                        <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="contact-social-pill" aria-label="Twitter / X Institut CP">
                            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            <span>Twitter / X</span>
                        </a>
                    </div>
                </div>
                <div class="contact-box-footer">
                    <span class="contact-hashtag">#InstitutCP</span>
                </div>
            </div>

        </div><!-- /.contact-boxes-row -->

    </div><!-- /.container -->
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
