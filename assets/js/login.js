console.log('coucou');

const loginBtn = document.querySelectorAll("#btn-connexion");
const registerBtn = document.querySelectorAll("#btn-inscription");
const registerContainer = document.querySelector("#register-container");
const loginContainer = document.querySelector("#login-container");

//* Connexion
function showLogin() {
    loginContainer.classList.add('active');
    loginContainer.classList.remove('hidden');
    registerContainer.classList.add('hidden');
    registerContainer.classList.remove('active');

    loginBtn.forEach(btn => btn.style.borderBottom = '3px solid var(--cl-title)');
    registerBtn.forEach(btn => btn.style.borderBottom = 'none');
}

//* Inscription
function showRegister() {
    registerContainer.classList.add('active');
    registerContainer.classList.remove('hidden');
    loginContainer.classList.add('hidden');
    loginContainer.classList.remove('active');

    registerBtn.forEach(btn => btn.style.borderBottom = '3px solid var(--cl-title)');
    loginBtn.forEach(btn => btn.style.borderBottom = 'none');
}

//* btn Connexion
loginBtn.forEach(btn => {
    btn.addEventListener('click', showLogin);
});

//* btn Inscription
registerBtn.forEach(btn => {
    btn.addEventListener('click', showRegister);
});

// Écouteurs d'événements pour les liens dans les formulaires
document.querySelector("#switch-to-inscription").addEventListener('click', function(e) {
    e.preventDefault();
    showRegister();
});

document.querySelector("#switch-to-connexion").addEventListener('click', function(e) {
    e.preventDefault();
    showLogin();
});
