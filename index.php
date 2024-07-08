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

          <div class="post">
            <div class="user-post-info">
              <span class="post-pp"></span>
              <span class="post-pseudo">Utilisateur</span>
            </div>
            <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, illum laudantium ipsum commodi nesciunt neque. Dolorum, at corporis maxime, eligendi distinctio deleniti ipsum veniam facere aspernatur animi quae mollitia alias.</p>
            <div class="post-actions">
              <div class="action-like">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-heart like-btn">
                  <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z" />
                </svg>
                <p class="count-like">342</p>
              </div>

              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark bookmark-btn">
                <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z" />
              </svg>

            </div>
          </div>

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