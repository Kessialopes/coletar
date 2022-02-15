<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ponto de Coleta | Coleta Lagos</title>
</head>
<body>
    <div><a href="/Home">Voltar</a></div>
<div id="info-container" class="col-md-6">	
        <p><h2>{{$selet->name}}</h2></p>
        <p><h3>Endereço : </h3>{{$selet->street}}, n°:{{$selet->number}}, {{$selet->neighborhood}} - {{$selet->city}}</p>
        <p><h3>Expediente : </h3>{{$selet->info}}</p>
        <p><h3>Numero de contato : </h3>{{$selet->phone}}</p>
        <h3>O ponto de coleta recebe : </h3>
        <ul>
            @foreach($selet->itens as $item)
             <li> :::: {{$item}} </li>
            @endforeach
        </ul>
</div>
</body>
</html>