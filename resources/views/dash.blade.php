<!DOCTYPE html>
<head>
  <meta charset="utf-8">
   <title>Dashboard | Coleta Lagos</title>
    <style type="text/css">
      ul {
         list-style-type: none;
         margin: 0;
         padding: 0;
         overflow: hidden;
        }
        li {float: left;}
        li button{padding: 17px;}
        li p {
            display: block;
            color: black;
            padding: 14px 16px;
            text-decoration: none;
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
        <a href="/Home">home</a>
    </li>
    <li style="float:right">
      <form method="post" action=" {{route('logout')}} ">
         @csrf
         <a href="/logout">    
            sair
         </a> 
      </form>
    </li>
    <li style="float:right">
        <p>Olá {{$user->name}}</p>
    </li>
</ul>      
</div>    
<div>   
    <h1>Dashboard de usuario</h1>
       <p>doações feitas por você</p>   
</div>

</body>
</html>
