</div>

	<div id="pie">Todos los derechos reservados 2010 </div>
</body>
</html>


<?php 
	#cerrando la conexion a la base de datos
	#comprobando que realmente existe una conexion
	if (isset($conexion)) 
	{
		#cierra la conexion
		mysql_close($conexion);
	}
	
 ?>