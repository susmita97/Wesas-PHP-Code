<!DOCTYPE html>
  <html>
    <head>
      
	  <?php include 'adminscripts/mainscript.php';?>
	  
	  <link rel="stylesheet" href="css/commoncss.css">
	  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
	  
	  <title>Admin Panel</title>
	 
	 </head>

    <body>
	
	<?php include 'admincomponents/adminnavbar.php';?>
	
	<div class="content bg">
		<div class="container">
		<div class="row">
			<div class="col s12">
				<h1 class="white-text">DashBoard</h1>
			</div>
			<div class="col s12 m6 l3">
				<div class="card card-bg white-text">
					<div class="card-content center">
						<p>Revenue</p>
						<h5>Rs25000.00</h5>
						<i class="material-icons small green-text">keyboard_arrow_up</i><br>
						<b class="green-text">%12</b>
					</div>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card card-bg white-text">
					<div class="card-content center">
						<p>Click</p>
						<h5>2400</h5>
						<i class="material-icons small red-text">keyboard_arrow_down</i><br>
						<b class="red-text">%10</b>
					</div>
				</div>
			</div>
			<div class="col s12 l3 m6">
				<div class="card card-bg white-text">
					<div class="card-content center">
						<p>Users</p>
						<h5>5000</h5>
						<i class="material-icons small green-text">keyboard_arrow_up</i><br>
						<b class="green-text">%7</b>
					</div>
				</div>
			</div>
			<div class="col s12 l3 m6">
				<div class="card card-bg white-text">
					<div class="card-content center">
						<p>Conversion Rate</p>
						<h5>0.80%</h5>
						<i class="material-icons small green-text">keyboard_arrow_up</i><br>
						<b class="green-text">%25</b>
					</div>
				</div>
			</div>
			<div class="col l12 m6 s12">
				<div class="card card-bg">
					<div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
			<div class="col l12 m6 s12">
				<div class="card card-bg">
					<div class="card-content">
						<canvas id="myChart2"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	
	
	<script type="text/javascript">
		var chr=document.getElementById("myChart").getContext("2d");
		var chr2=document.getElementById("myChart2").getContext("2d");
		var myChart=new Chart(chr,{
			type:'bar',
			data:{
				labels:['january','febuary','march','april','mei','juni','juli'],
				datasets:[{
					label:'Data Visitor',
					data:[1100,1250,1090,1400,1150,1450,1107],
					backgroundColor:'rgba(0,0,0,0)',
					borderColor:'#fff',
					borderWidth:1,
				}]
			},
			options:{
				legend:{
					labels:{
						fontColor:'#fff',
					}

				}
			}
		});
		var myChart2=new Chart(chr2,{
			type:'line',
			data:{
				labels:['Monday','Tuesday','Wednesday','Thursday','fiday'],
				datasets:[{
					label:'Data Users',
					data:[100,512,150,120,190],
					backgroundColor:'rgba(0,0,0,0)',
					borderColor:'#fff',
					borderWidth:1,
				}]
			},
			options:{
				legend:{
					labels:{
						fontColor:'#fff',
					}
				}
			}
		});
	</script>
	
    </body>
  </html>