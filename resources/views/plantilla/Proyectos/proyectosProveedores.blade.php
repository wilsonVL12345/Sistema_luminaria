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
							<!-- Button trigger modal -->
								
								
								<!-- Modal -->
								<div class="modal fade" id="modaRegistroProveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proyecto</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form action="{{route('registro.proveedor')}}" id="formproyectoproveedor" method="POST" >
												@csrf
												<label for="txtproveedor">Nombre Proveedor</label>
												<input type="text" name="txtproveedor" id="txtproveedor" required>
												<br>
												<label for="txtdescripcion">Descripcion</label>
												<input type="area" name="txtdescripcion" id="txtdescripcion" required>
												<br>

												<br>
												
												<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
												<button type="submit" class="btn btn-primary">Registrar</button>
												</div>
											</form>
										</div>
									</div>
									</div>
								</div>
							<h1>Lista de Proveedoress</h1>
							@include('layout.notificacioncrud')

							<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modaRegistroProveedor" >Agregar Nuevo</button>
							<br>
							<?php
							$con=1;
							?>
							<table>
								<tr>
									<th>Nro</th>
									<th>Nombre De Proveedor</th>
									<th>Descripcion</th>
									<th>Cantidad </th>
									<th>Fecha</th>
									<th>Detalles</th>
									<th>Datos</th>
									
								</tr>
								@foreach ($proveedor as $item)
								<tr>
									<td><?php echo $con?></td>
									<td>{{$item->Nombre_de_Empresa}}</td>
									<td>{{$item->Descripcion}}</td>
									<td>{{$item->Cantidad}}</td>
									<td>{{$item->created_at->format('Y-m-d')}}</td>
									<td>
										<button class="btn btn-success">Mostrar</button>
									</td>
									<td>
										<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEditarProveedor{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>

									</td>
									{{-- modal para editar  proveedores --}}
									<div class="modal fade" id="ModalEditarProveedor{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Proyecto</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<form action="{{route('editar.proveedor')}}" id="formproyectoproveedor" method="POST" >
													@csrf
													<label for="txtid">Id proveedor</label>
													<input type="text" name="txtid" id="txtid" value="{{$item->id}}" readonly>
													<br>
													<br>
													<label for="txtproveedor">Nombre Proveedor</label>
													<input type="text" name="txtproveedor" id="txtproveedor" value="{{$item->Nombre_de_Empresa}}">
													<br>
													<label for="txtdescripcion">Descripcion</label>
													<input type="area" name="txtdescripcion" id="txtdescripcion" value="{{$item->Descripcion}}">
													<br>
	
													<br>
													
													<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
													<button type="submit" class="btn btn-primary">Guardar</button>
													</div>
												</form>
											</div>
										</div>
										</div>
									</div>
								</tr>
								<?php $con++; ?>
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