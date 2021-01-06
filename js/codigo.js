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
$('#menu li').on('click', function(){
  $('li.active').removeClass('active');
  $(this).addClass('active');
});
