<nav class="nav-extended">
	<div class="col s8">
    <div class="nav-wrapper teal lighten-2">
      <a href="#" class="brand-logo center">WESAS</a>
      <a href="#" data-target="sidenav-1" class="left sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a>
	  <a href="#" data-target="sidenav-2" class="right sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="alladmins.php">All Admins</a></li>
        <li><a href="account.php">Account</a></li>
        <li><a href="#">Log Out</a></li>
      </ul>
    </div>
	<div class="tabdiv col s7">
	<div class="nav-content teal lighten-2">
      <ul class="tabs tabs-transparent">
	    <li class="tab"><a class="active" href="admin.php">Dashboard</a></li>
        <li class="tab"><a href="servicetab.php">Services</a></li>
        <li class="tab"><a href="enquiryrecords.php">Enquiry Records</a></li>
      </ul>
    </div>
	</div>
	</nav>
  
	<div class="col s4">
	<ul id="sidenav-1" class="sidenav sidenav-fixed teal lighten-2">
	<li><a href="admin.php"><p class="white-text center">Dashboard</p></a></li>
    <li><a href="left navbar options/frontendsettings.php"><i class="material-icons white-text">settings</i><p class="white-text">Frontend</p></a></li>
    <li><a href="left navbar options/services.php"><i class="material-icons white-text">view_list</i><p class="white-text">Services</p></a></li>
    <li><a href="left navbar options/pricecal.php"><i class="material-icons white-text">add</i><p class="white-text">PriceCal</p></a></li>
	<li><a href="left navbar options/subscribers.php"><i class="material-icons white-text">list</i><p class="white-text">Subscribers</p></a></li>

    </ul>
	</div>
	
	<div class="col s4">
	<ul id="sidenav-2" class="sidenav teal lighten-2 center">
	<li><a href="#"><p class="white-text">Settings</p></a></li>
	<li><a href="alladmins.php"><i class="material-icons white-text">person</i><p class="white-text">All Admins</p></a></li>
    <li><a href="account.php"><i class="material-icons white-text">account_circle</i><p class="white-text">Account</p></a></li>
    <li><a href="#"><i class="material-icons white-text">power_settings_new</i><p class="white-text">Log Out</p></a></li>
    </ul>
	</div>
	
	</div>
	
	 <script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>