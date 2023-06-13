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
    ('[data-toggle="tooltip"]').tooltip()
})

//Troca campos
function formCliente(){
    clienteCampo = document.querySelector('.cliente__group');

    clienteCampo.style.display = 'block';
}

function formVendedor(){
    clienteCampo = document.querySelector('.cliente__group');

    clienteCampo.style.display = 'none';
}

//Mascaras
$(document).ready(function(){
    $('#valor').mask('000.000.000.000.000,00', {reverse: true});
    $('#cep').mask('00.000-000');
    $('#telefone').mask('(00) 00000-0000');
    $('#cpf').mask('000.000.000-00');
});

//Valida CEP
function buscaCep(){
    //https://brasilapi.com.br/docs#tag/CEP
    let cep = document.getElementById('cep').value;

    if(cep !== ""){
        let url = "https://brasilapi.com.br/api/cep/v1/"+cep;
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        //Trata a resposta da requisição
        req.onload = function (){
            if(req.status === 200){
                let endereco = JSON.parse(req.response);
                document.getElementById("uf").value = endereco.state; //Estado
                document.getElementById("cidade").value = endereco.city; //Cidade
                document.getElementById("bairro").value = endereco.neighborhood; //Bairro
                document.getElementById("rua").value = endereco.street; //Rua
            } else if(req.status === 404){
                alert("CEP inválido");
            } else {
                alert("Erro ao fazer a requisição do CEP");
            }
        }
    }
}