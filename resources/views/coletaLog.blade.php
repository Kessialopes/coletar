<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .row{margin-top: 10%;}
            .align-center{margin: 25%;}
        </style>
        <title>Login de Coleta Seletiva</title>
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
                    <form action="/logcoleta" method="POST">
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
                        <a href="/">Você é doador? Faça seu Login</a>
                    </form>    
                </div>    
            </div>    
         </div>  
       </section>
    </body>  
</html>
