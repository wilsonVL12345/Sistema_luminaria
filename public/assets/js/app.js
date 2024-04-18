// Función para manejar el cambio de selección entre Zona/Urbanización y Avenida/Calle
function manejarCambioTipoUbicacion() {
    const zonaUrbanizacionAvenidaCalle = document.getElementById('txtagregar').value;
    const camposDistritoZonaUrbanizacion = document.getElementById('form-distritoZonaUrbanizacion');
    const camposDistritoZonaUrbanizacionaAvenidaCalle = document.getElementById('form-distritoZonaUrbanizacionAvenidaCalle');

    if (zonaUrbanizacionAvenidaCalle === 'txtzonaUr') {
        camposDistritoZonaUrbanizacion.style.display = 'block';
        camposDistritoZonaUrbanizacionaAvenidaCalle.style.display = 'none';
    } else if (zonaUrbanizacionAvenidaCalle === 'street') {
        camposDistritoZonaUrbanizacion.style.display = 'none';
        camposDistritoZonaUrbanizacionaAvenidaCalle.style.display = 'block';

    }
    else {
        camposDistritoZonaUrbanizacion.style.display = 'none';
        camposDistritoZonaUrbanizacionaAvenidaCalle.style.display = 'none';
    }


}
const tipoUbicacionSelect = document.getElementById('txtagregar');

// Agregar el event listener al cambio de selección
tipoUbicacionSelect.addEventListener('change', manejarCambioTipoUbicacion);



//script para que  sea obligatorio llenar los campo en la vista distrito
document.getElementById('txtagregar').addEventListener('change', function () {
    var option = this.value;

    // Habilitar o deshabilitar los campos requeridos según la opción seleccionada
    if (option === 'txtzonaUr') {
        document.getElementById('txtdistrit').required = true;
        document.getElementById('txtzonaUrbx').required = true;
        document.getElementById('txtzonaUr').required = true;

    } else {
        document.getElementById('txtdistrit').required = false;
        document.getElementById('txtzonaUrbx').required = false;
        document.getElementById('txtzonaUr').required = false;
    }
    if (option === 'street') {
        document.getElementById('txtdistrito').required = true;
        document.getElementById('txtzonaUrbanizacion').required = true;
        document.getElementById('txtavenidacalle').required = true;
        document.getElementById('txtavc').required = true;
    } else {
        document.getElementById('txtdistrito').required = false;
        document.getElementById('txtzonaUrbanizacion').required = false;
        document.getElementById('txtavenidacalle').required = false;
        document.getElementById('txtavc').required = false;
    }
});