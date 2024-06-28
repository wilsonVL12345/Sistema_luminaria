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
								{{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

												<label for="dtfecha">Fecha de Adquisicion</label>
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
													<label for="txttiposcomponentes">Materiales Electricos

													</label>
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
								</div> --}}
								<!--begin::Modal - Create account-->
									<div class="modal fade" id="kt_modal_create_account" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog mw-1000px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Title-->
													<h2>Registrar Nuevo Almacen</h2>
													<!--end::Title-->
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
												<div class="modal-body scroll-y m-5">
													<!--begin::Stepper-->
													<div class="stepper stepper-links d-flex flex-column" id="kt_create_account_stepper">
														
														<!--begin::Form-->
														<!--begin::Form-->
														<form class="form" action="{{route("registro.usuario")}}" id="modadRegistraUsuarios_form" method="POST">
															@csrf
															<!--begin::Modal header-->
															
															<!--end::Modal header-->
															<!--begin::Modal body-->
															<div class="modal-body py-10 px-lg-17">
																<!--begin::Scroll-->
																<div class="scroll-y me-n7 pe-7" id="modadRegistraUsuarios_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modadRegistraUsuarios_header" data-kt-scroll-wrappers="#modadRegistraUsuarios_scroll" data-kt-scroll-offset="300px">
																	<!--begin::Notice-->
																	<!--begin::Notice-->
																	
																	<!--end::Notice-->
																	<!--end::Notice-->
																	<!--begin::Input group-->
																	<div class="from row">
																		<div class="col-md-4 mb-3">
																			<label for="input1" class="required fs-5 fw-bold mb-2">Input 1</label>
																			<input type="text" class="form-control form-control-solid" id="input1" placeholder="Input 1">
																		</div>
																		<div class="col-md-4 mb-3">
																			<label for="input2" class="required fs-5 fw-bold mb-2">Input 2</label>
																			<input type="text" class="form-control form-control-solid" id="input2" placeholder="Input 2">
																		</div>
																		<div class="col-md-4 mb-3">
																			<label for="input3" class="required fs-5 fw-bold mb-2">Input 3</label>
																			<input type="text" class="form-control form-control-solid" id="input3" placeholder="Input 3">
																		</div>
																	</div>
																	
																	<div class="d-flex flex-column mb-5 fv-row">
																		<!--begin::Label-->
																		<label class="required fs-5 fw-bold mb-2">Nombres</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input  type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre" name="txtnombre" required  />
																		<!--end::Input-->
																	</div> 
																	<div class="row mb-5">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-bold mb-2">Paterno</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="txtpaterno" required  />
																			<!--end::Input-->
																		</div> 
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--end::Label-->
																			<label class="required fs-5 fw-bold mb-2">Materno</label>
																			<!--end::Label-->
																			<!--end::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="txtmaterno" required  />
																			<!--end::Input-->
																		</div> 
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	
																	<div class="row mb-5">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-bold mb-2">C.I.</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="txtci" required  />
																			<!--end::Input-->
																		</div> 
																		<!--end::Col-->
																		<!--begin::Col-->
																		
																			<div class="col-md-6 fv-row">
																				<label class="required fs-6 fw-bold mb-2">Expedido</label>
																				<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtexpedido" required >
																					<option value="" >Seleccione...</option>
																					<option value="LP">La paz</option>
																					<option value="SCZ">Santa Cruz</option>
																					<option value="CO">Cochabamba</option>
																					<option value="OR">Oruro</option>
																					<option value="PO">Potosí</option>
																					<option value="TJ">Tarija</option>
																					<option value="CH">Chuquisaca</option>
																					<option value="BE">Beni</option>
																					<option value="PA">Pando</option>
																			</select>
																			</div>
																		
																		<!--end::Col-->
																	</div>
																	<div class="d-flex flex-column mb-5 fv-row">
																		<!--begin::Label-->
																		<label class="required fs-5 fw-bold mb-2">Celular</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input  type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre" name="txtcelular" required  id="txtcelular"  />
																		<!--end::I requirednput-->
																	</div>
																	<div class="d-flex flex-column mb-5 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Genero</label>
																		<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtgenero" required >
																			<option value="" >Seleccione...</option>
																			<option value="F">Femenino</option>
																			<option value="M">Masculino</option>
																	</select>
																	</div>
																	<!--end::Input group-->
																	<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Cargo</label>
																		<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtcargo" required >
																			<option value="" >Seleccione...</option>
																			<option value="Administrador">Administrador</option>
																			<option value="Coordinador">Coordinador</option>
																			<option value="Tecnico">Tecnico</option>
																	
																		</select>
																
																	
																</div>
																	<!--begin::Input group-->
																	<div class="d-flex flex-column mb-5 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Responsable de</label>
																				<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtlugarDesignado" required >
																					<option value="" >Seleccione...</option>
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
																					<option value="Alcaldia">Alcaldia</option> 
																				</select>
																	</div>
																	<!--end::Input group-->
																	
																	<!--begin::Input group-->
																	<div class="fv-row mb-5">
																		<!--begin::Wrapper-->
																		<div class="d-flex flex-stack">
																			<!--begin::Label-->
																			<div class="me-5">
																				<!--begin::Label-->
																				<label class="fs-5 fw-bold">Desea Habilitar Usuario</label>
																				<!--end::Label-->
																				<!--begin::Input-->
																				<div class="fs-7 fw-bold text-muted">Aviso! si habilita, el usuario podra ingresar al sistema</div>
																				<!--end::Input-->
																			</div>
																			<!--end::Label-->
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input" name="txtestado"  type="checkbox" value="1"  checked="checked"  />
																				<!--end::Input-->
																				<!--begin::Label-->
																				<span class="form-check-label fw-bold text-muted">activo</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																		<!--begin::Wrapper-->
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Scroll-->
															</div>
															<!--end::Modal body-->
															<!--begin::Modal footer-->
															<div class="modal-footer flex-center">
																<!--begin::Button-->
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
																<!--end::Button-->
																<!--begin::Button-->
																<button type="submit" id="modadRegistraUsuarios_submit" class="btn btn-primary">
																	<span class="indicator-label">Registrar</span>
																	<span class="indicator-progress">Please wait...
																	<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
																<!--end::Button-->
															</div>
															<!--end::Modal footer-->
														</form>
														<!--end::Form-->
														<!--end::Form-->
													</div>
													<!--end::Stepper-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
								<!--end::Modal - Create project-->
								<!-- Modal registro  proyecto -->

							
							<h1>Proyectos Pendintes Almacen</h1>
							@include('layout.notificacioncrud')
							
							
							<br>
							
							<div class="card-header align-items-center py-5 gap-2 gap-md-5">
							<div class="card-title">
								<!--begin::Search-->
								<div class="d-flex align-items-center position-relative my-1">
									<span class="svg-icon fs-1 position-absolute ms-4">...</span>
									<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
								</div>
								<!--end::Search-->
								<!--begin::Export buttons-->
								<div id="tablaAlmacen_1_export" class="d-none"></div>
								<!--end::Export buttons-->
							</div>
							<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
								
								<!--begin::Export dropdown-->
								<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
									Export Report
								</button>
								
								<!--begin::Menu-->
								<div id="tablaAlmacen_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-kt-export="copy">
											Copy to clipboard
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-kt-export="excel">
										Export as Excel
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									{{-- <div class="menu-item px-3">
										<a href="#" class="menu-link px-3" data-kt-export="csv">
										Export as CSV
									</a>
									</div> --}}
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3" data-kt-export="pdf">
										Export as PDF
									</a>
								</div>
								<!--end::Menu item-->
								</div>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_account">Agregar Nuevo</button>

								<!--end::Menu-->
								<!--end::Export dropdown-->
					
								<!--begin::Hide default export buttons-->
								<div id="tablaAlmacenexport" class="d-none"></div>
								<!--end::Hide default export buttons-->
							</div>
							
						</div>
							{{-- tabla proyecto almacen --}}
							<div class="card-body">
								<table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="tablaAlmacen">
									<thead>
										
										<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
											<th class="min-w-100px">Cuce-Proyecto</th>
											<th class="min-w-100px">Distrito</th>
											<th class="min-w-100px">Urbanizacion</th>
											<th class="min-w-100px">Fecha de Adquisicion</th>
											<th class="min-w-100px">Tipo de Contratacion</th>
											<th class="text-end min-w-75px">Estado</th>
											<th class="min-w-100px">Subasta</th>
											
											<th class="text-end min-w-75px">Detalles</th>
											
											<th class="text-end min-w-100px pe-5">Actividad</th>
										</tr>
										<!--end::Table row-->
									</thead>
									<tbody class="fw-semibold text-gray-600">
										@foreach ($proyecto as $item)
											
										<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
											<td>
												<a href="#" class="text-gray-800 text-hover-primary mb-1">{{$item->Cuce_Cod}}</a>
											</td>
											<td>
												<a href="#" class="text-gray-800 text-hover-primary mb-1">{{$item->Distrito}}</a>
											</td>
											<td>
												<a href="#" class="text-gray-800 text-hover-primary mb-1">{{$item->Zona}}</a>
											</td>
											<td>
												<a href="#" class="text-gray-800 text-hover-primary mb-1">{{$item->Fecha_Programada}}</a>
											</td>
											<td>
												<div class="text-gray-600 text-hover-primary mb-1">{{$item->Tipo_Contratacion}}</div>
											</td>
											<td class="badge badge-light-success">{{$item->Estado}}</td>
											<td>
												<a href="#" class="text-gray-600 text-hover-primary mb-1">{{$item->Subasta}}</a>
											</td>
											
											<!--begin::Action=-->
											<td class="text-end">
												<a href="#" class="btn btn-sm btn-light btn-active-light-primary"
													data-kt-menu-trigger="click"
													data-kt-menu-placement="bottom-end">Actions
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-5 m-0">
														<svg xmlns="http://www.w3.org/2000/svg" width="24"
															height="24" viewBox="0 0 24 24" fill="none">
															<path
																d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												<!--begin::Menu-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
													data-kt-menu="true">
													<!--begin::Menu item-->
													
													<div class="menu-item px-3">
														<a href="#" data-bs-toggle="modal" data-bs-target="#moraModificarUsuario{{$item->id}}"
															class="menu-link px-3">Editar</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														@if ($item->Estado=='Activo')
														<a href="{{url('/usuario/bloquear/'.$item->id) }}" class="menu-link px-3"
															data-kt-customer-table-filter="delete_row">Bloquear</a>
														@else
														
														<a href="{{url('/usuario/desbloquear/'.$item->id)}}" class="menu-link px-3"
															data-kt-customer-table-filter="delete_row">Desbloquear</a>
														@endif
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->

											<!--begin::Modal - modificar usuarios-->
											<div class="modal fade" id="moraModificarUsuario{{$item->id}}" tabindex="-1" aria-hidden="true">
												<!--begin::Modal dialog-->
												<div class="modal-dialog modal-dialog-centered mw-650px">
													<!--begin::Modal content-->
													<div class="modal-content">
														<!--begin::Form-->
														<form class="form" action="{{route("registro.usuario")}}" id="modadRegistraUsuarios_form" method="POST">
															@csrf
															<!--begin::Modal header-->
															<div class="modal-header" id="modadRegistraUsuarios_header">
																<!--begin::Modal title-->
																<h2>Modificar Usuario</h2>
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
																<div class="scroll-y me-n7 pe-7" id="modadRegistraUsuarios_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#modadRegistraUsuarios_header" data-kt-scroll-wrappers="#modadRegistraUsuarios_scroll" data-kt-scroll-offset="300px">
																	<!--begin::Notice-->
																	<!--begin::Notice-->
																	
																	<!--end::Notice-->
																	<!--end::Notice-->
																	<!--begin::Input group-->
																	<div class="d-flex flex-column mb-5 fv-row">
																		<!--begin::Label-->
																		<label class="required fs-5 fw-bold mb-2">Nombres</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input  type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre" name="txtnombre" required value="{{$item->Nombres}}" />
																		<!--end::Input-->
																	</div> 
																	<div class="row mb-5">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-bold mb-2">Paterno</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="txtpaterno" value="{{$item->Paterno}}" required  />
																			<!--end::Input-->
																		</div> 
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--end::Label-->
																			<label class="required fs-5 fw-bold mb-2">Materno</label>
																			<!--end::Label-->
																			<!--end::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="txtmaterno" value="{{$item->Materno}}" required  />
																			<!--end::Input-->
																		</div> 
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	
																	<div class="row mb-5">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<!--begin::Label-->
																			<label class="required fs-5 fw-bold mb-2">C.I.</label>
																			<!--end::Label-->
																			<!--begin::Input-->
																			<input type="text" class="form-control form-control-solid" placeholder="" name="txtci" value="{{$item->Ci}}" required  />
																			<!--end::Input-->
																		</div> 
																		<!--end::Col-->
																		<!--begin::Col-->
																		
																			<div class="col-md-6 fv-row">
																				<label class="required fs-6 fw-bold mb-2">Expedido</label>
																				<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtexpedido" required >
																					<option value="" >Seleccione...</option>
																					<option value="LP"{{$item->Expedido=='LP'?'selected':''}}>La paz</option>
																					<option value="SCZ"{{$item->Expedido=='SCZ'?'selected':''}}>Santa Cruz</option>
																					<option value="CO"{{$item->Expedido=='CO'?'selected':''}}>Cochabamba</option>
																					<option value="OR"{{$item->Expedido=='OR'?'selected':''}}>Oruro</option>
																					<option value="PO"{{$item->Expedido=='PO'?'selected':''}}>Potosí</option>
																					<option value="TJ"{{$item->Expedido=='TJ'?'selected':''}}>Tarija</option>
																					<option value="CH"{{$item->Expedido=='CH'?'selected':''}}>Chuquisaca</option>
																					<option value="BE"{{$item->Expedido=='BE'?'selected':''}}>Beni</option>
																					<option value="PA"{{$item->Expedido=='PA'?'selected':''}}>Pando</option>
																				</select>
																			</div>
																		<!--end::Col-->
																	</div>
																	<div class="d-flex flex-column mb-5 fv-row">
																		<!--begin::Label-->
																		<label class="required fs-5 fw-bold mb-2">Celular</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input  type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre" name="txtcelular"   id="txtcelular" value="{{$item->Celular}}"  required />
																		<!--end::I requirednput-->
																	</div>
																	<div class="d-flex flex-column mb-5 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Genero</label>
																		<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtgenero" required >
																			<option value="" >Seleccione...</option>
																			<option value="F" {{$item->Genero=='F'?'selected':''}}>Femenino</option>
																			<option value="M" {{$item->Genero=='M'?'selected':''}}>Masculino</option>
																	</select>
																	</div>
																	<!--end::Input group-->
																	<div class="col-md-6 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Cargo</label>
																		<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtcargo" required >
																			<option value="" >Seleccione...</option>
																			<option value="Administrador" {{$item->Cargo=='Administrador'?'selected':''}}>Administrador</option>
																			<option value="Coordinador" {{$item->Cargo=='Coordinador'?'selected':''}}>Coordinador</option>
																			<option value="Tecnico" {{$item->Cargo=='Tecnico'?'selected':''}}>Tecnico</option>
																	
																		</select>
																
																	
																</div>
																	<!--begin::Input group-->
																	<div class="d-flex flex-column mb-5 fv-row">
																		<label class="required fs-6 fw-bold mb-2">Responsable de</label>
																				<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." name="txtlugarDesignado" required >
																					<option value="" >Seleccione...</option>
																					<option value="1" {{$item->Lugar_Designado=='1'?'selected':''}}>Distrito 1</option> 
																					<option value="2" {{$item->Lugar_Designado=='2'?'selected':''}}>Distrito 2</option> 
																					<option value="3" {{$item->Lugar_Designado=='3'?'selected':''}}>Distrito 3</option> 
																					<option value="4" {{$item->Lugar_Designado=='4'?'selected':''}}>Distrito 4</option> 
																					<option value="5" {{$item->Lugar_Designado=='5'?'selected':''}}>Distrito 5</option> 
																					<option value="6" {{$item->Lugar_Designado=='6'?'selected':''}}>Distrito 6</option> 
																					<option value="7" {{$item->Lugar_Designado=='7'?'selected':''}}>Distrito 7</option> 
																					<option value="8" {{$item->Lugar_Designado=='8'?'selected':''}}>Distrito 8</option> 
																					<option value="9" {{$item->Lugar_Designado=='9'?'selected':''}}>Distrito 9</option> 
																					<option value="10" {{$item->Lugar_Designado=='10'?'selected':''}}>Distrito 10</option> 
																					<option value="11" {{$item->Lugar_Designado=='11'?'selected':''}}>Distrito 11</option> 
																					<option value="12" {{$item->Lugar_Designado=='12'?'selected':''}}>Distrito 12</option> 
																					<option value="13" {{$item->Lugar_Designado=='13'?'selected':''}}>Distrito 13</option> 
																					<option value="14" {{$item->Lugar_Designado=='14'?'selected':''}}>Distrito 14</option> 
																					<option value="Alcaldia" {{$item->Lugar_Designado=='Alcaldia'?'selected':''}}>Alcaldia</option> 
																				</select>
																	</div>
																	<!--end::Input group-->
																	
																	
																</div>
																<!--end::Scroll-->
															</div>
															<!--end::Modal body-->
															<!--begin::Modal footer-->
															<div class="modal-footer flex-center">
																<!--begin::Button-->
																<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
																<!--end::Button-->
																<!--begin::Button-->
																<button type="submit" id="modadRegistraUsuarios_submit" class="btn btn-primary">
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
											<!--end::Modal - modificar usuarios-->	
										</tr>
										@endforeach

									</tbody>
								</table>
							

							</div>
							{{-- endtabla proyecto almacen --}}

							
							
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