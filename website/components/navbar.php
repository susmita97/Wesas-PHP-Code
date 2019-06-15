<nav class="transparent">
    <div class="nav-wrapper teal lighten-2">
     <a href="#" class="brand-logo">WESAS</a>
	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     <ul id ="nav-mobile" class="right hide-on-med-and-down">

       <li><a href="index.php">Home</a></li>
       <li><a href="aboutus.php">About Us</a></li>
       <li><a href="service.php">Services</a></li>
	   <li><a href="pricecal.php">Price Calculator</a></li>
       <li><a href="contactus.php">Contact Us</a></li>
     </ul>
	</div>
    </nav>
	 
    <ul class="sidenav" id="mobile-demo">
      <li><a href="index.php">Home</a></li>
      <li><a href="aboutus.php">About Us</a></li>
      <li><a href="service.php">Services</a></li>
      <li><a href="pricecal.php">Price Calculator</a></li>
	  <li><a href="contactus.php">Contact Us</a></li>
    </ul>
	
	<script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>