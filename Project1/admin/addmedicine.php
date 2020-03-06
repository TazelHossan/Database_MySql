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

<?php
//include('header.php');
include('titlehead.php');
?>

<head>
    <link rel="stylesheet" type="text/css" a href="../css/style1.css">
    <link rel="stylesheet" type="text/css"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>


<body>
 <div class="container">
    <div class="login-box">
    <div class="row">
        <div class="login-right">
            <h2> INSERT HERE</h2>
            <form method="post" action="addmedicine.php" enctype="multipart/form-data">
                <div class="form-group">
                     <label>Medicine Id  </label></br>
                    <input type="number" name="mid" placeholder="Enter Medicine Id" required>
                </div>
                 <div class="form-group">
                    <label>Medicine Name</label></br>
                    <input type="text" name="mname" placeholder="Enter Medicine Name" required>
                </div>
				
				<div class="form-group">
                    <label>Medicine Type</label></br>
			        <input type="text" name="mtype" placeholder="Enter Medicine Type" required>
                </div>
				
				<div class="form-group">
                    <label>Medicine Cost</label></br>
			        <input type="text" name="mcost" placeholder="Enter Medicine Cost" required>
                </div>

				
                <div class="form-group">
                    <label>Availability</label></br>
			        <input type="text" name="mav" placeholder="Enter Medicine Availability" required>
                </div>


                <div class="form-group">
                    <label>Medicine Image</label>
			        <label><input type="file" name="mimg"></label>
                </div>

				<input type="submit" name="submit" value="SUBMIT">
				
                
            </form>
        </div>
    </div>


</body>
</html>

<?php
	if(isset($_POST['submit']))
	{
	include('../dbcon.php');
	$id=$_POST['mid'];
	$name=$_POST['mname'];
	$ty=$_POST['mtype'];
	$cost=$_POST['mcost'];
	$av=$_POST['mav'];
	$im =$_FILES['mimg']['name'];
	$tempname=$_FILES['mimg']['tmp_name'];
	move_uploaded_file($tempname,"../dataimg/$im");
	
	$qry=" INSERT INTO medicine(mid,mname,mtype,mcost,mav,mimg)VALUES('$id','$name','$ty','$cost','$av','$im')";
	$run = mysqli_query($con,$qry);
	
		if($run==true)
		{
		?>
		<script>
		 alert('Data inserterd successfully');
		</script>
		
		<?php
		}

}
?>
