@extends('layout.index')

@section('contenido')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<div class="toolbar" id="kt_toolbar">
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Luminarias Retiradas</h1>
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
						<h1>Detalles Luminarias Retiradas</h1>
						@include('layout.notificacioncrud')
						<!-- Button trigger modal -->
						<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalregistro">
							Registrar Luminarias Retiradas
						</button>
						{{-- Modal para el registro de nuevas luminarias retiradas --}}
					
					<!-- Modal -->
					<div class="modal fade" id="modalregistro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Luminaria Retirada</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>

							<div class="modal-body">
								<form  action="{{route('registro.retirados')}}" id="form1" method="POST">
									@csrf
									<div class="mb-3">
									  <label for="txtdistrito" class="form-label">Distrito</label>
									  <select type="text" id="txtdistrito" name="txtdistrito" class="form-select" required>
										  <option value="" disabled selected >Seleccione</option>
											@foreach ($listadistritos as $item)
												<option value="{{$item->id}}">{{$item->Distrito}}</option>		
											@endforeach		
									  </select>
									</div>
									<div class="mb-3">
										<label for="txtzona" class="form-label">Zona</label>
										<select type="text" id="txtzona" name="txtzona" class="form-select" required>
											<option value="" disabled selected >Seleccione</option>
											@foreach ($listazona as $ite)
											<option value="{{$ite->Zona_Urbanizacion}}">{{$ite->Zona_Urbanizacion}}</option>
												
											@endforeach	
										</select>
									</div>
									<div class="mb-3">
									  <label for="txtnrosisco" class="form-label">Nro Sisco</label>
									  <input type="text" class="form-control" name="txtnrosisco" id="txtnrosisco" required>
									</div>
									
									<div class="mb-3">
										<label for="txtfechamante" class="form-label">Fecha de Mantenimiento</label>
										<input type="date" class="form-control" name="txtfechamante" id="txtfechamante" required>
									</div>
									<div class="mb-3">
										<label for="txtproyecto" class="form-label">Proyecto</label>
										<input type="text" class="form-control" name="txtproyecto" id="txtproyecto" required>
									</div>
									<div class="mb-3">
										<label for="txtdireccion" class="form-label">Direccion</label>
										<input type="text" class="form-control" name="txtdireccion" id="txtdireccion" required>
									</div>										
									  {{-- la parte de la lista de componentes  --}}

										  <h1>Componentes Retirados</h1>
										<div class="mb-3">
											<label for="txtitem" class="form-label">Nombre Item</label>
											<select type="text" id="txtitem" name="campoitem[0][txtitem]" class="form-select" required>
												<option value="" disabled selected >Seleccione</option>
												@foreach ($accesorios as $ite)
												<option value="{{$ite->Nombre_Item}}">{{$ite->Nombre_Item}}</option>
												@endforeach	
											</select>
										</div>
										<div class="mb-3">
											<label for="txtreutilizables" class="form-label">Reutilizables</label>
											<input type="number" id="txtreutilizables" name="camporeutilizables[0][txtreutilizables]" required>
										</div>
										<div class="mb-3">
											<label for="txtnoreutilizables" class="form-label">No Reutilizables</label>
											<input type="number" id="txtnoreutilizables" name="camponoreutilizables[0][txtnoreutilizables]" required>
										</div>
										<div class="mb-3">
											<label for="txtobservaciones" class="form-label">Observaciones</label>
											<input type="text" id="txtobservaciones" name="campoobservaciones[0][txtobservaciones]" placeholder="ninguna">
										</div>

										<button type="button" onclick="agregarLuminaria()">Agregar Componentes Retirados</button> <br>
										<button type="submit" >guardar accesorios</button>
										
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
								<th>Distrito</th>
								<th>Zona</th>
								<th>Fecha Mantenimiento</th>
								<th>Numero  Sisco</th>
								<th>Datos</th>
							</tr>
							@foreach ($datosluminaria as $item)
							<tr>
									<td><?php echo $num?></td>
									<td>{{$item->distrito->Distrito}}</td>
									<td>{{$item->zona}}</td>
									<td>{{$item->Fecha}}</td>
									<td>{{$item->Nro_sisco}}</td>
									<td>
										<button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->id}}"> mostrar</button>
									</td>

										
										<!-- Modal -->
										<div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
												<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div>
														<div class="mb-3">
														<label for="txtdistrito">Distrito</label>
														<input type="text" name="txtdistrito" value="{{$item->distrito->Distrito}}" readonly>
														</div>
														<div class="mb-3">
														<label for="txtzona">Zona</label>
														<input type="text" name="txtzona" value="{{$item->zona}}" readonly>
														</div>
														<div class="mb-3">
														<label for="txtsisco">Sisco</label>
														<input type="text" name="txtsisco" value="{{$item->Nro_sisco}}" readonly>
														</div>
														<div class="mb-3">
															<label for="txtfecha">Fecha</label>
															<input type="date" name="txtfecha" value="{{$item->Fecha}}" readonly>
														</div>
														<div class="mb-3">
															<label for="txtproyecto">Proyecto</label>
															<input type="text" name="txtproyecto" value="{{$item->Proyecto}}" readonly>
														</div>
														<div class="mb-3">
															<label for="txtdireccion">Direccion</label>
															<input type="text" name="txtdireccion" value="{{$item->Direccion}}" readonly>
														</div>
														
													</div>
													
															
														
													
												</div>
												<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
												<button type="button" class="btn btn-primary">Save changes</button>
												</div>
											</div>
											</div>
										</div>
							</tr>

								<?php  $num++ ?>
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