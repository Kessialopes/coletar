<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>DASHBOARD DE  TESTE</title>
</head>
<body>
<h1>Painel de teste</h1>
<div>
    <form method="post" action=" {{route('logout')}} ">
         @csrf
       <button type="submit" class="btn-btn-pryimary">    
         sair
       </button> 
   </form>
</div>

</body>
</html>
