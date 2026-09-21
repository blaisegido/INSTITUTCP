<?php
$page_title = "Espace Membres - INSTITUT CP";
$page_description = "Accès réservé aux membres de l'Institut CP.";
require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

<div style="padding-top: calc(var(--navbar-height) + 3rem);">
    <section class="section">
        <div class="container" style="max-width:540px;">
            <div class="card" style="padding:2.5rem; text-align:center;">
                <div class="card-icon" style="margin: 0 auto 1.5rem auto;">
                    <svg width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h1 class="card-title" style="font-size:1.8rem; margin-bottom:0.5rem;">Espace Membres</h1>
                <p class="card-text" style="margin-bottom:2rem;">
                    Accédez à votre espace sécurisé, aux annuaires exclusifs et à nos ressources privées.
                </p>

                <form action="#" method="POST" style="display:flex; flex-direction:column; gap:1.2rem; text-align:left;">
                    <div>
                        <label style="display:block; font-size:0.88rem; color:var(--color-text-muted); margin-bottom:0.4rem;">Adresse Email</label>
                        <input type="email" placeholder="votre.email@exemple.com" required style="width:100%; padding:0.85rem 1rem; border-radius:var(--radius-sm); background:var(--color-bg-surface); border:1px solid var(--color-border); color:var(--color-text-main); font-size:0.95rem; outline:none; transition:border-color 0.2s;">
                    </div>
                    <div>
                        <label style="display:block; font-size:0.88rem; color:var(--color-text-muted); margin-bottom:0.4rem;">Mot de passe</label>
                        <input type="password" placeholder="••••••••" required style="width:100%; padding:0.85rem 1rem; border-radius:var(--radius-sm); background:var(--color-bg-surface); border:1px solid var(--color-border); color:var(--color-text-main); font-size:0.95rem; outline:none; transition:border-color 0.2s;">
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%; margin-top:0.5rem;">
                        Se connecter
                    </button>
                </form>

                <p style="margin-top:1.5rem; font-size:0.88rem; color:var(--color-text-dim);">
                    Pas encore membre ? <a href="index.php#contact" style="color:var(--color-accent-cyan); text-decoration:underline;">Demander votre adhésion</a>
                </p>
            </div>
        </div>
    </section>
</div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
