<?php
$styleCss = '../../../player-hub/assets/css/style.css';
$pageCss = '../../../player-hub/assets/css/index.css';

$pageJs = '../../../player-hub/assets/js/main.js';

require '../player-hub/src/templates/header.php';
?>

<body>
  <main id="main-content">
    <div class="container">
      <div class="container-center">
        <section class="post-creation" id="PostContainer">
          <span class="pp-user"></span>
          <textarea class="post-input" id="postInput" placeholder="Partagez du contenu !"></textarea>

          <div class="post-options" id="postOptions">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image image-icon">
              <rect width="18" height="18" x="3" y="3" rx="2" ry="2" />
              <circle cx="9" cy="9" r="2" />
              <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21" />
            </svg>
            <input type="file" class="file-input" id="file-input" accept="image/*" />
            <!-- <svg
                width="22"
                height="25"
                viewBox="0 0 25 25"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="gif-icon"
              >
                <rect
                  x="1"
                  y="1"
                  width="23"
                  height="23"
                  rx="4"
                  stroke="white"
                  stroke-width="2"
                />
                <path
                  d="M9.54545 11.0938C9.4858 10.8864 9.40199 10.7031 9.29403 10.544C9.18608 10.3821 9.05398 10.2457 8.89773 10.1349C8.74432 10.0213 8.56818 9.93466 8.36932 9.875C8.1733 9.81534 7.95597 9.78551 7.71733 9.78551C7.27131 9.78551 6.87926 9.89631 6.54119 10.1179C6.20597 10.3395 5.9446 10.6619 5.7571 11.0852C5.5696 11.5057 5.47585 12.0199 5.47585 12.6278C5.47585 13.2358 5.56818 13.7528 5.75284 14.179C5.9375 14.6051 6.19886 14.9304 6.53693 15.1548C6.875 15.3764 7.27415 15.4872 7.73438 15.4872C8.15199 15.4872 8.50852 15.4134 8.80398 15.2656C9.10227 15.1151 9.32955 14.9034 9.4858 14.6307C9.64489 14.358 9.72443 14.0355 9.72443 13.6634L10.0994 13.7188H7.84943V12.3295H11.5014V13.429C11.5014 14.196 11.3395 14.8551 11.0156 15.4062C10.6918 15.9545 10.2457 16.3778 9.67756 16.6761C9.10938 16.9716 8.45881 17.1193 7.72585 17.1193C6.90767 17.1193 6.18892 16.9389 5.5696 16.5781C4.95028 16.2145 4.46733 15.6989 4.12074 15.0312C3.77699 14.3608 3.60511 13.5653 3.60511 12.6449C3.60511 11.9375 3.70739 11.3068 3.91193 10.7528C4.11932 10.196 4.40909 9.72443 4.78125 9.33807C5.15341 8.9517 5.58665 8.65767 6.08097 8.45597C6.57528 8.25426 7.1108 8.15341 7.6875 8.15341C8.18182 8.15341 8.64205 8.22585 9.06818 8.37074C9.49432 8.51278 9.87216 8.71449 10.2017 8.97585C10.5341 9.23722 10.8054 9.5483 11.0156 9.90909C11.2259 10.267 11.3608 10.6619 11.4205 11.0938H9.54545ZM14.7326 8.27273V17H12.8874V8.27273H14.7326ZM16.2507 17V8.27273H22.0291V9.79403H18.0959V11.8736H21.6456V13.3949H18.0959V17H16.2507Z"
                  fill="white"
                />
              </svg> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="25" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-smile-plus">
              <path d="M22 11v1a10 10 0 1 1-9-10" />
              <path d="M8 14s1.5 2 4 2 4-2 4-2" />
              <line x1="9" x2="9.01" y1="9" y2="9" />
              <line x1="15" x2="15.01" y1="9" y2="9" />
              <path d="M16 5h6" />
              <path d="M19 2v6" />
            </svg>
          </div>
          <button class="post-btn" id="postBtn">Publier</button>
        </section>

        <section class="time-line">
          <h2>Fil d'actualité</h2>
        </section>
      </div>

      <div class="container-right">
        <section class="suggestions">
          <h2>Suggestions d'amis</h2>
          <div class="user-suggestion">
            <div class="user-info">
              <span class="pp-user-suggestion"></span>
              <p class="name-user">Utilisateur 1</p>
            </div>
            <button class="add-friend-btn">Ajouter</button>
          </div>
          <div class="user-suggestion">
            <div class="user-info">
              <span class="pp-user-suggestion"></span>
              <p class="name-user">Utilisateur 2</p>
            </div>
            <button class="add-friend-btn">Ajouter</button>
          </div>
          <div class="user-suggestion">
            <div class="user-info">
              <span class="pp-user-suggestion"></span>
              <p class="name-user">Utilisateur 3</p>
            </div>
            <button class="add-friend-btn">Ajouter</button>
          </div>
          <div class="user-suggestion">
            <div class="user-info">
              <span class="pp-user-suggestion"></span>
              <p class="name-user">Utilisateur 4</p>
            </div>
            <button class="add-friend-btn">Ajouter</button>
          </div>
          <div class="user-suggestion">
            <div class="user-info">
              <span class="pp-user-suggestion"></span>
              <p class="name-user">Utilisateur 5</p>
            </div>
            <button class="add-friend-btn">Ajouter</button>
          </div>


        </section>

        <section class="tendances">
          <h2>Forums tendances</h2>
          <div class="forums-trending">
            <p class="forum-name">1. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">2. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">3. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">4. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">5. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">6. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">7. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">8. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">9. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
          <div class="forums-trending">
            <p class="forum-name">10. Nom du forum</p>
            <p class="forum-messages">26542 messages</p>
          </div>
        </section>
      </div>
    </div>
  </main>
</body>

</html>