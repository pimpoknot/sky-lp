<script src="assets/js/auxiliar.js"></script>

<script>
    $("#checkbox-form-banner").on("click", function(e) {
        if ($("#checkbox-form-banner").is(":checked") == true) {
            $("#btn-form-banner").attr('disabled', false);
        } else {
            $("#btn-form-banner").attr('disabled', true)
        }
    });

    $("#checkbox-form-lateral").on("click", function(e) {
        if ($("#checkbox-form-lateral").is(":checked") == true) {
            $("#btn-form-lateral").attr('disabled', false);
        } else {
            $("#btn-form-lateral").attr('disabled', true)
        }
    });

    $("#checkbox-form-contato").on("click", function(e) {
        if ($("#checkbox-form-contato").is(":checked") == true) {
            $("#btn-form-contato").attr('disabled', false);
        } else {
            $("#btn-form-contato").attr('disabled', true)
        }
    });
</script>