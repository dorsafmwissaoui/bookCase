<html>
<head>
</head>
<body>
<?php
$connect = mysqli_connect("localhost", "dorsaf", "dorsaf@1990", "shopping") or
die("Please, check your server connection.");
$query = "SELECT item_code, item_name, description, imagename, price FROM
products";
$results = mysqli_query($connect, $query) or die(mysql_error());
echo "<table border=\"0\">";
$x=1;
echo "<tr>";
while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) {
if ($x <= 4)
{
$x = $x + 1;
extract($row);
echo "<td style=\"padding-right:15px;\">";
echo "<a href=itemdetails.php?itemcode=$item_code>";
echo '<img src=' . $imagename . 'style="max-width:220px;max-height:240px;
width:auto;height:auto;"></img><br/>';
echo $item_name .'<br/>';
echo "</a>";
echo '$'. $price .'<br/>';
echo "</td>";
}
else
{
$x=1;
echo "</tr>";
}
}
echo "</table>";
?>
</body>
</html>

