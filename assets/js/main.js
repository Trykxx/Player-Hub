// TODO rendre fonctionnel sur toutes les pages autres que index.html
const connexionBtnTarget = document.querySelector("#connexion-btn");
const divConnexionTarget = document.querySelector("#connexion-container");
const mainContent = document.querySelector("#main-content");

connexionBtnTarget.addEventListener("click", function (e) {
  e.preventDefault();
  divConnexionTarget.classList.toggle("visible");
  divConnexionTarget.classList.toggle("hidden");
  mainContent.classList.toggle("blur");
});

// Ajustement hauteur textarea
document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('postInput');
    const postContainer = document.getElementById('PostContainer');
    const postOptions = document.getElementById('postOptions');

    textarea.addEventListener('input', function() {
        textarea.style.height = 'auto';  // Réinitialise la hauteur pour obtenir la hauteur correcte
        textarea.style.height = (textarea.scrollHeight) + 'px'; // Définit la hauteur selon le contenu

        // Ajuste la hauteur de la div parent pour éviter que le textarea n'empiète sur les boutons
        const totalHeight = textarea.scrollHeight + postOptions.offsetHeight + 20; // 20 est un padding supplémentaire
        postContainer.style.height = totalHeight + 'px';
    });
});

// Importer des images et fichiers
document.getElementById('imageIcon').addEventListener('click', function() {
    document.getElementById('fileInput').click();
});

// Gérer le fichier sélectionné
document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    if (file) {
        // Vous pouvez maintenant traiter le fichier ici (par exemple, afficher un aperçu ou télécharger)
        console.log('Fichier sélectionné:', file.name);
    }
});