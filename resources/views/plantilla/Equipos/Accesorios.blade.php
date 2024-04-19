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
							<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#Modalregistrarlistaaccesorios">Agregar Usuario</button>
							{{-- modal de registro  lista de accesorios  --}}	
							<div class="modal fade" id="Modalregistrarlistaaccesorios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							</div>
							<?php
							$num=1;
							?>
							<table>
								<tr>
									<th>Nro</th>
									<th>Nombre Accesorio</th>
									<th>Accion</th>
								</tr>
								@foreach ($accesorio as $item)
								<tr>
									<td><?php echo $num?></td>
									<td>{{$item->Nombre_Item}}</td>
									<td>
										<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#Modaleditarlistaaccesorios{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
										<a href="{{route('eliminar.accesorios',$item->id)}}" class="btn btn-danger" onclick="return res()"><i class="fa-solid fa-delete-left"></i></a>
									</td>
									<?php 
									$num++
									?>
										{{-- modal de modificar dator --}}	
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
														<label for="txtid">ID</label>
														<input type="text" id="txtid" name="txtid" value="{{$item->id}}" readonly>
													</div>
													<div class="mb-3">
														<label for="txtnombre">Nombre del Accesorio</label>
														<input type="text" id="txtnombre" name="txtnombre" value="{{$item->Nombre_Item}}">
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