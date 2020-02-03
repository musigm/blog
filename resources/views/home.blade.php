@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">import excel</div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <form action="{{ route('excel.import') }}" method="POST" align="center" enctype="multipart/form-data">
                            @csrf
                            <label>文件名：</label>
                            <input type="file" name="file">
                            <button type="submit" class="btn btn-success">import to Excel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
