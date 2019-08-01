<?php
echo "taiwan";
$connection = mysqli__connect("8080", "root", "", "dbthree");

$query = "DELETE FROM updateone WHERE ID = '$variableinput'";

$result = mysqli_query($connection, $query);

?>


<html>
<head>
<title>Wedding</title>
<link href="main.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="header">
    <p>Header Text and image here</p>
</div>

<div id="link1">
    <a href="crud.php">Home Page</a>
</div>

</body>




</html>