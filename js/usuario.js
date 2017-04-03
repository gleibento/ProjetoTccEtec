$(function () {
   $('.sub').menu();
    $('[data-toggle="offcanvas"]').click(function () {
        $('.row-offcanvas').toggleClass('active');
    });
   
    /*var menu = $('.open-menu');
     $('#bars').click(function () {
     menu.fadeToggle("fast");
     $('article').toggleClass('move-menu');
     $('.form').show("slow");
     });
     $('.bar-close .btn-close').click(function () {
     menu.hide("fast");
     $('article').toggleClass('move-menu');
     });*/

//função para carregar endereços de caordo com o cep
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#usu_logradouro").val("");
        $("#usu_bairro").val("");
        $("#usu_cidade").val("");
        $("#usu_uf").val("");
    }

    //Quando o campo cep perde o foco.
    $("#usu_cep").blur(function () {

        //Nova variável "cep" somente com dígitos.
        var cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if (validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.

                $("#usu_logradouro").val("  ........... ");
                $("#usu_bairro").val("  ........... ");
                $("#usu_cidade").val("  ........... ");
                $("#usu_uf").val("  ........... ");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#usu_logradouro").val(dados.logradouro);
                        $("#usu_bairro").val(dados.bairro);
                        $("#usu_cidade").val(dados.localidade);
                        $("#usu_uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });
    //mascara em campos

    $("#usu_cpf").mask("999.999.999-99", {placeholder: "   .   .   -  "});
    $("#usu_cel1").mask("(99) 9 9999-9999", {placeholder: "(  )    -    "});
    $("#usu_cel2").mask("(99) 9 9999-9999", {placeholder: "(  )    -    "});
    $("#usu_tel").mask("(##)####-####", {placeholder: "(  )    -    "});
    $("#usu_dtnasc").mask("##/##/####", {placeholder: "dd/mm/aaaa"});
    $("#usu_dtexpedicao").mask("##/##/####", {placeholder: "dd/mm/aaaa"});
    $("#usu_cep").mask("#####-###", {placeholder: "     -   "});

    $("#pro_cpf").mask("999.999.999-99", {placeholder: "   .   .   -  "});
    $('form input').focusin(function () {
        $(this).addClass('item-focado');
    });
    $('form input').focusout(function () {
        $(this).removeClass('item-focado');
    });
    $('select').focusin(function () {
        $(this).addClass('item-focado');
    })
    $('select').focusout(function () {
        $(this).removeClass('item-focado');
    });
    /*$('#myModal').on('shown.bs.modal', function () {
     $('#myInput').focus()
     })
     */
    /*
     */

});



 