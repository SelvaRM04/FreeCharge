<html>
<head>
	<title>Electricity Bill Payments</title>
<script type="text/javascript">
	function f1(s)
	{
		var a=document.getElementById(s).value;
		document.getElementById("text1").value=a;
	}
	function f2()
    {
        var b=document.getElementById("cid").value;
        if (isNaN(b)||b.length!=12)
        {
            alert("Please enter a valid 12-digit Consumer ID");
            return 0;
        }
        else
        {
            return 1;
        }
    }
	function f3()
	{
		var a=document.getElementById("text1").value;
		var b=document.getElementById("cid").value;
		if (a=="")
		{
			alert("Please select a service provider");
		}
		else
		{
			if (f2()==1)
			{
				confirm("Confirming details\n"+"Service Provider: "+a+"\n"+"Consumer ID: "+b);
			}
		}
	}
</script>
<style>
	img.apdop{
			width:50px;
			height:50px;
			background-color:black;
			position:relative;
			top:19px;
	}
	img.apdcl{
			width:50px;
			height:50px;
			background-color:black;
			position:relative;
			top:22px;
	}
	img.nbp{
			width:50px;
			height:50px;
			background-color:black;
			position:relative;
			top:20px;
	}
	img.sbp{
			width:50px;
			height:50px;
			background-color:black;
			position:relative;
			top:20px;
	}
	img.dded{
			width:50px;
			height:50px;
			background-color:black;
			position:relative;
			top:20px;
	}
	.div1{
		color:lightgrey;
		width:40%;	
		height:30px;
		text-align:left;
		font-family: "Times New Roman", Times, serif;
		text-align:center;
		font-size:20px;	
	}
	.b1{
		background-color:white;
		border-radius:5px;
		border: 2px solid lightgrey;
		padding:20px 0px 20px 20px;
		width:475px;
		margin:10px;
		cursor:pointer;
		color: black;
		text-align:center;
		font-size:15px;
		font-family: "Times New Roman", Times, serif;
	}
	#div2{
		width:25%;
		position:relative;
		margin-left:90px;
		bottom:570px;
	}
	#div3{
		position:relative;
		margin-right:40px;
	}
	#text1{
		width:350px;
		border-radius:10px;
		height:30px;
	}
	#cid{
		width:350px;
		border-radius:10px;
		height:30px;
	}
	.b2{
		width:auto;
		height:30px;
		font-weight: bolder;
		font-size:15px;
		font-family:Arial, Helvetica, sans-serif;
		background-color:darkgreen;
		color:white;
		border-radius: 4px;
		cursor:pointer;
		border-radius:10px;
	}
	#header{
		font-size:30px;
		font-style:italic;
		font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
		position:relative;
	}
</style>
</head>
<html>
<head>
</head>
<body style="background-color:rgb(0,0,0,0.945); color:rgba(255, 255, 255, 0.742);">
<div align="right"id="div3"><br><br><br>
<div class="div1">Arunachal Pradesh</div><br>
<img class="apdop" src="apdop.png">
<button class="b1" id="ap" value="Aruncachal Pradesh Department of Power" onclick="f1('ap')">Arunachal Pradesh Department of Power</button><br><br><br>
<div class="div1">Assam</div><br><br>
<img class="apdcl" src="apdcl.png">
<button class="b1" id="as" value="Assam Power (APDCL NON-RAPDR)" onclick="f1('as')">Assam Power (APDCL NON-RAPDR)</button><br><br><br>
<div class="div1">Bihar</div><br><br>
<img class="nbp" src="nbp.png">
<button class="b1" id="bi1" value="North Bihar Power (NBPDCL)" onclick="f1('bi1')">North Bihar Power (NBPDCL)</button><br><br>
<img class="sbp" src="sbp.png">
<button class="b1" id="bi2" value="South Bihar Power (SBPDCL)" onclick="f1('bi2')">South Bihar Power (SBPDCL)</button><br><br><br>
<div class="div1">Daman and Diu</div><br><br>
<img class="dded" src="dded.png">
<button class="b1" id="dad" value="Daman and Diu Electricity Department (DDED)" onclick="f1('dad')">Daman and Diu Electricity Department (DDED)</button><br><br><br>
</div>
<div align="left" id="div2">
<p id="header">Electricity Bill Payments</p>
<form action="pay1.php" method="POST">
State<br><input type="text" id="text1"><br><br>
Consumer ID<br><input type="text" id="cid" name="consid"><br><br>
<input type="submit" value="SUBMIT FOR PAYMENT" class="b2">
</form>
<button class="b2" onclick="f2();f3();">VALIDATE</button></a>

</div></body></html>


