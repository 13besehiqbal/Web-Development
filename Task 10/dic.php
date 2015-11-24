<?php 
if($_GET["word"])
$dataValue = $_GET["word"];
$str = file_get_contents('dee.json');
$json = json_decode($str, true); // decode the JSON into an associative array
if (array_key_exists($dataValue, $json)){
	$value = $json[$dataValue];
  echo $value;
}
else{
	$out = "word NoT found!";
	echo $out;
}
?>
<html>
<head>
</head>

<body>
<form action="<?php $_PHP_SELF ?>" method="GET">
         Word: <input type="text" name="word" />
         <input type="submit" value = "Search"/>
      </form>
</body>
</html>
  