<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Página de Teste</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	Search: <input type="search" name="search"><br> <!-- input de procura, agora padrão no html5 -->
	<form method="POST">
		Email: <input type="email" name="email" required=""> < input de email, com validação do formato, agora <em>padrão html5</em> <!-- required = exige o preenchimento do campo, função padrão do html5, antes feita em JS--><br>
		URL: <input type="url" name="url"> < input de url, com validação de formato, agora <em>padrão html5</em><br>
		Telefone: <input type="tel" name="tel"> < input de telefone, no celular ele abre o teclado de números, agora <em>padrão html5</em><br>
		Number: <input type="number" name="number"> < agora no <em>padrão html5</em> ele mostra dois botões, para diminuir e aumentar o valor, e no celular abre o teclado numérico, tudo por <em>padrão html5</em><br>
		Range: <input type="range" name="range" min="0" max="10"> < slider <em>padrão html5</em>, especificando um minimo e um máximo<br>
		Date: <input type="date" name="date"> < valida o formato de data e mostra um botão onde pode selecionar um dia em um calendário, tudo por <em>padrão html5</em><br>
		Month: <input type="month" name="month"> < valida o formato de mês e mostra um botão onde pode selecionar um dia em um calendário, tudo por <em>padrão html5</em><br>
		Week: <input type="week" name="week">< valida o formato de semana e mostra um botão onde pode selecionar um dia em um calendário, tudo por <em>padrão html5</em><br>
		Time: <input type="time" name="time"> < valida o formato de hora e mostra dois botões, para diminuir e aumentar o valor, tudo por <em>padrão html5</em><br>
		Datetime-local <input type="datetime-local" name="datetime-local"> < soma as funções dos campos date e time<br>
		Color <input type="color" name="color"> < mostra uma cor e permite selecionar outras cores em uma janela, função <em>padrão html5</em><br>
		<input type="submit" value="Enviar">
	</form>

</body>
</html>