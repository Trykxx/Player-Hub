<?php
$styleCss = '../../../player-hub/assets/css/style.css';
$pageCss = '../../../player-hub/assets/css/connexion.css';

$pageJs = '../../../player-hub/assets/js/login.js';

require '/xampp/htdocs/player-hub/src/templates/header.php';
?>

<body>
  <main>
    <div class="login-container" id="login-container">
      <div class="form-toggle-buttons">
        <button id="btn-connexion">Connexion</button>
        <button id="btn-inscription">Inscription</button>
      </div>
      <h2>Connexion</h2>
      <form>
        <div class="input-group">
          <input type="text" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Mot de passe</label>
        </div>
        <p>mot de passe oublié ? <a href="">Cliquez ici</a></p>

        <button class="login-btn">Connexion</button>
        <p>Vous n'avez pas encore de compte ?</p>
        <a href="#" class="register-directory" id="switch-to-inscription">Inscrivez-vous</a>
      </form>
    </div>

    <div class="register-container hidden" id="register-container">
      <div class="form-toggle-buttons">
        <button id="btn-connexion">Connexion</button>
        <button id="btn-inscription">Inscription</button>
      </div>
      <form>
        <h2>Inscription</h2>
        <div class="input-group">
          <input type="text" required>
          <label for="">Pseudo</label>
        </div>
        <div class="input-group">
          <input type="email" required>
          <label for="">Email</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label for="">Mot de passe</label>
        </div>
        <div class="input-group">
          <input type="password" required>
          <label>Confirmer le mot de passe</label>
        </div>
        <button type="submit" class="register-btn">Inscription</button>
        <p>Vous avez déjà un compte ?</p>
        <a href="#" id="switch-to-connexion">Connectez-vous</a>
      </form>
    </div>
  </main>
</body>

</html>