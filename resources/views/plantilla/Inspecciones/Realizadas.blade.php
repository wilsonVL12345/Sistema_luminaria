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
											<!--begin::Filter-->
											{{-- <button type="button" class="btn btn-light-primary me-3"
												data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
												<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
												<span class="svg-icon svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
														viewBox="0 0 24 24" fill="none">
														<path
															d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->Filter</button>
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px"
												data-kt-menu="true" id="kt-toolbar-filter">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-4 text-dark fw-bolder">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Separator-->
												<!--begin::Content-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fs-5 fw-bold mb-3">Month:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<select class="form-select form-select-solid fw-bolder"
															data-kt-select2="true" data-placeholder="Select option"
															data-allow-clear="true"
															data-kt-customer-table-filter="month"
															data-dropdown-parent="#kt-toolbar-filter">
															<option></option>
															<option value="aug">August</option>
															<option value="sep">September</option>
															<option value="oct">October</option>
															<option value="nov">November</option>
															<option value="dec">December</option>
														</select>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fs-5 fw-bold mb-3">Payment
															Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex flex-column flex-wrap fw-bold"
															data-kt-customer-table-filter="payment_type">
															<!--begin::Option-->
															<label
																class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
																<input class="form-check-input" type="radio"
																	name="payment_type" value="all" checked="checked" />
																<span class="form-check-label text-gray-600">All</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label
																class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
																<input class="form-check-input" type="radio"
																	name="payment_type" value="visa" />
																<span class="form-check-label text-gray-600">Visa</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label
																class="form-check form-check-sm form-check-custom form-check-solid mb-3">
																<input class="form-check-input" type="radio"
																	name="payment_type" value="mastercard" />
																<span
																	class="form-check-label text-gray-600">Mastercard</span>
															</label>
															<!--end::Option-->
															<!--begin::Option-->
															<label
																class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="radio"
																	name="payment_type" value="american_express" />
																<span class="form-check-label text-gray-600">American
																	Express</span>
															</label>
															<!--end::Option-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset"
															class="btn btn-light btn-active-light-primary me-2"
															data-kt-menu-dismiss="true"
															data-kt-customer-table-filter="reset">Reset</button>
														<button type="submit" class="btn btn-primary"
															data-kt-menu-dismiss="true"
															data-kt-customer-table-filter="filter">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Content-->
											</div> --}}
											<!--end::Menu 1-->
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
										id="kt_customers_table">
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
												<th class="min-w-125px">Nro Sisco</th>
												<th class="min-w-125px">Zona/Urb</th>
												<th class="min-w-125px">Distrito</th>
												<th class="min-w-125px">Carta</th>
												<th class="min-w-125px">Tipo de Inspeccion</th>
												<th class="min-w-125px">Estado</th>
												<th class="min-w-125px">Inspector</th>
												<th class="min-w-125px">Fecha Inspeccionada</th>
												<th class="text-end min-w-70px">Actividad</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody class="fw-bold text-gray-600">
											@foreach ($inspeccion as $item)
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
														class="text-gray-800 text-hover-primary mb-1">{{$item->Nro_Sisco}}</a>
												</td>
												<!--end::Name=-->
												<!--begin::Email=-->
												<td>
													<a href="#"
														class="text-gray-600 text-hover-primary mb-1">{{$item->ZonaUrbanizacion}}
													</a>
												</td>
												<!--end::Email=-->
												<!--begin::Company=-->
												<td>
													<a href="#"
													class="text-gray-600 text-hover-primary mb-1">{{$item->distrito->Distrito}}
													</a>												
												</td>
												<!--end::Company=-->
												<!--begin::Payment method=-->
												<td data-filter="mastercard">
													<a href="#" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalMostrarImagen{{$item->id}}"><i class="fa-solid fa-image"></i></a>
												</td>
												<td>
													<a href="#"
													class="text-gray-600 text-hover-primary mb-1">{{$item->Tipo_Inspeccion}}
													</a>												
												</td>
												<td>
													<a href="#"
													class="text-gray-600 text-hover-primary mb-1">{{$item->Estado}}
													</a>												
												</td>
												<td>
													<a href="#"
													class="text-gray-600 text-hover-primary mb-1">{{$item->Inspector}}
													</a>												
												</td>
												<!--end::Payment method=-->
												<!--begin::Date=-->
												<td>
													<a href="#"
													class="text-gray-600 text-hover-primary mb-1">{{$item->Fecha_Inspeccion}}
													</a>	
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
															<a href="#" data-bs-toggle="modal" data-bs-target="#modalModificarInspeccion{{$item->id}}"
																class="menu-link px-3">Editar</a>
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
												{{-- modal para  mostrar la carta de cada  inspeccion --}}
												<!--begin::Modal -imagen carta-->
												<div class="modal fade" id="modalMostrarImagen{{$item->id}}" tabindex="-1" aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog mw-700px">
														<!--begin::Modal content-->
														<div class="modal-content">
															<!--begin::Modal header-->
															<div class="modal-header pb-0 border-0 d-flex justify-content-end">
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
															<div class="modal-body scroll-y mx-5 mx-xl-10 pt-0 pb-15">
																<!--begin::Heading-->
																<div class="text-center mb-13">
																	<!--begin::Title-->
																	<h1 class="d-flex justify-content-center align-items-center mb-3">Visualizacion de la Carta Emviada
																	</h1>
																	<!--end::Title-->
																	<!--begin::Description-->
																	
																	<!--end::Description-->
																</div>
																<!--end::Heading-->
																<!--begin::Users-->
																<div class="mh-475px scroll-y me-n7 pe-7">
																	<img src="{{$item->Foto_Carta}}" class="img-fluid" alt="Descripción de la Carta Emviada">
																</div>
																<!--end::Users-->
															</div>
															<!--end::Modal Body-->
														</div>
														<!--end::Modal content-->
													</div>
													<!--end::Modal dialog-->
												</div>
												<!--end::Modal - imagen carta-->
												<!--begin::Modal - Modal para  modificar inspecciones en espera-->
												<div class="modal fade" id="modalModificarInspeccion{{$item->id}}" tabindex="-1" aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog modal-dialog-centered mw-650px">
														<!--begin::Modal content-->
														<div class="modal-content rounded">
															<!--begin::Modal header-->
															<div class="modal-header pb-0 border-0 justify-content-end">
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
															<!--begin::Modal header-->
															<!--begin::Modal body-->
															<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
																<!--begin:Form-->
																<form id="kt_modal_new_target_form" class="form" action="{{route('editar.inspeccionespera')}}" method="POST" enctype="multipart/form-data">
																	@csrf
																	<!--begin::Heading-->
																	<div class="mb-13 text-center">
																		<!--begin::Title-->
																		<h1 class="mb-3">Modificar Inspeccion</h1>
																		<!--end::Title-->
																		<!--begin::Description-->
																		<div class="text-muted fw-bold fs-5">Ingresar  Zona o Urbanizacion a Inspeccionar
																		</div>
																		<!--end::Description-->
																	</div>
																	<!--end::Heading-->
																	<!--begin::Input group-->
																	<div>
																		<input type="text" id="txtid" name="txtid" style="display: none;" value="{{$item->id}}"> 
																	</div>
																	<div class="d-flex flex-column mb-8 fv-row">
																		<!--begin::Label-->
																		<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																			<span class="required">Nro Sisco</span>
																			<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Nro sisco es un numero unico de cada trabajo"></i>
																		</label>
																		<!--end::Label-->
																		<input type="text" class="form-control form-control-solid" placeholder="Ingrese Numero Sisco" name="txtsisco" id="txtsisco" value="{{$item->Nro_Sisco}}" required/>
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="row g-9 mb-8">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<label class="required fs-6 fw-bold mb-2">Distrito</label>
																			<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtdistrito" id="txtdistrito" required>
																				<option value="" disabled selected >Seleccione...</option>
																				@foreach ($listadistrito as $ite)
																				<option value="{{$ite->id}}" {{$ite->id == $item->Distritos_id ? 'selected' : ''}}>
																					{{$ite->Distrito}}
																				</option>
																			@endforeach
																			</select>
																		</div>
																		<div class="col-md-6 fv-row">
																			<label class="required fs-6 fw-bold mb-2">Zona/Urbanizacion</label>
																			<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtzurb" id="txtzurb" required>
																				<option value="" disabled selected >Seleccione...</option>
																				@foreach ($listazonaurb as $it)
																				<option value="{{$it->Zona_Urbanizacion}}" {{$it->Zona_Urbanizacion==$item->ZonaUrbanizacion ? 'selected':''}}>
																					{{$it->Zona_Urbanizacion}}
																				</option>
																				@endforeach
																			</select>
																		</div>
						
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="row g-9 mb-8">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<label class="required fs-6 fw-bold mb-2">Foto de la Carta</label>
																			<input type="file" id="imgcarta"  name="imgcarta" accept="image/*" class="form-control">
																			@error('imgcarta')
																				<small class="text-danger">{{$message}}</small>
																			@enderror
																		</div>
																		
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<label class="required fs-6 fw-bold mb-2">Fecha de Inspeccion</label>
																			<!--begin::Input-->
																			<div class="position-relative d-flex align-items-center">
																				<!--begin::Icon-->
																				<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																				<span class="svg-icon svg-icon-2 position-absolute mx-4">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																						<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																						<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																				<!--end::Icon-->
																				<!--begin::Datepicker-->
																				<input id="txtfecha"  type="date" class="form-control form-control-solid ps-12" placeholder="Seleccionar Fecha" name="txtfecha" value="{{$item->Fecha_Inspeccion}}"  required/>
																				<!--end::Datepicker-->
																			</div>
																			<!--end::Input-->
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	
						
																	
																	<!--begin::Actions-->
																	<div class="text-center">
																		<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
																		<button type="submit" class="btn btn-primary">Registrar</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end:Form-->
															</div>
															<!--end::Modal body-->
														</div>
														<!--end::Modal content-->
													</div>
													<!--end::Modal dialog-->
												</div>
												<!--end::Modal - Modal para  modificar inspecciones en espera-->
												<!--begin::Modal -Empezar inspeccion-->
												{{-- <div class="modal fade" id="modalEmpezarInspeccion{{$item->id}}" tabindex="-1" aria-hidden="true">
													<!--begin::Modal dialog-->
													<div class="modal-dialog modal-dialog-centered mw-650px">
														<!--begin::Modal content-->
														<div class="modal-content rounded">
															<!--begin::Modal header-->
															<div class="modal-header pb-0 border-0 justify-content-end">
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
															<!--begin::Modal header-->
															<!--begin::Modal body-->
															<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
																<!--begin:Form-->
																<form id="kt_modal_new_target_form" class="form" action="#">
																	<!--begin::Heading-->
																	<div class="mb-13 text-center">
																		<!--begin::Title-->
																		<h1 class="mb-3">Set First Target</h1>
																		<!--end::Title-->
																		<!--begin::Description-->
																		<div class="text-muted fw-bold fs-5">If you need more info, please check
																		<a href="#" class="fw-bolder link-primary">Project Guidelines</a>.</div>
																		<!--end::Description-->
																	</div>
																	<!--end::Heading-->
																	<!--begin::Input group-->
																	<div class="d-flex flex-column mb-8 fv-row">
																		<!--begin::Label-->
																		<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																			<span class="required">Target Title</span>
																			<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
																		</label>
																		<!--end::Label-->
																		<input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title" />
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="row g-9 mb-8">
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<label class="required fs-6 fw-bold mb-2">Assign</label>
																			<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
																				<option value="">Select user...</option>
																				<option value="1">Karina Clark</option>
																				<option value="2">Robert Doe</option>
																				<option value="3">Niel Owen</option>
																				<option value="4">Olivia Wild</option>
																				<option value="5">Sean Bean</option>
																			</select>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="col-md-6 fv-row">
																			<label class="required fs-6 fw-bold mb-2">Due Date</label>
																			<!--begin::Input-->
																			<div class="position-relative d-flex align-items-center">
																				<!--begin::Icon-->
																				<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																				<span class="svg-icon svg-icon-2 position-absolute mx-4">
																					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																						<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																						<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																				<!--end::Icon-->
																				<!--begin::Datepicker-->
																				<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" />
																				<!--end::Datepicker-->
																			</div>
																			<!--end::Input-->
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="d-flex flex-column mb-8">
																		<label class="fs-6 fw-bold mb-2">Target Details</label>
																		<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details"></textarea>
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="d-flex flex-column mb-8 fv-row">
																		<!--begin::Label-->
																		<label class="d-flex align-items-center fs-6 fw-bold mb-2">
																			<span class="required">Tags</span>
																			<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target priorty"></i>
																		</label>
																		<!--end::Label-->
																		<input class="form-control form-control-solid" value="Important, Urgent" name="tags" />
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="d-flex flex-stack mb-8">
																		<!--begin::Label-->
																		<div class="me-5">
																			<label class="fs-6 fw-bold">Adding Users by Team Members</label>
																			<div class="fs-7 fw-bold text-muted">If you need more info, please check budget planning</div>
																		</div>
																		<!--end::Label-->
																		<!--begin::Switch-->
																		<label class="form-check form-switch form-check-custom form-check-solid">
																			<input class="form-check-input" type="checkbox" value="1" checked="checked" />
																			<span class="form-check-label fw-bold text-muted">Allowed</span>
																		</label>
																		<!--end::Switch-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="mb-15 fv-row">
																		<!--begin::Wrapper-->
																		<div class="d-flex flex-stack">
																			<!--begin::Label-->
																			<div class="fw-bold me-5">
																				<label class="fs-6">Notifications</label>
																				<div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
																			</div>
																			<!--end::Label-->
																			<!--begin::Checkboxes-->
																			<div class="d-flex align-items-center">
																				<!--begin::Checkbox-->
																				<label class="form-check form-check-custom form-check-solid me-10">
																					<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked" />
																					<span class="form-check-label fw-bold">Email</span>
																				</label>
																				<!--end::Checkbox-->
																				<!--begin::Checkbox-->
																				<label class="form-check form-check-custom form-check-solid">
																					<input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone" />
																					<span class="form-check-label fw-bold">Phone</span>
																				</label>
																				<!--end::Checkbox-->
																			</div>
																			<!--end::Checkboxes-->
																		</div>
																		<!--end::Wrapper-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Actions-->
																	<div class="text-center">
																		<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
																		<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
																			<span class="indicator-label">Submit</span>
																			<span class="indicator-progress">Please wait...
																			<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																		</button>
																	</div>
																	<!--end::Actions-->
																</form>
																<!--end:Form-->
															</div>
															<!--end::Modal body-->
														</div>
														<!--end::Modal content-->
													</div>
													<!--end::Modal dialog-->
												</div> --}}
												<!--end::Modal - Empezar inspeccion-->
											</tr>
											
											
										
											@endforeach
										</tbody>
										<!--end::Table body-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
							<!--begin::Modals-->
							<!--begin::Modal - Modal para  registrar inspecciones en espera-->
							{{-- <div class="modal fade" id="modalRegistroInspeccion" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content rounded">
										<!--begin::Modal header-->
										<div class="modal-header pb-0 border-0 justify-content-end">
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
										<!--begin::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
											<!--begin:Form-->
											<form id="kt_modal_new_target_form" class="form" action="{{route('registro.inspecciones')}}" method="POST" enctype="multipart/form-data">
												@csrf
												<!--begin::Heading-->
												<div class="mb-13 text-center">
													<!--begin::Title-->
													<h1 class="mb-3">Registrar Nueva Inspeccion</h1>
													<!--end::Title-->
													<!--begin::Description-->
													<div class="text-muted fw-bold fs-5">Ingresar  Zona o Urbanizacion a Inspeccionar
													</div>
													<!--end::Description-->
												</div>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-8 fv-row">
													<!--begin::Label-->
													<label class="d-flex align-items-center fs-6 fw-bold mb-2">
														<span class="required">Nro Sisco</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Nro sisco es un numero unico de cada trabajo"></i>
													</label>
													<!--end::Label-->
													<input type="text" class="form-control form-control-solid" placeholder="Ingrese Numero Sisco" name="txtnrosisco" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Distrito</label>
														<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtdistirto" id="txtdistirto">
															<option value="">Seleccione...</option>
															@foreach ($listadistrito as $item)
															<option value="{{$item->id}}">{{$item->Distrito}}</option>
															@endforeach
														</select>
													</div>
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Zona/Urbanizacion</label>
														<select class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtzonaurb" id="txtzonaurb">
															<option value=""  >Seleccione...</option>
															@foreach ($listazonaurb as $ite)
																<option value="{{$ite->Zona_Urbanizacion}}">{{$ite->Zona_Urbanizacion}}</option>
															@endforeach
														</select>
													</div>
	
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row g-9 mb-8">
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Foto de la Carta</label>
														<input type="file" id="imgcarta"  name="imgcarta" accept="image/*" class="form-control">
														@error('imgcarta')
															<small class="text-danger">{{$message}}</small>
														@enderror
													</div>
													
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 fv-row">
														<label class="required fs-6 fw-bold mb-2">Fecha de Inspeccion</label>
														<!--begin::Input-->
														<div class="position-relative d-flex align-items-center">
															<!--begin::Icon-->
															<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
															<span class="svg-icon svg-icon-2 position-absolute mx-4">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																	<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																	<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<!--end::Icon-->
															<!--begin::Datepicker-->
															<input id="txtfecha"  type="date" class="form-control form-control-solid ps-12" placeholder="Seleccionar Fecha" name="txtfecha" />
															<!--end::Datepicker-->
														</div>
														<!--end::Input-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												
	
												
												<!--begin::Actions-->
												<div class="text-center">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
													<button type="submit" class="btn btn-primary">Registrar</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end:Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div> --}}
							<!--end::Modal - Modal para  registrar inspecciones en espera-->
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
			{{-- <div class="card mb-5 mb-xl-10">
				<div class="card-body pt-9 pb-0">
					<h1>Agendar Trabajo</h1>
					<h4 class="a">dsfasfasdsdgsd</h4>
					</div>
				</div>
			</div> --}}
		
		
			
		
		</div>
		<!--end::Container-->
	</div> 
	
</div> 

@endsection

@section('contenido')
<div class="card mb-5 mb-xl-10">
	<div class="card-body pt-9 pb-0">
		<h1>Agendar Trabajo</h1>
		<h4 class="a">dsfasfasdsdgsd</h4>
		</div>
	</div>
	
</div>

@endsection

@section('css')
    <style>
        .a {
            background-color: red;
            color: green;
        }
    </style>
@endsection



