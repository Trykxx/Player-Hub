const convTarget = document.querySelector('#user-conv')
console.log(convTarget);
const convAffich = document.querySelector("#msg-container")
console.log(convAffich);
convTarget.addEventListener('click', function(){
convAffich.style.backgroundColor = 'blue'
})