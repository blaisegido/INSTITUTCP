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
} elseif ($current_uri === 'espace-membres' || $current_page === 'espace-membres.php') {
    $active_slug = 'espace-membres';
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
                <a href="a-propos" class="nav-link <?php echo ($active_slug === 'a-propos') ? 'active' : ''; ?>">
                    L'institut
                </a>
            </li>
            <li>
                <a href="services" class="nav-link <?php echo ($active_slug === 'services') ? 'active' : ''; ?>">
                    Services
                </a>
            </li>
            <li>
                <a href="formations" class="nav-link <?php echo ($active_slug === 'formations') ? 'active' : ''; ?>">
                    Formations
                </a>
            </li>
            <li>
                <a href="international" class="nav-link <?php echo ($active_slug === 'international') ? 'active' : ''; ?>">
                    International
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
        </ul>

        <!-- Mobile Toggle Button -->
        <button class="menu-toggle" aria-label="Ouvrir le menu de navigation" aria-expanded="false">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</header>
