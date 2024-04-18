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
						<h1>Detalles Distritos</h1>
						@include('layout.notificacioncrud')
						<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#modalregistrodistrito">Agregar Nuevo</button>
						<!-- Modal para el registro de distritos-->
							<div class="modal fade" id="modalregistrodistrito" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevos Datos</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form id="form-registrardistrito" action="{{route('registro.distrito')}}" method="POST">
											@csrf
											<div>
											  <label for="txtagregar">Agregar:</label>
											  <select id="txtagregar" name="txtagregar" >
												<option value="" disabled selected>seleccione</option>
												<option value="txtzonaUr">Zona/Urbanización</option>
												<option value="street">Avenida/Calle</option>
											  </select>
											</div>
										  
											<div id="form-distritoZonaUrbanizacion" style="display: none;">
											  <div>
												<label for="txtdistrit">Distrito:</label>
												<select name="txtdistrit" id="txtdistrit"  >
												<option value="" disabled selected>Seleccion</option>
												<option value="1">Distrito 1</option> 
												<option value="2">Distrito 2</option> 
												<option value="3">Distrito 3</option> 
												<option value="4">Distrito 4</option> 
												<option value="5">Distrito 5</option> 
												<option value="6">Distrito 6</option> 
												<option value="7">Distrito 7</option> 
												<option value="8">Distrito 8</option> 
												<option value="9">Distrito 9</option> 
												<option value="10">Distrito 10</option> 
												<option value="11">Distrito 11</option> 
												<option value="12">Distrito 12</option> 
												<option value="13">Distrito 13</option> 
												<option value="14">Distrito 14</option> 
												</select>
											  </div>
											  <div>
												<label for="txtzonaUrbx">Zona/Urbanizacion</label>
												<br>
												<select name="txtzonaUrbx" id="txtzonaUrbx" >
													<option value=""disabled selected>Seleccione</option>
													<option value="Z. ">Zona</option>
													<option value="Urb. ">Urbanizacion</option>

													
												</select>
												<label for="txtzonaUr"></label>
												<input type="text" id="txtzonaUr" name="txtzonaUr" >
											  </div>
											</div>
										  
											<div id="form-distritoZonaUrbanizacionAvenidaCalle" style="display: none;">
											  <div>
												<label for="txtdistrito">Distrito:</label>
												<select name="txtdistrito" id="txtdistrito" >
													<option value=""disabled selected>Seleccion</option>
													<option value="1">Distrito 1</option> 
													<option value="2">Distrito 2</option> 
													<option value="3">Distrito 3</option> 
													<option value="4">Distrito 4</option> 
													<option value="5">Distrito 5</option> 
													<option value="6">Distrito 6</option> 
													<option value="7">Distrito 7</option> 
													<option value="8">Distrito 8</option> 
													<option value="9">Distrito 9</option> 
													<option value="10">Distrito 10</option> 
													<option value="11">Distrito 11</option> 
													<option value="12">Distrito 12</option> 
													<option value="13">Distrito 13</option> 
													<option value="14">Distrito 14</option> 
													</select>
											  </div>
											  <div>
												<label for="txtzonaUrbanizacion">Zona/Urbanizacion</label>
												<br>
												<select name="txtzonaUrbanizacion" id="txtzonaUrbanizacion" >
													<option value="" disabled selected >Elegir</option>
													@foreach ($listadistrito as $item)
														<option value="{{$item->Zona_Urbanizacion}}">{{$item->Zona_Urbanizacion}}</option>
													@endforeach
												</select>
												
											  </div>
											  <div>
												<label for="txtavenidacalle">Avenida/Calle:</label  >
												<br>
												<select name="txtavenidacalle" id="txtavenidacalle" >
													<option value="" disabled selected >Seleccione</option>
													<option value="C.">Calle</option>
													<option value="Av.">Avenida</option>
												</select>
												<input type="text" id="txtavc" name="txtavc" >
											  </div>
											  
											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
											<button type="submit" class="btn btn-primary">Guardar</button>
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
															<th>Avenida/Calle</th>
															<th>Accion</th>
														</tr>
														@foreach ($distrito as $item)
														<tr>
															<td><?php echo $num?></td>
															<td>{{$item->Distrito}}</td>
															<td>{{$item->Zona_Urbanizacion}}</td>
															<td>{{$item->Calle_Avenida}}</td>
															<td>
																<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalmodificardistrito{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
																<a href="" class="btn btn-danger"><i class="fa-solid fa-user-pen"></i></a>
															</td>
															<?php 
															$num++
															?>
														<!-- Modal para Modificar distritos-->
															<div class="modal fade" id="modalmodificardistrito{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
																<div class="modal-dialog">
																<div class="modal-content">
																	<div class="modal-header">
																	<h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos</h1>
																	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
																	</div>
																			<div class="modal-body">
																				 <form  action="{{route('editar.distrito')}}" method="POST">
																					@csrf
																						<div class="mb-3">
																							<label for="txtid">ID</label>
																							<input type="text" id="txtid" name="txtid" value="{{$item->id}}" readonly >
																						</div>
																						<div class="mb-3">
																						<label for="txtdistritom">Distrito:</label>
																						<select name="txtdistritom" id="txtdistritom" >
																							<option value=""disabled selected>Seleccion</option>
																							<option value="1"{{$item->Distrito== '1' ? 'selected' : ''}}>Distrito 1</option> 
																							<option value="2"{{$item->Distrito== '2' ? 'selected' : ''}}>Distrito 2</option> 
																							<option value="3"{{$item->Distrito== '3' ? 'selected' : ''}}>Distrito 3</option> 
																							<option value="4"{{$item->Distrito== '4' ? 'selected' : ''}}>Distrito 4</option> 
																							<option value="5"{{$item->Distrito== '5' ? 'selected' : ''}}>Distrito 5</option> 
																							<option value="6"{{$item->Distrito== '6' ? 'selected' : ''}}>Distrito 6</option> 
																							<option value="7"{{$item->Distrito== '7' ? 'selected' : ''}}>Distrito 7</option> 
																							<option value="8"{{$item->Distrito== '8' ? 'selected' : ''}}>Distrito 8</option> 
																							<option value="9"{{$item->Distrito== '9' ? 'selected' : ''}}>Distrito 9</option> 
																							<option value="10"{{$item->Distrito== '10' ? 'selected' : ''}}>Distrito 10</option> 
																							<option value="11"{{$item->Distrito== '11' ? 'selected' : ''}}>Distrito 11</option> 
																							<option value="12"{{$item->Distrito== '12' ? 'selected' : ''}}>Distrito 12</option> 
																							<option value="13"{{$item->Distrito== '13' ? 'selected' : ''}}>Distrito 13</option> 
																							<option value="14"{{$item->Distrito== '14' ? 'selected' : ''}}>Distrito 14</option> 
																							</select>
																						</div>
																						<div class="mb-3">
																						<label for="txtzonaUrbanizacionm">Zona/Urbanizacion</label>
																						<br>
																						<select name="txtzonaUrbanizacionm" id="txtzonaUrbanizacionm" >
																							<option value="" disabled selected >Elegir</option>
																							@foreach ($distrito as $item)
																								<option value="{{$item->Zona_Urbanizacion}}"{{$item->Zona_Urbanizacion==$item->Zona_Urbanizacion ? 'selected' : ''}}>{{$item->Zona_Urbanizacion}}</option>
																							@endforeach
																						</select>
																						
																						</div>
																						<div class="mb-3">
																						<label for="txtavenidacallem">Avenida/Calle:</label  >
																						<br>
																						
																						<input type="text" id="txtavc" name="txtavc" value="{{$item->Calle_Avenida}}" >
																						</div>
																						
																			
																					<div class="modal-footer">
																					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
																					<button type="submit" class="btn btn-primary">Guardar</button>
																					</div>
																				 </form>
																			</div>
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