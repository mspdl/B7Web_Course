<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página de Teste</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<video width="500" height="500" controls autoplay> <!-- cria uma player de vídeo apenas utilizando html5 --> <!-- Controls mostra os controles do vídeo --> <!-- autoplay inicia o vídeo automaticamente assim que a página for acessada -->
		<source src="video.mp4" type="video/mp4"> <!-- suporte 3 tipos: mp4, ogg e um da apple troxão -->
		<source src="video.ogg" type="video/ogg"> <!-- caso o video não seja compativel com o navegador criar outra tag com outro tipo, mas todos os navegadores suportam mp4-->
	</video>
</body>
</html>