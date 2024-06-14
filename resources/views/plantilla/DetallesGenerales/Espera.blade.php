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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Administradores</h1>
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
					<div class="margin">
						@include('layout.notificacioncrud')
						 	<table>
								<?php
								$num=1;	
								?>
								<tr>
									<th>Nro</th>
									<th>Distrito</th>
									<th>Zona</th>
									<th>Nro Sisco</th>
									<th>Tipo de Trabajo</th>
									<th>Fecha Programada</th>
									<th>Carta</th>
									<th>Observacion</th>
									<th>Editar</th>
								</tr>
								@foreach ($detalles as $itemEspera)
									
								<tr>
									<td><?php echo $num; ?></td>
									<td>{{$itemEspera->distrito->Distrito}}</td>
									<td>{{$itemEspera->Zona}}</td>
									<td>{{$itemEspera->Nro_Sisco}}</td>
									<td>{{$itemEspera->Tipo_Trabajo}}</td>
									<td>{{ \Carbon\Carbon::parse($itemEspera->Fecha_Hora_Inicio_Programado)->format('Y-m-d') }}</td>
									<td>
										<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modaleditarlistaaccesorios"><i class="fa-solid fa-image"></i></a>
									</td>
									<td>{{$itemEspera->Observaciones}}</td>
									<td>
										<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modaleditar{{$itemEspera->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
										<a href="{{route('eliminar.accesorios',$itemEspera->id)}}" class="btn btn-danger" onclick="return res()"><i class="fa-solid fa-delete-left"></i></a>
									</td>
										<!-- Modal  para editar  detalles en espera-->
										<div class="modal fade" id="modaleditar{{$itemEspera->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
												<h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
														<form action="{{route('edit.espera')}}" method="POST">
															@csrf
															<div class="mb-3">
																<input type="text" name="txtid" id="txtid" value='{{$itemEspera->id}}' style="display: none" >
															</div>
															<div class="mb-3">
																<label for="txtdistirto">Distrito</label>
																<select name="mtxtdistirto" id="txtdistirto" value='{{$itemEspera->distrito->Distrito}}'>
																	<option value="" disabled selected >Seleccion</option>
																	@foreach ($listadistrito as $item)
																	<option value="{{$item->id}}" {{$itemEspera->Distritos_id==$item->id ? 'selected':''}} >{{$item->Distrito}}</option>
																	@endforeach
																</select>
															</div>
															<div class="mb-3">
																<label for="txtzonaurb">Zona/Urbanizacion</label>
																<select name="mtxtzonaurb" id="txtzonaurb" >
																	<option value="" disabled selected >Seleccione</option>
																	@foreach ($listazonaurb as $ite)
																		<option value="{{$ite->Zona_Urbanizacion}}" {{$itemEspera->Zona ==$ite->Zona_Urbanizacion?'selected':''}} >{{$ite->Zona_Urbanizacion}}</option>
																	@endforeach
																</select>
															</div>
															<div class="mb-3">
																<label for="txtnrosisco">Nro Sisco</label>
																<input type="text" id="txtnrosisco" name="mtxtnrosisco" value="{{$itemEspera->Nro_Sisco}}">
															</div>
															<div class="mb-3">
																<label for="txtfechainiciop">Fecha y Hora de Inicio</label>
																<input type="datetime-local" id="txtfechainiciop" name="mtxtfechainiciop" value="{{$itemEspera->Fecha_Hora_Inicio_Programado}}">
															</div>
															<div class="mb-3">
																<label for="txtfechafinp">Fecha y Hora de Finalizacion</label>
																<input type="datetime-local" id="txtfechafinp" name="mtxtfechafinp" value="{{$itemEspera->Fecha_Hora_Fin_Programado}}">
															</div>
															<div class="col-md-6">
																<label for="">Tipo de Trabajo a realizar</label>
																<div class="custom-select" id="multiple-select">
																	<div class="selected-options" id="selected-options">
																		<!-- Opciones seleccionadas aparecerán aquí -->
																	</div>
																	<input type="text" id="states" placeholder="{{$itemEspera->Tipo_Trabajo}}"  size="30">
																	<ul class="options-list" id="options-list"  >
																		<li onclick="selectOption('Mantenimiento'); seleccion('Mantenimiento');" >Mantenimiento</li>
																		<li onclick="selectOption('Instalacion'); seleccion ('Instalacion');">Instalacion</li>
																		<li onclick="selectOption('Apoyo Carro Canasta'); seleccion ('Apoyo');" >Apoyo Carro Canasta</li>
																	</ul>
																</div>
																<!-- Campo oculto para almacenar los valores seleccionados -->
																<input type="hidden" name="mselectedStates" id="selectedStates" >
															</div>
															<!-- Campo adicional que aparecerá cuando se seleccione "Apoyo Carro Canasta" ---------------------------->
															<div class="col-md-6" id="apoyo-distrito" style="display: none;">
																<label for="txtapoyo">Apoyo a Distrito</label>
																<select name="m" id="txtapoyo">
																	<option value="">Seleccione.</option>
																	@foreach ($listadistrito as $itemd)
																	<option value="{{$itemd->Distrito}}">{{$itemd->Distrito}}</option>
																	@endforeach
																</select>
															</div>
															
															<div class="mb-3">
																<label for="imgcarta">Carta</label>
																<br>
																<input type="file" id="imgcarta" name="mimgcarta" accept="image/*">
																@error('imgcarta')
																	<small class="text-danger">{{$message}}</small>
																@enderror
															</div>
															<div class="mb-3">
																<label for="rnotificar">Notificar</label>
																<input type="checkbox" name="mrnotificar" id="rnotificar" >
															</div>
															<div class="mb-3">
																<label for="txtobservacion">Observaciones</label>
																<br>
																<textarea name="mtxtobservacion" id="txtobservacion" cols="40" rows="5" >
																	{{old('txtobservacion',$itemEspera->Observaciones)}}
																</textarea>
															</div>
														<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
														<button type="submit" class="btn btn-primary">Modificar Datos</button>
														</div>
														</form>
												</div>
											</div>
											</div>
										</div>
								</tr>
								<?php
								$num++;	
								?>
								@endforeach
							</table>
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