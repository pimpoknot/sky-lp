/*********************************************************************************************
 * ************************************* Parâmetros ******************************************
 * *******************************************************************************************
 */

const usuario = 'integracao';
const senha = 'HScNneuN6PKxDq0';

/*********************************************************************************************
 * ************************************** Funções ********************************************
 * *******************************************************************************************
*/

/**
 * 
 * @param {*} usuario 
 * @param {*} senha 
 */
function obterToken(usuario, senha) {
  return new Promise((resolve) => {
    $.ajax({
      crossDomain: true,
      contentType: 'application/x-www-form-urlencoded',
      type: 'POST',
      url: 'https://itaplan.sigavi360.com.br/Sigavi/api/Acesso/Token',
      data: `username=${usuario}&password=${senha}&grant_type=password`,
      success: function (data) {
        resolve(data.access_token);
      },
      error: function (data) {
        alert('Erro na autenticação!');
        console.log(data);
      }
    });
  });
}

/**
 * 
 * @param {*} formSelector 
 * @param {*} usuario 
 * @param {*} senha 
 */
function iniciarIntegracaoItaplan(formSelector, usuario, senha) {
  // let usuario = 'integracao';
  // let senha = 'HScNneuN6PKxDq0';

  let lead = objectForm($(formSelector).serializeArray());
  lead['Email'] = (lead['Email']) ? lead['Email'] : 'teste@internit.com.br';

  let promise = obterToken(usuario, senha);
  promise.then(token => {
    registrarLead(token, lead);
  })
  .catch(erro => {
    console.log(erro);
  });
}

/**
 * 
 * @param {*} token 
 * @param {*} lead 
 */
function registrarLead(token, lead) {
  $.ajax({
    url: 'https://itaplan.sigavi360.com.br/Sigavi/api/Leads/NovaLead',
    type: 'POST',
    dataType: 'JSON',
    contentType: 'application/json',
    data: JSON.stringify(lead),
    beforeSend: function (request) {
      request.setRequestHeader('Authorization', `Bearer ${token}`);
    },
    success: function (data) {
      if (data['Sucesso']) {
        // lead['SigaviLeadId'] = data['Id'];
        // processarLead(lead);
      }
      else {
        let erros = 'Erro:\n';
        data.Erros.forEach(erro => {
          erros += erro + '\n';
        });
        alert(erros);
      }
    },
    error: function (data) {
      alert('Erro ao registrar o lead');
    }
  });
}
