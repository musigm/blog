@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Export Data to Excel in Laravel using Maatwebsite</h3><br />
    <div class="row justify-content-around">
        <div class="col-5 ">
            <form action="{{ route('excel.search') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <select name="field">
                    　<option value="Product_ID">Product ID</option>
                    　<option value="Lookup">Lookup</option>
                    　<option value="Description">Description</option>
                    　<option value="Quantity">Quantity</option>
                    　<option value="Style_Name">Style Name</option>
                    　<option value="ColorParentSku">ColorParentSku</option>
                    　<option value="Last_updated">Last_updated</option>
                    　<option value="Stores">Stores</option>
                </select>
                <input type="text" name="keyword">
                <button type="submit" class="btn btn-success">Search</button>
            </form>
        </div>
    <div class="col-5">
        <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <label>文件名：</label>
            <input type="file" name="file">
            <br>
            <button type="submit" class="btn btn-success">Import</button>
            <a href="{{ route('excel.export.all') }}" class="btn btn-success">Export All</a>
        </form>
    </div>
    <br>
    <form action="{{ route('excel.export') }}" method="POST" enctype="multipart/form-data">
        <div>
        {{ csrf_field() }}
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
                @if(Request::path() == 'excel')
                @foreach ($alists as $list)
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
                @else
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
                    @endif
            </table>
            <br>
        </div>
        <div class="row justify-content-end">
            @if(Request::path() == 'excel')
            {{ $alists->links() }}
            @else
            {{ $lists->links() }}
            @endif
        </div>
        <div class="row justify-content-end">
            <button type="submit" class="btn btn-success" >Export</button>
        </div>
        </div>
    </form>
</div>
@endsection
