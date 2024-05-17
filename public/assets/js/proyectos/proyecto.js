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





