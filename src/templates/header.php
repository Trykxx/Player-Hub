<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="2024 - Amit Nicolas Roig Menda" />
    <title> Accueil - Player Hub</title>
    <link rel="shortcut icon" href="../../../player-hub/assets/img/logo-white-mini.png" />
    <link rel="stylesheet" href=<?= $styleCss ?> />
    <link rel="stylesheet" href=<?= $pageCss ?> />

    <script src=<?= $pageJs ?> defer></script>
    <!-- <script src="./assets/js/post-btn.js" defer></script> -->
</head>

    <header>
        <a href="../../../player-hub/index.php">
            <img src="../../../player-hub/assets/img/logo-dark-mini.png" alt="Logo" class="logo" />
        </a>

        <nav class="navbar">
            <a href="../../../player-hub//view/notifications.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell">
                    <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                    <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                </svg><span>Notifications</span></a>
            <div class="nav-item">
                <a href="../../../player-hub//view/forums.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-messages-square">
                        <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z" />
                        <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                    </svg><span>Forums</span></a>
            </div>
            <a href="../../../player-hub//view/messages.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                    <rect width="20" height="16" x="2" y="4" rx="2" />
                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                </svg><span>Messages</span></a>
            <a href="../../../player-hub//view/explorer.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search">
                    <circle cx="11" cy="11" r="8" />
                    <path d="m21 21-4.3-4.3" />
                </svg><span>Explorer</span></a>
            <div class="nav-item">
                <a href="../../../player-hub//view/profil.php" class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-user-round">
                        <path d="M18 20a6 6 0 0 0-12 0" />
                        <circle cx="12" cy="10" r="4" />
                        <circle cx="12" cy="12" r="10" />
                    </svg><span>Profil</span></a>
                <div class="dropdown-menu" id="dropdown-menu-profil">
                    <a href="../../../player-hub//view/connexion.php" id="connexion-btn">Connexion/Inscription</a>
                    <a href="">Réglages</a>
                    <a href="">Signets</a>
                    <a href="">Déconnexion</a>
                </div>
            </div>
        </nav>
    </header>