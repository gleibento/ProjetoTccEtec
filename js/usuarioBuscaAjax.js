function usuario(usu_sus,mae)
    {
        var page = "buscaUsuario.php";
        $.ajax
                ({
                    type: 'POST',
                    dataType: 'html',
                    url: page,
                    beforeSend: function () {
                        $("#resp").html("<img src='../img/hourglass.gif'>");
                    },
                    data: {usu_sus: usu_sus, mae:mae},
                    success: function (msg)
                    {
                        $("#resp").html(msg);
                    }
                });
    }

    $('#search').click(function () {
        usuario($("#usu_sus").val());
        $("#usu_sus").val("");
    });



