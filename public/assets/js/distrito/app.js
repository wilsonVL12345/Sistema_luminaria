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
    let txtdistrit = document.getElementById('txtdistrit');
    let txtzonaUrbx = document.getElementById('txtzonaUrbx');
    let txtzonaUr = document.getElementById('txtzonaUr');
    let txtdistrito = document.getElementById('txtdistrito');
    let txtzonaUrbanizacion = document.getElementById('txtzonaUrbanizacion');
    let txtavenidacalle = document.getElementById('txtavenidacalle');
    let txtavc = document.getElementById('txtavc');

    // Habilitar o deshabilitar los campos requeridos según la opción seleccionada
    if (option === 'txtzonaUr') {
        txtdistrit.required = true;
        txtzonaUrbx.required = true;
        txtzonaUr.required = true;

    } else {
        txtdistrit.required = false;
        txtzonaUrbx.required = false;
        txtzonaUr.required = false;
    }
    if (option === 'street') {
        txtdistrito.required = true;
        txtzonaUrbanizacion.required = true;
        txtavenidacalle.required = true;
        txtavc.required = true;
    } else {
        txtdistrito.required = false;
        txtzonaUrbanizacion.required = false;
        txtavenidacalle.required = false;
        txtavc.required = false;
    }
}); 