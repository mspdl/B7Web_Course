<?php 

// do the connection
try {
	$dsn = "mysql:dbname=blog;host=localhost";
	$dbuser = "root";
	$dbpass = "root123";
	$pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOException $e) {
	die($e->getMessage());
}

// get the quantity of registers
$sql = "SELECT COUNT(*) as c FROM posts";
$sql = $pdo->query($sql);
$sql = $sql->fetch();
$total = $sql['c'];

$titles_per_page = 5;
$pages = $total/$titles_per_page; // calcule the page's quantity
$p = 0; // actual sql LIMIT value

// get the page by the link
$pg = 1; // start in page 1
if (isset($_GET['p']) && !empty($_GET['p'])) {
	$pg = addslashes($_GET['p']);
}
$p = ($pg - 1) * $titles_per_page; // set the sql LIMIT according the page by the link

// consult sql and fill HTML with the query result
$sql = "SELECT * FROM posts LIMIT $p, $titles_per_page";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0){
	foreach ($sql->fetchAll() as $item) {
		echo $item['id']. ' - '.$item['title'].'<br>';
	}
}

// show the pagination
echo "<hr>";
for($q=0;$q<$pages;$q++) {
	echo '<a href="./?p='.($q+1).'">['.($q+1).']</a> ';
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 32 - Pagination</title>
	</head>
	<body>

	</body>
</html>