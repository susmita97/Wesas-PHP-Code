<!DOCTYPE html>
  <html>
    <head>
      
	  <?php include 'scripts/mainscript.php';?>
	  
	  <title>Services</title>
	  

    </head>

    <body>
	
	
    <?php include 'components/navbar.php';?>
      
	 <div="container">
	 <div class="section">
	 <div class ="row">
	 <div class="col s12 center">
     <img class="responsive-img" src="https://lorempixel.com/580/250/nature/4">
	 <div class="caption center-align">
          <h3>Webbed Services And Softwares</h3>
          <h5>Services We Offer</h5><br>
     </div>
	 </div>
	 </div>
	 </div>
	 </div>
     
	 <?php include 'components/floatingactionbtn.php';?>
     
     
	 
	<div class="container">
    <div class="section">
		
      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>What We Do</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>
      
	<div class="container">
    <div class="section">
	    <div class="row">
          <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Services We Offer</h4><br><br>
		  
		  <?php 
		$conn = mysqli_connect("localhost:8111","root","","wesasweb");
		
		$service_query = "select *from services";
		
		$run_result = mysqli_query($conn,$service_query);
		
		if(mysqli_num_rows($run_result)<1){
	
	     echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
	     exit();
	
	    }
		
		$num_rows = mysqli_num_rows($run_result);
		
		
		for($i=0;$i<$num_rows;$i++)
		{	
			$row_result=mysqli_fetch_assoc($run_result);
			$service_id = $row_result['service_id'];
			$service_name = $row_result['service_name'];
			$service_desc = $row_result['service_desc'];
			$service_link = $row_result['service_link'];
			$service_image = $row_result['service_image'];
		?>
		  
              <div class="row">
				  <!--card 1-->
			      <div class="col s12 m4">
                  <div id="1" class="card hoverable">
                  <div class="card-image">
                  <img src="<?php echo "$service_image" ?>">
                  <span class="card-title"><?php echo "$service_name" ?></span>
                  </div>
                  <div class="card-content">
                  <p><?php echo "$service_desc" ?></p>
                  </div>
                  <div class="card-action">
                  <a href="<?php echo "$service_link" ?>">This is a link</a>
                  </div>
                  </div>
                  </div>
				  <?php
					$i++;
					$row_result=mysqli_fetch_assoc($run_result);
					$service_id = $row_result['service_id'];
					$service_name = $row_result['service_name'];
					$service_desc = $row_result['service_desc'];
					$service_link = $row_result['service_link'];
					$service_image = $row_result['service_image'];
					
				  ?>
				  
				  <!--card 2-->
			      <div class="col s12 m4">
                  <div id="2" class="card hoverable">
                  <div class="card-image">
                  <img src="<?php echo "$service_image" ?>">
                  <span class="card-title"><?php echo "$service_name" ?></span>
                  </div>
                  <div class="card-content">
                  <p><?php echo "$service_desc" ?></p>
                  </div>
                  <div class="card-action">
                  <a href="<?php echo "$service_link" ?>">This is a link</a>
                  </div>
                  </div>
                  </div>
				  <?php
					$i++;
					$row_result=mysqli_fetch_assoc($run_result);
					$service_id = $row_result['service_id'];
					$service_name = $row_result['service_name'];
					$service_desc = $row_result['service_desc'];
					$service_link = $row_result['service_link'];
					$service_image = $row_result['service_image'];
					
				  ?>
				  <!--card 3-->
			      <div id="3" class="col s12 m4">
                  <div class="card hoverable">
                  <div class="card-image">
                  <img src="<?php echo "$service_image" ?>">
                  <span class="card-title"><?php echo "$service_name" ?></span>
                  </div>
                  <div class="card-content">
                  <p><?php echo "$service_desc" ?></p>
                  </div>
                  <div class="card-action">
                  <a href="<?php echo "$service_link" ?>">This is a link</a>
                  </div>
                  </div>
                  </div>
				  <?php 
					break;}
				  ?>
			 </div>
		  </div>
		</div>
		<div class="row">
          <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Our Previous Works</h4><br><br>
              <div class="row">
			  
			  <?php 
		
  
		        $previouswork_query = "select *from previouswork";
		
				$run_result1 = mysqli_query($conn,$previouswork_query);
		
				if(mysqli_num_rows($run_result1)<1){
	
				echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
				exit();
	
				}
				
				$num_rows1 = mysqli_num_rows($run_result1);
				
				for($j=0;$j<$num_rows1;$j++)
				{
					$row_result1=mysqli_fetch_assoc($run_result1);
					$work_id = $row_result1['work_id'];
					$work_name = $row_result1['work_name'];
					$work_desc = $row_result1['work_desc'];
					$work_link = $row_result1['work_link'];
					$work_image = $row_result1['work_image'];
				?>
			  		  
			  
	  <!--card 1-->
	  <div class="col s12 m4">
	  <div id="1" class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo "$work_image" ?>">
      </div>
      <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo "$work_link" ?>">This is a link</a></p>
      </div>
      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">close</i></span>
      <p><?php echo "$work_desc" ?></p>
      </div>
      </div>
	  </div>
	  <?php 
		
		$j++;
		$row_result1=mysqli_fetch_assoc($run_result1);
		$work_id = $row_result1['work_id'];
		$work_name = $row_result1['work_name'];
		$work_desc = $row_result1['work_desc'];
		$work_link = $row_result1['work_link'];
		$work_image = $row_result1['work_image'];
	  
	  ?>
	  
	  <!--card 2-->
	  <div class="col s12 m4">
	  <div id="2" class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo "$work_image" ?>">
      </div>
      <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo "$work_link" ?>">This is a link</a></p>
      </div>
      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">close</i></span>
      <p><?php echo "$work_desc" ?></p>
      </div>
      </div>
	  </div>
	  
	  <?php 
		
		$j++;
		$row_result1=mysqli_fetch_assoc($run_result1);
		$work_id = $row_result1['work_id'];
		$work_name = $row_result1['work_name'];
		$work_desc = $row_result1['work_desc'];
		$work_link = $row_result1['work_link'];
		$work_image = $row_result1['work_image'];
	  
	  ?>
	  
	  <!--card 3-->
	  <div class="col s12 m4">
	  <div id="3" class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo "$work_image" ?>">
      </div>
      <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo "$work_link" ?>">This is a link</a></p>
      </div>
      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">close</i></span>
      <p><?php echo "$work_desc" ?></p>
      </div>
      </div>
	  </div>
	  
	  <?php 
		
		$j++;
		$row_result1=mysqli_fetch_assoc($run_result1);
		$work_id = $row_result1['work_id'];
		$work_name = $row_result1['work_name'];
		$work_desc = $row_result1['work_desc'];
		$work_link = $row_result1['work_link'];
		$work_image = $row_result1['work_image'];
	  
	  ?>
	  
	  <!--card 4-->
	  <div class="col s12 m4">
	  <div id="4" class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo "$work_image" ?>">
      </div>
      <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo "$work_link" ?>">This is a link</a></p>
      </div>
      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">close</i></span>
      <p><?php echo "$work_desc" ?></p>
      </div>
      </div>
	  </div>
	  
	  <?php 
		
		$j++;
		$row_result1=mysqli_fetch_assoc($run_result1);
		$work_id = $row_result1['work_id'];
		$work_name = $row_result1['work_name'];
		$work_desc = $row_result1['work_desc'];
		$work_link = $row_result1['work_link'];
		$work_image = $row_result1['work_image'];
	  
	  ?>
	  
	  <!--card 5-->
	  <div class="col s12 m4">
	  <div id="5" class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo "$work_image" ?>">
      </div>
      <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo "$work_link" ?>">This is a link</a></p>
      </div>
      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">close</i></span>
      <p><?php echo "$work_desc" ?></p>
      </div>
      </div>
	  </div>
	  
	  <?php 
		
		$j++;
		$row_result1=mysqli_fetch_assoc($run_result1);
		$work_id = $row_result1['work_id'];
		$work_name = $row_result1['work_name'];
		$work_desc = $row_result1['work_desc'];
		$work_link = $row_result1['work_link'];
		$work_image = $row_result1['work_image'];
	  
	  ?>
	  
	  <!--card 6-->
	  <div class="col s12 m4">
	  <div id="6" class="card hoverable">
      <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="<?php echo "$work_image" ?>">
      </div>
      <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">more_vert</i></span>
      <p><a href="<?php echo "$work_link" ?>">This is a link</a></p>
      </div>
      <div class="card-reveal">
      <span class="card-title grey-text text-darken-4"><?php echo "$work_name" ?><i class="material-icons right">close</i></span>
      <p><?php echo "$work_desc" ?></p>
      </div>
      </div>
	  </div>
	  
	  <?php 
				}
	  ?>
	  
	  </div>
	  
    </div>
  </div>
		  </div>
		</div>
	</div>
	</div>
	
	<div class="container">
      <div class="row">
	    <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>What Our Clients Have To Say About Us</h4><br>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolor ducimus
                doloremque, autem dolores beatae eaque saepe repudiandae veritatis corporis amet deserunt nemo aliquam
                rerum?</p><br><br><br>
        </div>
		
		<div class="col s12 l12">
          <div class="carousel carousel-slider center" data-indicators="true">
            <div class="carousel-fixed-item center">
            </div>
			
            <div class="carousel-item" href="#one!">
			  <div class="col s5 center">
			  <img src="https://lorempixel.com/250/250/nature/1"></div>
			  
              <h2 class="center">Sara Doe</h2>
              <p class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias dolor ducimus
                doloremque, autem dolores beatae eaque saepe repudiandae veritatis corporis amet deserunt nemo aliquam
                rerum?</p>
			  
            </div>
            <div class="carousel-item" href="#two!">
			  <div class="col s5 center">
			  <img src="https://lorempixel.com/250/250/nature/2"></div>
			  
              <h2>John Doe</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, aliquam quidem
                quibusdam ad sed totam.</p>
			  
            </div>
            <div class="carousel-item" href="#three!">
			  <div class="col s5 center">
			  <img src="https://lorempixel.com/250/250/nature/3"></div>
              <h2>Mark Zuckerberg</h2>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam quibusdam unde a
                corporis expedita minima sunt ipsam illo facilis corrupti excepturi quod, amet dolorum iste.</p>
			  
            </div>

          </div>
		  
        </div>
		
      </div>
    </div>
	
	 <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Find An Estimate</h4>
          <p>Select Services You Want and Find an Estimate Charge To Further Evaluate Your Needs<br><br><br></p>
		  <a class="waves-effect waves-light btn" href="pricecal.php">Get An Estimate</a>
          
      

       </div>
     </div>
	 
	 <?php include 'components/enquiryform.php';?>
	   
    <?php include 'components/footer.php';?>
	

   
   <script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>
	
	<script>
	  $(document).ready(function(){
      $('.carousel').carousel();
    });
	</script>
	
    </body>
  </html>
  
	<?php
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
        