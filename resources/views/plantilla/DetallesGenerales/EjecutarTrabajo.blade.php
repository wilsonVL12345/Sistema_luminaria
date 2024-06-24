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
                        <h2>Datos de Trabajo</h2>
                        <br>
						<form  id="formEjecutar" action="{{route('store.trabajo',$trabajo->id)}}" method="POST">
							@csrf
							<div class="mb-3">
								<label for="txtnrosisco">Nro Sisco</label>
								<input type="text" id="txtnrosisco" name="txtnrosisco" value="{{$trabajo->Nro_Sisco}}" readonly>
							</div>
							<div class="mb-3">
								<label for="txtz">Zona</label>
								<input type="text" id="txtz" name="txtz" value="{{$trabajo->Zona}}" readonly>
							</div>
							<div class="mb-3">
								<label for="txtcantidadlum">Cantidad de Puntos</label>
								<input type="text" id="txtcantidadlum" name="txtcantidadlum" required>
							</div>
								<div class="col-md-6">
									<label for="">Tipo de Luminarias</label>
									<div class="custom-select" id="multiple-select">
										<div class="selected-options" id="selected-options">
											<!-- Opciones seleccionadas aparecerán aquí -->
										</div>
										<input type="text" id="states" placeholder="Seleccione..." readonly >
										<ul class="options-list" id="options-list"  >
											<li onclick="selectOption('Luminarias LED')" >Luminarias LED</li>
											<li onclick="selectOption('Luminarias de Sodio')">Luminarias de Sodio</li>
										</ul>
									</div>
									<!-- Campo oculto para almacenar los valores seleccionados -->
									<input type="hidden" name="selectedStates" id="selectedStates">
								</div>
							<div class="mb-3">
								<label for="txtfechainicioej">Fecha y Hora de Inicio</label>
								<input type="datetime-local" id="txtfechainicioej" name="txtfechainicioej" required>
							</div>
							<div class="mb-3">
								<label for="txttechafinej">Fecha y Hora de Finalizacion</label>
								<input type="datetime-local" id="txttechafinej" name="txttechafinej" required>
							</div>
							<div class="mb-3">
								<button  type="button" id="btnmante" onclick="agrega()" >Componenetes Mante</button>
							</div>

							<div id="mantenimientoContainer">

							</div>
							<div class="mb-3">
								<label for="">Detalles u observaciones</label>
								<br>
								<textarea name="txtdetalles" id="txtdetalles" cols="40" rows="8"></textarea>
							</div>

							<button type="submit">Emviar</button>
										
						</form>


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