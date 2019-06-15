<!DOCTYPE html>
  <html>
    <head>
      
	  <?php include 'scripts/mainscript.php';?>
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  
	  <title>Price Calculator</title>
	  

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
          <h5>Calculate Charges</h5><br>
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
          
          <h4>Try Out Our Price Calculator</h4>
          <p class="left-align light">We have designed a price calculator tailored just for you keeping in mind your requirements and budgets.Here are the services we offer.
		  You can choose exactly the services you want and calculate the money it will cost you.<br><br><br></p></div>
      </div>

      </div>
  
      
	<div class="row">
        <div class="col s12 center">
          
	    <?php 
		$conn = mysqli_connect("localhost:8111","root","","wesasweb");
		
		$service_query1 = "select *from services";
		
		$run_result1 = mysqli_query($conn,$service_query1);
		
		if(mysqli_num_rows($run_result1)<1){
	
	     echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
	     exit();
	
	    }
		
		$num_rows1 = mysqli_num_rows($run_result1);
		
		
		for($j=0;$j<$num_rows1;$j++)
		{	
			$row_result1=mysqli_fetch_assoc($run_result1);
			
			$service_name = $row_result1['service_name'];
			$service_desc = $row_result1['service_desc'];
			
		?>
		  
          <h4>A Brief Description Of Our Services<br><br><br></h4>
          <ul class="collapsible hoverable">
		  <li>
		  <div class="collapsible-header"><i class="material-icons">details</i><?php echo "$service_name"; ?></div>
          <div class="collapsible-body"><span><?php echo "$service_desc"; ?></span></div>
		  </li>
		  
		   <?php
					$j++;
					$row_result1=mysqli_fetch_assoc($run_result1);
					$service_name = $row_result1['service_name'];
					$service_desc = $row_result1['service_desc'];
			?>
		  
		  <li>
          <div class="collapsible-header"><i class="material-icons">details</i><?php echo "$service_name"; ?></div>
          <div class="collapsible-body"><span><?php echo "$service_desc"; ?></span></div>
		  </li>
		  
		    <?php
					$j++;
					$row_result1=mysqli_fetch_assoc($run_result1);
					$service_name = $row_result1['service_name'];
					$service_desc = $row_result1['service_desc'];
					
					
			?>
		  
          <li>
          <div class="collapsible-header"><i class="material-icons">details</i><?php echo "$service_name"; ?></div>
          <div class="collapsible-body"><span><?php echo "$service_desc"; ?></span></div>
		  </li>
		  
		    <?php
					$j++;
					$row_result1=mysqli_fetch_assoc($run_result1);
					$service_name = $row_result1['service_name'];
					$service_desc = $row_result1['service_desc'];
					
					
			?>
		  
		  <li>
          <div class="collapsible-header"><i class="material-icons">details</i><?php echo "$service_name"; ?></div>
          <div class="collapsible-body"><span><?php echo "$service_desc"; ?></span></div>
		  </li>
		    <?php
					$j++;
					$row_result1=mysqli_fetch_assoc($run_result1);
					$service_name = $row_result1['service_name'];
					$service_desc = $row_result1['service_desc'];
					
					
			?>
		  <li>
          <div class="collapsible-header"><i class="material-icons">details</i><?php echo "$service_name"; ?></div>
          <div class="collapsible-body"><span><?php echo "$service_desc"; ?></span></div>
		  </li>
		  
		  <?php
		      }
		  ?>
		  
          </ul>
      </div>

      
    </div>
	</div>
	</div>
	
	<div class="container">
	<div class="section">
    <div class="row">
        <div class="col s12 center">
          
		  <?php 
		
		
		$service_query3 = "select *from serviceprices";
		
		$run_result3 = mysqli_query($conn,$service_query3);
		
		if(mysqli_num_rows($run_result3)<1){
	
	     echo "<center><b>Oops! sorry, nothing was found in the database!</b></center>";
	     exit();
	
	    }
		
		$num_rows3 = mysqli_num_rows($run_result3);
		
		
		for($k=0;$k<$num_rows3;$k++)
		{	
			$row_result3=mysqli_fetch_assoc($run_result3);
			
			$service_name = $row_result3['service_name'];
			$service_price = $row_result3['service_price'];
			
		?>
		  
          <h4>Choose Services You Want<br></h4>
          <div class="input-field col s12 center">
          <select multiple id="selectoption">
          <option disabled selected>Services</option>
          <option class="summable" value="1">Frontend</option>
		  
		  <?php 
			  $k++;
			  $row_result3=mysqli_fetch_assoc($run_result3);
			
			  $service_name = $row_result3['service_name'];
			  $service_price = $row_result3['service_price'];
		  ?>
		  
          <option class="summable" value="2">Backend</option>
		  
		  <?php 
			  $k++;
			  $row_result3=mysqli_fetch_assoc($run_result3);
			
			  $service_name = $row_result3['service_name'];
			  $service_price = $row_result3['service_price'];
		  ?>
		  
          <option class="summable" value="3">UI/UX Design</option>
		  
		  <?php 
			  $k++;
			  $row_result3=mysqli_fetch_assoc($run_result3);
			
			  $service_name = $row_result3['service_name'];
			  $service_price = $row_result3['service_price'];
		  ?>
		  
		  <option class="summable" value="4">Mobile App</option>
		  
		  <?php 
			  $k++;
			  $row_result3=mysqli_fetch_assoc($run_result3);
			
			  $service_name = $row_result3['service_name'];
			  $service_price = $row_result3['service_price'];
		  ?>
		  
		  <option class="summable" value="5">Cloud</option>
		  
		  <?php 
			}
		  ?>
		  
          </select>
		  <br><br><br>
		  <button id="cal" name="calcharge" type="submit" class="waves-effect waves-light btn">Calculate Charges</button>
		  <br><br><br>
          </div>

		  <br><br><br>
		  <h4>The Charges Would Be<br><br><br></h4>
		  
		  <div id="result"></div>
		  <font size=9>
		  <div id="result1" class="teal lighten-2 white-text"></div>
		  </font>
        </div>
    </div>
	
	 
	<div class="row">
        <div class="col s12 center">
          
          <h4>Contact Us</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
		  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          <br><br><br></p>
		  <a class="waves-effect waves-light btn" href="contactus.php">Contact Details</a>
          <br><br><br>
      

       </div>
     </div>
	 </div>
	 </div>
	  
	  
    <?php include 'components/footer.php';?>
	
	
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>

   
	
	<?php
	
		
		
		$service_query = "select *from serviceprices";
		
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
			$service_price = $row_result['service_price'];
		?>
		
		
	<script>
		$(document).ready(function () {
		$('select').material_select();
		});
		var PClevel;
		$(document).ready(function() {
		$('#cal').click(function() {
        PClevel = $("#selectoption option:selected").text();
        //$('#result').append('Level ' + PClevel); 
		
		var option1="<?php echo "$service_name"; ?>";
		var price1=<?php echo "$service_price"; ?>;
		
		
		<?php
					$i++;
					$row_result=mysqli_fetch_assoc($run_result);
					$service_id = $row_result['service_id'];
					$service_name = $row_result['service_name'];
					$service_price = $row_result['service_price'];
					
		?>
		
		var option2="<?php echo "$service_name"; ?>";
		var price2=<?php echo "$service_price"; ?>;
		
		<?php
					$i++;
					$row_result=mysqli_fetch_assoc($run_result);
					$service_id = $row_result['service_id'];
					$service_name = $row_result['service_name'];
					$service_price = $row_result['service_price'];
					
		?>
		
		var option3="<?php echo "$service_name"; ?>";
		var price3=<?php echo "$service_price"; ?>;
		
		<?php
					$i++;
					$row_result=mysqli_fetch_assoc($run_result);
					$service_id = $row_result['service_id'];
					$service_name = $row_result['service_name'];
					$service_price = $row_result['service_price'];
					
		?>
		
		var option4="<?php echo "$service_name"; ?>";
		var price4=<?php echo "$service_price"; ?>;
		
		<?php
					$i++;
					$row_result=mysqli_fetch_assoc($run_result);
					$service_id = $row_result['service_id'];
					$service_name = $row_result['service_name'];
					$service_price = $row_result['service_price'];
					
		?>
		
		var option5="<?php echo "$service_name"; ?>";
		var price5=<?php echo "$service_price"; ?>;
		
		<?php 
			}
		?>
		
		var sum=0.00;
		
		if((new RegExp(option1)).test(PClevel))
		{
			sum += price1;
			//window.print();
		}
		
		
		if((new RegExp(option2)).test(PClevel))
		{
			sum += price2;
		}
		
		
		
		if((new RegExp(option3)).test(PClevel))
		{
			//$('#result1').append('Level ' + sum);
			sum += price3;
		}
		
		if((new RegExp(option4)).test(PClevel))
		{
			sum += price4;
		}
		
		
		
		if((new RegExp(option5)).test(PClevel))
		{
			sum += price5;
		}
		
		
		 $('#result1').append('Rs.' + sum);
		});
	});
	</script>
	
	
	
    </body>
  </html>
        