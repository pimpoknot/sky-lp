/*********************************************************************************************
 * ************************************* Parâmetros ******************************************
 * *******************************************************************************************
 */

 // as variáveis começando com 'hc_' são usadas pelo script remoto housecrm como variáveis globais
const hc_empreendimento = 32362,
      hc_dominio_chat = 'metron.housecrm.com.br',
      hc_https = 1,
      hc_filial = '',
      hcInformacao = '',
      hcCampanha = '';

/*********************************************************************************************
 * ************************************** Funções ********************************************
 * *******************************************************************************************
*/

/**
 * Envia mensagem para HouseCRM
 * 
 * @param {string} codigoEmpreendimento 
 * @param {string} nomeCliente 
 * @param {string} emailCliente 
 * @param {string} dddCliente 
 * @param {string} telefoneCliente 
 * @param {string} mensagem 
 * @param {string} codFilial 
 * @param {string} informacao 
 * @param {string} campanha 
 * @param {string} cpf 
 */
function sendToHouseCrm(
  codigoEmpreendimento='', nomeCliente='', emailCliente='', dddCliente='', 
  telefoneCliente='', mensagem='', codFilial='', informacao='', campanha='', cpf=''
)
{
  return hc_envia_mensagem(
    codigoEmpreendimento,
    nomeCliente,
    emailCliente,
    dddCliente,
    telefoneCliente,
    mensagem,
    codFilial,
    informacao,
    campanha,
    cpf
  );
}