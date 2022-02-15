<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
    </head>
    <body>
        <header>
           <nav class="navbar navbar-expand-lg navbar-light">
            <div class= "collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                  @auth
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link">{{$user->name}}</a>
                  </li>
                  <li class="nav-item">
                  <form action="/logout" method="POST">
                        @csrf
                      <a href="/logout" 
                      class="nav-link" 
                      onclick="event.preventDefault();
                      this.closest('form').submit();">
                      Sair
                      </a>
                  </form>  
                  </li>
                  @endauth
                  @isSeletiva
                  <li class="nav-item">
                    <a href="/coletadash" class="nav-link">{{$user->name}}</a>
                  </li>
                  <li class="nav-item">
                  <form action="/logout" method="POST">
                        @csrf
                      <a href="/logout" 
                      class="nav-link" 
                      onclick="event.preventDefault();
                      this.closest('form').submit();">
                      Sair
                      </a>
                  </form>  
                  </li>
                  @endisSeletiva
                  @guest
                  <li class="nav-item">
                    <a href="/login" class="nav-link">Enter</a>
                  </li>
                  <li class="nav-item">
                    <a href="/cadastro" class="nav-link">Cadastrar</a>
                  </li>
                  @endguest
                </ul>
            </div>
           </nav> 
        </header>
       <main>
          <div class="container-fluid">
             <div class="row">
                @if(session('msg'))
                   <p class="msg">{{session('msg')}}</p>
                @endif
                @yield('content')
             </div>
          </div>  
       </main>  
    </body>
</html>