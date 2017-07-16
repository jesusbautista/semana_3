<?php 
	#se le pasara como consulta, la variable de curso
	function verificar_consulta($consulta)
	{
		if (!$consulta) //si la consulta es incorrecta devuelve un error
		{
		die("No se ha podido realizar la consulta:".mysql_error());
		}
	}

	//funcion que permite obtener los cursos ojo la funcion verificar_consulta
	//esta aqui
	function obtener_cursos()
	{
		global $conexion;
		#almacenando el query en la variable consulta
		$consulta="SELECT * FROM cursos
		ORDER BY posicion ASC";
		$cursos=mysql_query($consulta,$conexion);
		//llamando a la funcion 
		verificar_consulta($cursos);
		return $cursos;
	}

	function obtener_capitulos_por_curso($curso_id)
	{
		global $conexion;#hay que tener cuidados en la consulta y verificar la bd
		$consulta="SELECT * FROM capitulos
				   WHERE cursos_id={$curso_id}
				   ORDER BY posicion ASC"; #la consulta de estar entre "" no en ''
		$capitulos=mysql_query($consulta,$conexion);
		verificar_consulta($capitulos);
		return $capitulos;
	}
 ?>