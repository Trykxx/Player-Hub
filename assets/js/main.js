//* messages.html
// const convTarget = document.querySelector('#user-conv')
// console.log(convTarget);
// const convAffich = document.querySelector("#msg-container")
// console.log(convAffich);
// convTarget.addEventListener('click', function(){
// convAffich.style.backgroundColor = 'blue'
// })

const connexionBtnTarget = document.querySelector("#connexion-btn");
const divConnexionTarget = document.querySelector("#connexion-container")

connexionBtnTarget.addEventListener('click', function(e){
    e.preventDefault()
    divConnexionTarget.classList.toggle('visible')
    divConnexionTarget.classList.toggle('hidden');
})

