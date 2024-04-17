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
						<h1>Detalles Equipamientos</h1>
						<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#Modalregistrar">Agregar Usuario</button>
					
						
						<?php
						$num=1;
						?>
						<table>
							<tr>
								<th>Nro</th>
								<th>Nombre Item</th>
								<th>Descripcion</th>
								<th>Estado</th>
								<th>Distrito</th>
							</tr>
							@foreach ($equipos as $item)
							<tr>
								<td><?php echo $num?></td>
								<td>{{$item->Nombre_Item}}</td>
								<td>{{$item->Descripcion}}</td>
								<td>{{$item->estado}}</td>
								<td>{{$item->distrito->Distrito}}</td>
								<td>
									<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="fa-solid fa-pen-to-square"></i></a>
									<a href="" class="btn btn-danger"><i class="fa-solid fa-user-pen"></i></a>
								</td>
								<?php 
								$num++
								?>
								@endforeach
							
							</tr>
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