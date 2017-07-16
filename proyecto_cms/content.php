<?php require_once 'includes/connection_db.php'; ?>
<?php require_once 'includes/functions.php'; ?>
	<?php 
	#Cambios Realizado el domingo 16 de julio de 2017
	include'includes/header.php';  
	?>
	<table id="estructura">
		<tr>
			<td id="menu">
			<ul class="cursos">
				
			
				<!--lista de cursos de navegacion
				traidos desde php-->
				<?php
					
					#Refactorizando
				$cursos=obtener_cursos();
					#se utiliza dentro del loop while
					while ($curso=mysql_fetch_array($cursos)) 
					{
						# imprime la lista de cursos
						echo "<li>{$curso['nombre']}</li><ul class='capitulos'>";


						#se pasa los id de los cursos como parametros
				$capitulos=obtener_capitulos_por_curso($curso['id']);
					while ($capitulo=mysql_fetch_array($capitulos)) 
					{
						# imprime la lista de capitulos usando html y php
						echo  "<li>".$capitulo['nombre']."</li>";
					}
					#cierre de la lista de capitulos(ul)
					echo "</ul>";
					
					}


				 ?>
				</ul> <!--lista desordenada .cursos-->
			</td>
			<td id="pagina"><h2>Ediciòn de contenidos</h2>
			
			
			</td>

		</tr>
			
		</table>


<?php require_once 'includes/footer.php';  ?>