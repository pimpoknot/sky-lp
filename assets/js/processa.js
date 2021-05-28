/**
 * Envia os dados do lead para serem salvos no backend deste site e enviados pelo e-mail.
 * @param {object} lead - dados do lead preenchidos no formulário
 * @return {*} objeto ajax que pode ser ouvido para eventos resultantes da chamada ajax
 */
function processarLead(lead) {

  return $.ajax({
    type: 'POST',
    url: 'ajax/lead/processa.php',
    data: lead
  });

}

/**
 * Callback a ser chamada quando os dados do lead são enviados com sucesso ao backend deste site.
 * @param {object} response - objeto de resposta de sucesso do ajax
 * @param {object} selectors - seletores de elementos a serem manipulados
 */
function successCBProcessa(response, selectors)
{
  let data = JSON.parse(response);
  $(selectors['feedbackSelector']).html(data.message);
}

/**
 * Callback a ser chamada quando há erro ao enviar os dados do lead para o backend deste site.
 * @param {object} err - objeto de falha do ajax
 * @param {object} selectors - seletores de elementos a serem manipulados
 */
function errorCBProcessa(err, selectors)
{
  $(selectors['feedbackSelector']).html('Erro ao enviar dados.');
}

/**
 * Callback a ser chamada independentemente do resultado da chamada ajax.
 * @param {object} selectors - seletores de elementos a serem manipulados
 */
function alwaysCBProcessa(selectors)
{
  $(selectors['btnSelector']).removeAttr('disabled').html('Enviar')
}