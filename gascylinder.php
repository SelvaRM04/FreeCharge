<html>
<head>
    <title>Gas Cylinder Booking</title>
<script type="text/javascript">
    function f1(s)
    {
        var a=document.getElementById(s).value;
        document.getElementById("text1").value=a;
    }
    function f2()
    {
        var b=document.getElementById("cid").value;
        if (isNaN(b)||b.length!=10)
        {
            alert("Please enter a valid 10-digit mobile number");
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
                confirm("Confirming details\n"+"Service Provider: "+a+"\n"+"Mobile Number: "+b);
            }
        }
    }
</script>
<style>
    body{
        background-color:rgb(0,0,0,0.945);
		color:white;
    }
    .header{
        color:lightgrey;
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-style:italic;
        margin-top:100px;
        font-size:30px;
        width:350px;        
    }
    #div3{
	position:relative;
	margin-left:40px;
    width:40%;
    }
    .div1{
	color:lightgrey;
	width:40%;	
	height:30px;
	text-align:left;
	font-family: "Times New Roman", Times, serif;
	text-align:center;
	font-size:20px;	
    margin-top:-500px;
    }
    .b1{
        border-radius:10px;
        background-color:white;
        border: 2px solid lightgrey;
	    padding:20px 0px 20px 20px;
	    width:300px;
        cursor:pointer;
	    color: black;
	    text-align:center;
	    font-size:17px;
	    font-family: "Times New Roman", Times, serif;
        font-weight:bolder;
    }
    #cid{
        width:250px;
	    border-radius:10px;
	    height:30px;
    }
    #text1{
        width:250px;
        border-radius:10px;
        height:30px;
    }
    .p1{
        
        position:relative;
        font-size:16px;
        font-family:'Times New Roman', Times, serif;
        width:200px;
    }
    .p2{
        position:relative;
        margin-right:40px;
        
    }
    img.bgas{
        height:60px;
        width:60px;
        position:relative;
        background-color:white;
        top:25px;
    }
    img.hpgas{
        height:60px;
        width:60px;
        position:relative;
        background-color:white;
        top:25px;
    }
    img.indgas{
        height:60px;
        width:60px;
        position:relative;
        background-color:white;
        top:25px;
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
        position:relative;
        left:0px;
        border-radius:10px;
    }
</style>
</head>
<body>
    <div align="left" id="div3"><br><br><br>
        <p class="header">Gas Cylinder Bookings</p><br><br><br><br>
        <form action="pay2.php" method="POST">
            <p class="p1">Service Provider</p><input type="text" id="text1" name="service"><br><br>
            <p class="p1">Registered Mobile Number</p><input type="text" id="cid" name="regno"><br><br>
            <input type="submit" value="SUBMIT FOR PAYMENT" class="b2">
        </form>
        <button class="b2" onclick="f2();f3();">VALIDATE</button>
        
    </div>
    <div align="right" id="div2"><br><br><br>
        <div class="div1">ALL PROVIDERS</p><br>
            <img src="bharatgas.png" class="bgas">
            <button class="b1" id="bgas" value="Bharat Gas" onclick="f1('bgas')">Bharat Gas</button><br><br>
            <img src="hpgas.png" class="hpgas">
            <button class="b1" id="hpgas" value="HP Gas" onclick="f1('hpgas')">HP Gas</button><br><br>
            <img src="indanegas.png" class="indgas">
            <button class="b1" id="indgas" value="Indane Gas" onclick="f1('indgas')">Indane Gas</button><br><br>   
</body>
</html>


