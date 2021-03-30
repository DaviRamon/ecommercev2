

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
     data-target="#navbar-menor" aria-controls="navbar-menor" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar-menor">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link"  href="https://www.facebook.com" target="_blank">
          FACEBOOK
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://www.instagram.com" target="_blank">
          INSTAGRAM
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://wa.me/5547997372310?text=olá,%20deu%20certo!" target="_blank">
          WHATSAPP
          </a>
        </li >


    
      </ul>


      <ul class="navbar-nav ml-auto">
        <li  @if($current=="home") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link"  href="/">Sair</a>
        </li>
        
              <!--
        <li  @if($current=="minha-conta") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/minha-conta">MINHA CONTA</a>
        </li>
          
        <li  @if($current=="meus-pedidos") class="nav-item active" @else class="nav-item" @endif>
          <a class="nav-link" href="/meus-pedidos">MEUS PEDIDOS</a>
        </li>
                -->
      </ul>



      
    </div>
  </div>
</nav>