<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Ponto de Coleta | Coleta Lagos</title>
 <style type="text/css">
      ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
        }
        li {float: left;}
        
        li p {
            display: block;
            color: black;
            padding: 14px 16px;
            text-decoration: none;
            }
        li a {
            display: block;
            padding: 14px 16px;
            text-decoration: none;
            }
        #info-container{
            margin: 15px 0;
            border: 1pk solid #B8DAFF;
            padding: 10px;
            width: 275px;
        }
        #info-container li{
            display: inline-block;
            
        }
        #selet-itens{
            display: block;
        }
    </style>
</head>
<body>
<div class="topnav">
 <ul>
    <li>
        <p>Painel de teste</p>
    </li>
    <li>
        <a href="/Home">Home</a>
    </li>
    <li style="float:right">
      <form method="post" action=" {{route('logout')}} ">
         @csrf
         <a href='/logout'>sair</a> 
      </form>
    </li>
    <li style="float:right">
        <p>Olá {{$user->name}}</p>
    </li>
    <li>
        <p>***********</p>
    </li>
</ul>      
</div>
<div>
<h1 style="font-family: sans-serif;">Painel de Coleta</h1>  
    <a href="/seletiva/edit/{{$user->selet->id}}">
       Atualizar Dados
    </a> 
    <div id="info-container" class="col-md-6">
    <div class="image-container">
        <img src="/img/selets/{{$user->selet->image}}">
    </div>    
    <div class="info-selet">
    <p>Nome do Ponto: {{$user->selet->name}}</p>
    <p>Cidade: {{$user->selet->city}}</p>
    <p>Bairro: {{$user->selet->neighborhood}}</p>
    <p>Rua: {{$user->selet->street}}</p>
    <p>Numero: {{$user->selet->number}}</p>
    <p>Telefone: {{$user->selet->phone}}</p>
    <p>Expediente: {{$user->selet->info}}</p>
    </div>
    <h4>Materiais a receber: </h4>
    <ul id="selet-itens">
    @foreach($user->selet->itens as $item)
        <li> ::: {{$item}} </li>
    @endforeach 
    </ul>    
    </div>    
</div>
</body>
</html>