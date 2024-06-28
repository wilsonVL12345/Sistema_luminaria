{{-- estaba comentado  --}}
 <!-- jQuery -->
<cript src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    

<!-- Select2 JS -->        
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
 <script>
    $(document).ready(function() {
    $('.select-team-member').select2();    
    });
</script> 
<script>
    $(document).ready(function() {
    $('select[name="country"]').select2({
        dropdownParent: $('#kt_modal_add_customer')
    });
});
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}


<script>var hostUrl = "{{ asset('assets/') }}";</script>
<!-- Global Javascript Bundle(used by all pages) -->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<!-- Page Vendors Javascript(used by this page) -->
<script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>

<script src="{{ asset('assets/js/custom/apps/customers/list/export.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/customers/list/list.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/customers/add.js') }}"></script>

<!-- scrip   -->
<script src="{{ asset('assets/js/ejecutarTrabajo/Empezar.js') }}"></script>
<script src="{{ asset('assets/js/consultaAtencion/atencion.js') }}"></script>


<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/new-target.js') }}"></script>
<script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script>


<script src="{{ asset('assets/js/distrito/app.js') }}"></script>
<script src="{{ asset('assets/js/equipos/app.js') }}"></script>
<script src="{{ asset('assets/js/inspeccion/realizado.js') }}"></script>
<script src="{{ asset('assets/js/proyectos/proyecto.js') }}"></script>
<script src="{{ asset('assets/js/proyectos/detallesProy.js') }}"></script>
<script src="{{ asset('assets/js/proyectos/ejecutarProyecto.js') }}"></script>
<script src="{{ asset('assets/js/proyectos/selecMultiplebotones.js') }}"></script>
<script src="{{ asset('assets/js/selectorMultiple.js') }}"></script>
<script src="{{ asset('assets/js/distrito/actualizacionzona.js') }}"></script>
<script src="{{ asset('assets/js/detallesGenerales/ejecutarApoyo.js') }}"></script>
<script src="{{ asset('assets/js/agendar/formulario.js') }}"></script>
<script src="{{ asset('assets/js/usuario/tabla.js') }}"></script>
<script src="{{ asset('assets/js/usuario/estado.js') }}"></script>
<script src="{{ asset('assets/js/proyectos/almacen/tablaalmacen.js') }}"></script>

  




