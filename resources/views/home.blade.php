@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header "></div>
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <div class= "align-self-center col-md-10">
                        <div class='align-self-center'></div>
                        <br>
                        <a href="{{ url('/excel') }}" class="btn btn-secondary" role="button">Excel</a>
                        <a href="{{ url('/importdata') }}" class="btn btn-secondary" role="button">Importdata</a>
                        @if(Auth::user()->role == 'admin')
                        <a href="{{ url('/administrative') }}"class="btn btn-secondary" role="button">Administrative</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
