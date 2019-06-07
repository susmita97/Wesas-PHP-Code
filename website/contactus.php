<!DOCTYPE html>
  <html>
    <head>
      
	  <?php include 'scripts/mainscript.php';?>
	  
	  <title>Contact Us</title>
	  

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
          <h5>Contact Us</h5><br>
     </div>
	 </div>
	 </div>
	 </div>
	 </div>
     
	 <?php include 'components/floatingactionbtn.php';?>
     
     
	 
	 <div="container">
	 <div class="section">
	 <div class ="row">
	 <div class="col s12 center">
     <h3 class="blue-text">Contact Info</h3>
	 <i class="material-icons">place</i>
	 <p>Webbed Services And Softwares<br>
	    86B/3 Topsia Road,<br>
		Krishna Chambers,<br>
		Kolkata.<br></p>
	 <h3 class="blue-text">For More Enquiries</h3>
	 <p>Ashish : (+91) 7980715034, 8582869235<br>
	    Email : ashish@wesas.in<br>
		Business Hours : Monday to Saturday</p>
	 </div>
	 </div>
	 </div>
	 </div>
    
	 <div class="mapouter"><div class="gmap_canvas"><iframe width="1080" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=topsia%20road%20krishna%20chambers%20kolkata&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:1080px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:1080px;}</style></div>
	
	<div class="container">
    <div class="row">
        <div class="col m10 offset-m1 s12 action="aboutus.php" method="post" enctype="multipart/form-data">
            <h2 class="center-align blue-text">Contact Form</h2>
            <div class="row">
                <form class="col m8 offset-m2 s12" action="contactus.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" name="sub_name">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s12">
                            <input id="email" type="email" class="validate" name="sub_email">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col s12">
                          <textarea id="message" class="materialize-textarea" name="sub_message"></textarea>
                          <label for="message">Message</label>
                        </div>
                    </div>
                    
                   
                    <div class="row">
                        <div class="col m12">
                         <p class="right-align"><button class="btn btn-large waves-effect waves-light" type="submit" name="submit">Send Message</button></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      
	  
	  <?php include 'scripts/enquiryformscript.php';?>
	  
      <?php include 'components/footer.php';?>
	
	
    </body>
  </html>
