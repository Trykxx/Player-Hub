document.addEventListener("DOMContentLoaded", function () {
  const textarea = document.getElementById("postInput");
  const postContainer = document.getElementById("PostContainer");
  const postOptions = document.getElementById("postOptions");
  const postBtn = document.getElementById("postBtn");

  // Ajustement hauteur textarea
  textarea.addEventListener("input", function () {
    textarea.style.height = "auto";
    textarea.style.height = textarea.scrollHeight + "px";

    const totalHeight = textarea.scrollHeight + postOptions.offsetHeight + 50;
    postContainer.style.height = totalHeight + "px";

    if (textarea.value.trim() === "") {
      postBtn.style.opacity = "0.5";
    } else {
      postBtn.style.opacity = "1";
    }
  });

  // Initialise l'opacité du bouton au chargement de la page
  if (textarea.value.trim() === "") {
    postBtn.style.opacity = "0.5";
  } else {
    postBtn.style.opacity = "1";
  }

  // Importer des images et fichiers
  document.querySelector(".image-icon").addEventListener("click", function () {
    document.querySelector(".file-input").click();
  });
});


postBtn.addEventListener("click", function () {

  const postContent = document.querySelector("#postInput").value;
  console.log(postContent);
  console.log("Bouton cliqué !");

  let postContainer = document.createElement("div");
  postContainer.classList.add("post");

  let userInfo = document.createElement("div");
  userInfo.classList.add("user-post-info");

  let userPicture = document.createElement("span");
  userPicture.classList.add("post-pp");

  let userPseudo = document.createElement("span");
  userPseudo.classList.add("post-pseudo");

  userInfo.append(userPicture, userPseudo);

  postContainer.append(userInfo);
  console.log(postContainer);

  let postText = document.createElement("p");
  postText.classList.add("post-text");
  postText.textContent=postContent
  postContainer.append(postText)

  let postActions = document.createElement("div");
  postActions.classList.add("post-actions");

  let actionLike = document.createElement("div");
  actionLike.classList.add("action-like");
  postActions.append(actionLike)

  let likeCount = document.createElement("p");
  likeCount.classList.add("count-like");
  actionLike.append(likeCount)
  console.log('maj');
});
