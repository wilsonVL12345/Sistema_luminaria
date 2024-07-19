$(document).ready(function() {
    $('#sselectedStatess').on('change', function() {
        if ($(this).val().includes('Apoyo Carro Canasta')) {
            $('#apoyo--distrito').show();
            $('#txt-apoyo').attr('required', 'required');
        } else {
            $('#apoyo--distrito').hide();
            $('#txt-apoyo').removeAttr('required');
        }
    });

    // Inicializar Select2
    $('[data-control="select2"]').select2();
});