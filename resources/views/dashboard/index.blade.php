@extends('layouts.app')

@section('content')
    
    <div class="container" style="padding-top:70px">
        @include('flash::message')
        <div class="row">
            <h1>Publicaciones creadas</h1>
        </div>
        <div class="card mb-4 shadow-sm">
            @include('flash::message')
            @include('errors')

            @include('dashboard.table')

            <div class="col-lg-12 col-xs-12 sinpadding">
                <div class="pagination pagination-sm">{{ $entries->links() }}</div>
            </div>
            
            @include('layouts/btnRedondo',['urlCrear'=>'createBlogEntry'])
        </div><!-- comment -->
        
        @if (Auth::user()->admin==Config::get('constantes.RolAdministrador'))
            <div class='col-sm-4 text-center'>
                <a class="btn btn-primary"  href="{{route('importarPosts')}}" align="left">Importar posts</a>
            </div>
        @endif
    </div>
@endsection
