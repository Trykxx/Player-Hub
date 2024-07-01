<?php
$styleCss = '../../../player-hub/assets/css/style.css';
$pageCss = '../../../player-hub/assets/css/recherche.css';

$pageJs = '../../../player-hub/assets/js/main.js';

require '/xampp/htdocs/player-hub/src/templates/header.php';
?>

<body>
  <main id="main-content">
    <div class="search-box">
      <i class="fa-solid fa-magnifying-glass search-icon"></i>
      <input type="text" class="search-input" placeholder="Chercher" />
    </div>

    <div class="container">
      <section class="tendances-container">
        <h2>Tendances</h2>
      </section>
      <section class="suggestions-container">
        <h2>Suggestions</h2>
      </section>
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