<!DOCTYPE html>
<html lang="en">
    @include('layouts.head')
    <body>
    
        @include('layouts.barraNavegacion',['URL'=>'index','urlDashboard'=>'',
                'urlConfiguracion'=>'','titulo'=>'Blog Square1'])
        <main role="main">
            @yield('content')
        </main>
        
    @include('layouts.scripts')
  </body>
</html>