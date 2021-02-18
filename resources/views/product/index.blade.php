@extends('layouts.app')

@section('content')
<style>
    .dataTables_processing {
        background: #593196 !important;
        color: #fff !important;
        padding: 20px !important;
        text-align: center !important;
        height: 40px !important;
        line-height: 0px !important;
        border-radius: 10px;
        box-shadow: 0px 4px 40px -1px #000;
    }
    .dt-button-collection button {
        display: block;
        background: #593196!important;
        color: #fff;
        border: none;
        margin: 5px 0px;
        width: 108px;
        text-align: left;
        border-radius: 5px;
    }
    .dt-button-collection {
        margin-top: 0px !important;
        position: absolute;
        background: #f3ecec;
        padding: 10px;
        z-index: 2;
    }
    .buttons-colvis {
        display: block;
        background: #593196!important;
        color: #fff;
        border: none;
        margin: 0px 0px;
        border-radius: 5px;
        padding:5px;
        text-transform:capitalize;
    }
    .dt-buttons {
        display:inline-block;
    }
</style>
    <div class="row">
        <div class="col col-sm-6">
        </div>
        <div class="col col-sm-6">
            <a href="{{ url('/product/create') }}" class="btn btn-primary float-right mb-3">Add New Product</a>
        </div>
    </div>
    <table class="table table-hover table-striped table-bordered data-table mt-4">
        <thead>
            <tr>
                <th scope="col">S.No</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        $(function() {
            var table = $('.data-table').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'colvis'
                ],
                processing: true,
                serverSide: true,
                ajax: "{{ url('product') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'category', name: 'category' },
                    {data: 'detail', name: 'detail'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ]
            });
        });
        function deleteProduct(id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/product/' + id,
                method: 'DELETE',
                data: id,
                success:function(response) {
                    alert(response.message)
                }
            });
        }
    </script>

@endsection