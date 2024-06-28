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
													<!--begin::Container toda la parte de  la lista necesaria-->
						<div id="kt_content_container" class="container-xxl">
							<!--begin::Card-->
							<div>
								@include('layout.notificacioncrud')
							</div>
							<div class="card">
								<!--begin::Card header-->
								<div class="card-header border-0 pt-6">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="col-md-6 fv-row">
											<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="sldistrito" id="sldistrito" required>
														<option value="">Seleccionar Distrito</option>
														@foreach ($distrito as $itemd)
														<option value="{{$itemd->id}}">{{$itemd->Distrito}}</option>
															
														@endforeach
											</select>
										</div>
										<div class="d-flex align-items-center position-relative my-1">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
														height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
														fill="currentColor" />
													<path
														d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-customer-table-filter="search"
												class="form-control form-control-solid w-250px ps-15"
												placeholder="Search Customers" />
										</div>
										<!--end::Search-->
									</div>
									<!--begin::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Toolbar-->
										<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
											
											
											<!--end::Filter-->
											<!--begin::Export-->
											<button type="button" class="btn btn-light-primary me-3"
												data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.3" x="12.75" y="4.25" width="12" height="2"
															rx="1" transform="rotate(90 12.75 4.25)"
															fill="currentColor" />
														<path
															d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
															fill="currentColor" />
														<path
															d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
															fill="#C4C4C4" />
													</svg>
												</span>
												<!--end::Svg Icon-->Export</button>
											<!--end::Export-->
											<!--begin::Add customer-->
											<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalRegistroUrbanizacion">Agregar Nuevo</button>
											<!--end::Add customer-->

										</div>
										<!--end::Toolbar-->
										<!--begin::Group actions-->
										<div class="d-flex justify-content-end align-items-center d-none"
											data-kt-customer-table-toolbar="selected">
											<div class="fw-bolder me-5">
												<span class="me-2"
													data-kt-customer-table-select="selected_count"></span>Selected
											</div>
											<button type="button" class="btn btn-danger"
												data-kt-customer-table-select="delete_selected">Delete Selected</button>
										</div>
										<!--end::Group actions-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Table-->
									<table class="table align-middle table-row-dashed fs-6 gy-5"
										id="tablaUrbanicazionFiltrada">
										<!--begin::Table head-->
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
												<th class="w-10px pe-2">
													<div
														class="form-check form-check-sm form-check-custom form-check-solid me-3">
														<input class="form-check-input" type="checkbox"
															data-kt-check="true"
															data-kt-check-target="#kt_customers_table .form-check-input"
															value="1" />
													</div>
												</th>
												<th class="min-w-125px">Distrito</th>
												<th class="min-w-125px">Urbanizacion</th>
												<th class="min-w-125px"></th>
												<th class="min-w-125px">Latitud</th>
												<th class="min-w-125px">Longitud</th>
												<th class="text-end min-w-70px">Actions</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<tbody class="fw-bold text-gray-600">
										</tbody>
										<!--end::Table head-->
										<!--begin::Table body-->
										{{-- <tbody class="fw-bold text-gray-600">
											@foreach ($todoUrban as $itemurb)
												
											
											<tr>
												<!--begin::Checkbox-->
												<td>
													<div
														class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="1" />
													</div>
												</td>
												<!--end::Checkbox-->
												<!--begin::Name=-->
												<td>
													<a href="#"
														class="text-gray-800 text-hover-primary mb-1">{{$itemurb->Nrodistrito}}</a>
												</td>
												<!--end::Name=-->
												<!--begin::Email=-->
												<td>
													<a href="#"
														class="text-gray-600 text-hover-primary mb-1">{{$itemurb->nombre_urbanizacion}}</a>
												</td>
												<!--end::Email=-->
												<!--begin::Company=-->
												<td>
													<a href="#"
														class="text-gray-600 text-hover-primary mb-1" ></a>
												
												</td>
												<!--end::Company=-->
												<!--begin::Payment method=-->
												<td data-filter="">
													<a href="#"
														class="text-gray-600 text-hover-primary mb-1">{{$itemurb->lng}}</a>
												
												</td>
												<!--end::Payment method=-->
												<!--begin::Date=-->
												<td>
													<a href="#"
														class="text-gray-600 text-hover-primary mb-1">{{$itemurb->lat}}</a>
												
												</td>
												<!--end::Date=-->
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
															<a href="#"
															data-bs-toggle="modal" data-bs-target="#modalmodificarUrbanizacion{{$itemurb->id}}"	class="menu-link px-3">Editar</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="#" class="menu-link px-3"
																data-kt-customer-table-filter="delete_row">Delete</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu-->
												</td>
												<!--end::Action=-->
												<!-- Modal para Modificar distritos-->
															<!--begin::Modal -modificar urbanizacion-->
															<div class="modal fade" id="modalmodificarUrbanizacion{{$itemurb->id}}" tabindex="-1" aria-hidden="true">
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
																							<input type="text" id="txtid" name="txtid" value="{{$itemurb->id}}" readonly style="display: none;" >
																							<label class="required fs-6 fw-bold mb-2">Distrito</label>
																							<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtdistritom" id="txtdistritom">
																										<option value="">Seleccione...</option>
																										<option value="1"{{$itemurb->Nrodistrito== '1' ? 'selected' : ''}}> 1</option> 
																										<option value="2"{{$itemurb->Nrodistrito== '2' ? 'selected' : ''}}> 2</option> 
																										<option value="3"{{$itemurb->Nrodistrito== '3' ? 'selected' : ''}}> 3</option> 
																										<option value="4"{{$itemurb->Nrodistrito== '4' ? 'selected' : ''}}> 4</option> 
																										<option value="5"{{$itemurb->Nrodistrito== '5' ? 'selected' : ''}}> 5</option> 
																										<option value="6"{{$itemurb->Nrodistrito== '6' ? 'selected' : ''}}> 6</option> 
																										<option value="7"{{$itemurb->Nrodistrito== '7' ? 'selected' : ''}}> 7</option> 
																										<option value="8"{{$itemurb->Nrodistrito== '8' ? 'selected' : ''}}> 8</option> 
																										<option value="9"{{$itemurb->Nrodistrito== '9' ? 'selected' : ''}}> 9</option> 
																										<option value="10"{{$itemurb->Nrodistrito== '10' ? 'selected' : ''}}> 10</option> 
																										<option value="11"{{$itemurb->Nrodistrito== '11' ? 'selected' : ''}}> 11</option> 
																										<option value="12"{{$itemurb->Nrodistrito== '12' ? 'selected' : ''}}> 12</option> 
																										<option value="13"{{$itemurb->Nrodistrito== '13' ? 'selected' : ''}}> 13</option> 
																										<option value="14"{{$itemurb->Nrodistrito== '14' ? 'selected' : ''}}> 14</option> 
																							</select>
																						</div>
																						<!--end::Col-->
																						
																					</div>
																					<!--end::Input group-->
																				
																					<!--begin::Input group-->
																					<div class="d-flex flex-column mb-5 fv-row">
																						<!--begin::Label-->
																						<label class="required fs-5 fw-bold mb-2">Urbanizacion</label>
																						<!--end::Label-->
																						<!--begin::Input-->
																						<input class="form-control form-control-solid" placeholder="" name="txtzonaUrbanizacionm" value="{{$itemurb->nombre_urbanizacion}}"  required/>
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
															<!--end::Modal -modificar urbanizacion-->
												
											</tr>
											
											
											@endforeach
										</tbody> --}}
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Modals-->
														<!-- Modal para el registro de distritos-->
														
														<!-- Modal para el registro de distritos-->
														<!--begin::Modal -registro urbanizacion-->
														<div class="modal fade" id="modalRegistroUrbanizacion" tabindex="-1" aria-hidden="true">
															<!--begin::Modal dialog-->
															<div class="modal-dialog modal-dialog-centered mw-650px">
																<!--begin::Modal content-->
																<div class="modal-content">
																	<!--begin::Form-->
																	<form class="form" action="{{route('registro.distrito')}}" id="formregistroUrbanizacion" method="POST">
																		@csrf
																		<!--begin::Modal header-->
																		<div class="modal-header" id="kt_modal_new_address_header">
																			<!--begin::Modal title-->
																			<h2>Registrar Nueva Urbanizacion</h2>
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
																				
																				<!--end::Notice-->
																				<!--end::Notice-->
																				<!--begin::Input group-->
																				<div class="row mb-5">
																					<!--begin::Col-->
																					<div class="col-md-6 fv-row">
																						<label class="required fs-6 fw-bold mb-2">Distrito</label>
																						<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtdistrit" id="txtdistrit" required>
																									<option value="">Seleccione...</option>
																									@foreach ($distrito as $itemd)
																									<option value="{{$itemd->id}}">{{$itemd->Distrito}}</option>
																										
																									@endforeach
																						</select>
																					</div>
																					<!--end::Col-->
																					
																				</div>
																				<!--end::Input group-->
																			
																				<!--begin::Input group-->
																				<div class="d-flex flex-column mb-5 fv-row">
																					<!--begin::Label-->
																					<label class="required fs-5 fw-bold mb-2">Urbanizacion</label>
																					<!--end::Label-->
																					<!--begin::Input-->
																					<input type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre de la Urbanizacion" name="txtzonaUrba" id="txtzonaUrba" required/>
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
														<!--end::Modal -registro urbanizacion-->
							<!--begin::Modal - Adjust Balance-->
							<div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Export Customers</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div id="kt_customers_export_close"
												class="btn btn-icon btn-sm btn-active-icon-primary">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
															rx="1" transform="rotate(-45 6 17.3137)"
															fill="currentColor" />
														<rect x="7.41422" y="6" width="16" height="2" rx="1"
															transform="rotate(45 7.41422 6)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_customers_export_form" class="form" action="#">
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="fs-5 fw-bold form-label mb-5">Select Export
														Format:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<select data-control="select2" data-placeholder="Select a format"
														data-hide-search="true" name="format"
														class="form-select form-select-solid">
														<option value="excell">Excel</option>
														<option value="pdf">PDF</option>
														<option value="cvs">CVS</option>
														<option value="zip">ZIP</option>
													</select>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-10">
													<!--begin::Label-->
													<label class="fs-5 fw-bold form-label mb-5">Select Date
														Range:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid"
														placeholder="Pick a date" name="date" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Row-->
												<div class="row fv-row mb-15">
													<!--begin::Label-->
													<label class="fs-5 fw-bold form-label mb-5">Payment Type:</label>
													<!--end::Label-->
													<!--begin::Radio group-->
													<div class="d-flex flex-column">
														<!--begin::Radio button-->
														<label
															class="form-check form-check-custom form-check-sm form-check-solid mb-3">
															<input class="form-check-input" type="checkbox" value="1"
																checked="checked" name="payment_type" />
															<span
																class="form-check-label text-gray-600 fw-bold">All</span>
														</label>
														<!--end::Radio button-->
														<!--begin::Radio button-->
														<label
															class="form-check form-check-custom form-check-sm form-check-solid mb-3">
															<input class="form-check-input" type="checkbox" value="2"
																checked="checked" name="payment_type" />
															<span
																class="form-check-label text-gray-600 fw-bold">Visa</span>
														</label>
														<!--end::Radio button-->
														<!--begin::Radio button-->
														<label
															class="form-check form-check-custom form-check-sm form-check-solid mb-3">
															<input class="form-check-input" type="checkbox" value="3"
																name="payment_type" />
															<span
																class="form-check-label text-gray-600 fw-bold">Mastercard</span>
														</label>
														<!--end::Radio button-->
														<!--begin::Radio button-->
														<label
															class="form-check form-check-custom form-check-sm form-check-solid">
															<input class="form-check-input" type="checkbox" value="4"
																name="payment_type" />
															<span
																class="form-check-label text-gray-600 fw-bold">American
																Express</span>
														</label>
														<!--end::Radio button-->
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Row-->
												<!--begin::Actions-->
												<div class="text-center">
													<button type="reset" id="kt_customers_export_cancel"
														class="btn btn-light me-3">Discard</button>
													<button type="submit" id="kt_customers_export_submit"
														class="btn btn-primary">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait...
															<span
																class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - New Card-->
							<!--end::Modals-->
						</div>
						<!--end::Container-->
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
								
							
@endsection