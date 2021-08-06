
<?php
session_start();
include_once "database.php";
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$flname=$_REQUEST['fname'];
	$eml=$_REQUEST['emild'];
	$exprf=$_REQUEST['exprc'];
	$adrss=$_REQUEST['address'];
	$choice=implode(',',$_REQUEST['subj'] );

		# code...
	
	
	$mailvrf="select * from cochdata where email='$eml'";
	$em_exst=mysqli_query($connt, $mailvrf);
	if (mysqli_fetch_array($em_exst)>0)
	 {
		echo '<script>alert("Already you have an accout please input another email")</script>';	
		
	}
		else{
			
			$insrt="insert into cochdata 
			values(Null,'".$flname."','".$eml."','".$exprf."','".$adrss."','".$choice."')";
			$vrfstd=mysqli_query($connt, $insrt);
			
		
		header('location:index.php');
		}
}
?>