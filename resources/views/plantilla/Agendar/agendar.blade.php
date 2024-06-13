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
							@include('layout.notificacioncrud')
						
								<div class="modal-body">
									<form action="{{route('agendar.trabajo')}}" method="POST" enctype="multipart/form-data">
										@csrf

									<div class="mb-3">
										<label for="txtdistirto">Distrito</label>
										<select name="txtdistirto" id="txtdistirto">
											<option value="" disabled selected >Seleccion</option>
											@foreach ($listadistrito as $item)
											<option value="{{$item->id}}">{{$item->Distrito}}</option>
											@endforeach
										</select>
									</div>
									<div class="mb-3">
										<label for="txtzonaurb">Zona/Urbanizacion</label>
										<select name="txtzonaurb" id="txtzonaurb">
											<option value="" disabled selected >Seleccione</option>
											@foreach ($listazonaurb as $ite)
												<option value="{{$ite->Zona_Urbanizacion}}">{{$ite->Zona_Urbanizacion}}</option>
											@endforeach
										</select>
									</div>
									<div class="mb-3">
										<label for="txtnrosisco">Nro Sisco</label>
										<input type="text" id="txtnrosisco" name="txtnrosisco">
									</div>
									<div class="mb-3">
										<label for="txtfechainiciop">Fecha y Hora de Inicio</label>
										<input type="datetime-local" id="txtfechainiciop" name="txtfechainiciop">
									</div>
									<div class="mb-3">
										<label for="txtfechafinp">Fecha y Hora de Finalizacion</label>
										<input type="datetime-local" id="txtfechafinp" name="txtfechafinp">
									</div>
									<div class="col-md-6">
										<label for="">Tipo de Trabajo a realizar</label>
										<div class="custom-select" id="multiple-select">
											<div class="selected-options" id="selected-options">
												<!-- Opciones seleccionadas aparecerán aquí -->
											</div>
											<input type="text" id="states" placeholder="Seleccione..." >
											<ul class="options-list" id="options-list"  >
												<li onclick="selectOption('Mantenimiento'); seleccion('Mantenimiento');" >Mantenimiento</li>
												<li onclick="selectOption('Instalacion'); seleccion ('Instalacion');">Instalacion</li>
												<li onclick="selectOption('Apoyo Carro Canasta'); seleccion ('Apoyo');" >Apoyo Carro Canasta</li>
											</ul>
										</div>
										<!-- Campo oculto para almacenar los valores seleccionados -->
										<input type="hidden" name="selectedStates" id="selectedStates">
									</div>
									<!-- Campo adicional que aparecerá cuando se seleccione "Apoyo Carro Canasta" -->
									<div class="col-md-6" id="apoyo-distrito" style="display: none;">
										<label for="txtapoyo">Apoyo a Distrito</label>
										<select name="" id="txtapoyo">
											<option value="">Seleccione.</option>
											@foreach ($listadistrito as $itemd)
											<option value="{{$itemd->Distrito}}">{{$itemd->Distrito}}</option>
											@endforeach
										</select>
									</div>
									
									<div class="mb-3">
										<label for="imgcarta">Carta</label>
										<br>
										<input type="file" id="imgcarta" name="imgcarta" accept="image/*">
										@error('imgcarta')
											<small class="text-danger">{{$message}}</small>
										@enderror
									</div>
									<div class="mb-3">
										<label for="rnotificar">Notificar</label>
										<input type="checkbox" name="rnotificar" id="rnotificar">
									</div>
									<div class="mb-3">
										<label for="txtobservacion">Observaciones</label>
										<br>
										<textarea name="txtobservacion" id="txtobservacion" cols="40" rows="5"></textarea>
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