<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"ssms");
	$query = "insert into students values('',$_POST[roll_no],'$_POST[name]','$_POST[father_name]',$_POST[year],'$_POST[mobile]','$_POST[email]','$_POST[password]','$_POST[task assigned]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "admin_dashboard.php";
</script>
