<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Телефоны</title>
</head>

<body>

<?php
$file = file_get_contents('json.txt');
$file = json_decode($file, true);
echo "<pre>";
var_dump($file);
echo "</pre>";
echo "<table>";
foreach($file as $value){
    echo $value["firstName"]." - ".$value["lastName"]." - ".$value["address"]." - ".$value["phoneNumber"]."<br>";
    
}
//echo $file[0]["firstName"];
?>
</table>

</body>
</html>