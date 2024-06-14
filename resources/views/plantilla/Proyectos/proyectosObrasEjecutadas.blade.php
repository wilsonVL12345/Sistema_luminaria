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