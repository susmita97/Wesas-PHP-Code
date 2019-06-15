<?php
	
	include 'scripts/config.php';

	if(isset($_POST['submit'])){
		
		$sub_name = $_POST['sub_name'];
		$sub_email = $_POST['sub_email'];
		$sub_message = $_POST['sub_message'];
		
		
		
		if($sub_name=='' OR $sub_email=='' OR $sub_message=='')
		{
			echo "<script>alert('please fill all the fields')</script>";
			die();
		}
		else{
			
			$insert_query = "insert into subscribers(subscriber_name,subscriber_email,subscriber_message) values('$sub_name','$sub_email','$sub_message')";
		}
		if(mysqli_query($conn,$insert_query))
		{
			echo "<script>alert('You have now subscribed')</script>";
		}
		else{
			echo "Dieing";
			die();
		}
	}
		
      
	?>