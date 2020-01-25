@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <form action="import.php" method="post" enctype="multipart/form-data">
                        <label for="file">文件名：</label>
                        <input type="file" name="file" id="file"><br>
                        <input type="submit" name="submit" value="提交">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
