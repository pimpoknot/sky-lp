// associa o tipo de formulário (atributo personalizado data-type do form) a uma função que
// dispara um evento do gtag.
// Você pode adicionar novos pares (tipo : função)
const gtagHandlers = {
  'whatsapp': function(params) {
    whatsappGtag(params)
  },
  'contato': function(params) {
    contatoGtag(params)
  },
  'banner': function(params) {
    bannerGtag(params)
  }
}


/*********************************************************************************************
 * ************************************** Funções ********************************************
 * *******************************************************************************************
*/


/**
 * Envia evento do gtag associado a um formulário
 * @param {string} formType - tipo do formulário (atributo personalizado data-type do form)
 * @param {object} formData - dados do formulário que poderiam ser usados nos eventos gtag
 */
function sendGtagEvents(formType, formData)
{
  if (formType in gtagHandlers) {
    gtagHandlers[formType](formData);
  }
}

/**
 * Envia eventos de gtag para um form de whatsapp. 
 * Dentro desta função, você pode fazer tantas chamadas a gtag quanto for necessário. 
 * @param {object} formData - dados do formulário preenchido
 */
function whatsappGtag(formData)
{
  gtag('event', 'enviar', {
    'event_category': 'form_whats',
    'event_label': 'enviar'
  });
}

function bannerGtag(formData)
{
  gtag('event', 'enviar', {
    'event_category': 'formulario',
    'event_label': 'enviar'
  });
}
/**
 * Envia eventos de gtag para um form de contato. 
 * Dentro desta função, você pode fazer tantas chamadas a gtag quanto for necessário. 
 * @param {object} formData - dados do formulário preenchido
 */
function contatoGtag(formData)
{
  gtag('event', 'enviar', {
    'event_category': 'formulario',
    'event_label': 'enviar'
  });
}