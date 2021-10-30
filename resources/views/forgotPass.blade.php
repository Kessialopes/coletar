<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Alterar senha</title>
</head>
<body>
<h1>Alterar Senha</h1>
<div>
    <section>
	 <form method="POST" action="{{route('mudar.senha')}}">
       @csrf            
            <div class="form-group">
                     <label for="Email">Email</label>
                         <input type="email" name="email"
                         class="form-control" id="Email"
                         aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                     <label for="Password">Senha</label>
                         <input type="password" name="Password"
                         placeholder="Password" 
                         class="form-control" id="password">
                </div>
                <div class="form-group">
                     <label for="ConfirmPassword">
                     Confirmar Senha
                     </label>
                         <input type="password" name="Confirmar senha" placeholder="Confirm Password" 
                          class="form-control" id="confirm_password">
                </div>
            <button type="submit" class="btn-btn-pryimary">    
                  Confirmar
            </button>                        
     </form>                                   
    </section>
</div>
</body>
</html>


