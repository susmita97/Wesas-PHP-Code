<!DOCTYPE html>
  <html>
    <head>
      
	  <?php include 'adminscripts/mainscript.php';?>
	  
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
	  
	  <link rel="stylesheet" href="css/commoncss.css">
	  
	  <title>Admin Panel</title>
	  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
	  
	 </head>
	 
	 <body>
	 
	 <?php include 'admincomponents/adminnavbar.php';?>
	 
	 <div class="content bg">
		<div class="container">
		  <div class="row">
		   <br><br><br>
		   <h4 class="white-text">Choose The Field To Which You Wish To Add Records To<br></h4>
          <div class="input-field col s12 center">
          <select id="selectoption">
          <option disabled selected>Fields</option>
          <option value="1">Service</option>
		  <option value="2">Previous Work</option>
		  </select>
		  <br><br><br>
		  <button id="add" name="addrecord" type="submit" class="waves-effect waves-light btn">Add Record</button>
		  <br><br><br>
          </div>

		  <br><br><br>
		  
		  <div id="result"></div>
		  <font size=9>
		  <div id="result1" class="teal lighten-2 white-text"></div>
		  </font>
         </div>
         </div>
		 </div>
		 
		</div>
	</div>
	
	<script>
		$(document).ready(function () {
		$('select').material_select();
		});
	</script>
	
	</body>
	</html>