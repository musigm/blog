@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Export Data to Excel in Laravel using Maatwebsite</h3><br />
    <div class="row justify-content-around">
        <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
            @CSRF
            <label>文件名：</label>
            <input type="file" name="file" class="col-6">
            <button type="submit" class="btn btn-success" class="col-3">Import</button>
            <a href="{{ route('excel.export.all') }}" class="btn btn-success" class="col-3">Export All</a>
        </form>
    </div>
    <br>
    <form action="{{ route('excel.export') }}" content="{{ csrf_token() }}" method="POST" enctype="multipart/form-data">
        <div>
        @CSRF
        <div class="table-responsive">
            <table class="table table-striped">
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
                @foreach ($lists as $list)
                <tr>
                    <td>{{$list ->Product_ID}}</td>
                    <td>{{$list ->Lookup}}</td>
                    <td>{{$list ->Description}}</td>
                    <td>{{$list ->Quantity}}</td>
                    <td>{{$list ->Style_Name}}</td>
                    <td>{{$list ->ColorParentSku}}</td>
                    <td>{{$list ->Last_updated}}</td>
                    <td>{{$list ->Stores}}</td>
                    <td><input type="checkbox" name="checkbox[]" value="{{$list ->id}}"/></td>

                </tr>
                @endforeach
            </table>
            <br>
        </div>
        <div class="row justify-content-end">
            {{ $lists->links() }}
        </div>
        <div class="row justify-content-end">
            <button type="submit" class="btn btn-success" >Export</button>
        </div>
        </div>
    </form>
</div>
@endsection
