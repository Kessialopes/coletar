<!DOCTYPE html>
<head>
	<!--<meta charset="utf-8">-->
	<title>DASHBOARD DE COLETA SELETIVA</title>
</head>
<body>
<h1>Painel de Coleta</h1>
<div>
	<form method="post" action=" {{route('sair')}} ">
         @csrf
       <button type="submit" class="btn-btn-pryimary">    
         sair
       </button>
     </form>
</div>
</body>
</html>