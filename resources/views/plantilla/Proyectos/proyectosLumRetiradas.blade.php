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
						<h1>Detalles Luminarias Retiradas</h1>
						{{-- Modal para el registro de nuevas luminarias retiradas --}}
						<!-- Button trigger modal -->
					<button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
						Registrar Luminarias Retiradas
					</button>
					
					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
							<h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Luminaria Retirada</h1>
							<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form>
									
									<div class="mb-3">
									  <label for="txtdistrito" class="form-label">Distrito</label>
									  <select name="text" id="txtdistrito" name="txtdistrito" class="form-select">
												<option value="" disabled selected >Seleccione</option>
									  </select>
									</div>
									<div class="mb-3">
										<label for="txtzona" class="form-label">Zona</label>
										<select name="text" id="txtzona" name="txtzona" class="form-select">

										</select>
									</div>
									  <div class="mb-3">
										<label for="txtfechamante" class="form-label">Fecha de Mantenimiento</label>
										<input type="date" class="form-control" name="txtfechamante" id="txtfechamante">
									  </div>
									  <div class="mb-3">
										<label for="txtnrosisco" class="form-label">Nro Sisco</label>
										<input type="text" class="form-control" name="txtnrosisco" id="txtnrosisco">
									  </div>
									  
									
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
										<button type="button" class="btn btn-primary">Registrar</button>
									</div>
								</form>
							</div>
						</div>
						</div>
					</div>
						
						<table>
							<tr>
								<th>Nro</th>
								<th>Distrito</th>
								<th>Zona</th>
								<th>Fecha Mantenimiento</th>
								<th>Nro Sisco</th>
								<th>Datos</th>
							</tr>

							<tr>

							</tr>
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