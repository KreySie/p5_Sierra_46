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
				<h3>Problema 2 de Johan Sierra</h3>
				<article class="articulos">	
					<figure>
						<img src="imagenes/codigoswitch.png" alt="">
					</figure>
					<h4>P2 Resultado del codigo</h4>
					<?php
						include "p5_Sierra_46_php/switch.php";
					?>
					<h4>P2 Explicacion del codigo</h4>
					<p>
					Uso de la sentencia SWITCH según el valor de una condicion de una variable, uso de comandos para salirse del codigo.
					</p>
				</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>