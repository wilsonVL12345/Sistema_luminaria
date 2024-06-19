$(document).ready(function () {
    const $distritoSelect = $('#txtdistrito');
    const $zonaUrbanizacionSelect = $('#txtzonaUrbanizacion');

    $.ajax({
        url: '/api/apidistritos',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            function actualizarZonasUrbanizaciones() {
                const distritoSeleccionado = $distritoSelect.val();
                $zonaUrbanizacionSelect.empty().append('<option value="">Seleccione...</option>');

                const zonasUrbanizaciones = data.filter(item => item.Distrito == distritoSeleccionado);

                $.each(zonasUrbanizaciones, function (index, item) {
                    $zonaUrbanizacionSelect.append(`<option value="${item.Zona_Urbanizacion}">${item.Zona_Urbanizacion}</option>`);
                });
            }

            $distritoSelect.on('change', actualizarZonasUrbanizaciones);
            actualizarZonasUrbanizaciones(); // Inicializar las zonas/urbanizaciones al cargar el modal
        },
        error: function (xhr, status, error) {
            console.error('Error al obtener los datos de los distritos:', error);
        }
    });
});