<?php
$styleCss = '../../../player-hub/assets/css/style.css';
$pageCss = '../../../player-hub/assets/css/messages.css';

$pageJs = '../../../player-hub/assets/js/messages.js';

require '/xampp/htdocs/player-hub/src/templates/header.php';
?>

<body>

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