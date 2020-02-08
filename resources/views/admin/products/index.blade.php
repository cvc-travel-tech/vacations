@extends('admin.layouts.app')

@section('content')


    <!-- Highlighting rows and columns -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Highlighting rows and columns</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">

            <table class="table  table-hover datatable-highlight"  id="product-table">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Job Title</th>
                        <th>DOB</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
            
                </tbody>
            </table>
        </div>
    </div>

    <!-- /highlighting rows and columns -->
@endsection
@section('script')
	<!-- Theme JS files -->
	{{-- <script type="text/javascript" src="{{ asset('admin/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/forms/selects/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/core/app.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/pages/datatables_advanced.js')}}"></script>
	<script type="text/javascript" src="{{ asset('admin/js/plugins/ui/ripple.min.js')}}"></script> --}}
    <!-- /theme JS files -->
<script>
    $(function() {
        $('#product-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('admin.product.index') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'description', name: 'description' },
                { data: 'price', name: 'price' },
                { data: 'action', name: 'action' }
            ]
        });
    });
</script>
@endsection

