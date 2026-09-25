<?php
$current_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$current_page = basename($_SERVER['PHP_SELF']);

if ($current_uri === 'a-propos' || $current_page === 'a-propos.php' || $current_page === 'linstitut.php') {
    $active_slug = 'a-propos';
} elseif ($current_uri === 'services' || $current_page === 'services.php') {
    $active_slug = 'services';
} elseif ($current_uri === 'formations' || $current_page === 'formations.php') {
    $active_slug = 'formations';
} elseif ($current_uri === 'international' || $current_page === 'international.php') {
    $active_slug = 'international';
} else {
    $active_slug = 'accueil';
}
?>
<header class="site-header">
    <div class="navbar-container">
        <!-- Logo Image and Brand Text -->
        <a href="<?php echo $base_url; ?>/" class="navbar-logo" aria-label="Accueil Institut CP">
            <img src="<?php echo $base_url; ?>/assets/img/logos/logo_modif_blanc_102_1-100x100.webp" alt="INSTITUT CP Logo" class="logo-img notranslate" width="100" height="100" decoding="async" translate="no">
            <span class="logo-text navbar-logo-text notranslate" translate="no">Institut <span class="accent">CP</span></span>
        </a>

        <!-- Navigation Links -->
        <ul class="navbar-nav">
            <li>
                <a href="<?php echo $base_url; ?>/" class="nav-link <?php echo ($active_slug === 'accueil') ? 'active' : ''; ?>">
                    Accueil
                </a>
            </li>
            <li>
                <a href="<?php echo $base_url; ?>/a-propos" class="nav-link <?php echo ($active_slug === 'a-propos') ? 'active' : ''; ?>">
                    L'institut
                </a>
            </li>
            <li>
                <a href="<?php echo $base_url; ?>/services" class="nav-link <?php echo ($active_slug === 'services') ? 'active' : ''; ?>">
                    Services
                </a>
            </li>
            <li>
                <a href="<?php echo $base_url; ?>/formations" class="nav-link <?php echo ($active_slug === 'formations') ? 'active' : ''; ?>">
                    Formations
                </a>
            </li>
            <li>
                <a href="<?php echo $base_url; ?>/international" class="nav-link <?php echo ($active_slug === 'international') ? 'active' : ''; ?>">
                    ICP International
                </a>
            </li>
            <li class="mobile-member-li">
                <a href="<?php echo $base_url; ?>/espace-membres" class="btn-member">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Espace membres
                </a>
            </li>
        </ul>

        <!-- Right Side Header Actions (Desktop member button + Language switcher + Mobile menu toggle) -->
        <div class="navbar-actions">
            <a href="<?php echo $base_url; ?>/espace-membres" class="btn-member desktop-member-btn">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                Espace membres
            </a>

            <!-- Language Switcher Widget (Visible on both Desktop and Mobile next to burger) -->
            <div class="lang-switcher notranslate" translate="no">
                <button type="button" class="lang-btn" id="langBtn" aria-expanded="false" aria-label="Choisir la langue">
                    <img src="<?php echo $base_url; ?>/assets/img/flags/fr.svg" alt="FR" class="lang-flag-img" id="currentLangFlag" width="20" height="14">
                    <span class="lang-code" id="currentLangCode">FR</span>
                    <svg class="lang-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                        <path d="M6 9l6 6 6-6"/>
                    </svg>
                </button>
                <div class="lang-dropdown" id="langDropdown">
                    <button type="button" class="lang-item active" data-lang="fr" data-flag="<?php echo $base_url; ?>/assets/img/flags/fr.svg" data-code="FR">
                        <img src="<?php echo $base_url; ?>/assets/img/flags/fr.svg" alt="FR" class="lang-flag-img" width="20" height="14">
                        <span>Français</span>
                    </button>
                    <button type="button" class="lang-item" data-lang="en" data-flag="<?php echo $base_url; ?>/assets/img/flags/gb.svg" data-code="EN">
                        <img src="<?php echo $base_url; ?>/assets/img/flags/gb.svg" alt="EN" class="lang-flag-img" width="20" height="14">
                        <span>English</span>
                    </button>
                    <button type="button" class="lang-item" data-lang="es" data-flag="<?php echo $base_url; ?>/assets/img/flags/es.svg" data-code="ES">
                        <img src="<?php echo $base_url; ?>/assets/img/flags/es.svg" alt="ES" class="lang-flag-img" width="20" height="14">
                        <span>Español</span>
                    </button>
                    <button type="button" class="lang-item" data-lang="zh-CN" data-flag="<?php echo $base_url; ?>/assets/img/flags/cn.svg" data-code="ZH">
                        <img src="<?php echo $base_url; ?>/assets/img/flags/cn.svg" alt="ZH" class="lang-flag-img" width="20" height="14">
                        <span>中文</span>
                    </button>
                    <button type="button" class="lang-item" data-lang="de" data-flag="<?php echo $base_url; ?>/assets/img/flags/de.svg" data-code="DE">
                        <img src="<?php echo $base_url; ?>/assets/img/flags/de.svg" alt="DE" class="lang-flag-img" width="20" height="14">
                        <span>Deutsch</span>
                    </button>
                    <button type="button" class="lang-item" data-lang="ar" data-flag="<?php echo $base_url; ?>/assets/img/flags/ae.svg" data-code="AR">
                        <img src="<?php echo $base_url; ?>/assets/img/flags/ae.svg" alt="AR" class="lang-flag-img" width="20" height="14">
                        <span>العربية</span>
                    </button>
                </div>
            </div>

            <!-- Mobile Toggle Button -->
            <button class="menu-toggle" aria-label="Ouvrir le menu de navigation" aria-expanded="false">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
</header>
<div id="google_translate_element" style="display:none;"></div>
