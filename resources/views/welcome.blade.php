<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .row{margin-top: 10%;}
            .align-center{margin: 25%;}
        </style>
        <title>Hi</title>
    </head>
    <body>
       <section>
         <div class="container">
            <div class="row">  
                <div class="col-md-6 offset-md-3">
                    @if($errors->any())
                     <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul> 
                     </div>
                    @endif
                    @if(session('danger'))
                        <div class="alert alert-danger">
                         {{session('danger')}}   
                        </div>
                    @endif
                    <div>
                        <button type="submit" class="btn-btn-pryimary">
                        <a href="/lixao">   
                        Coleta Seletiva
                        </a></button>
                        </div>
                        <!--<form action="/" method="GET">-->
                    <form method="post" action=" {{route('acesso.user')}} ">
                        @csrf
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn-btn-pryimary">    
                           Entrar
                        </button> 
                        <button type="submit" class="btn-btn-pryimary">
                        <a href="{{route('cadastro.create')}}">    
                        Cadastro
                        </a></button>
                        <div>
                         <a href="{{route('esqueci.senha')}}">    
                           Esqueci minha Senha
                         </a>
                        </div>
                    </form>   
                </div>    
            </div>    
         </div>  
       </section>
    </body>  
</html>
