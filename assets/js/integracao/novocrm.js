/*********************************************************************************************
 * ************************************** Funções ********************************************
 * *******************************************************************************************
*/

/**
 * 
 * @param {*} formSend 
 * @param {*} device 
 * @param {*} parameters 
 * @param {*} realtyId 
 */



function sendToCRM(formSend, device, parameters, realtyId) {

  let apiNome = $(`${formSend} [name="Nome"]`).val();
  let apiEmail = $(`${formSend} [name="Email"]`).val();
  let apiTelefone1 = $(`${formSend} [name="Telefone"]`).val();

  $.ajax({
    type: 'POST',
    url: `https://www.novocrm.atendimentoon.com.br/api/form/externo/${realtyId}`,
    data: `apiNome=${apiNome}&apiEmail=${apiEmail}&apiTelefone1=${apiTelefone1}&apiDispositivo=${device}&${parameters}`
  })
  .done(data => {
    console.log('result: '+ data);
  })
  .always(() => {
    return true;
  });
}

/**
 * 
 * @param {*} formSend 
 */
function idEmpreendimentoNovoCRM(formSend, id)
{
  return id;
}