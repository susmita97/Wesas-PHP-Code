<nav class="nav-extended">
	<div class="col s8">
    <div class="nav-wrapper teal lighten-2">
      <a href="#" class="brand-logo center">WESAS</a>
      <a href="#" data-target="sidenav-1" class="left sidenav-trigger show-on-medium-and-up"><i class="material-icons">menu</i></a>
	  <a href="#" data-target="sidenav-2" class="right sidenav-trigger hide-on-medium-and-up"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">All Admins</a></li>
        <li><a href="badges.html">Account</a></li>
        <li><a href="collapsible.html">Log Out</a></li>
      </ul>
    </div>
	<div class="tabdiv col s8">
	<div class="nav-content teal lighten-2">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#test1">Services</a></li>
        <li class="tab"><a href="#test2">Previous Works</a></li>
        <li class="tab"><a href="#test4">Subscribers</a></li>
      </ul>
    </div>
	</div>
	</nav>
  
	<div class="col s4">
	<ul id="sidenav-1" class="sidenav sidenav-fixed teal lighten-2">
	<li><a href=""><p class="white-text">Dashboard</p></a></li>
    <li><a href=""><i class="material-icons white-text">add</i><p class="white-text">ADD</p></a></li>
    <li><a href=""><i class="material-icons white-text">view_module</i><p class="white-text">VIEW</p></a></li>
    <li><a href=""><i class="material-icons white-text">delete</i><p class="white-text">DELETE</p></a></li>
    </ul>
	</div>
	
	<div class="col s4">
	<ul id="sidenav-2" class="sidenav teal lighten-2 center">
	<li><a href=""><p class="white-text">Settings</p></a></li>
	<li><a href=""><i class="material-icons white-text">person</i><p class="white-text">All Admins</p></a></li>
    <li><a href=""><i class="material-icons white-text">account_circle</i><p class="white-text">Account</p></a></li>
    <li><a href=""><i class="material-icons white-text">power_settings_new</i><p class="white-text">Log Out</p></a></li>
    </ul>
	</div>
	
	</div>
	
	 <script>
      $(document).ready(function(){
      $('.sidenav').sidenav();
    });
    </script>