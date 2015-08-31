<?php 



	if(file_exists("visitas.txt")){ // me fijo si existe el archivo visitas

		$abrirArchivo = fopen("visitas.txt", "r"); // si existe lo abro
		$cant = fgets($abrirArchivo); // en una variable pongo el contenido
		fclose($abrirArchivo); // lo cierro
	}else{

		$cant = 0; // si no existe siginfiica que tiene 0 visitas y lo pongo en la variable

	}

$cant++;  // incremento la canitdada de visitas en uno pq esto se ejecuta cada vez que entro al sitio

$abrirArchivo = fopen("visitas.txt", "w");  // abro el archivo nuevamente pero para escribirlo ( actualizar las cantidades)
fwrite($abrirArchivo, $cant); // escribo en el archivo la cantidad de visitas
fclose($abrirArchivo); // cierro el archivo

echo "Cantidad de visitas: $cant"; // mustro la cantidade de visitas










 ?>