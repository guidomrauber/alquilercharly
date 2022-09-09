<?php include 'header.php';?>
<div class="container">

<h1 class="title">Contacto</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
		   <div class="map">
       	<iframe src="charly.png" width="150%" height="500" frameborder="0"></iframe>	
       	</div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Escribinos a </h4>
			   <form method='POST' action='contacto.php'>
	<div class="form-group">
		<label for="nombre">Nombre</label>
		<input type="text" class="form-control" name='nombre' id="nombre" placeholder="nombre...">
	</div>
    <div class="form-group">
    <label for="Phone">Telefono</label>
            <input type="Phone" class="form-control"  name='celular' placeholder="Celular o fijo">
        </div>    
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" name='email' id="email" placeholder="email...">
	</div>
	<div class="form-group">
		<label for="exampleTextarea">Mensaje</label>
		<textarea class="form-control" name='mensaje' id="mensaje" rows="3"></textarea>
	</div>
	<div class="form-group">
		<input type="checkbox" required> Acepto la política de privacidad.
	</div>
	<button class="btn btn-primary" type="submit">Enviar</button>
</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>