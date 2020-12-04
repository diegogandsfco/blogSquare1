@extends('layouts.app')

@section('content')
    
    <div class="container" style="padding-top:70px">
        <div class="row">
            <h1>Publicación</h1>
        </div>
        <div class="card mb-4 shadow-sm">
            @include('flash::message')
            @include('errors')

            @include('dashboard.fields')
            <div class="form-group col-sm-12">
                <a class="btn btn-primary"  href="#" onclick="history.back()" align="left">Volver</a>
            </div>
        </div>
    </div>
@endsection
