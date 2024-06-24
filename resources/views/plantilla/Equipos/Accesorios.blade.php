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
							<h1>Lista de Accesorios</h1>
							@include('layout.notificacioncrud')
							{{-- <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#Modalregistrarlistaaccesorios">Agregar Usuario</button> --}}
							{{-- modal de registro  lista de accesorios  --}}	
							{{-- <div class="modal fade" id="Modalregistrarlistaaccesorios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Accesorio</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<form action="{{route('registro.accesorios')}}" method="POST">
											@csrf
										<div class="mb-3">
											<label for="txtnombre">Nombre del Accesorio</label>
											<input type="text" id="txtnombre" name="txtnombre" required>
										</div>
										<div class="modal-footer">
														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
														<button type="submit" class="btn btn-primary">Registrar</button>
										</div>

									</form>
									</div>
								</div>
								</div>
							</div> --}}
							<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#modalRegistroAccesorios">Agregar Componente</a>

							<div class="modal fade" id="modalRegistroAccesorios" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header" id="kt_modal_create_api_key_header">
											<!--begin::Modal title-->
											<h2>Componentes</h2>
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
										<!--begin::Form-->
										<form id="formaccesorios" class="form" action="{{route('registro.accesorios')}}" method="POST">
											@csrf
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Scroll-->
												<div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
													<!--begin::Notice-->
													
													<!--begin::Input group-->
													<div class="mb-5 fv-row">
														<!--begin::Label-->
														<label class="required fs-5 fw-bold mb-2">Registrar Nuevo Accesorio</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre del componente" name="txtnombre" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													
													
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
												<button type="submit" class="btn btn-primary">Registrar</button>

												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
										
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<?php
							$num=1;
							?>
							

								
							<table id="tablaaccesorios" class="table">
								<thead class="">

									<tr>
										<th scope="col" >Nro</th>
										<th scope="col" >Nombre Accesorio</th>
										<th scope="col" >Action</th>
									</tr>
								</thead>
								<tbody>

								
								@foreach ($accesorio as $item)
								<tr>
									<td ><?php echo $num?></td>
									<td>{{$item->Nombre_Item}}</td>
									
									{{-- esta parte es el nuevocodigo --}}
									<td class="text-end">
										<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Action
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
										<span class="svg-icon svg-icon-5 m-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" data-bs-toggle="modal" data-bs-target="#modalModificarAccesorios{{$item->id}}" class="menu-link px-3">Editar</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="{{route('eliminar.accesorios',$item->id)}}" class="menu-link px-3" onclick="return res() " data-kt-customer-table-filter="delete_row">Delete</a>
											</div>
											<!--end::Menu item-->
										</div>
										</td>

									<?php 
									$num++
									?>
										{{-- modal de modificar datos --}}	
										<div class="modal fade" id="Modaleditarlistaaccesorios{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
												<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Accesorio</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<form action="{{route('editar.accesorios')}}" method="POST">
														@csrf
													<div class="mb-3">
														
														<input type="text" id="txtid" name="txtid" value="{{$item->id}}" readonly style="display:none">
													</div>
													<div class="mb-3">
														<label for="txtnombre">Nombre del Accesorio</label>
														<input type="text" id="txtnombre" name="txtnombre" value="{{$item->Nombre_Item}}" required>
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

										<div class="modal fade" id="modalModificarAccesorios{{$item->id}}" tabindex="-1" aria-hidden="true">
											<!--begin::Modal dialog-->
											<div class="modal-dialog modal-dialog-centered mw-650px">
												<!--begin::Modal content-->
												<div class="modal-content">
													<!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_create_api_key_header">
														<!--begin::Modal title-->
														<h2>Componentes</h2>
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
													<!--begin::Form-->
													<form  class="form" action="{{route('editar.accesorios')}}" method="POST">
														@csrf
														<!--begin::Modal body-->
														<div class="modal-body py-10 px-lg-17">
															<!--begin::Scroll-->
															<div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
																<!--begin::Notice-->
																
																<!--begin::Input group-->
																<div class="mb-5 fv-row">
																	<!--begin::Label-->
																	<input type="text" name="txtid" id="txtid" value="{{$item->id}}" style="display: none;">

																	<label class="required fs-5 fw-bold mb-2">Accesorio</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control form-control-solid" placeholder="Ingrese el Nombre del componente" name="txtnombre" value="{{$item->Nombre_Item}}"  required/>
																	<!--end::Input-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																
																
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
															<button type="submit" id="kt_modal_create_api_key_submit" class="btn btn-primary">
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
												<!--end::Modal content-->
											</div>
											<!--end::Modal dialog-->
										</div>
									</tr>
									@endforeach
								</tbody>
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