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
					<div class="card-body pt-9 pb-0">
						<div class="margin">
							<h1>Lista de Zonas y Urbanizaciones Inspeccionadas</h1>
							
							<br>
							<?php
							$con=1;
							?>
							<table>
								<tr>
									<th>Nro</th>
									<th>Distrito</th>
									<th>Zona</th>
									<th>Nro Sisco</th>
									<th>Tipo de Inspeccion</th>
									<th>Estado</th>
									<th>Fecha de Inspeccion</th>
									<th>Carta</th>
									<th>Inspector</th>
								</tr>
								@foreach ($inspeccion as $item)
								<tr>
									<td><?php echo $con?></td>
									<td>{{$item->distrito->Distrito}}</td>
									<td>{{$item->ZonaUrbanizacion}}</td>
									<td>{{$item->Nro_Sisco}}</td>
									<td>{{$item->Tipo_Inspeccion}}</td>
									<td>{{$item->Estado}}</td>
									<td>{{$item->Fecha_Inspeccion}}</td>
									<td>
										<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modaleditarlistaaccesorios{{$item->id}}"><i class="fa-solid fa-image"></i></a>
									</td>
									<td>{{$item->user->Nombres}}</td>
										
								</tr>
								<?php
								$con++;
								?>
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
	
</div> 
@endsection