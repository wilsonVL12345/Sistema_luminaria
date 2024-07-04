// hace aparecer los botones para agregar  datos en accesotios luminarias 
$(document).ready(function() {
    $('#selector').select2();

    $('#selector').on('change', function() {
        let selectedValues = $(this).val();

        $('#btnAccesorio').toggle(selectedValues.includes('Accesorios'));
        $('#btnReacondicionado').toggle(selectedValues.includes('Lum. Reacondicionadas'));
        $('#btnLuminaria').toggle(selectedValues.includes('Luminarias LED'));
    });
});
// endhace aparecer los botones para agregar  datos en accesotios luminarias 

//esta parte de codigo es para  proyectos luminaria retiradas---------------------------------------------------------------------
let luminariasCount = 0;
function agregarLuminaria() {
    const container = document.createElement('div');
    container.innerHTML = `
    <div class="from row">
            <div class="from row">
	    		<div class="col-md-6 mb-3">
	    			<label for="txtitem" class="required fs-5 fw-bold mb-2">Nombre Item</label>
	    			<select type="text" id="txtitem" name="campoitem[${luminariasCount}][txtitem]" class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." required>
	    				<option value=""  >Selecione...</option>
	    				@foreach ($accesorios as $itemlistacc)
	    				<option value="{{$itemlistacc->Nombre_Item}}">{{$itemlistacc->Nombre_Item}}</option>
	    				@endforeach	
	    			</select>														
	    		</div>
	    		<div class="col-md-2 mb-3">
	    			<label for="txtreutilizables" class="required fs-5 fw-bold mb-2">Reutilizables</label>
	    			<input type="number" class="form-control form-control-solid" id="txtreutilizables" name="camporeutilizables[${luminariasCount}][txtreutilizables]" required >
    
	    		</div>
	    		<div class="col-md-2 mb-3">
	    			<label for="txtnoreutilizables" class="required fs-5 fw-bold mb-2">No Reutilizables</label>
	    			<input type="number" class="form-control form-control-solid" id="txtnoreutilizables" name="camponoreutilizables[${luminariasCount}][txtnoreutilizables]" required >
	    		</div>
    
    
	    		<div class="col-md-2 mb-3  d-flex justify-content-center align-items-center">
	    			<button type="button"  class="btn btn-danger btn-sm"  onclick="eliminarLuminaria(this)">Delete</button>
	    		</div>
    
	    	</div>
	</div>

            `;

    /* document.getElementById('form1').insertBefore(container, document.querySelector('#form1 button[type="submit"]'));
    luminariasCount++; */

     const form = document.getElementById('form1');
     const submitbutton = form.querySelector('#form1[type="submit"]');
     if (form.container, submitbutton) {
         form.insertBefore(container, submitbutton);
     } else {
         form.appendChild(container);
     }
 
     lumCount++;

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
    const container = button.closest('.from.row');
    container.parentNode.removeChild(container);
}

// para la parte de proyectos almacen -------------------------------------------------------------------------------------------------
//la parte de accesorios agregar

let accesoriosCount = 1;
function agregarAccesorio() {
    const container2 = document.createElement('div');
    container2.innerHTML = `
            <div class="row mb-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="txtdistrito" class="required fs-5 fw-bold mb-2">Componente</label>
                        <select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccionar Accesorio" name="campocomponentes[${accesoriosCount}][txtcomponentes]" id="txtcomponentes" required>
                             <option value="" disabled selected >Seleccionar Accesorio</option>
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="txtcod" class="required fs-5 fw-bold mb-2">Cantidad</label>
                        <input type="number" class="form-control form-control-solid" id="txtcantidad" name="campocantidad[${accesoriosCount}][txtcantidad]" placeholder="Ingresar Cantidad">
                    </div>
                    <div class="col-md-3 mb-3  d-flex justify-content-center align-items-center">
                                     
                                   <button type="button"  class="btn btn-danger btn-sm"  onclick="eliminarAccesorio(this)">Delete</button>

                    </div>
                </div>

            </div>

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
    const container2 = button.closest('.row.mb-5');
    container2.parentNode.removeChild(container2);
}
/* para la parte de proyectos almacenar  luminarias led----------------------------*/
let lumCount = 1;
function agregarluminarialed() {
    const container4 = document.createElement('div');
    container4.innerHTML = `
    
            <div class="from row">
                    <div class="col-md-2 mb-3">
                        <label for="txtcod" class="required fs-5 fw-bold mb-2">Codigo Led</label>
                        <input type="text" class="form-control form-control-solid" id="txtcod" name="campocod[${lumCount}][txtcod]" placeholder="Ingresar Datos">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="txtpotencia" class="required fs-5 fw-bold mb-2">Potencia</label>
                        <select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="campopotencia[${lumCount}][txtpotencia]" id="txtpotencia" required>
                            <option value="" disabled selected>Seleccione...</option>
                            <option value="150 Watts">150 Watts</option>
                            <option value="200 Watts">200 Watts</option>
                            <option value="250 Watts">250 Watts</option>
                          </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="txtmarca" class="required fs-5 fw-bold mb-2">Marca</label>
                        <input type="text" class="form-control form-control-solid" id="txtmarca" name="campomarca[${lumCount}][txtmarca]" placeholder="Ingresar Datos">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="txtmodelo" class="required fs-5 fw-bold mb-2">Modelo</label>
                        <input type="text" class="form-control form-control-solid" id="txtmodelo" name="campomodelo[${lumCount}][txtmodelo]" placeholder="Ingresar Datos">
                    </div>
                    <div class="col-md-2 mb-3  d-flex justify-content-center align-items-center">
                                     
                                   <button type="button"  class="btn btn-danger btn-sm"  onclick="eliminarluminled(this)">Delete</button>

                    </div>
            </div>

           
            `
        ;

    const form = document.getElementById('formproyecto');
    const submitbutton = form.querySelector('#formproyecto[type="submit"]');
    if (form.container4, submitbutton) {
        form.insertBefore(container4, submitbutton);
    } else {
        form.appendChild(container4);
    }

    lumCount++;

    
}
function eliminarluminled(button) {
    const container4 = button.closest('.from.row');
    container4.parentNode.removeChild(container4);
}

/* para la parte de proyectos almacenar  luminarias  reacondicionadas----------------------------*/
let reuCount = 1;
function agregarReacondicionadas() {
    const container5 = document.createElement('div');
    container5.innerHTML = `
    
            <div class="row mb-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="txtdistrito" class="required fs-5 fw-bold mb-2">Nombre Item</label>
                      <input type="text" class="form-control form-control-solid" id="txtnom" name="camponom[${reuCount}][txtnom]" placeholder="Ingresar Luminaria Reacondicionada">

                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="txtcod" class="required fs-5 fw-bold mb-2">Cantidad</label>
                        <input type="number" class="form-control form-control-solid" id="txtcant" name="campocant[${reuCount}][txtcant]" placeholder="Ingresar Cantidad">
                    </div>
                    <div class="col-md-3 mb-3  d-flex justify-content-center align-items-center">
                                     
                                   <button type="button"  class="btn btn-danger btn-sm"  onclick="eliminarlumin(this)">Delete</button>

                    </div>
                </div>
            </div>
            `
        ;

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
    const container5 = button.closest('.row.mb-5');
    container5.parentNode.removeChild(container5);
}

