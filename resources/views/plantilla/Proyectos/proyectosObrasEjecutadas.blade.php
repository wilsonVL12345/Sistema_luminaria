@extends('layout.index')

@section('contenido')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Informacion Proyectos Finalizados con Exito</h1>
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				{{-- <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
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
				</ul> --}}
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
						{{-- <div class="margin">
						
							<h1>Proyectos Finalizados Almacen</h1>
							@include('layout.notificacioncrud')
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
									<th>Fecha de Ejecucion</th>
									<th>Tipo de Componentes</th>
									<th>Ejecutado Por</th>
									<th>Detalles</th>
									<th>Ejecutar</th>
								</tr>
								@foreach ($proyectoObras as $item)
									<tr>
										<td><?php echo $con;?></td>
										<td>{{$item->Cuce_Cod}}</td>
										<td>{{$item->distrito->Distrito}}</td>
										<td>{{$item->Zona}}</td>
										<td>{{$item->Fecha_Ejecutada}}</td>
										<td>{{$item->Tipo_Componentes}}</td>
										<td>{{$item->Ejecutado_Por}}</td>
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
						
						</div> --}}
						<div class="margin">
							<div class="card card-p-0 card-flush">
								<div class="card-header align-items-center py-5 gap-2 gap-md-5">
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1">
											<span class="svg-icon fs-1 position-absolute ms-4">...</span>
											<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Report" />
										</div>
										<!--end::Search-->
										<!--begin::Export buttons-->
										<div id="kt_datatable_example_1_export" class="d-none"></div>
										<!--end::Export buttons-->
									</div>
									<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
										<!--begin::Export dropdown-->
										<button type="button" class="btn btn-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											<i class="ki-duotone ki-exit-down fs-2"><span class="path1"></span><span class="path2"></span></i>
											Export Report
										</button>
										<!--begin::Menu-->
										<div id="kt_datatable_example_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-4" data-kt-menu="true">
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
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-export="csv">
												Export as CSV
												</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-export="pdf">
												Export as PDF
												</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
										<!--end::Export dropdown-->
							
										<!--begin::Hide default export buttons-->
										<div id="kt_datatable_example_buttons" class="d-none"></div>
										<!--end::Hide default export buttons-->
									</div>
								</div>
								<div class="card-body">
									<table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="tablaEjecutado">
										<thead>
											<!--begin::Table row-->
											<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase">
												
												<th class="min-w-100px">Cuce</th>
												<th class="min-w-100px">Distrito</th>
												<th class="min-w-100px">Urbanizacion </th>
												<th class="min-w-100px">Fecha</th>
												<th class="min-w-100px">Tipo de Componentes</th>
												<th class="min-w-100px">Ejecutado Por </th>
												<th class="min-w-100px">Detalles</th>
												<th class="min-w-100px">Actividad</th>
											</tr>
											<!--end::Table row-->
										</thead>
										<tbody class="fw-semibold text-gray-600">
											@foreach ($proyectoObras as $item)
											<tr class="text-start text-gray-500 fw-bold fs-7">
												<td>
													<a href="#" class="text-gray-900 text-hover-primary">{{$item->Cuce_Cod}}</a>
												</td>
												<td>
													<a href="#" class="text-gray-900 text-hover-primary">{{$item->distrito->Distrito}}</a>
												</td>
												<td>
													<div class="text-gray-900 text-hover-primary">{{$item->Zona}}</div>
												</td>
												<td>
													<a href="#" class="text-gray-900 text-hover-primary">{{$item->Fecha_Ejecutada}}</a>
												</td>
												<td>
													<a href="#" class="text-gray-900 text-hover-primary">{{$item->Tipo_Componentes}}</a>
												</td>
												<td>
													<div class="text-gray-900 text-hover-primary">{{$item->Ejecutado_Por}}</div>
												</td><td>
													<a href="#" class="text-gray-900 text-hover-primary"><i class="fa-regular fa-eye"></i></a>
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
														<a href="{{url('/datos/ejecutar/'.$item->id)}}" 
															class="menu-link px-3">Instalar</a>
													</div>
													<div class="menu-item px-3">
														<a href="#" data-bs-toggle="modal" data-bs-target="#moraModificarUsuario{{$item->id}}"
															class="menu-link px-3">Editar</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														
														<a href="{{url('/usuario/bloquear/'.$item->id) }}" class="menu-link px-3"
															data-kt-customer-table-filter="delete_row">Eliminar</a>
														
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu-->
											</td>
											<!--end::Action=-->
												
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
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