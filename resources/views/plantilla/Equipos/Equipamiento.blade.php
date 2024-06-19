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
						{{-- <button class="btn btn-success " data-bs-toggle="modal" data-bs-target="#ModalregistrarEquipamiento">Agregar Nuevo </button> --}}
						<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#modalregistroAccesorios">Agregar Nuevo</a>
						
						{{-- modal de registro de equipamiento  --}}	
						{{-- <div class="modal fade" id="ModalregistrarEquipamiento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
						</div> --}}
						<div class="modal fade" id="modalregistroAccesorios" tabindex="-1" aria-hidden="true">
							<!--begin::Modal dialog-->
							<div class="modal-dialog modal-dialog-centered mw-650px">
								<!--begin::Modal content-->
								<div class="modal-content">
									<!--begin::Modal header-->
									<div class="modal-header" id="kt_modal_create_api_key_header">
										<!--begin::Modal title-->
										<h2>Registrar Nuevo Equipamiento</h2>
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
									<form  class="form" action="{{route("registro.equipamiento")}}" method="POST">
										@csrf
										<!--begin::Modal body--> 
										<div class="modal-body py-10 px-lg-17">
											<!--begin::Scroll-->
											<div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_create_api_key_header" data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
												<!--begin::Notice-->
												
												<!--end::Notice-->
												<!--begin::Input group-->
												<div class="mb-5 fv-row">
													<!--begin::Label-->
													<label class="required fs-5 fw-bold mb-2">Nombre Item</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" placeholder="Nobre del Equipo" name="txtnombre"  required/>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="d-flex flex-column mb-5 fv-row">
													<!--begin::Label-->
													<label class="required fs-5 fw-bold mb-2">Descripcion</label>
													<!--end::Label-->
													<!--begin::Input-->
													<textarea class="form-control form-control-solid" rows="3" name="txtdescripcion" placeholder="Ingrese una pequeña Descripcion" required ></textarea >
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row g-9 mb-8">
													
												<div class="col-md-6 fv-row">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold mb-2">Estado</label>
													<!--end::Label-->
													<!--begin::Select-->
													<select class="form-control form-select-solid " data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." name="txtestado" required>
														<option value="">Seleccione...</option>
														<option value="Bueno">malo </option>
														<option value="Regular">Regular </option>
														<option value="Bueno">Bueno </option>
														<option value="En Mantenimiento">En Mantenimiento</option>
													</select>
													<!--end::Select-->
													
												</div>
												
												<div class="col-md-6 fv-row">
													<!--begin::Label-->
													<label class="required fs-5 fw-bold mb-2">Distrito</label>
													<!--end::Label-->
													<!--begin::Select-->
													<select name="txtdistrito" data-control="select2" data-hide-search="true" data-placeholder="Seleccione..." class="form-control form-select-solid" required>
														<option value="">Seleccione...</option>
														@foreach ($lista as $ite)
														<option value="{{$ite->id}}">{{$ite->Distrito}}</option>
														@endforeach
													</select>
													<!--end::Select-->
												</div>
											</div>
												
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
												<span class="indicator-label">Registrar</span>
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