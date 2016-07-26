<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
$result = mysqli_query($conn, "SELECT * FROM topic");require("lib/db.php");

?>


<!DOCTYPE html> <!-- 어떤 html표준에 따라 표현한것인지 설명, 지금은 html5인 상태임 --!>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body id="target">
	<header>
		<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" />
		<h1><a href="http://localhost/index.php">JavaScript</a></h1>
	</header>

	<div id="control">
		<input type="button" value="white" id="white_btn" />
		<input type="button" value="black" id="black_btn"/>
		<a href="http://localhost/write.php">쓰기</a>

	</div>
	<nav>
		<ol>
	<?php
while($row = mysqli_fetch_assoc($result)){
	echo '<li><a href="http://localhost/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
}
?>
	</ol>
	</nav>
<article>
	<form action="process.php" method="post">
		<p>
		제목 : <input type="text" name="title">
		</p>
		<p>
		작성자 : <input type="text" name="author">
		</p>
		<p>
		본문 : <textarea name="description"></textarea>
		</p>
		<input type="submit" name="name">
	</form>

</article>

	<script src="http://localhost/script.js"></script>

</body>
</html>
