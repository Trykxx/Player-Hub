// TODO rendre fonctionnel sur toutes les pages autres que index.html
const connexionBtnTarget = document.querySelector("#connexion-btn");
const divConnexionTarget = document.querySelector("#connexion-container")
const mainContent = document.querySelector("#main-content");

connexionBtnTarget.addEventListener('click', function(e){
    e.preventDefault()
    divConnexionTarget.classList.toggle('visible')
    divConnexionTarget.classList.toggle('hidden');
    mainContent.classList.toggle('blur');
})

