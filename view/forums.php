<?php
$styleCss = '../../../player-hub/assets/css/style.css';
$pageCss = '../../../player-hub/assets/css/forums.css';

$pageJs = '../../../player-hub/assets/js/main.js';

require '/xampp/htdocs/player-hub/src/templates/header.php';
?>

<body>

  <main class="container" id="main-content">
    <h1>Forums</h1>

    <section class="cards-container">
      <div class="game-card">
        <img src="../assets/img/cod.avif" alt="Image de Call of Duty" />
        <div class="game-card-container">
          <div class="game-card-title">Call of Duty</div>
          <a href="lien_vers_forum_du_jeu" class="game-card-button">Explorer le forum</a>
        </div>
      </div>
      <div class="game-card">
        <img src="../assets/img/fortnite.jpg" alt="Fortnite" />
        <div class="game-card-container">
          <div class="game-card-title">Fortnite</div>
          <a href="lien_vers_forum_du_jeu" class="game-card-button">Explorer le forum</a>
        </div>
      </div>
      <div class="game-card">
        <img src="../assets/img/Overwatch_2.webp" alt="Overwatch" />
        <div class="game-card-container">
          <div class="game-card-title">Overwatch</div>
          <a href="lien_vers_forum_du_jeu" class="game-card-button">Explorer le forum</a>
        </div>
      </div>
      <div class="game-card">
        <img src="../assets/img/eafc.avif" alt="EAFC 24" />
        <div class="game-card-container">
          <div class="game-card-title">EAFC 24</div>
          <a href="lien_vers_forum_du_jeu" class="game-card-button">Explorer le forum</a>
        </div>
      </div>
      <div class="game-card">
        <img src="../assets/img/lol.jpeg" alt="League of Legends" />
        <div class="game-card-container">
          <div class="game-card-title">League of Legends</div>
          <a href="lien_vers_forum_du_jeu" class="game-card-button">Explorer le forum</a>
        </div>
      </div>
    </section>
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