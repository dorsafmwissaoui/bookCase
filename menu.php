<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Dorsaf Online Bookcase</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<script language="JavaScript" type="text/JavaScript">
function makeRequestObject(){
var xmlhttp=false;
try {
xmlhttp = new ActiveXObject('Msxml2.XMLHTTP'); // #1
} catch (e) {
try {
xmlhttp = new
ActiveXObject('Microsoft.XMLHTTP'); // #2
} catch (E) {
xmlhttp = false;
}
}
if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
xmlhttp = new XMLHttpRequest(); // #3
}
return xmlhttp;
}
function updateCart(){ // #4
var xmlhttp=makeRequestObject();
xmlhttp.open('GET', 'countcart.php', true); // #5
xmlhttp.onreadystatechange = function(){ // #6
if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { // #7
var ajaxCart = document.getElementById("cartcountinfo"); // #8
ajaxCart.innerHTML = xmlhttp.responseText;
}
}
xmlhttp.send(null);
}
</script>
</head>
<body>
<table width="100%" cellspacing="0" cellpadding="2">
<col style="width:40%">
<col style="width:40%">
<col style="width:20%">
<tr>
<td style="background-color:black;color:white;"></td>
<td style="background-color:black;color:white;"></td>
<td style="background-color:black;color:white;">
<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}
if (isset($_SESSION['emailaddress']))
{
echo "Welcome " . $_SESSION['emailaddress'] . "&nbsp;&nbsp;&nbsp;"; 
echo "<a href=\"logout.php\">Log Out</a></td></tr>";
}
else
{
echo "<a href=\"signin.php\">Login</a>&nbsp;&nbsp;&nbsp;";
echo "<a href=\"validatesignup.php\">Signup</a></td></tr>";
}
?>



<tr>
<td style="font-size: 35px;color:white;background-color:black;font-family:Arial, Helvetica, sans-serif;"><b>Dodo Online Bookcase</b></td>
<td bgcolor="black">
<form method="post" action="searchitems.php">
<input size="50" type="text" name="tosearch">
<input type="submit" name="submit" value="Search">
</form></td>
<td bgcolor="black" ><a href="cart.php"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="imageshopping/icons8-shopping-cart-50.png"></img><span id="cartcountinfo"></span></a>
</td></tr>
</table>
<div class="container">
<nav>
<ul class="nav">
<li><a href="index.php">Home</a></li>
<li class="dropdown">
<a href="index.php">Categories</a>
<ul>
<li><a href="itemlist.php?category=computerscience">Computer Science</a></li>
<li><a href="itemlist.php?category=fiction">Fiction</a></li>
<li><a href="itemlist.php?category=science">Science</a></li>
<li><a href="index.php">Art</a></li>
</ul>
</li>
<li class="dropdown">
<a href="index.php">Authors</a>
<ul class="large">
<li><a href="index.php">Author1</a></li>
<li><a href="index.php">Author2</a></li>
<li><a href="index.php">Author3</a></li>
<li><a href="index.php">Author4</a></li>
<li><a href="index.php">Author5</a></li>
</ul>
</li>
<li><a href="index.php">New Books</a></li>
</ul>
</nav>
</div>
<br/>