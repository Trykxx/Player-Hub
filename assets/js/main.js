// TODO rendre fonctionnel sur toutes les pages autres que index.html
const connexionBtnTarget = document.querySelector("#connexion-btn");
const divConnexionTarget = document.querySelector("#connexion-container");
const mainContent = document.querySelector("#main-content");

// connexionBtnTarget.addEventListener("click", function (e) {
//   e.preventDefault();
//   divConnexionTarget.classList.toggle("visible");
//   divConnexionTarget.classList.toggle("hidden");
//   mainContent.classList.toggle("blur");
// });

// Ajustement hauteur textarea
document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('postInput');
    const postContainer = document.getElementById('PostContainer');
    const postOptions = document.getElementById('postOptions');
    const postBtn = document.getElementById('postBtn');

    textarea.addEventListener('input', function() {
        textarea.style.height = 'auto';  // Réinitialise la hauteur pour obtenir la hauteur correcte
        textarea.style.height = (textarea.scrollHeight) + 'px'; // Définit la hauteur selon le contenu

        // Ajuste la hauteur de la div parent pour éviter que le textarea n'empiète sur les boutons
        const totalHeight = textarea.scrollHeight + postOptions.offsetHeight + 50; // 20 est un padding supplémentaire
        postContainer.style.height = totalHeight + 'px';

        // Vérifiez si le textarea est vide et ajustez l'opacité du bouton
        if (textarea.value.trim() === '') {
            postBtn.style.opacity = '0.5';
        } else {
            postBtn.style.opacity = '1';
        }
    });

    // Initialise l'opacité du bouton au chargement de la page
    if (textarea.value.trim() === '') {
        postBtn.style.opacity = '0.5';
    } else {
        postBtn.style.opacity = '1';
    }
});

// Importer des images et fichiers
document.querySelector('.image-icon').addEventListener('click', function() {
    document.querySelector('.file-input').click();
});

