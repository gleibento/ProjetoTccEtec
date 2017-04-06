/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function prontuario(sus)
    {
        var page = "buscaProntuario.php";
        $.ajax
                ({
                    type: 'POST',
                    dataType: 'html',
                    url: page,
                    beforeSend: function () {
                        $("#msg").html("<img src='../img/hourglass.gif'>");
                    },
                    data: {sus: sus},
                    success: function (msg)
                    {
                        $("#msg").html(msg);
                    }
                });
    }

    $('#protuario').click(function () {
        prontuario($("#sus").val());
        $("#sus").val("");
    });
