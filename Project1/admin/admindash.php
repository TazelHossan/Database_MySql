<?php
session_start();
if(isset($_SESSION['uid']) )
{
	echo "error";
}
else
{
	//echo $_SESSION['uid'];
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>
 <link rel="stylesheet" type="text/css" href="../css/logout.css">
 <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body>
<div class="main_body">
 <div class="center_body">
  <a href="../login.php" target="_blank">Logout</a>
 </div>
</div>
</body>
</html>


<html>
<head>
    <title>pms</title>
    <link rel="stylesheet" type="text/css" href="../css/pms.css">
</head>
<body>
<header>
    <div class="main">
        <div class="logo">
            <img src="logo.png">
        </div>
        <ul>
            <li class="active"><a href="#">Home</a> </li>
            <li><a href="#">Services</a> </li>
            <li><a href="#">Gallery</a> </li>
            <li><a href="#">About</a> </li>
            <li><a href="#">Contact</a> </li>
        </ul>
    </div>
    <div class="title">
        <h1>Welcome To PMS Dashboard</h1>
    </div>
    <div class="button">
        <a href="addmedicine.php" class="btn">INSERT MEDICINE</a>
        <a href="updatemedicine.php" class="btn">DISPLAY MEDICINE</a>
        <a href="search.php" class="btn">SEARCH MEDICINE</a>
        <a href="deletemedicine.php" class="btn">DELETE MEDICINE</a></br></br></br>
		
		<a href="summary.php" class="btn">DAY MEDICINE SUMMARY</a>
        <a href="manager.php" class="btn">EMPLYEE INFO</a>
        <a href="disposal.php" class="btn">SEARCH DISPOSAL</a>
        <a href="purchase.php" class="btn">ORDER DETAILS</a></br>
    </div>
</header>
</body>

</html>