/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function buscar(palavra)
    {
        var page = "buscaProfissional.php";
        $.ajax
                ({
                    type: 'POST',
                    dataType: 'html',
                    url: page,
                    beforeSend: function () {
                        $("#dados").html("<img src='../img/hourglass.gif'>");
                    },
                    data: {palavra: palavra},
                    success: function (msg)
                    {
                        $("#dados").html(msg);
                    }
                });
    }

    $('#buscar').click(function () {
        buscar($("#palavra").val());
        $("#palavra").val("");
    });
