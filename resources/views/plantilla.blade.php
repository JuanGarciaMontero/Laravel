

        <!-- CONTENIDO ESTÁTICO PARA TODAS LAS SECCIONES -->
        <h1>Bienvenid@s a Laravel</h1>
        <hr>

        <!-- MENÚ -->
        <nav>
            <a href="{{ route('noticias') }}">Blog</a> |
            <a href="{{ route('galeria') }}">Fotos</a>
        </nav>

        <!-- CONTENIDO DINÁMICO EN FUNCIÓN DE LA SECCIÓN QUE SE VISITA -->
        <header>
            @yield('apartado')
        </header>

