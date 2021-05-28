
function objectForm(pares) {
  let obj = {};
  pares.forEach(par => {
    obj[par['name']] = par['value'];
  });
  return obj;
}

function urlParam(name) {
  var results = new RegExp("[?&]" + name + "=([^&#]*)").exec(
    window.location.href
  );
  if (results == null) {
    return null;
  } else {
    return decodeURI(results[1]) || 0;
  }
}

function checkNotNull(form) {
  var count = 0;
  jQuery(form + ' [required="required"]').each(function(index) {
    if (
      jQuery(this).attr("type") == "checkbox" ||
      jQuery(this).attr("type") == "radio"
    ) {
      if (!jQuery(this).is(":checked")) {
        count += 1;
        jQuery(this).css("border-bottom", "1px solid red");
      } else {
        jQuery(this).css("border-bottom", "1px solid #d6d6d6");
      }
    } else {
      if (jQuery(this).val() == "") {
        count += 1;
        jQuery(this).css("border-bottom", "1px solid red");
      } else {
        jQuery(this).css("border-bottom", "1px solid #d6d6d6");
      }
    }
  });
  return count;
}