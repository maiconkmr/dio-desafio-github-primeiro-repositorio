	<!DOCTYPE html>
	<html>
	<head>
		<meta chartset="utf-8" />
		<title>jQuery Accordion</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/flick/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	</head>
	<body>
		<div id="accordionGroup">
		<h1>Primeiro item</h1>
		<div>
			<p>
			Este é o conteúdo do primeiro item
			</p>
		</div>
		<h2>Segundo item</h2>
		<div>
			<p>
			Este é o conteúdo da segunda seção
			</p>
		</div>
		<h3>Último item</h3>
		<div>
			<p>
			Este é o conteúdo da terceira seção
			</p>
		</div>
	</div>
	<script>
		$("#accordionGroup").accordion({"animate": true, "collapsible": true});
		</script>
		</body>
		</html>