$(document).ready(function() {
    // Función para mostrar u ocultar el div en base a la selección
    function toggleApoyoDistR() {
        // Obtener todas las opciones seleccionadas
        let selectedOptions = $('select[name="tetipTrabr[]"]').val();
        // Verificar si "Apoyo Carro Canasta" está entre las opciones seleccionadas
        if (selectedOptions && selectedOptions.includes('Apoyo Carro Canasta')) {
            $('#apoyoDistR').show();
            $('#apoyoDistR select').attr('required', true);
        } else {
            $('#apoyoDistR').hide();
            $('#apoyoDistR select').removeAttr('required');
        }
    }

    // Llamar a la función al cargar la página para verificar el estado inicial
    toggleApoyoDistR();

    // Llamar a la función cada vez que se cambia la selección
    $('select[name="tetipTrabr[]"]').on('change', function() {
        toggleApoyoDistR();
    });
});
