<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>ConstruWeb</title>
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
			<h3>Mis tres Ejercicios de PHP</h3>
			<article class="serv1">
				<h4>P1 preguntas y Respuestas</h4>
				
				<p>
				¿Para que sirven los operadores logicos en programación? 
				 Sirven para las sentencias falso o verderadero, tambien las de mayor o menor que.
				</p>
				<h4>Conclusiones </h4>
				<p>
				 En conclusión, Los operadores lógicos permiten agrupar expresiones lógicas.
				 Las expresiones lógicas son todas aquellas expresiones que obtienen como
				 resultado verdadero o falso.
				 Los operadores lógicos son aquellos que hacen de nexo de este tipo de expresiones.
				</p>
				<figure>
					<img src="imagenes/logicos.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P2 preguntas y Respuestas</h4>
				<p>¿Qué es un Switch case?
				se utiliza para agilizar la toma de decisiones múltiples,
				trabaja de la misma manera que lo harían sucesivos como if.
				</p>
				<h4>Conclusiones </h4>
				<p>
				En conclusión, Switch case es una estructura de control empleada en programación,
				se utiliza para agilizar la toma de decisiones múltiples,
				trabaja de la misma manera que lo harían sucesivos if, if else o until anidados,
				así como combinaciones propias de determinados lenguajes de programación.
				</p>
				<figure>
					<img src="imagenes/switch.png" alt="">
				</figure>
			</article>
			<article class="serv1">
				<h4>P3 preguntas y Respuestas</h4>
				<p>
				¿Cómo funciona el Switch case? 
				La variable <var> se evalúa y compara sucesivamente con todas las constantes que aparecen junto a la palabra reservada case. 
				</p>
				<h4>Conclusiones </h4>
				<p>
				En conclusión, Si alguna de ellas es igual al valor de <var> se ejecuta la sentencia
				o bloque de sentencias correspondientes.
				Si no aparece la palabra reservada break,
				continúa la comparación con el resto de las opciones.
				Si aparece break, se termina la ejecución de la estructura switch.
				La opción default, es opcional, indica la sentencia que se ejecuta en caso de que el valor
				de la variable <var> no se corresponda con ninguna de las constantes expresadas.
				La estructura switch no permite que dos constantes tengan el mismo valor.
				Si se evalúan constantes de caracteres, se emplean sus equivalentes numéricos.
				</p>
				<figure>
					<img src="imagenes/switch2.png" alt="">
				</figure>
			</article>
		</section>
		<?php
			include "includes/footer.php";
		?>
</body>
</html>