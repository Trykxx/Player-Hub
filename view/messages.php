<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Messages - Player Hub</title>
    <link rel="shortcut icon" href="../assets/img/logo-white-mini.png" />
    <link rel="shortcut icon" href="../assets/icons/icone.png" />
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/messages.css" />
    <script src="../assets/js/main.js" defer></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <script src="../assets/js/messages.js" defer></script>
  </head>
  <body>
    <header>
      <a href="../index.html">
        <img src="../assets/img/logo-dark-mini.png" alt="Logo" class="logo" />
      </a>

      <nav class="navbar">
        <a href="../view/notifications.html" class="nav-link"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-bell"
          >
            <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
            <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" /></svg
          ><span>Notifications</span></a
        >
        <div class="nav-item">
          <a href="../view/forums.html" class="nav-link"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-messages-square"
            >
              <path
                d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"
              />
              <path
                d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"
              /></svg
            ><span>Forums</span></a
          >
          <!-- <div class="dropdown-menu">
            <a href="">Call of Duty</a>
            <a href="">Fortnite</a>
            <a href="">Overwatch</a>
            <a href="">EAFC 24</a>
            <a href="./view/forums.html" class="all-forums"
              ><span>Tous les Forums</span></a
            >
          </div> -->
        </div>
        <a href="../view/messages.html" class="nav-link"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-mail"
          >
            <rect width="20" height="16" x="2" y="4" rx="2" />
            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" /></svg
          ><span>Messages</span></a
        >
        <a href="../view/explorer.html" class="nav-link"
          ><svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="lucide lucide-search"
          >
            <circle cx="11" cy="11" r="8" />
            <path d="m21 21-4.3-4.3" /></svg
          ><span>Explorer</span></a
        >
        <div class="nav-item">
          <a href="../view/profil.html" class="nav-link"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-circle-user-round"
            >
              <path d="M18 20a6 6 0 0 0-12 0" />
              <circle cx="12" cy="10" r="4" />
              <circle cx="12" cy="12" r="10" /></svg
            ><span>Profil</span></a
          >
          <div class="dropdown-menu" id="dropdown-menu-profil">
            <a href="../view/connexion.html" id="connexion-btn">Connexion/Inscription</a>
            <a href="">Réglages</a>
            <a href="">Signets</a>
            <a href="">Déconnexion</a>
          </div>
        </div>
      </nav>
    </header>
    <main id="main-content">
      <div class="container">
        <section class="users-container">
          <div class="container-header">
            <h2>Messages</h2>
            <div id="new-message-icon">
              <a href=""><i class="fa-solid fa-envelope-open"></i></a>
            </div>
          </div>
          <div class="search-box">
            <i class="fa-solid fa-magnifying-glass search-icon"></i>
            <input type="text" class="search-input" placeholder="Chercher" />
          </div>

          <div id="user-conv"></div>
          <div id="user-conv"></div>
          <div id="user-conv"></div>
          <div id="user-conv"></div>
          <div id="user-conv"></div>
          <div id="user-conv"></div>
          <div id="user-conv"></div>
        </section>

        <section id="msg-container"></section>
      </div>
    </main>
    <div id="connexion-container" class="connexion-container hidden">
      <h2>Connexion</h2>
      <a href=""><i class="fa-solid fa-xmark close-icon"></i></a>
      <form class="connexion-form">
        <label for="email">Email :</label>
        <input type="text" id="email" placeholder="Votre adresse e-mail" />

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" placeholder="Votre mot de passe" />

        <input class="btn-submit" type="submit" value="Connectez-vous" />
      </form>
    </div>
  </body>
</html>
