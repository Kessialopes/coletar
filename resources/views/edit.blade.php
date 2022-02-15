<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
			.row{margin-top: 10%;}
			.align-center{margin: 25%;}
		</style>
		<title>Atualizar|Ponto de Coleta</title>
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
				<form method="POST" action="/seletiva/update/{{$selet->id}}" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
                            <label for="Image">Foto do Ponto de coleta</label>
                            <input type="file" name="image" class="form-control-file" id="Image"
                            value="{{$selet->image}}">
                        </div>
						<div class="form-group">
							<label for="name">Nome do Ponto de Coleta</label>
							<input type="name" id="name" name="name" class="form-control" 
							 value="{{$selet->name}}">
						</div>
						<div class="form-group">
							<label for="city1">Cidade</label>
							<input type="city" id="city" name="city" class="form-control" 
							 value="{{$selet->city}}">
						</div>
						<div class="form-group">
							<label for="neighborhood">Bairro</label>
							<input type="neighborhood" id="neighborhood" name="neighborhood" class="form-control" 
							value="{{$selet->neighborhood}}">
						</div>
						<div class="form-group">
							<label for="street">Rua</label>
							<input type="street" id="street" name="street" class="form-control" 
							 value="{{$selet->street}}">
						</div>
						<div class="form-group">
							<label for="number">Numero</label>
							<input type="number" id="number" name="number" 
							 class="form-control" 
							 value="{{$selet->number}}">
						</div>
						<div class="form-group">
							<label for="phone">Telefone</label>
							<input type="phone" id="phone" name="phone" 
							 class="form-control" 
							 value="{{$selet->phone}}">
						</div>
						<div class="form-group">
							<label for="info">Expediente</label>
							<input type="info" id="info" name="info" 
							 class="form-control" 
							 value="{{$selet->info}}">
						</div>
						<div class="form-group">
							<label for="title">Materiais de coleta:</label> 
							<div class="form-group">
							<input type="checkbox" name="itens[]" value="Vidro"> 
							Vidro
							</div>
							<div class="form-group">
							<input type="checkbox" name="itens[]" value="Papel"> 
							Papel
							</div>
							<div class="form-group">
							<input type="checkbox" name="itens[]" value="Plastico"> Plastico
							</div>
							<div class="form-group">
							<input type="checkbox" name="itens[]" value="Metal"> 
							Metal
							</div>
							<div class="form-group">
							<input type="checkbox" name="itens[]" value="Organico"> Organico
							</div>
						</div>            
						<input type="submit" class="btn btn-primary" value="Editar">
				</form>    
			</div>
		</div>    
		</div>  
	   </section>
	</body>  
</html>
