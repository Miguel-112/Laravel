<header>
    <h1>Cursos</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a>
              
               
            </li>

            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
            
            </li>
            <li><a href="{{route('nosotros')}}"  class="{{request()->routeIs('nosotros') ? 'active' : ''}}"> Nosotros</a>
             
            </li>
            
        </ul>
    </nav>
</header>