@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Producto</h3>
			@if (count($errors)>1)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>

			{!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
	<div class="row">
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	    	  <div class="form-group">
	            	<label for="nombre">Nombre</label>
	            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
	           </div>
	    </div>
	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	    		<div class="form-group">
	    			<label for="categoria">Categoria</label>
	    			<select name="idcategoria" class="form-control">
	    				@foreach ($categoria as $cat)
	    				<<option value="{{$cat->idcategoria}}">{{$cat->nombre}}</option>
	    				@endforeach
	    			</select>
	    		</div>
	    </div>
	    <div class="col-lg-6 col-md	-6 col-sm-6 col-xs-12">
	    		<label for="codigo">Codigo</label>
	            <input type="text" name="codigo" required value="{{old('codigo')}}" class="form-control" placeholder="codigo">
	    </div>
	    <div class="col-lg-6 col-md	-6 col-sm-6 col-xs-12">
	    		<label for="stock">Unidades Disponibles</label>
	            <input type="text" name="stock" required value="{{old('stock')}}" class="form-control" placeholder="stock">
	    </div>
		<div class="col-lg-6 col-md	-6 col-sm-6 col-xs-12">
	    		<label for="descripcion">Descripcion</label>
	            <input type="text" name="descripcion" value="{{old('descripcion')}}" class="form-control" placeholder="descripcion">
	    </div>
	    <div class="col-lg-6 col-md	-6 col-sm-6 col-xs-12">
	    		<label for="imagen">Imagen</label>
	            <input type="file" name="imagen" class="form-control"	>
	    </div>
	</div>	


        <div>   
            <div class="form-group"><br>
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
		</div>
	
			{!!Form::close()!!}		
@endsection