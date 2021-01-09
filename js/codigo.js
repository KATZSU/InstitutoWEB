window.onload = function () {
  $("#onload").fadeOut();
  $("body").removeClass("hidden");
};
function retorno() {
  window.location.href = "./pages/revistas.html";
}
function retornoIndex() {
  window.location.href = "../index.html";
}
function retornoRequisitos() {
  window.location.href = "./pages/bienestar.html";
}
$("#menu li").on("click", function () {
  $("li.active").removeClass("active");
  $(this).addClass("active");
});

const btnSwitch = document.querySelector("#switch");
btnSwitch.addEventListener("click", () => {
  document.body.classList.toggle("darkMode");
  btnSwitch.classList.toggle("active");
  if (document.body.classList.contains("darkMode")) {
    localStorage.setItem("dark-mode", "true");
  } else {
    localStorage.setItem("dark-mode", "false");
  }
});
if (localStorage.getItem("dark-mode") === "true") {
  document.body.classList.add("darkMode");
  btnSwitch.classList.add("active");
} else {
  document.body.classList.remove("darkMode");
  btnSwitch.classList.remove("active");
}
