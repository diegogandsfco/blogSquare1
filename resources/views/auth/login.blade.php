@extends('layouts.app')

@section('content')

    <div class="container col-md-8 col-lg-5" style="padding-top:70px">
        <div class="card mb-4 shadow-sm">
            <div class="card-header text-white bg-success">Ingresar al sistema</div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-sm-10 offset-md-1">
                            <label for="email" class="col-form-label">E-Mail</label>

                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} col-sm-10 offset-md-1">
                            <label for="password" class="col-form-label">Contraseña</label>

                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-10 col-md-offset-1">
                            <div class="form-check">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">
                                Ingresar
                            </button>
                        </div>
                    </div>
                    <div class="form-group col-sm-12">
                        <div class="text-center">
                            <a class="btn btn-link" href="{{ route('resetPassword') }}">
                                ¿Olvido su contraseña?
                            </a>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>

@endsection
