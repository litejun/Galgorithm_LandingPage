<!DOCTYPE html> <!-- 어떤 html표준에 따라 표현한것인지 설명, 지금은 html5인 상태임 --!>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body>
	<h1>JavaScript</h1>
	<ul>
	<script>
list = new Array("최유빈","최진혁", "한이람", "한이은","이고잉");
i = 0;
while(i < list.length){
	document.write("<li>"+list[i]+"</li>");
	i = i + 1;
}
	</script>

	<h1>php</h1>
	<ol>
	<?php
		$list = array("one","two","three");
		$i = 0;
		while($i < count($list)){
			echo "<li>".$list[$i]."</li>";
			$i = $i + 1;
		}
	?>
	</ol>
</body>
</html>
