<div class="links index">
	<h2><?php __('Bienvenido al admin');?></h2>
	<p>Hola! Bienvenido al sistema de administraci&oacute;n de <?php __('System Name');?> . Para empezar, las acciones est&aacute;n en el panel izquierdo, siempre!, y en el panel central se despliegan los listados e informaci&oacute;n importante. Ante cualquier inconveniente, por favor mandame un mail a <a href="mailto:martinbrambati@hotmail.com">martinbrambati@hotmail.com</a>, que soy el responsable por el c&oacute;digo fuente de este sistema. 



El sistema est&aacute; organizado de forma tal que algunos usuarios tengan ciertos roles, por ejemplo, un 'admin' tiene mas privilegios que un 'manager' y un manager tiene mas privilegios que un 'user'.



El &uacute;nico usuario que puede administrar usuarios es el 'admin'.

El 'manager' no puede administrar usuarios pero puede generar contenido.

El rol 'user' solo puede visualizar informaci&oacute;n.

	</p>
	

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<?php
	$i = 0;
	foreach ($links as $link):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<ul>
		<li><?php echo $this->Html->link(__($link['Link']['name'], true), $link['Link']['value']); ?>&nbsp;</li>
	</ul>
		
		
		

<?php endforeach; ?>
</div>