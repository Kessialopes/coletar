<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .row{margin-top: 10%;}
            .align-center{margin: 25%;}
        </style>
        <title>Cadastrar|Ponto de Coleta</title>
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
                    <form method="post" action="{{route('cad.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="Image">Foto do Ponto de coleta</label>
                            <input type="file" name="image" class="form-control-file" id="Image">
                        </div>
                        <div class="form-group">
                            <label for="Name">Nome do Ponto de Coleta</label>
                            <input type="name" name="name" class="form-control" id="Name">
                        </div>
                        <div class="form-group">
                            <label for="City">Cidade</label>
                            <input type="city" name="city" class="form-control" id="City">
                        </div>
                        <div class="form-group">
                            <label for="Neighborhood">Bairro</label>
                            <input type="neighborhood" name="neighborhood" class="form-control" id="Neighborhood" >
                        </div>
                        <div class="form-group">
                            <label for="Street">Rua</label>
                            <input type="street" name="street" class="form-control" id="Street">
                        </div>
                        
                        <div class="form-group">
                            <label for="Number">Numero</label>
                            <input type="number" name="number" class="form-control" id="number">
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="phone" name="phone" class="form-control" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="info">Expediente</label>
                            <textarea name="info" class="form-control" id="info" placeholder="Expediente"></textarea> 
                        </div>
                        <div class="form-group">
                            <label for="title">Materiais de coleta:</label> 
                            <div class="form-group">
                            <input type="checkbox" name="itens[]" value="Vidro"> Vidro
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="itens[]" value="Papel"> Papel
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="itens[]" value="Plastico"> Plastico
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="itens[]" value="Metal"> Metal
                            </div>
                            <div class="form-group">
                            <input type="checkbox" name="itens[]" value="Organico"> Organico
                            </div>
                        </div>            
                        <button type="submit" class="btn-btn-pryimary">
                        Cadastrar
                        </button>
                    </form>    
                </div>
            </div>    
         </div>  
       </section>
    </body>  
</html>
