/* $(document).ready(function() {
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
 */

$(document).ready(function() {
    // Función para verificar y mostrar/ocultar el div para una fila específica
    function checkApoyoCarroCanasta($row) {
        let $select = $row.find('select[name="tetipTrabrrea[]"]');
        let apoyoSelected = $select.find('option[value="Apoyo Carro Canasta"]').is(':selected');
        $row.find('#apoyoDistR').toggle(apoyoSelected);
    }

    // Función para inicializar todos los selects
    function initializeAllSelects() {
        $('.row').each(function() {
            checkApoyoCarroCanasta($(this));
        });
    }

    // Inicializar al cargar la página
    initializeAllSelects();

    // Event listener para cambios en cualquier select
    $(document).on('change', 'select[name="tetipTrabrrea[]"]', function() {
        checkApoyoCarroCanasta($(this).closest('.row'));
    });

    // Reinicializar después de cualquier cambio en el DOM (por si se agregan nuevas filas dinámicamente)
    $(document).on('DOMNodeInserted', function(e) {
        if ($(e.target).find('select[name="tetipTrabrrea[]"]').length > 0) {
            initializeAllSelects();
        }
    });
});