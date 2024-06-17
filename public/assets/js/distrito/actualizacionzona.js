//para la seleccion de zonas/urbanizaciones  de vista  nuevo distritos
document.addEventListener('DOMContentLoaded', function () {
    const distritoSelect = document.getElementById('txtdistrito');
    const zonaUrbanizacionSelect = document.getElementById('txtzonaUrbanizacion');
    /* const distritos = ($distrito); */

    /* la falla que tubimos es que en la ruta tienes que agregar /api para  que se valla a la ruta de la api */
    fetch('/api/apidistritos')
        .then(Response => Response.json())
        .then(data => {

            // Obtener el último select creado dentro del nuevo contenedor

            function actualizarZonasUrbanizaciones() {
                const distritoSeleccionado = distritoSelect.value;

                zonaUrbanizacionSelect.innerHTML = '<option value="" disabled selected>Elegir</option>';

                data.forEach(distrito => {
                    if (distrito.Distrito == distritoSeleccionado) {
                        const option = document.createElement('option');
                        option.value = distrito.Zona_Urbanizacion;
                        option.text = distrito.Zona_Urbanizacion;
                        zonaUrbanizacionSelect.add(option);
                    }
                    console.log(distrito.id);
                });
            }
            /*  console.log(data); */
            distritoSelect.addEventListener('change', actualizarZonasUrbanizaciones);
            actualizarZonasUrbanizaciones();
        })

        .catch(error => {
            console.error('Error al obtener los datos de los distritos:', error);
        });


}); 
