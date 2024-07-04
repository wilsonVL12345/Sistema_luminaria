/* $accesoriosCount=0;
$(document).ready(function(){
    $('#insertarComponentes').click(function(){
        $('#listacomponentes').append(`
            <div class="row mb-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="txtdistrito" class="required fs-5 fw-bold mb-2">Componente</label>
                        @foreach ($listacom as $item)
								<option value="{{$item->Nombre_Item}}">{{$item->Nombre_Item}}</option>
								@endforeach
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="txtcod" class="required fs-5 fw-bold mb-2">Cantidad</label>
                        <input type="number" class="form-control form-control-solid" id="txtcantidad" name="campocantidad[accesoriosCount]" placeholder="Ingresar Cantidad">
                    </div>
                    <div class="col-md-3 mb-3  d-flex justify-content-center align-items-center">
                                     
                                   <button type="button"  class="btn btn-danger btn-sm"  onclick="eliminarAccesorio(this)">Delete</button>

                    </div>
                </div>

            </div>
        `);
         $accesoriosCount++;

        
    });
    
}); */

$(document).ready(function(){
    let accesoriosCount = 0;

    $('#insertarComponentes').click(function(){
        $('#listacomponentes').append(`
            <div class="row mb-5">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="txtdistrito" class="required fs-5 fw-bold mb-2">Componente</label>
                        <select class="form-select" name="componente[${accesoriosCount}]">
                          @foreach ($listacom as $item)
								<option value="{{$item->Nombre_Item}}">{{$item->Nombre_Item}}</option>
								@endforeach
                        </select>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="txtcod" class="required fs-5 fw-bold mb-2">Cantidad</label>
                        <input type="number" class="form-control form-control-solid" id="txtcantidad" name="campocantidad[${accesoriosCount}]" placeholder="Ingresar Cantidad">
                    </div>
                    <div class="col-md-3 mb-3 d-flex justify-content-center align-items-center">
                        <button type="button" class="btn btn-danger btn-sm" onclick="eliminarAccesorio(this)">Delete</button>
                    </div>
                </div>
            </div>
        `);
        accesoriosCount++;

        // Populate the select options here, e.g., using AJAX to fetch data from the server
    });
});

function eliminarAccesorio(button) {
    const container2 = button.closest('.row.mb-5');
    container2.parentNode.removeChild(container2);
} 
  


