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
                            <h1>Empezar la Instalacion</h1>
                            
                            <form action="{{route('registrar.trabajoejecutado',$ejecProyecto->id)}}" id="formEjecutarProy" method="POST" >
                                @csrf
                                <div class="from row">
                                    <div class="col-md-3 mb-3">   
                                        <label for="txtcod" class=" fs-5 fw-bold mb-2">Cod Proyecto</label>
                                        <input type="text" class="form-control form-control-solid " name="txtcods" id="txtcod" value="{{$ejecProyecto->Cuce_Cod}}" readonly> 
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="txtzona" class=" fs-5 fw-bold mb-2">Urbanizacion</label>
                                        <input type="text" class="form-control form-control-solid " name="txtzona"  value="{{$ejecProyecto->Zona}}" readonly> 
                                    </div>

                                    @if ($ejecProyecto->Ejecutado_Por)
                                    <div class="col-md-3 mb-3">
                                        <label for="txtejec" class=" fs-5 fw-bold mb-2">Ejecutado Por</label>
                                        <input type="text" class="form-control form-control-solid " value="{{$ejecProyecto->Ejecutado_Por}}">
                                    </div>
                                        @else   
                                    <div class="col-md-3 mb-3">
                                        <label for="txtejec" class=" fs-5 fw-bold mb-2">Ejecutado Por</label>
                                        <select name="txtejec" class="form-control form-select-solid" id="txtejec" data-control="select2" data-hide-search="true" data-placeholder="Selecione..." required>
                                            <option value="" disabled selected >Seleccione...</option>
                                            <option value="GAMEA">GAMEA</option>
                                            <option value="Externo">Externo</option>
                                        </select>
                                    </div>
                                    @endif

                                 </div>
                                 <div class="from row">
                                    <div class="col-md-8 mb-3">
                                        <label for="txtcomponentes" class=" fs-5 fw-bold mb-2">Tipo de Componentes</label>
                                        <input type="text" name="txtcomponentes" id="txttcomponentes" class="form-control form-control-solid " value="{{$ejecProyecto->Tipo_Componentes}}" readonly >
                                    </div>
                                    @if ($ejecProyecto->Fecha_Ejecutada)
                                    <div class="col-md-3 mb-3">
                                        <label for="txtfechaInst" class=" fs-5 fw-bold mb-2">Fecha de Instalacion</label>
                                        <input type="date" name="txtfechaInst" id="txtfechaInst" class="form-control form-control-solid " value="{{$ejecProyecto->Fecha_Ejecutada}}" readonly >
                                    </div>
                                    @else
                                        
                                    <div class="col-md-3 mb-3">
                                        <label for="txtfechaInst" class=" fs-5 fw-bold mb-2">Fecha de Instalacion</label>
                                        <input type="date" name="txtfechaInst" id="txtfechaInst" class="form-control form-control-solid " required >
                                    </div>
                                    @endif
                                </div>
                            {{-- </form> --}}
								
							<h1>luminarias Reacondicionadas</h1>
							<?php
							$con=1;
							?>
                         
                         @if (!$ejecReutilizados->isEmpty())
							<table class="table table-bordered" >
								<tr class="fw-bold fs-6 text-gray-800">
									<th style="font-weight: bold; text-transform: uppercase; ">Nro</th>
									<th style="font-weight: bold; text-transform: uppercase; ">Nombre</th>
									<th style="font-weight: bold; text-transform: uppercase; ">Cantidad</th>
									<th style="font-weight: bold; text-transform: uppercase; ">Utilizados</th>
									<th style="font-weight: bold; text-transform: uppercase; ">Disponibles</th>
									<th style="font-weight: bold; text-transform: uppercase; ">Utilizar</th>
									
								</tr>
                                    @foreach ($ejecReutilizados as $itemr)
									<tr>
										<td><?php echo $con;?></td>
										<td>{{$itemr->Nombre_Item}}</td>
										<td>{{$itemr->Cantidad}}</td>
										<td>{{$itemr->Utilizados}}</td>
										<td>{{$itemr->Disponibles}}</td>
                                        @if (!$itemr->Disponibles<=0)
                                            
										<td>
                                            <input type="number" name="utilizadosreu[{{$itemr->id}}]" id="" class="form-control form-control-solid ">
                                            
                                        </td>
                                        @else
                                        <td>
                                            <input type="text" value="No hay Disponible" readonly>
                                            
                                        </td>
                                        @endif
                                      
										
                                        
									</tr>
									<?php $con++;?>
                                    @endforeach
                                </table>
                                
                            @else
                                <h5 class="badge badge-light-danger">No hay luminarias Reutilizadas</h5>
                            @endif
                               
							<h3>Detalles de Accesorios</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$ejecAccesorios->isEmpty())
                            <table class="table table-bordered">
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th style="font-weight: bold; text-transform: uppercase; " >Nro</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Nombre Item</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Cantidad</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Utilizados</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Disponibles</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Utilizar</th>

                                </tr>
                                @foreach ($ejecAccesorios as $itemacc)
                                <tr>
                                    <td ><?php echo $cond;?></td>
                                    <td >{{$itemacc->Lista_accesorio->Nombre_Item}}</td>
                                    <td >{{$itemacc->Cantidad}}</td>
                                    <td >{{$itemacc->Utilizados}}</td>
                                    <td >{{$itemacc->Disponibles}}</td>
                                    {{-- <td>
                                        <input type="number" name="utilizadoacc[{{$itemacc->id}}]" id="" placeholder=0>
                                    </td> --}}
                                    @if (!$itemacc->Disponibles<=0)
                                            
                                    <td>
                                        <input type="number" name="utilizadoacc[{{$itemacc->id}}]" id="" class="form-control form-control-solid ">
                                        
                                    </td>
                                    @else
                                    <td>
                                        <input type="text" value="No hay Disponibles" readonly>
                                        
                                    </td>
                                    @endif

                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                            
                            @else
                            <h5 class="badge badge-light-danger">No hay Accesorios en este Proyecto</h5>
                        @endif
                            <h3>Detalles de Luminarias LED</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$ejecLuminarias->isEmpty())
                            <table class="table table-bordered" >
                                <tr class="fw-bold fs-6 text-gray-800">
                                    <th style="font-weight: bold; text-transform: uppercase; ">Nro</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Cod_Luminaria Item</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Modelo</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Marca</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Potencia</th>
                                    <th style="font-weight: bold; text-transform: uppercase; ">Instalado?</th>

                                </tr>
                                @foreach ($ejecLuminarias as $itemlum)
                                <tr>
                                    <td><?php echo $con;?></td>
                                    <td>{{$itemlum->Cod_Luminaria}}</td>
                                    <td>{{$itemlum->Marca}}</td>
                                    <td>{{$itemlum->Modelo}}</td>
                                    <td>{{$itemlum->Potencia}}</td>
                                    @if ($itemlum->Lugar_Instalado=='Si')
                                    <td>{{$itemlum->Lugar_Instalado}}</td>
                                        
                                    @else
                                    <td>
                                        <select name="lugarlum[{{$itemlum->id}}]" id="txtlugar" class="form-control form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Selecione...">
                                            <option value="" disabled selected >Seleccione...</option>
                                            <option value="Si"  >Si</option>
                                            <option value="No"  >No</option>
                                        </select>
                                    </td>
                                </tr>
                                    @endif
                                <?php $cond++;?>
                                @endforeach
                            </table>
                                   
                            @else
                            <h5 class="badge badge-light-danger">No hay luminarias LED en este Proyecto</h5>
                        @endif
                            <div class="modal-footer">
                               {{--  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button> --}}
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