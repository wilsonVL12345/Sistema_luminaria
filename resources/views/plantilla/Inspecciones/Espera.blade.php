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
						<h1>Lista de zonas a Inspeccionar </h1>
						@include('layout.notificacioncrud')
						<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#Modalregistrarinspeccionesespera">Agregar Usuario</button>
						{{-- modal de registro  de inspeccione en espera  --}}	
						<div class="modal fade" id="Modalregistrarinspeccionesespera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nueva Inspeccion</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="{{route('registro.inspecciones')}}" method="POST" enctype="multipart/form-data">
										@csrf
									<div class="mb-3">
										<label for="txtdistirto">Distrito</label>
										<select name="txtdistirto" id="txtdistirto">
											<option value="" disabled selected >Seleccion</option>
											@foreach ($listadistrito as $item)
											<option value="{{$item->id}}">{{$item->Distrito}}</option>
											@endforeach
										</select>
									</div>
									<div class="mb-3">
										<label for="txtzonaurb">Zona/Urbanizacion</label>
										<select name="txtzonaurb" id="txtzonaurb">
											<option value="" disabled selected >Seleccione</option>
											@foreach ($listazonaurb as $ite)
												<option value="{{$ite->Zona_Urbanizacion}}">{{$ite->Zona_Urbanizacion}}</option>
											@endforeach
										</select>
									</div>
									<div class="mb-3">
										<label for="txtnrosisco">Nro Sisco</label>
										<input type="text" id="txtnrosisco" name="txtnrosisco">
									</div>
									<div class="mb-3">
										<label for="txtfecha">Fecha de Inspeccion</label>
										<input type="date" id="txtfecha" name="txtfecha">
									</div>
									<div class="mb-3">
										<label for="imgcarta">Carta</label>
										<input type="file" id="imgcarta" name="imgcarta" accept="image/*">
										@error('imgcarta')
											<small class="text-danger">{{$message}}</small>
										@enderror
									</div>
									<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
													<button type="submit" class="btn btn-primary">Registrar</button>
									</div>

								</form>
								</div>
							</div>
							</div>
						</div>
						<?php
						$num=1;
						?>
						<table>
							<tr>
								<th>Nro</th>
								<th>Distrito</th>
								<th>Zona/Urbanizacion</th>
								<th>Nro Sisco</th>
								<th>Fecha de Inspeccion</th>
								<th>Carta</th>
								<th>Empezar</th>
								<th>Accion</th>
							</tr>
							 @foreach ($inspeccion as $item)
							<tr>
								<td><?php echo $num?></td>
								<td>{{$item->Distrito->Distrito}}</td>
								<td>{{$item->ZonaUrbanizacion}}</td>
								<td>{{$item->Nro_Sisco}}</td>
								<td>{{$item->Fecha_Inspeccion}}</td>
								<td>
									<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modaleditarlistaaccesorios{{$item->id}}"><i class="fa-solid fa-image"></i></a>
								</td>
								<td>
									<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modalempezarinspeccion{{$item->id}}"><i class="fa-solid fa-paper-plane"></i></a>
								
								</td>

								<td>
									<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modaleditarinspeccion{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
									<a href="{{route('eliminar.accesorios',$item->id)}}" class="btn btn-danger" onclick="return res()"><i class="fa-solid fa-delete-left"></i></a>
								</td>
								<?php 
								$num++
								?>
									{{-- modal de modificar datos --}}	
									<div class="modal fade" id="Modaleditarinspeccion{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Accesorio</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="{{route('editar.inspeccionespera')}}" method="POST">
													@csrf
												<div class="mb-3">
													<label for="txtid">ID</label>
													<input type="text" id="txtid" name="txtid" value="{{$item->id}}" readonly>
												</div>
												<div class="mb-3">
													<label for="txtdistrito">Distrito</label>
													<select name="txtdistrito" id="txtdistrito">
														@foreach ($listadistrito as $ite)
														<option value="{{$ite->id}}" {{$ite->id == $item->Distritos_id ? 'selected' : ''}}>
															{{$ite->Distrito}}
														</option>
													@endforeach
													</select>
													
												</div>
												<div class="mb-3">
													<label for="txtzurb">Zona/Urbanizacion</label>
													<select name="txtzurb" id="txtzurb">
														@foreach ($listazonaurb as $it)
														<option value="{{$it->Zona_Urbanizacion}}" {{$it->Zona_Urbanizacion==$item->ZonaUrbanizacion ? 'selected':''}}>
															{{$it->Zona_Urbanizacion}}
														</option>
														@endforeach
													</select>
												</div>
												<div class="mb-3">
													<label for="txtsisco">Nro Sisco</label>
													<input type="text" id="txtsisco" name="txtsisco" value="{{$item->Nro_Sisco}}" >
												</div>
												<div class="mb-3">
													<label for="txtfecha">Fecha</label>
													<input type="date" id="txtfecha" name="txtfecha" value="{{$item->Fecha_Inspeccion}}" >
												</div>

												<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
															<button type="submit" class="btn btn-primary">Registrar</button>
												</div>
		
											</form>
											</div>
										</div>
										</div>
									</div>
									{{-- modal Empezar inspeccion  --}}	
									<div class="modal fade" id="Modalempezarinspeccion{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Accesorio</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="{{route('empezar.inspeccionespera')}}" method="POST">
													@csrf
												<div class="mb-3">
													<label for="txtid">ID</label>
													<input type="text" id="txtid" name="txtid" value="{{$item->id}}" readonly>
												</div>
												<div class="mb-3">
													<label for="txtdistrito">Distrito</label>
													<input type="text"  name="txtdistrito" value="{{$item->distrito->Distrito}}" readonly>
													
												</div>
												<div class="mb-3">
													<label for="txtzurb">Zona/Urbanizacion</label>
													<input type="text" name="txtzurb" id="txtzurb" value="{{$item->ZonaUrbanizacion}}" readonly>
												</div>
												<div class="mb-3">
													<label for="txtsisco">Nro Sisco</label>
													<input type="text" id="txtsisco" name="txtsisco" value="{{$item->Nro_Sisco}}"  readonly>
												</div>
												<div class="mb-3">
													<label for="txtfecha">Fecha</label>
													<input type="date" id="txtfecha" name="txtfecha" value="{{$item->Fecha_Inspeccion}}" readonly>
												</div>
												<div class="mb-3">
													<label for="txttipo">Tipo de Inspeccion</label>
													<select name="txttipo" id="txttipo" required>
														<option value="" disabled selected >Seleccione</option>
														<option value="Ampliacion de la red">Ampliacion de la red</option>
														<option value="Mantenimiento">Mantenimiento</option>
														<option value="Mejora del Sistema">Mejora del Sistema</option>
														<option value="Ampliacion de la red y Mantenimiento">Ampliacion de la red y Mantenimiento</option>

													</select>

												</div>
												<div class="mb-3">
													<label for="txtdescripcion">Descripcion</label>
													<br>
													
													 <textarea name="txtdescripcion" id="txtdescripcion" rows="7" cols="50"></textarea required > 
												</div>
												
												<div class="mb-3">
													<label for="txtestado">Estado</label>
													<select name="txtestado" id="txtestado" required >
														<option value="" disabled selected >Selecionar</option>
														<option value="Aprobado">Aprobado</option>
														<option value="Rechazado">Rechazado</option>

													</select>
												</div>												
												<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
															<button type="submit" class="btn btn-primary">Finalizar Inspeccion</button>
												</div>
		
											</form>
											</div>
										</div>
										</div>
									</div>
								</tr>
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