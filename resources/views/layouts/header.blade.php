<nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #383734 ;">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">UPZ B</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      @guest
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
        </li>
      @else
        <li class="nav-item">
          <a class="nav-link" href="{{url('editoriales')}}">Editoriales</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('titulos')}}">Titulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="{{url('autores')}}">Autores</a>
        </li>


        <li class="nav-item">
          <a class="nav-link " href="#">{{  Auth::user()->name }}</a>
        </li>


      @endguest
      <li class="nav-item">
        <a class="nav-link " href="{{route('login')}}">{{ __('Login')}}</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >{{ __('Logout') }}</a>
      </li>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: : none;">
      @csrf
      </form>


      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link " href="{{route('register')}}">{{ __('Register')}}</a>
      </li>
      @endif

      <li class="nav-item">
        <a class="nav-link " href="{{url('libreria')}}">Librerias</a>
      </li>

      </ul>
    </div>
  </div>
</nav>




