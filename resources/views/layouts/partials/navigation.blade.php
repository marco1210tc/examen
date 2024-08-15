<nav class="navbar">
    <a class="nav-btn {{ setActive('home') }}" href="/"> Home </a>

    <a class="nav-btn {{ setActive('servicios') }} " href="{{ route('servicios') }}">
        Servicios </a>

    <a class="nav-btn {{ setActive('proyectos') }} " href="{{ route('proyectos') }}">
        Proyectos </a>

    <a class="nav-btn " href="{{ route('clientes.index') }}">
        Clientes </a>


    <a class="nav-btn {{ setActive('blog') }} " href="{{ route('blog') }}">
        Blog </a>

    <a class="nav-btn {{ setActive('contacto') }}" href="{{ route('contacto') }}"> Contacto </a>


</nav>
