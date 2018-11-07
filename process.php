

<?php
	function wronginfo()
{
$required = array('name', 'email', 'glusisSelect');

$wronginfo=false;
foreach ($required as $field) {
	if (empty($_POST[$field])) {
		$wronginfo = true;
	}
}

if ($wronginfo) {
	echo "Error: All fields are required!!";
}else{
	echo "Thank you for filling out the form. You can use this button to head back to the webpage";
}
}

$arry = $_POST['checkbox'];

foreach ($arry as $ar)
{
    echo $ar;
}

?>

<!doctype html>
<html lang="en">
<head>
<meta unicode="utf-8">
<title>After Form</title>
<style type="text/css">

*{
	margin: 0;
	padding: 0;
}

body {
	width: 50%;
}

.wronginfo {
	float:left;
	width: 650px;
	height: 40px;
	margin: 30px;
}

.wronginfo p{
	font-family: tahoma;
	font-size: 25px;
}

.button {
	float: left;
	margin-left: 40px;
	width: 177.91px;
	background-color: rgba(170,170,170,0.1);
	padding: 40px;
	height: 30px;
}


</style>
</head>
<body>
	<div class="wronginfo">

	<?php 
		echo '<p>' .wronginfo(). '</p>'; 
	?>

	</div>
	<div class="button">
		<p><a href="index.php">BACK TO THE WEBSITE</a></p>
	</div>
</body>
</html>