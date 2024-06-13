
//esta parte de codigo es para  proyectos luminaria retiradas---------------------------------------------------------------------
let luminariasCount = 1;
function agregarLuminaria() {
    const container = document.createElement('div');
    container.innerHTML = `
    <div class="mb-3">
    <label for="txtitem" class="form-label">Nombre Item</label>
            <select type="text" id="txtitem" name="campoitem[${luminariasCount}][txtitem]" class="form-select" required>
            <option value="" disabled selected >Seleccione</option>
            </select>
            </div>
            <div class="mb-3">
				<label for="txtreutilizables" class="form-label">Reutilizables</label>
				<input type="number" id="txtreutilizables" name="camporeutilizables[${luminariasCount}][txtreutilizables]" required>
			</div>
			<div class="mb-3">
			<label for="txtnoreutilizables" class="form-label">No Reutilizables</label>
			<input type="number" id="txtnoreutilizables" name="camponoreutilizables[${luminariasCount}][txtnoreutilizables]" required>
			</div>
			<div class="mb-3">
			<label for="txtobservaciones" class="form-label">Observaciones</label>
			<input type="text" id="txtobservaciones" name="campoobservaciones[${luminariasCount}][txtobservaciones]" placeholder="ninguna" >
			</div>
            <button type="button" onclick="eliminarLuminaria(this)">Eliminar</button>
            `;
    /* document.querySelector('form').insertBefore(container, document.querySelector('button[type="submit"]'));
    luminariasCount++; */
    document.getElementById('form1').insertBefore(container, document.querySelector('#form1 button[type="submit"]'));
    luminariasCount++;

    /* la falla que tubimos es que en la ruta tienes que agregar /api para  que se valla a la ruta de la api */
    fetch('/api/lista/accesorios')
        .then(Response => Response.json())
        .then(data => {
            // Obtener el último select creado dentro del nuevo contenedor
            const select = container.querySelector(`select[name="campoitem[${luminariasCount - 1}][txtitem]"]`);
            data.forEach(accesorio => {
                var option = document.createElement('option');
                option.value = accesorio.Nombre_Item;
                option.textContent = accesorio.Nombre_Item;
                select.appendChild(option);
            });
            console.log(data);
        })
        .catch(error => {
            console.error('Error al obtener los datos de los accesorios:', error);
        });
}
function eliminarLuminaria(button) {
    const container = button.parentNode;
    container.parentNode.removeChild(container);
}

// para la parte de proyectos almacen -------------------------------------------------------------------------------------------------
let accesoriosCount = 1;
function agregarAccesorio() {
    const container2 = document.createElement('div');
    container2.innerHTML = `
    <div class="mb-3">
            
            <div class="mb-3">
            <h3>Accesorio</h3>
            <label for="txtcomponentes" >Componente</label>
            <select name="campocomponentes[${accesoriosCount}][txtcomponentes]" id="txtcomponentes" required>
            <option value="" disabled selected >Seleccione</option>
            </select>
            <br>
            <label for="txtcantidad" class="form-label">Cantidad</label>
            <input type="number" name="campocantidad[${accesoriosCount}][txtcantidad]" id="txtcantidad" placeholder="Cantidad" required>
            
            <br>
            <label for="txtproveedo" class="form-label">Proveedor</label>
            <select  id="txtproveedo" name="campoproveedo[${accesoriosCount}][txtproveedo]"  required>
            <option value="" disabled selected >Seleccione</option>
            </select>
            

            <br><label for="txtobservaciones" class="form-label">Observaciones</label>
            <input type="text" name="campoobservaciones[${accesoriosCount}][txtobservaciones]" id="txtobservaciones" placeholder="Ninguna" >
            
			</div>
            <button type="button"  class="btn btn-danger"  onclick="eliminarAccesorio(this)">Eliminar</button>
            `
        ;
    /* document.querySelector('formproyecto').insertBefore(container2, document.querySelector('button[type="submit"]'));
    luminariasCount++; */
    const form = document.getElementById('formproyecto');
    const submitbutton = form.querySelector('#formproyecto[type="submit"]');
    if (form.container2, submitbutton) {
        form.insertBefore(container2, submitbutton);
    } else {
        form.appendChild(container2);
    }
    accesoriosCount++;

    fetch('/api/lista/proveedor')
        .then(Response => Response.json())
        .then(data => {
            // Obtener el último select creado dentro del nuevo contenedor
            const selec = container2.querySelector(`select[name="campoproveedo[${accesoriosCount - 1}][txtproveedo]"]`);
            data.forEach(proveedor => {
                var option = document.createElement('option');
                option.value = proveedor.id;
                option.textContent = proveedor.Nombre_de_Empresa;
                selec.appendChild(option);
            });
            console.log(data);
        })
        .catch(error => {
            console.error('Error al obtener los datos de la empresa:', error);
        });

    /* la falla que tubimos es que en la ruta tienes que agregar /api para  que se valla a la ruta de la api */
    fetch('/api/lista/accesorios')
        .then(Response => Response.json())
        .then(data => {
            // Obtener el último select creado dentro del nuevo contenedor
            const select = container2.querySelector(`select[name="campocomponentes[${accesoriosCount - 1}][txtcomponentes]"]`);


            data.forEach(listaAccesorio => {
                var option = document.createElement('option');
                option.value = listaAccesorio.id;
                option.textContent = listaAccesorio.Nombre_Item;
                select.appendChild(option);
            });
            console.log(data);
        })
        .catch(error => {
            console.error('Error al obtener los datos de los accesorios:', error);
        });
}
function eliminarAccesorio(button) {
    const container2 = button.parentNode;
    container2.parentNode.removeChild(container2);
}
/* para la parte de proyectos almacenar  luminarias----------------------------*/
let lumCount = 1;
function agregarluminarialed() {
    const container4 = document.createElement('div');
    container4.innerHTML = `
    <div class="mb-3">
            <div class="mb-3">
            <h3>Luminaria LED</h3>
            <label for="txtcod">Codigo Led</label>
			<input type="text" name="campocod[${lumCount}][txtcod]" id="txtcod" required>
            <br>
			<label for="txtpontencia">Pontencia</label>
			
			<select name="campopotencia[${lumCount}][txtpotencia]" id="txtpotencia" required>
				<option value="" disabled selected >Seleccione</option>
				<option value="100W">100W</option>
				<option value="150W">150W</option>
				<option value="200W">200W</option>
				<option value="250W">250W</option>
			</select>	
            <br>
			<label for="txtmarca">Marca</label>
			<input type="text" name="campomarca[${lumCount}][txtmarca]" id="txtmarca" required>
            <br>
			<label for="txtmodelo">Modelo</label>
			<input type="text" name="campomodelo[${lumCount}][txtmodelo]" id="txtmodelo" required>
            

            <div class="mb-3">
            <label for="txtproveedor" class="form-label">Proveedor</label>
            <select type="text" id="txtproveedor" name="campoproveedor[${lumCount}][txtproveedor]"  required>
            <option value="" disabled selected >Seleccione</option>
            </select>
            </div>

            <button type="button"  class="btn btn-danger"  onclick="eliminarlumin(this)">Eliminar</button >
            `
        ;

    /* document.querySelector('form').insertBefore(container4, document.querySelector('button[type="submit"]'));
    luminariasCount++; */
    /*  document.getElementById('formproyecto').insertBefore(container4, document.querySelector('#formproyecto button[type="submit"]')); */
    const form = document.getElementById('formproyecto');
    const submitbutton = form.querySelector('#formproyecto[type="submit"]');
    if (form.container4, submitbutton) {
        form.insertBefore(container4, submitbutton);
    } else {
        form.appendChild(container4);
    }

    lumCount++;

    /* la falla que tubimos es que en la ruta tienes que agregar /api para  que se valla a la ruta de la api */
    fetch('/api/lista/proveedor')
        .then(Response => Response.json())
        .then(data => {
            // Obtener el último select creado dentro del nuevo contenedor
            const selec = container4.querySelector(`select[name="campoproveedor[${lumCount - 1}][txtproveedor]"]`);
            data.forEach(proveedor => {
                var option = document.createElement('option');
                option.value = proveedor.id;
                option.textContent = proveedor.Nombre_de_Empresa;
                selec.appendChild(option);
            });
            console.log(data);
        })
        .catch(error => {
            console.error('Error al obtener los datos de la empresa:', error);
        });
}
function eliminarlumin(button) {
    const container4 = button.parentNode;
    container4.parentNode.removeChild(container4);
}

/* para la parte de proyectos almacenar  luminarias----------------------------*/
let reuCount = 1;
function agregarReacondicionadas() {
    const container5 = document.createElement('div');
    container5.innerHTML = `
    <div class="mb-3">
            <div class="mb-3">
            <h3>Luminaria LED</h3>
            <label for="txtnom">Nombre Item</label>
			<input type="text" name="camponom[${reuCount}][txtnom]" id="txtnom" required>
            <br>
            <br>
			<label for="txtcant">Cantidad</label>
			<input type="text" name="campocant[${reuCount}][txtcant]" id="txtcant" required>
            <br>
			<label for="txtobs">Observacion</label>
			<input type="text" name="campoobs[${reuCount}][txtobs]" id="txtobs" required>
            

        

            <button type="button"  class="btn btn-danger"  onclick="eliminarlumin(this)">Eliminar</button >
            `
        ;

    /* document.querySelector('form').insertBefore(container5, document.querySelector('button[type="submit"]'));
    luminariasCount++; */
    /*  document.getElementById('formproyecto').insertBefore(container5, document.querySelector('#formproyecto button[type="submit"]')); */
    const form = document.getElementById('formproyecto');
    const submitbutton = form.querySelector('#formproyecto[type="submit"]');
    if (form.container5, submitbutton) {
        form.insertBefore(container5, submitbutton);
    } else {
        form.appendChild(container5);
    }
    lumCount++;

}
function eliminarlumin(button) {
    const container5 = button.parentNode;
    container5.parentNode.removeChild(container5);
}

/* para la seleccion de zonas o urbanizaciones  actualizacion de datos -------------------------------------------------------------------------*/

/* document.addEventListener('DOMContentLoaded', function () {
    const distritoSelect = document.getElementById('txtdistrito');
    const zonaUrbanizacionSelect = document.getElementById('txtzona');
    /* la falla que tubimos es que en la ruta tienes que agregar /api para  que se valla a la ruta de la api */
/* fetch('/api/distritos')
    .then(Response => Response.json())
    .then(data => {

        // Obtener el último select creado dentro del nuevo contenedor

        function actualizarZonasUrbanizaciones() {
            const distritoSeleccionado = distritoSelect.value;

            zonaUrbanizacionSelect.innerHTML = '<option value="" disabled selected>Elegir</option>';

            data.forEach(distrito => {
                if (distrito.id == distritoSeleccionado) {
                    const option = document.createElement('option');
                    option.value = distrito.Zona_Urbanizacion;
                    option.text = distrito.Zona_Urbanizacion;
                    zonaUrbanizacionSelect.add(option);
                }
                console.log(distrito.id);
            });
        }
        /*  console.log(data); */
/* distritoSelect.addEventListener('change', actualizarZonasUrbanizaciones);
actualizarZonasUrbanizaciones();
})

.catch(error => {
console.error('Error al obtener los datos de los accesorios:', error);
});


}); */

