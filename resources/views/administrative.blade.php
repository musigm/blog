@extends('layouts.app')

@section('content')
<div class="container">
    <h3>User Table</h3><br />
    {{-- <div class="row justify-content-center">
        <form action="{{ route('excel.import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            </label>搜尋：</label>
            <input type="text" name="text">
            <button type="submit">search</button>
        </form>
    </div>
    <br> --}}
    <form action="{{ route('user.role') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">role</th>
                        <th scope="col">user name</th>
                        <th scope="col">position</th>
                        <th scope="col">department</th>
                        <th scope="col">phone_number</th>
                        <th scope="col">level</th>
                        <th scope="col">address</th>
                        <th scope="col">email</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                @foreach ($tables as $table)
                <tr>
                    <td>
                        <input type="hidden" name='id' value="{{$table ->id}}">
                        <select name="role">
                            　<option value="{{$table ->role}}">{{$table ->role}}</option>
                            @if($table ->role != 'user')
                            　<option value="user">user</option>
                            @else
                            　<option value="admin">admin</option>
                            @endif
                        </select>
                    </td>
                    <td>{{$table ->username}}</td>
                    <td>{{$table ->position}}</td>
                    <td>{{$table ->department}}</td>
                    <td>{{$table ->phone_number}}</td>
                    <td>{{$table ->level}}</td>
                    <td>{{$table ->address}}</td>
                    <td>{{$table ->email}}</td>
                    <td><button type="submit">Modify</button></td>
                </tr>
                @endforeach
            </table>
            {{ $tables->links() }}
        </div>
    </form>
</div>
@endsection
