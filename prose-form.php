 <?php

 if(!empty($_POST['nombre']) AND !empty($_POST['email']) AND !empty($_POST['asunto']) AND !empty($_POST['telefono'])){

$to ="ventas@parker-mexico.com.mx";
$headers = "Content-Type: text/html; charset=iso-8859-1\n"; 
$headers .= "From:".$_POST['nombre']."\r\n";			
$tema="Este es un correo que llega desde el Sitio Web";
$mensaje="
<table border='0' cellspacing='2' cellpadding='2'>
  <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
    <td width='80%' align='left'>$_POST[nombre]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
    <td align='left'>$_POST[email]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Telefono:</strong></td>
    <td align='left'>$_POST[telefono]</td>
  </tr>
   <tr>
    <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Asunto</strong></td>
    <td width='80%' align='left'>$_POST[asunto]</td>
  </tr>
  <tr>
    <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
    <td align='left'>$_POST[mensaje]</td>
  </tr>
</table>
";
@mail($to,$tema,$mensaje,$headers); 
echo "Gracias por sus comentarios.<br>";
echo "Este Mensaje llegara a nuestro buzon de correos de atencion a clientes,<br>";
echo "Cheque nuestra Politica de Privacidad para cualquier aclaración";
} else {
	echo "No se puede enviar el formulario, verifica los campos";
	
}
?>
<p><a href="http://www.parker-mexico.com.mx/contacto.html">Regresar a pagina de Contacto</a></p>
<html>
</html>
