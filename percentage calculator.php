<?php 
	if($_POST){
		$percent = $_POST['percent'];
		$number = $_POST['number'];
		$answer =  ($percent / 100) * $number;
	}
?>
<html>
<head>
<title>Percentage Calculator</title>
</head>
<body>
	<h2>Percentage Calculator <a href="http://www.anilpathak.com.np/">Pathaks Blog</a></h2>
	<form action="" method="post">
		<input size="7" type="text" name="percent" value="<?php echo isset($percent) ? $percent : '';?>" /> % of <input size="10" type="text" name="number" value="<?php echo isset($number) ? $number : '';?>" /> = <input size="14" type="text" name="a-ans" value="<?php echo isset($answer) ? $answer: ''; ?>" class="disabled-cursor" disabled />
		<input value="Calculate" type="submit"  />
	</form>
</body>
</html>