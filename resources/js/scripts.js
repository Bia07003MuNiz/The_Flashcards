$('.close').click(function(event){
    $('#modalCookies').modal('hide');
    event.preventDefault();
});

$(document).ready(function() {
    var ls = localStorage.getItem("modal");
    if(!ls){
        $('#modalCookies').modal('show');
    }
})

$('#modalCookies').on('shown.bs.modal', function(){
    localStorage.setItem("modal", false);
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })