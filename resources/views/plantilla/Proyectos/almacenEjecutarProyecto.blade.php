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
                                <label for="txtcod">Cod Proyecto</label>
                                <input type="text" name="txtcods" id="txtcod" value="{{$ejecProyecto->Cuce_Cod}}" readonly> 
                                <label for="txtzona">zona</label>
                                <input type="text" name="txtzona" id="txtzona" value="{{$ejecProyecto->Zona}}" readonly >
                                <label for="txtejec">Ejecutado Por</label>
                                <select name="txtejec" id="txtejec" required>
                                    <option value="" disabled selected >Seleccione...</option>
                                    <option value="GAMEA">GAMEA</option>
                                    <option value="Externo">Externo</option>
                                </select>

                                <br>
                               <br>
                                <label for="txtcomponentes">Tipo de Componentes</label>
                                <input type="text" name="txtcomponentes" id="txtcomponentes" size="30" value="{{$ejecProyecto->Tipo_Componentes}}" readonly >
                                <br>
                                <label for="txtfecha">Fecha de Instalacion</label>
                                <input type="date" name="txtfecha" id="txtfecha" required >
                            {{-- </form> --}}
								
							<h1>luminarias Reacondicionadas</h1>
							<?php
							$con=1;
							?>
                         
                         @if (!$ejecReutilizados->isEmpty())
							<table >
								<tr>
									<th>Nro</th>
									<th>Nombre</th>
									<th>Cantidad</th>
									<th>Disponibles</th>
									<th>Utilizados</th>
									
								</tr>
                                    @foreach ($ejecReutilizados as $itemr)
									<tr>
										<td><?php echo $con;?></td>
										<td>{{$itemr->Nombre_Item}}</td>
										<td>{{$itemr->Cantidad}}</td>
										<td>{{$itemr->Disponibles}}</td>
										<td>
                                            <input type="number" name="utilizadosreu[{{$itemr->id}}]" id="">
                                            
                                        </td>
										
                                        
									</tr>
									<?php $con++;?>
                                    @endforeach
                                </table>
                                
                            @else
                                <h5>No hay luminarias Reutilizadas</h5>
                            @endif
                               
							<h3>Detalles de Accesorios</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$ejecAccesorios->isEmpty())
                            <table >
                                <tr>
                                    <th>Nro</th>
                                    <th>Nombre Item</th>
                                    <th>Cantidad</th>
                                    <th>Utilizados</th>
                                    <th>Disponibles</th>
                                    <th>Observaciones</th>
                                    <th>Usar</th>

                                </tr>
                                @foreach ($ejecAccesorios as $itemacc)
                                <tr>
                                    <td><?php echo $cond;?></td>
                                    <td>{{$itemacc->Lista_accesorio->Nombre_Item}}</td>
                                    <td>{{$itemacc->Cantidad}}</td>
                                    <td>{{$itemacc->Utilizados}}</td>
                                    <td>{{$itemacc->Disponibles}}</td>
                                    <td>{{$itemacc->Observaciones}}</td>
                                    <td>
                                        <input type="number" name="utilizadoacc[{{$itemacc->id}}]" id="" placeholder=0>
                                    </td>

                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                            
                            @else
                            <h5>No hay Accesorios en este Proyecto</h5>
                        @endif
                            <h3>Detalles de Luminarias LED</h3>
                            <?php
							$cond=1;
							?>
                             @if (!$ejecLuminarias->isEmpty())
                            <table >
                                <tr>
                                    <th>Nro</th>
                                    <th>Cod_Luminaria Item</th>
                                    <th>Modelo</th>
                                    <th>Marca</th>
                                    <th>Potencia</th>
                                    <th>Lugar a Instalar</th>

                                </tr>
                                @foreach ($ejecLuminarias as $itemlum)
                                <tr>
                                    <td><?php echo $con;?></td>
                                    <td>{{$itemlum->Cod_Luminaria}}</td>
                                    <td>{{$itemlum->Marca}}</td>
                                    <td>{{$itemlum->Modelo}}</td>
                                    <td>{{$itemlum->Potencia}}</td>
                                    <td>
                                        <select name="lugarlum[$itemlum->id]" id="txtlugar">
                                            <option value="" disabled selected >Seleccione...</option>
                                            @foreach ($calleAv as $itemlum)
                                            <option value="{{$itemlum->Calle_Avenida}}">{{$itemlum->Calle_Avenida}}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <?php $cond++;?>
                                @endforeach
                            </table>
                                   
                            @else
                            <h5>No hay luminarias LED en este Proyecto</h5>
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