@extends('layouts.datatable')
@section('content')
<div class="container">
    <h3>Product Data List</h3><br />
    <div class="col-7">
        <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>文件名：</label>
            <input type="file" name="file">
            {{-- <br> --}}
            <button type="submit" class="btn btn-success">Import</button>
            <a href="{{ route('excel.export.all') }}" class="btn btn-success">Export All</a>
        </form>
    </div>
    <br>
    <div>
        <table class="table table-striped" id="table">
           <thead>
              <tr>
                <th scope="col">Product ID</th>
                <th scope="col">Lookup</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
                <th scope="col">Style Name</th>
                <th scope="col">ColorParentSku</th>
                <th scope="col">Last updated</th>
                <th scope="col">Stores</th>
                <th></th>
              </tr>
           </thead>
        </table>
        <script>
        $(function() {
           $('#table').DataTable({
               processing: true,
               serverSide: true,

               pageLength: 50,
               ajax: '{{ route('get_data') }}',
               columns: [
                    { data: 'Product_ID'},
                    { data: 'Lookup'},
                    { data: 'Description'},
                    { data: 'Quantity'},
                    { data: 'Style_Name'},
                    { data: 'ColorParentSku'},
                    { data: 'Last_updated'},
                    { data: 'Stores'},
                    { data: "checkbox", orderable: false}
                ],
            });
        });
        </script>
     </div>
</div>
@endsection
