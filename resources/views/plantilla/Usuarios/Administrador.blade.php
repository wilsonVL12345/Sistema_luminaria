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
						<h1>Detalles Administradores</h1>
						<button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#Modalregistrar">Agregar Usuario</button>
						{{-- modal de registro de usuario  --}}	
						<div class="modal fade" id="Modalregistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
								<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Nuevo Usuario</h1>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="{{route("registro.usuario")}}" method="POST">
										@csrf
										<div class="mb-3">
										  <label for="txtnombre" class="form-label">Nombre</label>
										  <input type="text" class="form-control" id="txtnombre" aria-describedby="emailHelp" name="txtnombre">
										</div>
										<div class="mb-3">
										  <label for="txtpaterno" class="form-label">Paterno</label>
										  <input type="text" class="form-control" id="txtpaterno" aria-describedby="emailHelp" name="txtpaterno">
										</div>
										<div class="mb-3">
											<label for="txtmaterno" class="form-label">Materno</label>
											<input type="text" class="form-control" id="txtmaterno" aria-describedby="emailHelp" name="txtmaterno">
										  </div>
										<div class="mb-3">
										  <label for="txtci" class="form-label">C.I.</label>
										  <input type="text" class="form-control" id="txtci" aria-describedby="emailHelp" name="txtci">
										</div>
										<div class="mb-3">
											<label for="txtexpedido">Expedido</label>
											<select type="text" name="txtexpedido" id="txtexpedido" >
												<option value="">Seleccione</option>
												<option value="LP">La paz</option>
												<option value="SCZ">Santa Cruz</option>
												<option value="CO">Cochabamba</option>
												<option value="OR">Oruro</option>
												<option value="PO">Potosí</option>
												<option value="TJ">Tarija</option>
												<option value="CH">Chuquisaca</option>
												<option value="BE">Beni</option>
												<option value="PA">Pando</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="txtcelular" class="form-label">Celular</label>
											<input type="text" class="form-control" id="txtcelular" aria-describedby="emailHelp" name="txtcelular">
										</div>
										<div class="mb-3">
											<label for="txtgenero" class="form-label">Genero</label>
											<select type="text" name="txtgenero" id="txtgenero">
												<option value="">Seleccion</option>
												<option value="F">Femenino</option>
												<option value="M">Masculino</option>

											</select>
										</div>
										<div class="mb-3">
											<label for="txtcargo" class="form-label">Cargo</label>
											<select type="text" name="txtcargo" id="txtcargo">
												<option value="">Seleccion</option>
												<option value="Administrador">Administrador</option>
												<option value="Jefatura">Jefatura</option>
												<option value="Especialista">Especialista</option>
											</select>
										</div>
										<div class="mb-3">
											<label for="txtlugarDesignado" class="form-label">Lugar Designado</label>
											<select type="text" name="txtlugarDesignado" id="txtlugarDesignado">
												<option value="">Seleccion</option>
												<option value="Distrito 1">Distrito 1</option> 
												<option value="Distrito 2">Distrito 2</option> 
												<option value="Distrito 3">Distrito 3</option> 
												<option value="Distrito 4">Distrito 4</option> 
												<option value="Distrito 5">Distrito 5</option> 
												<option value="Distrito 6">Distrito 6</option> 
												<option value="Distrito 7">Distrito 7</option> 
												<option value="Distrito 8">Distrito 8</option> 
												<option value="Distrito 9">Distrito 9</option> 
												<option value="Distrito 10">Distrito 10</option> 
												<option value="Distrito 11">Distrito 11</option> 
												<option value="Distrito 12">Distrito 12</option> 
												<option value="Distrito 13">Distrito 13</option> 
												<option value="Distrito 14">Distrito 14</option> 
												<option value="Alcaldia">Alcaldia</option> 

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
								<th>Nombre</th>
								<th>Paterno</th>
								<th>Materno</th>
								<th>C.I.</th>
								<th>Expedido</th>
								<th>Celular</th>
								<th>Genero</th>
								<th>Cargo</th>
								<th>Lugar Designado</th>
								<th>Estado</th>
								<th>Accion</th>
							</tr>
							@foreach ($user as $item)
							<tr>
								<td><?php echo $num?></td>
								<td>{{$item->Nombres}}</td>
								<td>{{$item->Paterno}}</td>
								<td>{{$item->Materno}}</td>
								<td>{{$item->Ci}}</td>
								<td>{{$item->Expedido}}</td>
								<td>{{$item->Celular}}</td>
								<td>{{$item->Genero}}</td>
								<td>{{$item->Cargo}}</td>
								<td>{{$item->Lugar_Designado}}</td>
								<td>{{$item->Estado}}</td>
								<td>
									<a href="" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#ModalEditar"><i class="fa-solid fa-pen-to-square"></i></a>
									<a href="" class="btn btn-danger"><i class="fa-solid fa-user-pen"></i></a>
								</td>
								<?php 
								$num++
								?>
								@endforeach
							{{-- modal de modificar dator --}}	
								<div class="modal fade" id="ModalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
										<h1 class="modal-title fs-5" id="exampleModalLabel">Modificar Datos de Usuario</h1>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<form>
												<div class="mb-3">
												  <label for="txtnombre" class="form-label">Nombre</label>
												  <input type="text" class="form-control" id="txtnombre" aria-describedby="emailHelp" name="txtnombre">
												</div>
												<div class="mb-3">
												  <label for="txtpaterno" class="form-label">Paterno</label>
												  <input type="text" class="form-control" id="txtpaterno" aria-describedby="emailHelp" name="txtpaterno">
												</div>
												<div class="mb-3">
													<label for="txtmaterno" class="form-label">Materno</label>
													<input type="text" class="form-control" id="txtmaterno" aria-describedby="emailHelp" name="txtmaterno">
												  </div>
												<div class="mb-3">
												  <label for="txtci" class="form-label">C.I.</label>
												  <input type="text" class="form-control" id="txtci" aria-describedby="emailHelp" name="txtci">
												</div>
												<div class="mb-3">
													<label for="txtexpedido">Expedido</label>
													<select type="text" name="txtexpedido" id="txtexpedido" >
														<option value="">Seleccione</option>
														<option value="LP">La paz</option>
														<option value="SCZ">Santa Cruz</option>
														<option value="CO">Cochabamba</option>
														<option value="OR">Oruro</option>
														<option value="PO">Potosí</option>
														<option value="TJ">Tarija</option>
														<option value="CH">Chuquisaca</option>
														<option value="BE">Beni</option>
														<option value="PA">Pando</option>
													</select>
												</div>
												<div class="mb-3">
													<label for="txtcelular" class="form-label">Celular</label>
													<input type="text" class="form-control" id="txtcelular" aria-describedby="emailHelp" name="txtcelular">
												</div>
												<div class="mb-3">
													<label for="txtgenero" class="form-label">Genero</label>
													<select type="text" name="txtgenero" id="txtgenero">
														<option value="">Seleccion</option>
														<option value="F">Femenino</option>
														<option value="M">Masculino</option>

													</select>
												</div>
												<div class="mb-3">
													<label for="txtcargo" class="form-label">Cargo</label>
													<select type="text" name="txtcargo" id="txtcargo">
														<option value="">Seleccion</option>
														<option value="Administrador">Administrador</option>
														<option value="Jefatura">Jefatura</option>
														<option value="Especialista">Especialista</option>
													</select>
												</div>
												<div class="mb-3">
													<label for="txtlugarDesignado" class="form-label">Lugar Designado</label>
													<select type="text" name="txtlugarDesignado" id="txtlugarDesignado">
														<option value="">Seleccion</option>
														<option value="Distrito 1">Distrito 1</option> 
														<option value="Distrito 2">Distrito 2</option> 
														<option value="Distrito 3">Distrito 3</option> 
														<option value="Distrito 4">Distrito 4</option> 
														<option value="Distrito 5">Distrito 5</option> 
														<option value="Distrito 6">Distrito 6</option> 
														<option value="Distrito 7">Distrito 7</option> 
														<option value="Distrito 8">Distrito 8</option> 
														<option value="Distrito 9">Distrito 9</option> 
														<option value="Distrito 10">Distrito 10</option> 
														<option value="Distrito 11">Distrito 11</option> 
														<option value="Distrito 12">Distrito 12</option> 
														<option value="Distrito 13">Distrito 13</option> 
														<option value="Distrito 14">Distrito 14</option> 
														<option value="Alcaldia">Alcaldia</option> 

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