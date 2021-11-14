
var textarea = document.getElementById("comments");

textarea.oninput = () => {
  textarea.style.height = "";
  textarea.style.height = Math.min(textarea.scrollHeight) + "px";
};
