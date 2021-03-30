<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
     data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li @if($current=="index") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link"  href="/">INICIO</a>
        </li>

        <li  @if($current=="comidas") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/comidas">COMIDAS</a>
        </li>

        <li @if($current=="bebidas") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/bebidas">BEBIDAS</a>
        </li>
      </ul>
        <nav class="navbar navbar-dark bg-dark">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
              <button class="btn btn-success" type="submit">Buscar</button>
            </form>
        </nav>
    </div>
  </div>
</nav>