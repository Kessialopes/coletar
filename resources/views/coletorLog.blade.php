<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            
        </style>
        <title>Login | Coleta Lagos</title>
    </head>
    <body>
       <section>
         <div class="container">
            <form method="post" action=" {{route('acesso.user')}} ">
                        @csrf
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="Password">Senha</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button type="submit" class="btn-btn-pryimary">    
                           Entrar
                        </button> 
                        <a href="{{route('cadastro.create')}}">    
                        Cadastro
                        </a>                     
                    </form>   
         </div>  
       </section>

    </body>  
</html>
