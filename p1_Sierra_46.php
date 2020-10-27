<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyectos</title>
	<?php
		include "includes/estilo.php";
	?>
</head>
<body>
	<?php
		include "includes/header.php";
		include "includes/nav.php";
		include "includes/slider.php";
	?>
	<section class="contenido">
				<h3>Problema 1 de Johan Sierra</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/codigologicos.png" alt="">
					</figure>
					<h4>P1 Resultado del codigo</h4>
					<?php
						include "p5_Sierra_46_php/logicos.php";
					?>
					<h4>P1 Explicacion del codigo</h4>
					<p>
					Los  operadores  lógicos  son  usados  para  evaluar  varias  comparaciones,  combinando  los  posibles  valores  de  estas. 
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>