$(function () {
    var msn = $('#message');
    var form = $('form');
    var botao = $('#cadastrar');
    botao.attr('type', 'submit');
    form.submit(function () {
        msn.fadeOut("fast");
        return false;
    });
    function carregando() {
        msn.empty().html("<p class='load'><img src='../img/hourglass.gif'></p>").fadeIn("fast");
    }

    var page = "../Controller/usuarioController.php";
    $.ajaxSetup({
        type: 'POST',
        dataType: 'html',
        url: page,
        beforeSend: carregando()
    });
    var cadastro = $('form[name="cadastro"]');
    cadastro.submit(function () {
        var dados = $(this).serialize();
        var acao = "&acao = cadastrar";
        var sender = dados + acao;
        $.ajax({
            data: sender,
            success: function (msg)
            {
                $("#resposta").html(msg);
            }

        });
    });
});
