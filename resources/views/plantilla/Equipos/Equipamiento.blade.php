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
			<!--begin::Navbar-->
			<div class="card mb-5 mb-xl-10">
				<div class="card-body pt-9 pb-0">
					<div class="margin">
						<h1>Detalles Equipamientos</h1>
						@include('../layout.notificacioncrud')
						<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalregistrarEquipamiento">Agregar Nuevo </button>
							{{-- modal de registro de equipamiento  --}}	
						<div class="modal fade" id="ModalregistrarEquipamiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Equipamiento</h1>
												
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="{{route("registro.equipamiento")}}" method="POST">
										@csrf
										<div class="mb-3">
										  <label for="txtnombre" class="form-label">Nombre Item</label>
										  <input type="text" class="form-control" id="txtnombre" aria-describedby="emailHelp" name="txtnombre">
										</div>
										<div class="mb-3">
										  <label for="txtdescripcion" class="form-label">Descripcion</label>
										  <input type="text" class="form-control" id="txtdescripcion" aria-describedby="emailHelp" name="txtdescripcion">
										</div>
										
											<label for="txtestado">Estado</label>
											<select type="text" name="txtestado" id="txtestado" >
												<option value="">Seleccione</option>
												<option value="Bueno">Bueno </option>
												<option value="Regular">Regular </option>
												<option value="Bueno ">Bueno </option>
												<option value="En Mantenimiento">En Mantenimiento</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="txtdistrito" class="form-label">Distrito</label>
											<select name="txtdistrito" id="txtdistrito">
												<option value="">Seleccione</option>
												@foreach ($lista as $ite)
												<option value="{{$ite->id}}">{{$ite->Distrito}}</option>
												@endforeach
											</select>
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
									<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalModificarEquipamiento{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
									<a href="" class="btn btn-danger"><i class="fa-solid fa-user-pen"></i></a>
								</td>
								<?php 
								$num++
								?>

								{{-- modal de modificar de equipamiento  --}}	
						<div class="modal fade" id="ModalModificarEquipamiento{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Equipamiento</h1>
												
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="{{route("editar.equipamiento")}}" method="POST">
										@csrf
										<div class="mb-3">
											<label for="txtid" class="form-label">ID</label>
											<input type="text" class="form-control" id="txtid" aria-describedby="emailHelp" name="txtid" value="{{$item->id}}" readonly>
										  </div>
										<div class="mb-3">
										  <label for="txtnombre" class="form-label">Nombre Item</label>
										  <input type="text" class="form-control" id="txtnombre" aria-describedby="emailHelp" name="txtnombre" value="{{$item->Nombre_Item}}" >
										</div>
										<div class="mb-3">
										  <label for="txtdescripcion" class="form-label">Descripcion</label>
										  <input type="text" class="form-control" id="txtdescripcion" aria-describedby="emailHelp" name="txtdescripcion" value="{{$item->Descripcion}}">
										</div>
										
											<label for="txtestado">Estado</label>
											<select type="text" name="txtestado"  id="txtestado" >
												<option value="">Seleccione</option>
												<option value="Malo"{{$item->estado == 'Malo' ? 'selected' : ''}}>Bueno </option>
												<option value="Regular"{{$item->estado == 'Regular' ? 'selected' : ''}}>Regular </option>
												<option value="Bueno"{{$item->estado == 'Bueno' ? 'selected' : ''}}>Bueno </option>
												<option value="En Mantenimiento"{{$item->estado == 'En Mantenimiento' ? 'selected' : ''}}>En Mantenimiento</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="txtdistrito" class="form-label">Distrito</label>
											<select name="txtdistrito" id="txtdistrito" >
												<option value="">Seleccione</option>
												@foreach ($lista as $ite)
												<option value="{{$ite->id}}" {{$ite->Distrito == $item->distrito->Distrito ? 'selected' : ''}}>{{$ite->Distrito}}</option>

												@endforeach
											</select>
										</div>
										
										<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
										<button type="submit" class="btn btn-primary">Modificar</button>
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