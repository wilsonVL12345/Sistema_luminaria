@extends('layout.index')

@section('contenido')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Almacen</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">
						<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-muted">Account</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<!--end::Item-->
					<!--begin::Item-->
					<li class="breadcrumb-item text-dark">Security</li>
					<!--end::Item-->
				</ul>
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
			<!--begin::Actions-->
		
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	{{-- todo el lugar que te interesa --}}
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Navbar-->
			<div class="card mb-5 mb-xl-10">
				<div class="card-body pt-9 pb-0">
					<div class="card-body pt-9 pb-0">
						<div class="margin">
                            <h1>Empezar la Instalacion</h1>
                            
                            <form action="{{route('registrar.trabajoejecutado',$ejecProyecto->id)}}" id="formEjecutarProy" method="POST" >
                                @csrf
                                <div class="from row">
                                    <div class="col-md-3 mb-3">   
                                        <label for="txtcod" class=" fs-5 fw-bold mb-2">Cod Proyecto</label>
                                        <input type="text" class="form-control form-control-solid " name="txtcods" id="txtcod" value="{{$ejecProyecto->Cuce_Cod}}" readonly> 
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="txtzona" class=" fs-5 fw-bold mb-2">Urbanizacion</label>
                                        <input type="text" class="form-control form-control-solid " name="txtzona"  value="{{$ejecProyecto->Zona}}" readonly> 
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="txtejec" class=" fs-5 fw-bold mb-2">Ejecutado Por</label>
                                        <select name="txtejec" class="form-control form-select-solid" id="txtejec" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." required>
                                            <option value="" disabled selected >Seleccione...</option>
                                            <option value="GAMEA">GAMEA</option>
                                            <option value="Externo">Externo</option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="from row">
                                    <div class="col-md-8 mb-3">
                                        <label for="txtcomponentes" class=" fs-5 fw-bold mb-2">Tipo de Componentes</label>
                                        <input type="text" name="txtcomponentes" id="txtcomponentes" class="form-control form-control-solid " value="{{$ejecProyecto->Tipo_Componentes}}" readonly >
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="txtfechaInst" class=" fs-5 fw-bold mb-2">Fecha de Instalacion</label>
                                        <input type="date" name="txtfechaInst" id="txtfechaInst" class="form-control form-control-solid " required >
                                    </div>
                                </div>
                            {{-- </form> --}}
								
							<h1>luminarias Reacondicionadas</h1>
							<?php
							$con=1;
							?>
                         
                         @if (!$ejecReutilizados->isEmpty())
							<table  >
								<tr>
									<th>Nro</th>
									<th>Nombre</th>
									<th>Cantidad</th>
									<th>Disponibles</th>
									<th>Utilizados</th>
									
								</tr>
                                    @foreach ($ejecReutilizados as $itemr)
									<tr>
										<td><?php echo $con;?></td>
										<td>{{$itemr->Nombre_Item}}</td>
										<td>{{$itemr->Cantidad}}</td>
										<td>{{$itemr->Disponibles}}</td>
										<td>
                                            <input type="number" name="utilizadosreu[{{$itemr->id}}]" id="">
                                            
                                        </td>
										
                                        
									</tr>
									<?php $con++;?>
                                    @endforeach
                                </table>
                                
                            @else
                                <h5 class="badge badge-light-danger">No hay luminarias Reutilizadas</h5>
                            @endif
                               
							<h3>Detalles de Accesorios</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$ejecAccesorios->isEmpty())
                            <table border="1">
                                <tr>
                                    <th style="border: 1px solid black;" >Nro</th>
                                    <th style="border: 1px solid black;">Nombre Item</th>
                                    <th style="border: 1px solid black;">Cantidad</th>
                                    <th style="border: 1px solid black;">Utilizados</th>
                                    <th style="border: 1px solid black;">Disponibles</th>
                                    <th style="border: 1px solid black;">Observaciones</th>
                                    <th style="border: 1px solid black;">Usar</th>

                                </tr>
                                @foreach ($ejecAccesorios as $itemacc)
                                <tr>
                                    <td style="border: 1px solid black;"><?php echo $cond;?></td>
                                    <td style="border: 1px solid black;">{{$itemacc->Lista_accesorio->Nombre_Item}}</td>
                                    <td style="border: 1px solid black;">{{$itemacc->Cantidad}}</td>
                                    <td style="border: 1px solid black;">{{$itemacc->Utilizados}}</td>
                                    <td style="border: 1px solid black;">{{$itemacc->Disponibles}}</td>
                                    <td style="border: 1px solid black;">{{$itemacc->Observaciones}}</td>
                                    <td>
                                        <input type="number" name="utilizadoacc[{{$itemacc->id}}]" id="" placeholder=0>
                                    </td>

                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                            
                            @else
                            <h5 class="badge badge-light-danger">No hay Accesorios en este Proyecto</h5>
                        @endif
                            <h3>Detalles de Luminarias LED</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$ejecLuminarias->isEmpty())
                            <table >
                                <tr>
                                    <th>Nro</th>
                                    <th>Cod_Luminaria Item</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Potencia</th>
                                    <th>Instalado?</th>

                                </tr>
                                @foreach ($ejecLuminarias as $itemlum)
                                <tr>
                                    <td><?php echo $con;?></td>
                                    <td>{{$itemlum->Cod_Luminaria}}</td>
                                    <td>{{$itemlum->Marca}}</td>
                                    <td>{{$itemlum->Modelo}}</td>
                                    <td>{{$itemlum->Potencia}}</td>
                                    <td>
                                        <select name="lugarlum[$itemlum->id]" id="txtlugar">
                                            <option value="" disabled selected >Seleccione...</option>
                                            <option value=""  >Si</option>
                                            <option value=""  >No</option>
                                           
                                        </select>
                                    </td>
                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                                   
                            @else
                            <h5 class="badge badge-light-danger">No hay luminarias LED en este Proyecto</h5>
                        @endif
                            <div class="modal-footer">
                               {{--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> --}}
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                    </form>
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-5 mb-xl-10">
				<div class="card-body pt-9 pb-0">
					<h1>Agendar Trabajo</h1>
						
					</div>
				</div>
			</div>
		
		
			
		
		</div>
		<!--end::Container-->
	</div> 
	
</div> 
@endsection