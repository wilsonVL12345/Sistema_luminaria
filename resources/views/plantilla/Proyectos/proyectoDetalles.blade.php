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
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Almacen</h1>
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
                            <form action="{{route('registro.almacen')}}" id="formproyecto" method="POST" >
                                @csrf
                                <label for="txtcod">Cod Proyecto</label>
                                <input type="text" name="txtcods" id="txtcod" value="{{$proyec->Cuce_Cod}}" readonly> 
                                <label for="txtzona">zona</label>
                                <input type="text" name="txtzona" id="txtzona" value="{{$proyec->Zona}}" readonly >
                                <label for="txtcontratacion">Tipo de Contratacion</label>
                                <input type="text" name="txtcontratacion" id="txtcontratacion" value="{{$proyec->Tipo_Contratacion}}" readonly >
                                <br>
                                <label for="txtestado">Estado</label>
                                <input type="text" name="txtestado" id="txtestado" value="{{$proyec->Estado}}" readonly >
                                <label for="txtsubasta">Subasta</label>
                                <input type="text" name="txtsubasta" id="txtsubasta" value="{{$proyec->Subasta}}" readonly >
                                <label for="txtmodalidad">Modalidad</label>
                                <input type="text" name="txtmodalidad" id="txtmodalidad" value="{{$proyec->Modalidad}}" readonly >
                                <br>
                                <label for="txtobjeto">Objeto de Contratacion</label>
                                <input type="text" name="txtobjeto" id="txtobjeto" value="{{$proyec->Objeto_Contratacion}}" readonly >
                                <label for="txtcomponentes">Tipo de Componentes</label>
                                <input type="text" name="txtcomponentes" id="txtcomponentes" value="{{$proyec->Tipo_Componentes}}" readonly >
								<br>
                                <label for="txtfecha">Fecha Programada</label>
                                <input type="text" name="txtfecha" id="txtfecha" value="{{$proyec->Fecha_Programada}}" readonly >
                            </form>
								
							<h1>Proyectos Detalles Componentes</h1>
							<h3>luminarias Reutilizadas</h3>
							<?php
							$con=1;
							?>
                         
                         @if (!$reutilizada->isEmpty())
							<table >
								<tr>
									<th>Nro</th>
									<th>Nombre</th>
									<th>Cantidad</th>
									<th>Disponibles</th>
									<th>Observaciones</th>
								</tr>
                                    @foreach ($reutilizada as $item)
									<tr>
										<td><?php echo $con;?></td>
										<td>{{$item->Nombre_Item}}</td>
										<td>{{$item->Cantidad}}</td>
										<td>{{$item->Disponibles}}</td>
										<td>{{$item->Observaciones}}</td>
                                        
									</tr>
									<?php $con++;?>
                                    @endforeach
                                </table>
                            
                            @else
                                <h5>No hay luminarias Reutilizadas</h5>
                            @endif
                               
							<h3>Accesorios</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$accesorios->isEmpty())
                            <table >
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre Item</th>
                                    <th>Cantidad</th>
                                    <th>Utilizados</th>
                                    <th>Disponibles</th>
                                    <th>Observaciones</th>
                                </tr>
                                @foreach ($accesorios as $itemacc)
                                <tr>
                                    <td><?php echo $con;?></td>
                                    <td>{{$itemacc->Lista_accesorio->Nombre_Item}}</td>
                                    <td>{{$itemacc->Cantidad}}</td>
                                    <td>{{$itemacc->Utilizados}}</td>
                                    <td>{{$itemacc->Disponibles}}</td>
                                    <td>{{$itemacc->Observaciones}}</td>
                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                            @else
                            <h5>No hay Accesorios en este Proyecto</h5>
                        @endif
                            <h3>Luminarias LED</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$luminaria->isEmpty())
                            <table >
                                <tr>
                                    <th>Nro</th>
                                    <th>Cod_Luminaria Item</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Potencia</th>
                                
                                </tr>
                                @foreach ($luminaria as $itemlum)
                                <tr>
                                    <td><?php echo $con;?></td>
                                    <td>{{$itemlum->Cod_Luminaria}}</td>
                                    <td>{{$itemlum->Marca}}</td>
                                    <td>{{$itemlum->Modelo}}</td>
                                    <td>{{$itemlum->Potencia}}</td>
                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                            @else
                            <h5>No hay luminarias LED en este Proyecto</h5>
                        @endif
							
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