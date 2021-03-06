
    <!-- Mainly scripts -->
   
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/plugins/dataTables/datatables.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
   <div id="deleteModel" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12"><h3 class="m-t-none m-b">Delete Record</h3>
                            <b>Are You sure want to delete record.</b><br/>
                            <form role="form">
                                <div>
                                     <button class="btn btn-sm btn-primary pull-right m-l" data-dismiss="modal">Cancel</button>
                                    <button class="btn btn-sm btn-danger pull-right yes-sure m-l" type="button"><strong><i class="fa fa-trash"></i> Delete </strong></button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        });
    </script>
    <script src="{!! asset('js/plugins/validate/jquery.validate.min.js') !!}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{!! asset('js/plugins/toastr/toastr.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/comman_function.js') !!}" type="text/javascript"></script>

@if (!empty($js)) 
@foreach ($js as $value) 
<script src="{{ asset('js/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
<script>
    jQuery(document).ready(function() {
        @if (!empty($funinit))
                @foreach ($funinit as $value)
                    {{  $value }}
                @endforeach
        @endif
    });
</script>
@section('scripts')
@show
