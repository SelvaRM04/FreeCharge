<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>OTT subscription recharges</title>
		<script type="text/javascript">
	function ottname(s)
	{
		if(s=="nf"){
		document.getElementById("ott").value="Netflix";
		document.getElementById("nfp").style.display="block";
		document.getElementById("app").style.display="none";
		document.getElementById("dhp").style.display="none";
		document.getElementById("slp").style.display="none";
		document.getElementById("z5p").style.display="none";
		}
		if(s=="dh"){
		document.getElementById("ott").value="Disney+Hotstar";
		document.getElementById("dhp").style.display="block";
		document.getElementById("app").style.display="none";
		document.getElementById("nfp").style.display="none";
		document.getElementById("slp").style.display="none";
		document.getElementById("z5p").style.display="none";}
		if(s=="ap"){
		document.getElementById("ott").value="Amazon Prime";
		document.getElementById("app").style.display="block";
		document.getElementById("nfp").style.display="none";
		document.getElementById("dhp").style.display="none";
		document.getElementById("slp").style.display="none";
		document.getElementById("z5p").style.display="none";}
		if(s=="sl"){
		document.getElementById("ott").value="SonyLiv";
		document.getElementById("slp").style.display="block";
		document.getElementById("app").style.display="none";
		document.getElementById("dhp").style.display="none";
		document.getElementById("nfp").style.display="none";
		document.getElementById("z5p").style.display="none";}
		if(s=="z5"){
		document.getElementById("ott").value="Zee5";
		document.getElementById("z5p").style.display="block";
		document.getElementById("app").style.display="none";
		document.getElementById("dhp").style.display="none";
		document.getElementById("slp").style.display="none";
		document.getElementById("nfp").style.display="none";}
	}
	var a;
	function cost(a){
			document.getElementById("res").value="₹"+a;
	}
</script>
<style>
	*{
		box-sizing:border-box;
	}
	body{
		background-color:black;
		color:#fff;
		overflow-x:hidden;
	}
	.main{
		display:flex;
		margin-left:20px;
		margin-top:60px;
	}
	.p1,.p2,.p3,.p4,.p5,.p6,.p7,.p8,.p9,.p10,.p11,.p12,.p13{
		display:flex;
		justify-content:space-evenly;
		border:2px solid;
		width:40em;
		border-radius:10px;
		margin:10px;
	}
	.btn{
		margin:20px 0px 20px 0px;
		padding:7px 15px;
		border:none;
		border-radius:13px;
		background-color:rgb(239,12,12);
		color:#fff;
		font-weight:bold;
	}
	.btn:hover{
		cursor:pointer;
	}
	.cont-des{
		margin:30px 80px 0px 50px;
	}
	.tt{
		font-size:20px;
		text-transform:capitalize;
	}
	span{
		color:rgba(46,207,207,0.501);
		font-style:italic;
	}
	.image{
		margin-left:15em;
	}
	.prov{
		display:flex;
		justify-content:space-between;
	}
	.prov div{
		margin-left:10px;
		transition:transform 0.9s;
	}
	.details label{
		font-size:medium;
		font-family:'Courier New', Courier, monospace;
		font-weight:600;
	}
	.details input{
		padding:10px 20px 10px 30px;
		border-radius:10px;
	}
	.submit{
		font-weight:900;
		border-radius:4px;
		border:none;
		padding:10px 70px;
		background-color:rgb(7,113,23);
		color:#fff;
	}
	.prov div:hover{
		cursor:pointer;
		transform:scale(1.1,1.1);
	}
#nfp,#app,#z5p,#slp,#dhp{
	display:none;
}
#nf{
	position:relative;
	left:10px;
}
#api{
	position:relative;
	left:12px;
}
#plans{
	position:relative;
	top:250px;
	height:750px;
}#dhi{
	position:relative;
	left:17px;
}
#sl{
	position:relative;
	left:8px;
}
#z5{
	position:relative;
	left:20px;
}
.img{
	width:70px;
	height:70px;
	border-radius:500px;
	border:1px solid white;
}
</style>
</head>
<body>

	<div class="main">
		<div class="cont-des">
			<h5 class="tt">let's get your<br><span>OTT Subscription done!</span></h5><br><br>
			
			<div class="details">
				<img src="dth.svg" class="image" width="200px"><br>
			<form action="pay.php" method="post">
				<label for="ott">Selected OTT:</label><br>
				<input type="text" class="otts" name="oper" id="ott"><br><br>
				<label for="mail">Registered e-mail id:</label><br>
				<input type="text" class="email" id="mail"><br><br>
				<label for="num">Registered Mobile No:</label><br><br>
				<input type="text" class="number" name="reg-mob" id="num"><br><br>
				<label for="res">Amount:</label><br><br>
				<input type="text" class="amt" name="amount" id="res"><br><br>
				<a href="#"><button  id="" class="submit">PROCEED</button></a>
</form>

				
			</div>
			<h2 class="prov" align="center">Choose your OTT</h2>
				<hr height="20px" width="400px"><br>
			<div class="prov">
				<div>
					<img onclick="ottname('nf')" src="netflix.jpeg" class="img">
					<p class="netflix" id="nf" onclick="ottname('nf')">Netflix</p>
			    </div>
			    <div>
					<img onclick="ottname('ap')" src="primevideo.jpeg" class="img" id="api">
					<p class="amazon" id="ap" onclick="ottname('ap')">Amazon Prime</p>
			    </div>
				<div>
					<img onclick="ottname('dh')" src="hotstar.jpeg" class="img" id="dhi">
					<p class="disney" id="dh" onclick="ottname('dh')">Disney+Hotstar</p>
				</div>
				<div>
					<img onclick="ottname('sl')" src="sonyliv.jpeg" class="img" id="sli">
					<p class="sonyliv" id="sl" onclick="ottname('sl')">SonyLiv</p>
				</div>
				<div>
					<img onclick="ottname('z5')" src="zee5.jpeg" class="img">
					<p class="zee5" id="z5" onclick="ottname('z5')">Zee5</p>
				</div>
			</div>
		</div>
		<div id="plans">
	<div id="z5p">
		<h2>SELECT PLANS</h2><br>
		<hr height="200" width="700"><br>
		<div class="p1">
			<h3>&#8377;399</h3><h4>Validity<br><span>3 Months</span></h4><p>Zee5<br>3monthspack</p>
			<button class="btn" onclick="cost(399)">Apply</button>
		</div>
		<div class="p2">
			<h3>&#8377;599</h3><h4>Validity<br><span>12 Months</span></h4><p>Zee5<br>12monthspack</p>
			<button class="btn" onclick="cost(599)">Apply</button>
		</div>
	</div>
	<div id="app">
		<h2>SELECT PLANS</h2><br>
		<hr height="200" width="700"><br>
		<div class="p3">
			<h3>&#8377;139</h3><h4>Validity<br><span>1 Year</span></h4><p>Amazon Prime<br>membership</p>
			<button class="btn" onclick="cost(139)">Apply</button>
		</div>
		<div class="p4">
			<h3>&#8377;69</h3><h4>Validity<br><span>1 Year</span></h4><p>Amazon Prime<br>Student membership</p>
			<button class="btn" onclick="cost(69)">Apply</button>
		</div>
	</div>
	<div id="nfp">
		<h2>SELECT PLANS</h2><br>
		<hr height="200" width="700"><br>
		<div class="p5">
			<h3>&#8377;149</h3><h4>Validity<br><span>1 Month</span></h4><p>Mobile<br>1 SD content</p>
			<button class="btn" onclick="cost(149)">Apply</button>
		</div>
		<div class="p6">
			<h3>&#8377;199</h3><h4>Validity<br><span>1 Month</span></h4><p>Basic<br>1 SD content</p>
			<button class="btn" onclick="cost(199)">Apply</button>
		</div>
		<div class="p7">
			<h3>&#8377;499</h3><h4>Validity<br><span>1 Month</span></h4><p>Mobile<br>2 FHD content</p>
			<button class="btn" onclick="cost(499)">Apply</button>
		</div>
		<div class="p8">
			<h3>&#8377;649</h3><h4>Validity<br><span>1 Month</span></h4><p>Basic<br>4 UHD content</p>
			<button class="btn" onclick="cost(649)">Apply</button>
		</div>
	</div>
	<div id="dhp">
		<h2>SELECT PLANS</h2><br>
		<hr height="200" width="700"><br>
		<div class="p9">
			<h3>&#8377;1499</h3><h4>Validity<br><span>1 Year</span></h4><p>Disney+Hotstar<br>Premium</p>
			<button class="btn" onclick="cost(1499)">Apply</button>
		</div>
		<div class="p10">
			<h3>&#8377;899</h3><h4>Validity<br><span>1 Year</span></h4><p>Disney+Hotstar<br>Super</p>
			<button class="btn" onclick="cost(899)">Apply</button>
		</div>
		<div class="p11">
			<h3>&#8377;499</h3><h4>Validity<br><span>1 Year</span></h4><p>Disney+Hotstar<br>Mobile</p>
			<button class="btn" onclick="cost(499)">Apply</button>
		</div>
	</div>
	<div id="slp">
		<h2>SELECT PLANS</h2><br>
		<hr height="200" width="700"><br>
		<div class="p12">
			<h3>&#8377;299</h3><h4>Validity<br><span>1 Year</span></h4><p>Sony Liv WWE<br>Network Plan</p>
			<button class="btn" onclick="cost(139)">Apply</button>
		</div>
		<div class="p13">
			<h3>&#8377;999</h3><h4>Validity<br><span>1 Year</span></h4><p>Sony Liv<br>Premium Plans</p>
			<button class="btn" onclick="cost(69)">Apply</button>
		</div>
	</div>
	</div>
</div>
</body>
</html>