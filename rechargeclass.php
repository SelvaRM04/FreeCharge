<html>
<head>
<title>Recharges</title>
<style>
	body {
	 font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	 color: rgba(172, 170, 190, 1);
	 text-rendering: optimizeLegibility;
	 font-smooth: always;
	 -webkit-font-smoothing: antialiased;
	 -moz-osx-font-smoothing: grayscale;
	 background-color: black;
	 font-size: 14px;
	 overflow: hidden;
	 }
	
	
	.rechargeclassdiv p
	{
		margin-left:0px; margin-top:0px; text-align: center; padding: 5px;
	}
	
	.rechargeclassdiv img
	{
		background-color:white;
		width:80px;
		height:80px;
		margin-left:0px; 
		margin-top:0px; padding: 15px; border-radius: 15px;
	}	
	
	

	.rechargeclassdiv .p1
	{	
		margin-left: 300px; margin-right: 300px;
		text-align:center; border: 1px solid white; padding: 10px;
  		font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		font-size:20px;
		font-weight: normal;
	}
	.rechargeclassdiv .payment
	{
		color:white;
		font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		font-size:45px;	
		font-weight: normal;
		opacity: 1;
	}
	
	.rechargeclassdiv img:hover
	{
		opacity: 1;			
		transform:rotate(360deg);
		transition:width 2s, height 2s, transform 2.5s;
		transition-duration:2.5s;
	}

	.rechargeclassdiv .payicons { border: 1px solid white; margin-left: 300px; margin-right:300px; display: inline-flex; align-items: center; justify-content: space-evenly; width: 900px; padding: 20px; }
	.rechargeclassdiv .payicons div { border: 1px solid red; }

</style>
</head>
<body> 
	<div class = "rechargeclassdiv">
		<center><p class="payment">Payment Categories</p>
		<p class="p1">Welcome to FreeCharge Payment Portal.
		Click on any of the following icons to make the relevant payments. 
		Payments can be made using Credit Cards/Debit Cards</p></center>
		<div class = "payicons">
			<div><a href="electricity.html " target="_blank">
				<img src="electric.png" class="electric"> </a>
			<p>Electricity Bill Payments </p>
			</div>
			<div>
			<a href="gascylinder.html" target="_blank">
				<img src="gas.png" class="gas"></img></a>
			<p>Gas Cylinder </p>
			</div>
			<div>
			<a href="postpaid.html" target="_blank">
			<img src="mobile.png" class="dth"></img></a>
			<p>Post-Paid Mobile</p>
			</div>
		</div>
	</div>
		
</body>
</html>