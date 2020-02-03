@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Export Data to Excel in Laravel using Maatwebsite</h3><br />
    <div class="row justify-content-center">
        <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>文件名：</label>
            <input type="file" name="file">
            <button type="submit" class="btn btn-success">import to Excel</button>
            <a href="{{ route('excel.export') }}" class="btn btn-success">Export to Excel</a>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Product_lookup</th>
                    <th scope="col">Notes</th>
                    <th scope="col">Product_ID</th>
                    <th scope="col">Lot_ID</th>
                    <th scope="col">Packing</th>
                    <th scope="col">Stores</th>
                    <th scope="col">Description</th>
                    <th scope="col">Mfg_product_ID</th>
                </tr>
            </thead>
            @foreach ($lists as $list)
            <tr>
                <td>{{$list ->Product_lookup}}</td>
                <td>{{$list ->Notes}}</td>
                <td>{{$list ->Product_ID}}</td>
                <td>{{$list ->Lot_ID}}</td>
                <td>{{$list ->Packing}}</td>
                <td>{{$list ->Stores}}</td>
                <td>{{$list ->Description}}</td>
                <td>{{$list ->Mfg_product_ID}}</td>
            </tr>
            @endforeach
        </table>
        {{ $lists->links() }}
    </div>
</div>
@endsection
