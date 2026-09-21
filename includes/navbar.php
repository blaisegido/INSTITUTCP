<?php
$current_uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$current_page = basename($_SERVER['PHP_SELF']);

if ($current_uri === 'a-propos' || $current_page === 'a-propos.php' || $current_page === 'linstitut.php') {
    $active_slug = 'a-propos';
} else {
    $active_slug = 'accueil';
}
?>
<header class="site-header">
    <div class="navbar-container">
        <!-- Logo Image -->
        <a href="index.php" class="navbar-logo" aria-label="Accueil Institut CP">
            <img src="assets/img/logos/logo_modif_blanc_102_1-100x100.webp" alt="INSTITUT CP Logo" class="logo-img">
        </a>

        <!-- Navigation Links -->
        <ul class="navbar-nav">
            <li>
                <a href="index.php" class="nav-link <?php echo ($active_slug === 'accueil') ? 'active' : ''; ?>">
                    Accueil
                </a>
            </li>
            <li>
                <a href="a-propos" class="nav-link <?php echo ($active_slug === 'a-propos') ? 'active' : ''; ?>">
                    L'institut
                </a>
            </li>
            <li>
                <a href="espace-membres" class="btn-member">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Espace membres
                </a>
            </li>
            <li class="lang-switcher-li">
                <div class="lang-switcher">
                    <button type="button" class="lang-btn" id="langBtn" aria-expanded="false" aria-label="Choisir la langue">
                        <span class="lang-flag" id="currentLangFlag">🇫🇷</span>
                        <span class="lang-code" id="currentLangCode">FR</span>
                        <svg class="lang-arrow" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="lang-dropdown" id="langDropdown">
                        <button type="button" class="lang-item active" data-lang="fr" data-flag="🇫🇷" data-code="FR">
                            <span class="lang-flag">🇫🇷</span>
                            <span>Français</span>
                        </button>
                        <button type="button" class="lang-item" data-lang="en" data-flag="🇬🇧" data-code="EN">
                            <span class="lang-flag">🇬🇧</span>
                            <span>English</span>
                        </button>
                        <button type="button" class="lang-item" data-lang="zh-CN" data-flag="🇨🇳" data-code="ZH">
                            <span class="lang-flag">🇨🇳</span>
                            <span>中文</span>
                        </button>
                    </div>
                </div>
            </li>
        </ul>

        <!-- Mobile Toggle Button -->
        <button class="menu-toggle" aria-label="Ouvrir le menu de navigation" aria-expanded="false">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</header>
<div id="google_translate_element" style="display:none;"></div>
