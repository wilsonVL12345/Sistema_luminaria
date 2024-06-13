@extends('layout.index')

@section('contenido')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Administradores</h1>
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
					<li class="breadcrumb-item text-muted">
						<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
					</li>
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<li class="breadcrumb-item text-muted">Account</li>
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-300 w-5px h-2px"></span>
					</li>
					<li class="breadcrumb-item text-dark">Security</li>
				</ul>
			</div>
		</div>
	</div>
	{{-- todo el lugar que te interesa --}}
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<div class="card mb-5 mb-xl-10">
				<div class="card-body pt-9 pb-0">
					<div class="card-body pt-9 pb-0">
						<div class="margin">
							<!-- Button trigger modal -->
								
								
								<!-- Modal registro  proyecto -->
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
									 <div class="modal-content">
										<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proyecto</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form action="{{route('registro.almacen')}}" id="formproyecto" method="POST" >
												@csrf
												<label for="txtcod">Cod Proyecto</label>
												<input type="text" name="txtcods" id="txtcod" required>

												<label for="txtdistrito">Distrito</label>
												<select name="txtdistrito" id="txtdistrito" required>
													<option value="" disabled selected >Seleccione</option>
												@foreach ($listadistrito as $item)
												<option value="{{$item->id}}">{{$item->Distrito}}</option>
												@endforeach
												</select>
												
												<br>
												<label for="txtzona">Zona/Urb</label>
												<select name="txtzona" id="txtzona" required>
													<option value="" disabled selected >Seleccioneee</option>
													@foreach ($listazonaurb as $ite)
														<option value="{{$ite->Zona_Urbanizacion}}">{{$ite->Zona_Urbanizacion}}</option>
														
														@endforeach
												</select>
												<br>
												<label for="txttipo">Tipo de Contratacion</label>
												<select name="txttipo" id="txttipo">
													<option value="" disabled selected >Seleccione</option>
													<option value="Servicios">Servicios</option>
													<option value="Bienes">Bienes</option>

												</select>

												<label for="dtfecha">Fecha Programada</label>
												<input type="date" name="dtfecha" id="dtfecha">
												<br>
												<label for="txtmodalidad">Modalidad</label>
												<input type="text" name="txtmodalidad" id="txtmodalidad">
												<br>
												<label for="txtobjeto">Objeto de Contratacion</label>
												<input type="text" name="txtobjeto" id="txtobjeto">

												<label for="txtsubasta">Subasta</label>
												<select name="txtsubasta" id="txtsubasta">
													<option value="" disabled selected >Seleccione</option>
													<option value="Si">Si</option>
													<option value="No">No</option>
												</select>
												<br>
												<div id="check">
													<label for="txttiposcomponentes">Tipos de Componentes</label>
												<br>
												
												 <div class="col-md-6">
													<div class="custom-select" id="multiple-select">
														<div class="selected-options" id="selected-options">
															<!-- Opciones seleccionadas aparecerán aquí -->
														</div>
														<input type="text" id="states" placeholder="Seleccione..." readonly>
														<ul class="options-list" id="options-list"  >
															<li onclick="selectOption('Accesorios')" >Accesorios</li>
															<li onclick="selectOption('Lum. Reacondicionadas')">Lum. Reacondicionadas</li>
															<li onclick="selectOption('Luminarias LED')" >Luminarias LED</li>
														</ul>
													</div>
													<!-- Campo oculto para almacenar los valores seleccionados -->
													<input type="hidden" name="selectedStates" id="selectedStates">
												</div>
												<br>
												
												<br>
											 </div>

												<h3>Agregar</h3>
												<button  type="button" class="btn btn-dark" id="btnAccesorio" onclick="agregarAccesorio()"  style="display: none;">Accesorios</button>
												<button type="button"  class="btn btn-dark" id="btnReacondicionado" onclick="agregarReacondicionadas()" style="display: none;" >Lum. Reacondicionadas</button>
												<button type="button"  class="btn btn-dark" id="btnLuminaria" onclick="agregarluminarialed()" style="display: none;">Luminaria LED</button>

												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
													<button type="submit" class="btn btn-primary">Registrar</button>
												</div>
											</form>
										</div>
									  </div>
									</div>
								</div>
							<h1>Proyectos Pendintes Almacen</h1>
							@include('layout.notificacioncrud')
							<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" >Agregar Nuevo</button>
							<br>
							<?php
							$con=1;
							?>
							<table>
								<tr>
									<th>Nro</th>
									<th>Cuce-Proyecto</th>
									<th>Distrito</th>
									<th>Zona</th>
									<th>Fecha Programada</th>
									<th>Tipo de Contratacion</th>
									
									<th>Estado</th>
									<th>Subasta</th>
									<th>Detalles</th>
									<th>Ejecutar</th>
								</tr>
								@foreach ($proyecto as $item)
									<tr>
										<td><?php echo $con;?></td>
										<td>{{$item->Cuce_Cod}}</td>
										<td>{{$item->distrito->Distrito}}</td>
										<td>{{$item->Zona}}</td>
										<td>{{$item->Fecha_Programada}}</td>
										<td>{{$item->Tipo_Contratacion}}</td>
										<td>{{$item->Estado}}</td>
										<td>{{$item->Subasta}}</td>

										<td>
											<a href="{{url('/detallesAccesorios/almacen/'.$item->id) }}" class="btn btn-warning btn-sm" 
												>
												<i class="fa-regular fa-eye"></i>
											</a>								
										</td>
										<td>
											<a href="{{url('/datos/ejecutar/'.$item->id) }}" class="btn btn-warning btn-sm" ><i class="fa-solid fa-paper-plane"></i></a>
										</td>
										
									</tr>
									<?php $con++;?>
								@endforeach
							</table>
							
							
						</div>
					</div>
				</div>
			</div>
			<div class="card mb-5 mb-xl-10">
				<div class="card-body pt-9 pb-0">
					<h1>Mas detalles</h1>
						
				</div>
			</div>
		</div>
		
		
			
		
	</div>
		<!--end::Container-->
</div> 
	

@endsection