<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Coleta Lagos</title>
    <style type="text/css">
        ul{
        list-style: none;
        display: flex;
        }
        li{
         margin-left: 15px;
        }
        a{
         color: springgreen;
         text-decoration: none;
         transition: 1s;
        }
        a:hover{
         color: turquoise;
        }
    </style>
</head>
<body>
<header>
  <div class="topbar"> 
    <ul class="topbar-nav">
        @auth
        <li class="nav-item">
            <a href="/dashboard" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <a href="/logout" 
               class="nav-link">
               Sair
            </a>
          </form>  
        </li>
        @endauth
        @isSeletiva
        <li class="nav-item">
            <a href="/coletadash" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item">
            <a href="/cadcoleta" class="nav-link">cadastrar ponto de coleta</a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <a href="/logout" 
               class="nav-link">
               Sair
            </a>
          </form>  
        </li>
        @endisSeletiva
    </ul>
  </div>
</header> 
<div id="search-container" class="col-md-12">
     <form action="/Home" method="GET">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar..."><button type="submit">Pesquisar</button>   
     </form>
</div>   
<div id="selets-container"class="col-md-12">
  @if($search)
    <h2>Buscando por:{{$search}}</h2>  
  @else
    <h2>Pontos de coleta das redondezas</h2>
    <p class="subtitle">Veja aqui os pontos de coleta disponiveis</p>
  @endif    
    <div id="cards-container"class="row">
     @foreach($selets as $selet)   
        <div class="col-md-3"> 
            <img src="/img/selets/{{$selet->image}}">  
           <div class="card-body">
              <p>{{$selet->name}} - {{$selet->city}} - {{$selet->neighborhood}}</p>
              <a href="/Home/seletiva/{{$selet->id}}">informações sobre o ponto</a>
              <p>***********</p>
           </div>
        </div>
     @endforeach
     @if(count($selets) == 0 && $search)
        <p>Ponto de coleta não encontrado<a href="/Home">Ver todos</a></p>
     @elseif(count($selets) == 0)
        <p>Não há pontos de coleta disponíveis</p>
     @endif   
    </div>
</div>
<footer><p>Coleta Lagos</p></footer>
</body>
</html>
