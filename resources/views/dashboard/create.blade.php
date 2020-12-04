@extends('layouts.app')

@section('content')
    @include('flash::message')
    
    <div class="container" style="padding-top:70px">
        <div class="row">
            <h1>Crear publicación</h1>
        </div>
        <div class="card mb-4 shadow-sm">
            @include('flash::message')
            @include('errors')

            {{ Form::open(['route' => 'blogEntry/store']) }}
                {{ Form::hidden('id_user', Auth::user()->id ,array('id' => 'id_user')) }}
                @include('dashboard.fields')
                <div class="form-group col-sm-12">
                    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
                    <a class="btn btn-primary"  href="#" onclick="history.back()" align="left">Volver</a>
                </div>
            {{Form::close()}}
        </div>
    </div>
@endsection
