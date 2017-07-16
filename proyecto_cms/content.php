<?php require_once 'includes/connection_db.php'; ?>
<?php require_once 'includes/functions.php'; ?>
	<?php 
	#cabezera del sitio web
	include'includes/header.php';  
	?>
	<table id="estructura">
		<tr>
			<td id="menu">
			<ul class="cursos">
				
			
				<!--lista de cursos de navegacion
				traidos desde php-->
				<?php
					#consulta a la base de datos
					#cursos representa la consulta a la bd
					#curso representa los elementos recorridos en el loop
					$cursos=mysql_query('SELECT * FROM cursos',$conexion);
					if (!$cursos) 
					{
						die("No se ha podido realizar la consulta:".mysql_error());
					}
					#si se ejecuto la consulta entra al loop y busca los cursos
					while ($curso=mysql_fetch_array($cursos)) 
					{
						# imprime la lista de cursos
						echo "<li>{$curso['nombre']}.</li>";

						
						#imprimiendo la lista de capitulos (ul)
						echo "<br>";
						echo "<ul class='capitulos'>";
						#buscando los capitulos tantos cursos haya
						$capitulos=mysql_query('SELECT nombre FROM capitulos WHERE cursos_id='.$curso['id'],$conexion);
						if (!$capitulos) 
						{
						die("No se ha podido realizar la consulta:".mysql_error());
						}
					while ($capitulo=mysql_fetch_array($capitulos)) 
					{
						# imprime la lista de capitulos usando html y php
						echo  "<li>{$capitulo['nombre']}.</li>";
					}
					#cierre de la lista de capitulos(ul)
					echo "</ul>";
					echo "<br>";
					
					}


				 ?>
				</ul> <!--lista desordenada .cursos-->
			</td>
			<td id="pagina"><h2>Ediciòn de contenidos</h2>
			
			
			</td>

		</tr>
			
		</table>


<?php require_once 'includes/footer.php';  ?>