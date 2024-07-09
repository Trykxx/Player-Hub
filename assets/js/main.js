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

    function buttonState() {
      if (textarea.value.trim() === "") {
        postBtn.style.opacity = "0.5";
        postBtn.disabled = true;
        postBtn.setAttribute()
      } else {
        postBtn.style.opacity = "1";
        postBtn.disabled = false;
      }
    }
  });

  // Importer des images et fichiers
  document.querySelector(".image-icon").addEventListener("click", function () {
    document.querySelector(".file-input").click();
  });
});

postBtn.addEventListener("click", function () {
  const postContent = document.querySelector("#postInput").value;

  let postContainer = document.createElement("div");
  postContainer.classList.add("post");

  let userInfo = document.createElement("div");
  userInfo.classList.add("user-post-info");

  let userPicture = document.createElement("span");
  userPicture.classList.add("post-pp");

  let userPseudo = document.createElement("span");
  userPseudo.textContent = "Utilisateur";
  userPseudo.classList.add("post-pseudo");

  userInfo.append(userPicture, userPseudo);

  postContainer.append(userInfo);

  let postText = document.createElement("p");
  postText.classList.add("post-text");
  postText.textContent = postContent;
  postContainer.append(postText);

  let postActions = document.createElement("div");
  postActions.classList.add("post-actions");
  postContainer.append(postActions);

  let actionLike = document.createElement("div");
  actionLike.classList.add("action-like");
  postActions.append(actionLike);

  let svgUrl = "http://www.w3.org/2000/svg";

  let likeSvg = document.createElementNS(svgUrl, "svg");

  likeSvg.setAttribute("xmlns", svgUrl);
  likeSvg.setAttribute("width", "24");
  likeSvg.setAttribute("height", "24");
  likeSvg.setAttribute("viewBox", "0 0 24 24");
  likeSvg.setAttribute("fill", "none");
  likeSvg.setAttribute("stroke", "currentColor");
  likeSvg.setAttribute("stroke-width", "2");
  likeSvg.setAttribute("stroke-linecap", "round");
  likeSvg.setAttribute("stroke-linejoin", "round");
  likeSvg.classList.add("lucide", "lucide-heart", "like-btn");

  let likePath = document.createElementNS(svgUrl, "path");
  likePath.setAttribute(
    "d",
    "M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"
  );
  likeSvg.appendChild(likePath);

  actionLike.append(likeSvg);

  let likeCount = document.createElement("p");
  likeCount.classList.add("count-like");
  likeCount.textContent = 435;
  actionLike.append(likeCount);

  let svgNS = "http://www.w3.org/2000/svg";

  let bookmarkSvg = document.createElementNS(svgNS, "svg");
  bookmarkSvg.setAttribute("xmlns", "http://www.w3.org/2000/svg");
  bookmarkSvg.setAttribute("width", "24");
  bookmarkSvg.setAttribute("height", "24");
  bookmarkSvg.setAttribute("viewBox", "0 0 24 24");
  bookmarkSvg.setAttribute("fill", "none");
  bookmarkSvg.setAttribute("stroke", "currentColor");
  bookmarkSvg.setAttribute("stroke-width", "2");
  bookmarkSvg.setAttribute("stroke-linecap", "round");
  bookmarkSvg.setAttribute("stroke-linejoin", "round");
  bookmarkSvg.classList.add("lucide", "lucide-bookmark", "bookmark-btn");

  let bookmarkPath = document.createElementNS(svgNS, "path");
  bookmarkPath.setAttribute(
    "d",
    "m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z"
  );

  bookmarkSvg.appendChild(bookmarkPath);
  postActions.append(bookmarkSvg);

  document.querySelector(".time-line").append(postContainer);
});
