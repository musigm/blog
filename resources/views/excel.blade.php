@extends('layouts.app')

@section('content')
<div class="container">

    <h3 align="center">Export Data to Excel in Laravel using Maatwebsite</h3><br />
    <form action="{{ route('excel.import') }}" method="POST" align="center" enctype="multipart/form-data">
        @csrf
        <label>文件名：</label>
        <input type="file" name="file">
        <button type="submit" class="btn btn-success">import to Excel</button>
        <a href="{{ route('excel.export') }}" class="btn btn-success">Export to Excel</a>
    </form>
    <p></p>
    <div class="row justify-content-center">
        <table class="table table-striped table-bordered">
            <tr>
                <td>Product_lookup</td>
                <td>Notes</td>
                <td>Product_ID</td>
                <td>Lot_ID</td>
                <td>Packing</td>
                <td>Stores</td>
                <td>Description</td>
                <td>Mfg_product_ID</td>
            </tr>
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
    </div>
</div>
@endsection
