<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF8">
	<title>Hidraulica y Neumatica Chassin</title>
	<?php include 'inc/head_common.php'; ?>
	<link rel="stylesheet" href="css/contenido.css">

</head>
<body>
	<?php include 'inc/header.php'; ?>
		<div id="presentacion">
			<article id="presen-contacto" class="presentacion presentacion-center">
				<div class="container">
					<div class="row">
						<div class="col-xs-3">
						  	<p id="contacto">Si tiene alguna pregunta nos puede escribir por medio de nuestro formulario de contacto.</p>
						  	<p id="contacto">Un representante nuestro se pondra en comunicación con usted lo mas breve posible.</p>
                        </div>
						<div class="col-xs-7 col-xs-offset-1">
						  	<form action="prose-form.php" method="post">
							    <table width="600" border="0">
							  	<tr>
							    <td><label>Nombre: *</label></td>
							    <td><input type="text" name="nombre" id="nombre" class="cambio" size="60" required /></td>
							  	</tr>
							  	<tr>
							    <td><label>e-mail: *</label></td>
							    <td><input name="email" type="text" id="email"  class="cambio" size="60" required /></td>
							  	</tr>
							  	<tr>
							    <td><label>Telefono (lada): *</label></td>
							    <td><input type="text" name="telefono"  id="telefono" class="cambio" size="60" required /></td>
							  	</tr>
							  	<tr>
							    <td><label>Mensaje: *</label></td>
							    <td><input type="text" id="asunto" name="asunto" class="cambio" size="60" required /></td>
							  	</tr>
							  	<tr>
							    <td><label>Comentarios:</label></td>
							    <td><textarea name="mensaje" cols="40" rows="6" id="mensaje" class="cambio"></textarea></td>
							  	</tr>
							  	<tr>
          						<td colspan="2"><input type="submit"  class="cambio" value="Enviar Mensaje"><input type="reset" class="cambio "value="Borrar"></td>
       							</tr>
								</table>
 							</form>
 							<br>
  							 <p>Los campos marcados con un * son obligatorios</p>
                        </div>
					</div>
				</div>
			</article>
        </div>
	<?php include 'inc/footer.php'; ?>
	<?php include 'inc/footer_common.php'; ?>
</body>
</html>