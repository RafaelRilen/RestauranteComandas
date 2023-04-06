<!doctype html>
<html lang="pt">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Restaurante · Bootstrap</title>
	<?php
		echo $this->Html->css('bootstrap.min.css');
		echo $this->Html->css('starter-template.css');
	?>

</head>

<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
		<a class="navbar-brand" href="#">Restaurante</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsExampleDefault">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<?php echo $this->Html->link('Pedidos', '/pedidos', array('class' => 'nav-link')) ?>
				</li>
				<li class="nav-item active">
					<?php echo $this->Html->link('Usuários', '/usuarios', array('class' => 'nav-link')) ?>
				</li>
			</ul>
		</div>
	</nav>

	<main role="main" class="container" id="content">
		<?php
		echo $this->Flash->render();
		echo $this->fetch('content');
		?>
	</main>
	<?php
		echo $this->Html->script('jquery-3.4.1.min.js');
		echo $this->Html->script('bootstrap.bundle.min.js');
		echo $this->Js->writeBuffer();
	?>
	<!-- <script>
		$(document).ready(function() {
			$('#link-').on('click', function (event) {
				event.preventDefault();
				console.log('ok');
				$.ajax({
					type: 'get',
					url: '/restaurante/pedidos/view/',
					success: function (content) {
						$('#content').html(content);
					}
				});
			});
		});
	</script> -->
</body>

</html>
