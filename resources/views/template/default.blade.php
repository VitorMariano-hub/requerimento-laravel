<!DOCTYPE html>
<html lang="pt=BR">
@component('components.head')
@endcomponent
<body>       
    @component('components.nav')
    @endcomponent
    <div class="container">
        <div class="col-md-12">
        @yield('content')
        </div>
    </div>
</body>
</html>