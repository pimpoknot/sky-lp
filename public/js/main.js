let button = document.getElementById('btn-form1')
let checkbox = document.getElementById('checkbox')


function checkboxValidateTrue () {
    if(!this.form.checkbox.checked) {
        button.disabled = true
    } else {
        button.disabled = false
    }
}



console.log('validando...')


