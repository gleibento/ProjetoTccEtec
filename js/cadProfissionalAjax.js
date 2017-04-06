$(function () {
    var form = $('form');
    var botao = $('#cad');
    botao.attr('type', 'submit');
    form.submit(function () {
        return false;
    });
//    function carregando() {
//        msn.empty().html("<p class='load'><img src='../img/hourglass.gif'></p>").fadeIn("fast");
//    }
    
    var page = "../Controller/profissionalController.php";
    $.ajaxSetup({
        type: 'POST',
        dataType: 'html',
        url: page
    });
    var cadastro = $('form[name="profissional"]');
    cadastro.submit(function () {
        var dados = $(this).serialize();
        var acao = "&acao = cadastrar";
        var sender = dados + acao;
       
        $.ajax({
            data: sender,
            success: function (msg)
            {
                $('#resposta').html(msg);
            },complete: function () {
                //cadastro.find("input:text,input:password").val("");
            }

        });
    });
});



