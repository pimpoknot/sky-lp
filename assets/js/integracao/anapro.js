/*********************************************************************************************
 * ************************************* Parâmetros ******************************************
 * *******************************************************************************************
 */

const CampanhaKey = '5fnGZvwZwIo1',
      ProdutoKey = 'gtMwZKyLhP01',
      Key = 'Y210Vw1HRN81',
      KeyIntegradora = "E2351CAE-AA58-4C08-9D1D-D43E989EBD8B",
      KeyAgencia = "E2351CAE-AA58-4C08-9D1D-D43E989EBD8B",
      CanalKey = "TWOAs9kc2uA1",
      CampanhaPeca = urlParam('utm_campaign'),
      Midia = urlParam('utm_source'),
      Peca = urlParam('utm_medium');


/*********************************************************************************************
 * ************************************** Funções ********************************************
 * *******************************************************************************************
*/

/**
 * 
 * @param {*} CampanhaKey 
 * @param {*} ProdutoKey 
 * @param {*} nome 
 * @param {*} ddd 
 * @param {*} telefone 
 * @param {*} email 
 * @param {*} mensagem 
 * @param {*} Midia 
 * @param {*} Peca 
 * @param {*} CampanhaPeca 
 * @param {*} Key 
 * @param {*} CanalKey 
 * @param {*} KeyIntegradora 
 * @param {*} KeyAgencia 
 */
function sendToAnaPro(CampanhaKey, ProdutoKey, nome, ddd, telefone, email, mensagem, 
  Midia, Peca, CampanhaPeca, Key, CanalKey, KeyIntegradora, KeyAgencia)
{
  
  dados = {
    "Key": Key,
    "TagAtalho": "",
    "CampanhaKey": CampanhaKey,
    "ProdutoKey": ProdutoKey,
    "CanalKey": CanalKey,
    "Midia": Midia,
    "Peca": Peca,
    "GrupoPeca": "",
    "CampanhaPeca": CampanhaPeca,
    "PessoaNome": nome,
    "PessoaSexo": "",
    "PessoaEmail": email,
    "PessoaTelefones": [{
        "Tipo": "OUTR",
        "DDD": ddd,
        "Numero": telefone,
        "Ramal": null
    }],
    "Observacoes": mensagem,
    "Status": "",
    "KeyExterno": "",
    "KeyIntegradora": KeyIntegradora,
    "KeyAgencia": KeyAgencia
  };
  jQuery.ajax({
    url: 'https://crm.anapro.com.br/webcrm/webapi/integracao/v2/CadastrarProspect',
    data: dados,
    crossDomain: true,
    cache: false,
    type: 'POST',
    dataType: 'json',
    success: function (response) {
      console.log(response);
      return true;
    },
    error: function(result) {
      console.log(result);
      return false;
    }
  });

}