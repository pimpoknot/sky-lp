// associa o tipo de formulário (atributo personalizado data-type do form) a uma função que
// dispara um evento do fbq.
// Você pode adicionar novos pares (tipo : função)
const fbqHandlers = {
  'whatsapp': function(params) {
    whatsappFbq(params)
  },
  'contato': function(params) {
    contatoFbq(params)
  },
  'banner': function(params) {
    bannerFbq(params)
  },
  'lateral': function(params) {
    lateralFbq(params)
  }
}


/*********************************************************************************************
 * ************************************** Funções ********************************************
 * *******************************************************************************************
*/


/**
 * Envia evento do fbq associado a um formulário
 * @param {string} formType - tipo do formulário (atributo personalizado data-type do form)
 * @param {object} formData - dados do formulário que poderiam ser usados nos eventos fbq
 */
function sendFbqEvents(formType, formData)
{
  if (formType in fbqHandlers) {
    fbqHandlers[formType](formData);
  }
}

/**
 * Envia eventos de fbq para um form de whatsapp. 
 * Dentro desta função, você pode fazer tantas chamadas a fbq quanto for necessário. 
 * @param {object} formData - dados do formulário preenchido
 */
function whatsappFbq(formData)
{
  fbq('track', 'lead', {
    content_name: 'form-whats'
  });
}

function bannerFbq(formData)
{
    fbq('track', 'lead', {
    content_name: 'form-banner'
  });
}

function lateralFbq(formData)
{
  fbq('track', 'lead', {
    content_name: 'form-lateral'
  });
}

function contatoFbq(formData)
{
  fbq('track', 'lead', {
    content_name: 'form-contato'
  });
}