<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Телефоны</title>
</head>
<style>
table{
border-collapse: collapse;
}
table td, th{
    border:3px solid black;
    margin:0;
    background: rgb(0, 255, 219);
}
</style>
<body>

<?php
$file = file_get_contents('json.txt');
$file = json_decode($file, true);
echo "<table>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Адрес</th><th>Телефон</th></tr>";
foreach($file as $value){
    ?>
    <tr><td><?php echo $value['firstName'];?></td><td><?php echo $value["lastName"];?></td><td><?php echo $value["address"];?></td><td><?php echo $value["phoneNumber"];?></td></tr>
    <?php
}
?>
</table>

</body>
</html>