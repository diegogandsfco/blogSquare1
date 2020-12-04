@extends('layouts.app')

@section('content')
    
    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    
    <div class="container col-md-8 col-lg-5" style="padding-top:70px">
        @include('errors')
        @include('flash::message') 
        <div class="card mb-4 shadow-sm">
            
            <div class="card-header text-white bg-success">Alta de usuarios</div>
            <div class="card-body">
                
                <div class="row">
                    <div class="form-group col-md-6  {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-form-label">Nombre:</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-form-label">E-Mail:</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif

                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">

                        <label for="password" class="col-form-label">Contraseña:</label>
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif

                    </div>

                    <div class="form-group col-md-6">
                        <label for="password-confirm" class="col-form-label">Confirmar contraseña:</label>

                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    </div>

                </div>
            </div>
            
        </div>
        <div class="row">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </div>
</form>
@endsection