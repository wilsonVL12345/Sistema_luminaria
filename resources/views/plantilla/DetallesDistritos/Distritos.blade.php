@extends('layout.index')

@section('contenido')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Administradores</h1>
				
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				
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
						<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Agregar Nuevo</a>
						<!-- Modal para el registro de distritos-->
						
					<!-- Modal para el registro de distritos-->

						
								<!--begin::Modal - New Address-->
								<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
									<!--begin::Modal dialog-->
									<div class="modal-dialog modal-dialog-centered mw-650px">
										<!--begin::Modal content-->
										<div class="modal-content">
											<!--begin::Form-->
											{{-- kt_modal_new_address_form --}}
											<form class="form" action="{{route('registro.distrito')}}" id="form-registrardistrito" method="POST">
												@csrf
												<!--begin::Modal header-->
												<div class="modal-header" id="kt_modal_new_address_header">
													<!--begin::Modal title-->
													<h2>Registrar Nuevos Datos </h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
														<span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Close-->
												</div>
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Scroll-->
													<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
														<!--begin::Notice-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
															<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																	<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																	<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-bold">
																	<h4 class="text-gray-900 fw-bolder">Atencion</h4>
																	<div class="fs-6 text-gray-700">Ingresar  Nuevos datos de  Zonas, Urbanizaciones, Avenidas o Calles que no esten los en la tabla
																	</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
														<!--end::Notice-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-5 fv-row">
															<!--begin::Label-->
															<label class="required fs-6 fw-bold mb-2">Agregar</label>
															<!--end::Label-->
															<!--begin::Select-->
															<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione.." name="txtagregar" id="txtagregar" required>
																<option value="" >Seleccione...</option>
																<option value="txtzonaUr">Zona/Urbanización</option>
																<option value="street">Avenida/Calle</option>
																
															</select>
															<!--end::Select-->
														</div>
														<!--end::Input group-->
														{{-- para la parte de zona urbanizacion agregar ---------------}}
													<div id="form-distritoZonaUrbanizacion" style="display: none;" >
														<!--begin::Input group-->
															<div class="row mb-5">
																<!--begin::Col-->
																	<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Distrito</label>
																		<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccion..." name="txtdistrit" id="txtdistrit">
																			<option value="">Seleccion...</option>
																			<option value="1"> 1</option> 
																			<option value="2"> 2</option> 
																			<option value="3"> 3</option> 
																			<option value="4"> 4</option> 
																			<option value="5"> 5</option> 
																			<option value="6"> 6</option> 
																			<option value="7"> 7</option> 
																			<option value="8"> 8</option> 
																			<option value="9"> 9</option> 
																			<option value="10"> 10</option> 
																			<option value="11"> 11</option> 
																			<option value="12"> 12</option> 
																			<option value="13"> 13</option> 
																			<option value="14"> 14</option> 
																		</select>
																	</div>
																
																<!--end::Col-->
																
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="row mb-5">
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<label class="required fs-6 fw-bold mb-2">Zona/Urbanizacion</label>
																	<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtzonaUrbx" id="txtzonaUrbx">
																		<option value="">Seleccione...</option>
																		<option value="Z. ">Zona</option>
																		<option value="Urb. ">Urbanizacion</option>
																	</select>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<label class="required fs-6 fw-bold mb-2"  >Nombre de la Z/Urb</label>
																	<!--end::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="Ingresa Nombre de la Zona o Urbanizacion" name="txtzonaUr" id="txtzonaUr" />
																	<!--end::Input-->
																</div>
																<!--end::Col-->
															</div>
													</div>
														<!--end::Input group-->

														{{-- registro para la parte de  avenida o ccalle --}}
														<div id="form-distritoZonaUrbanizacionAvenidaCalle" style="display: none;" >

														
															<!--begin::Input group-->
															<div class="row mb-5">
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<label class="required fs-6 fw-bold mb-2">Distrito</label>
																	<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtdistrito" id="txtdistrito">
																		<option value="">Seleccione...</option>
																		<option value=1> 1</option> 
																		<option value=2> 2</option> 
																		<option value=3> 3</option> 
																		<option value=4> 4</option> 
																		<option value=5> 5</option> 
																		<option value=6> 6</option> 
																		<option value=7> 7</option> 
																		<option value=8> 8</option> 
																		<option value=9> 9</option> 
																		<option value=10> 10</option> 
																		<option value=11> 11</option> 
																		<option value=12> 12</option> 
																		<option value=13> 13</option> 
																		<option value=14> 14</option> 
																	</select>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<label class="required fs-6 fw-bold mb-2">Zona o Urbanizacion</label>
																	<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtzonaUrbanizacion" id="txtzonaUrbanizacion">
																		<option value="">Seleccione...</option>
																		@foreach ($listadistrito as $item)
																			<option value="{{$item->Zona_Urbanizacion}}">{{$item->Zona_Urbanizacion}}</option>
																		@endforeach
																	</select>
																</div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
															<!--begin::Input group-->
															<div class="row mb-5">
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																	<label class="required fs-6 fw-bold mb-2">Avenida o Calle</label>
																	<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtavenidacalle" id="txtavenidacalle">
																		<option value="">Seleccione...</option>
																		<option value="C.">Calle</option>
																		<option value="Av.">Avenida</option>
																	</select>
																</div>
																<!--end::Col-->
																<!--begin::Col-->
																<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-bold mb-2"  >Nombre de la AV/C</label>
																	<!--end::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre de la Avenida o Calle" name="txtavc" id="txtavc"/>
																	<!--end::Input-->
																</div>
																<!--end::Col-->
															</div>
															<!--end::Input group-->
														
														</div>
														
													</div>
													<!--end::Scroll-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="button" id="kt_modal_new_address_cancel" class="btn btn-secundary"  data-bs-dismiss="modal">Cerrar</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
														<span class="indicator-label">Registrar</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Address-->
														
							
													
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
														@foreach ($tododistritos as $item)
														<tr>
															<td><?php echo $num?></td>
															<td>{{$item->Distrito}}</td>
															<td>{{$item->Zona_Urbanizacion}}</td>
															<td>{{$item->Calle_Avenida}}</td>
															<td>
																<a href="#" class="btn btn-secondary er fs-6 px-5 py-2" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address2{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
																
															</td>
															<?php 
															$num++
															?>
														<!-- Modal para Modificar distritos-->
															{{-- <div class="modal fade" id="modalmodificardistrito{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
																							<option value="1"{{$item->Distrito== '1' ? 'selected' : ''}}> 1</option> 
																							<option value="2"{{$item->Distrito== '2' ? 'selected' : ''}}> 2</option> 
																							<option value="3"{{$item->Distrito== '3' ? 'selected' : ''}}> 3</option> 
																							<option value="4"{{$item->Distrito== '4' ? 'selected' : ''}}> 4</option> 
																							<option value="5"{{$item->Distrito== '5' ? 'selected' : ''}}> 5</option> 
																							<option value="6"{{$item->Distrito== '6' ? 'selected' : ''}}> 6</option> 
																							<option value="7"{{$item->Distrito== '7' ? 'selected' : ''}}> 7</option> 
																							<option value="8"{{$item->Distrito== '8' ? 'selected' : ''}}> 8</option> 
																							<option value="9"{{$item->Distrito== '9' ? 'selected' : ''}}> 9</option> 
																							<option value="10"{{$item->Distrito== '10' ? 'selected' : ''}}> 10</option> 
																							<option value="11"{{$item->Distrito== '11' ? 'selected' : ''}}> 11</option> 
																							<option value="12"{{$item->Distrito== '12' ? 'selected' : ''}}> 12</option> 
																							<option value="13"{{$item->Distrito== '13' ? 'selected' : ''}}> 13</option> 
																							<option value="14"{{$item->Distrito== '14' ? 'selected' : ''}}> 14</option> 
																							</select>
																						</div>
																						<div class="mb-3">
																						<label for="txtzonaUrbanizacionm">Zona/Urbanizacion</label>
																						<br>
																						<input type="text" name="txtzonaUrbanizacionm" value="{{$item->Zona_Urbanizacion}}">
																						
																						</div>
																						<div class="mb-3">
																						<label for="txtavc">Avenida/Calle:</label  >
																						<br>
																						<input type="text" name="txtavc" id="txtavc" value="{{$item->Calle_Avenida}}">
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
															</div> --}}
															<!-- Modal para Modificar distritos-->
																							<!--begin::Modal - New Address-->
												<div class="modal fade" id="kt_modal_new_address2{{$item->id}}" tabindex="-1" aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog modal-dialog-centered mw-650px">
														<!--begin::Modal content-->
														<div class="modal-content">
															<!--begin::Form-->
															<form class="form" action="{{route('editar.distrito')}}" id="kt_modal_new_address_form" method="POST">
																@csrf
																<!--begin::Modal header-->
																<div class="modal-header" id="kt_modal_new_address_header">
																	<!--begin::Modal title-->
																	<h2>Modificar Datos</h2>
																	<!--end::Modal title-->
																	<!--begin::Close-->
																	<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
																		<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
																		<span class="svg-icon svg-icon-1">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
																				<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::Close-->
																</div>
																<!--end::Modal header-->
																<!--begin::Modal body-->
																<div class="modal-body py-10 px-lg-17">
																	<!--begin::Scroll-->
																	<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
																		<!--begin::Notice-->
																		<!--begin::Notice-->
																		<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
																			<!--begin::Icon-->
																			<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																			<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
																					<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
																					<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																			<!--end::Icon-->
																			<!--begin::Wrapper-->
																			<div class="d-flex flex-stack flex-grow-1">
																				<!--begin::Content-->
																				<div class="fw-bold">
																					<h4 class="text-gray-900 fw-bolder">Advertencia</h4>
																					<div class="fs-6 text-gray-700">Una ves  Modificado el Datos no podras Recuperarlo
																					</div>
																				</div>
																				<!--end::Content-->
																			</div>
																			<!--end::Wrapper-->
																		</div>
																		<!--end::Notice-->
																		<!--end::Notice-->
																		<!--begin::Input group-->
																		<div class="row mb-5">
																			<!--begin::Col-->
																			<div class="col-md-6 fv-row">
																				<input type="text" id="txtid" name="txtid" value="{{$item->id}}" readonly style="display: none;" >
																				<label class="required fs-6 fw-bold mb-2">Distrito</label>
																				<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtdistritom" id="txtdistritom">
																							<option value="">Seleccione...</option>
																							<option value="1"{{$item->Distrito== '1' ? 'selected' : ''}}> 1</option> 
																							<option value="2"{{$item->Distrito== '2' ? 'selected' : ''}}> 2</option> 
																							<option value="3"{{$item->Distrito== '3' ? 'selected' : ''}}> 3</option> 
																							<option value="4"{{$item->Distrito== '4' ? 'selected' : ''}}> 4</option> 
																							<option value="5"{{$item->Distrito== '5' ? 'selected' : ''}}> 5</option> 
																							<option value="6"{{$item->Distrito== '6' ? 'selected' : ''}}> 6</option> 
																							<option value="7"{{$item->Distrito== '7' ? 'selected' : ''}}> 7</option> 
																							<option value="8"{{$item->Distrito== '8' ? 'selected' : ''}}> 8</option> 
																							<option value="9"{{$item->Distrito== '9' ? 'selected' : ''}}> 9</option> 
																							<option value="10"{{$item->Distrito== '10' ? 'selected' : ''}}> 10</option> 
																							<option value="11"{{$item->Distrito== '11' ? 'selected' : ''}}> 11</option> 
																							<option value="12"{{$item->Distrito== '12' ? 'selected' : ''}}> 12</option> 
																							<option value="13"{{$item->Distrito== '13' ? 'selected' : ''}}> 13</option> 
																							<option value="14"{{$item->Distrito== '14' ? 'selected' : ''}}> 14</option> 
																				</select>
																			</div>
																			<!--end::Col-->
																			
																		</div>
																		<!--end::Input group-->
																	
																		<!--begin::Input group-->
																		<div class="d-flex flex-column mb-5 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-bold mb-2">Zona/Urbanizacion</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input class="form-control form-control-solid" placeholder="" name="txtzonaUrbanizacionm" value="{{$item->Zona_Urbanizacion}}"  required/>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		<!--begin::Input group-->
																		<div class="d-flex flex-column mb-5 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-bold mb-2">Avenida/Calle</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input class="form-control form-control-solid" placeholder="" name="txtavc" value="{{$item->Calle_Avenida}}" required/>
																			<!--end::Input-->
																		</div>
																		<!--end::Input group-->
																		
																		
																	
																	</div>
																	<!--end::Scroll-->
																</div>
																<!--end::Modal body-->
																<!--begin::Modal footer-->
																<div class="modal-footer flex-center">
																	<!--begin::Button-->
																	<button type="button" i class="btn btn-light me-3" data-bs-dismiss="modal" >Cerrar</button>
																	<!--end::Button-->
																	<!--begin::Button-->
																	<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
																		<span class="indicator-label">Modificar</span>
																		<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																	</button>
																	<!--end::Button-->
																</div>
																<!--end::Modal footer-->
															</form>
															<!--end::Form-->
														</div>
													</div>
												</div>
												<!--end::Modal - New Address-->
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