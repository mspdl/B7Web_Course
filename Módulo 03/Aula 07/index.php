<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página de Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<audio controls autoplay loop mute preload> <!-- tag para inserir um audio, sem parametros nada aparece. controls = mostra os controles; autoplay = inicia o som quando acessar a página; quando terminar vai começar novamente; muted = volume começa com 0; preload = inicia a baixar o conteúdo da tag -->
		<source src="som.mp3" type="audio/mpeg"> <!-- todo mp3 é mpeg, mas a tag tbm suporta ogg e wav, necessario mudar o type para audio/ogg e audio/wav sucessivamente -->
	</audio>
</body>
</html>