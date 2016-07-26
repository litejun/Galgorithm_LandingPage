<?php
$conn = mysqli_connect('localhost','root',111111);
mysqli_select_db($conn,'opentutorials');
$name = mysqli_real_escape_string($conn, $_GET['name']);
$password = mysqli_real_escape_string($conn, $_GET['password']);
$sql= "SELECT * FROM user WHERE name='".$name."' AND password='".$password."'";
$result = mysqli_query($conn,$sql);

?>



<!DOCTYPE html> <!-- 어떤 html표준에 따라 표현한것인지 설명, 지금은 html5인 상태임 --!>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>
<body>
	<?php
		$password = $_GET["password"];
if($result->num_rows == "0"){
			echo "주인님 환영합니다";
		} else {
			echo "뉘신지?";
		}
	?>
</body>
</html>
