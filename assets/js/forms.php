
<?php


?>

<script>
const integracoesUsadas = {
  'anapro': true,
  'itaplan': false, 
  'novocrm': true,
  'suahouse': false,
  'fbPixel': false,
  'gtag': false,
  'processarLead': false,
};


$(document).ready(function() {

   /* $('.js-btn-submit').click(function(e) {
    e.preventDefault();

    const form = $(this).closest('form');
    const count = checkNotNull(form.attr('id'));

    if (count == 0) {
      aplicaIntegracoes(form, integracoesUsadas);
    }
  });*/


    $("#form-banner").submit(function(e) {

        e.preventDefault();

        const form = $(this).closest('form');
        const count = checkNotNull(form.attr('id'));

        if (count == 0) {
            aplicaIntegracoes(form, integracoesUsadas);
        }
        $(this)[0].reset();
    });

    $("#form-contato").submit(function(e) {

        e.preventDefault();

        const form = $(this).closest('form');
        const count = checkNotNull(form.attr('id'));

        if (count == 0) {
            aplicaIntegracoes(form, integracoesUsadas);
        }
        $(this)[0].reset();
    });

});

/*******************************************************************************************
 * *************************** Função que chama as integrações *****************************
 * *****************************************************************************************
 */

/**
 * 
 * @param {*} formData 
 * @param {*} integracoesUsadas 
 */
function aplicaIntegracoes(form, integracoesUsadas)
{
  //alert(empresaAtual);
  //alert(emailAtual);
  //alert(idCrmAtual);


  let id = form.attr('id');
  let nome = $(`#${id} [name="Nome"]`).val();
  let telefone = $(`#${id} [name="Telefone"]`).val();
  let ddd = telefone != null ? telefone.substr(1, 2) : '';
  let telSemDDD = telefone != null ? telefone.substr(5, telefone.length) : '';
  let email = $(`#${id} [name="Email"]`).val();
  let mensagem = $(`#${id} [name="Mensagem"]`).val();
  let formType = $(`#${id} [name="Tipo"]`).val();

  let formData = {
    'id': id, 'nome': nome, 'ddd': ddd, 'telSemDDD': telSemDDD, 
    'email': email, 'mensagem': mensagem, 'formType': formType
  };
  if (integracoesUsadas['novocrm']) {
    sendToCRM(`#${id}`, device, parameters, 192);
  }
  if (integracoesUsadas['anapro']) {
    sendToAnaPro(CampanhaKey, ProdutoKey, nome, ddd, telSemDDD, email, mensagem, Midia, Peca,
      CampanhaPeca, Key, CanalKey, KeyIntegradora, KeyAgencia);
  }
  if (integracoesUsadas['itaplan']) {
    iniciarIntegracaoItaplan(`#${id}`, usuario, senha);
  }
  if (integracoesUsadas['suahouse']) {
    sendToHouseCrm(hc_empreendimento, nome, email, ddd, telSemDDD, mensagem, hc_filial, 
      hcInformacao, hcCampanha);
  }
  if (integracoesUsadas['gtag']) {
    sendGtagEvents(formType, formData);
  }
  if (integracoesUsadas['fbPixel']) {
    sendFbqEvents(formType, formData);
  }

  // SEND MAIL
    let stringForm = '&Fnome='+nome+'&Femail='+email+'&Fddd='+ddd+'&Ftel='+telSemDDD+'&Fmensagem='+mensagem+'&Fform'+formType;
    let url_atual = window.location.href;

    $.ajax({
        type: 'POST',
        url: url_atual+'mail/sendMail.php?'+stringForm,
        data: 'dsds'
    }).always(() => {
        return true;
    });

    $('#contato-realizado').modal({
        show: true
    })

  if(integracoesUsadas['processarLead']) {

      /*
    let lead = $(`#${id}`).serialize();
    let feedbackSelector = `#${id} .js-feedback`;

    $(`#${id} .js-btn-submit`).attr({'disabled': true}).html('Enviando...')

    processarLead(lead)
      .done(function(response) {
        successCBProcessa(response, {'feedbackSelector': feedbackSelector});
      })
      .fail(function(err) {
        errorCBProcessa(error, {'feedbackSelector': feedbackSelector});
      })
      .always(function() {
        alwaysCBProcessa({'feedbackSelector': feedbackSelector, 'btnSelector': `#${id} .js-btn-submit`});
      })
      */
  }

}




</script>