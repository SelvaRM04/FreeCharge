<html>
<head>
    <title>Postpaid-Recharge</title>
<script type="text/javascript">
    function f1(s)
    { 
        var a=document.getElementById(s).value;
        document.getElementById("service").value=a;
    }
    function f2()
    {
        var b=document.getElementById("mnum").value;
        if ((isNaN(b))||b.length!=10)
        {
            alert("Please enter valid 10-digit mobile number");
            return 0;
        }
        else
        {
            return 1;
        }
    }
    function f3()
    {
        var c=document.getElementById("service").value;
        if (c=="")
        {
            alert("Please select a service provider");
        }
        else
        {
            if (f2()==1)
            {
                var b=document.getElementById("mnum").value;
                confirm("Confirming details\n"+"Service Provider: "+c+"\n"+"Mobile Number: "+b+"\n");
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
    .p1{
        position:relative;
        font-size:16px;
        font-family:'Times New Roman', Times, serif;
        width:200px;
    }
    #service{
        border-radius:10px;
        background-color:white;
        height:30px;
        width:40%;
    }
    #mnum{
        border-radius:10px;
        background-color:white;
        height:30px;
        width:40%;
    }
    #mnum2{
        border-radius:10px;
        background-color:white;
        height:30px;
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
        margin-top:-400px;
    }
    img.jio{
        position:relative;
        width:53px;
        height:53px;
        background-color:black;
        top:20px;
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
        margin-right:50px;
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
    <div id="div3" align="left">
        <p class="header">Postpaid-Recharge<br><br>
        <form action="pay3.php" method="POST">
            <p class="p1">SERVICE PROVIDER</p><input type="text" id="service"name="service"><br><br><br>
            <p class="p1">ENTER THE MOBILE NUMBER LINKED</p><input type="text" id="mnum"name="number"><br><br><br>
            <input type="submit"class="b2"value="SUBMIT FOR PAYMENT">
        </form>
        <button class="b2" onclick="f2();f3()">VALIDATE</button>

        
            

    </div>
    <div id="div2" align="right">
        <div class="div1">SERVICE PROVIDERS</div><br><br>
        <img src="jio.png" class="jio">
        <button class="b1" id="jio" value="JIO-POSTAPID" onclick="f1('jio')">JIO</button><br>
        <img src="airtel.png" class="jio">
        <button class="b1" id="airtel" value="AIRTEL-POSTPAID" onclick="f1('airtel')">AIRTEL</button><br>
        <img src="vi.png" class="jio">
        <button class="b1" id="vi" value="VI-POSTPAID" onclick="f1('vi')">VI</button><br>
        <img src="bsnl.png" class="jio">
        <button class="b1" id="bsnl" value="BSNL-POSTPAID" onclick="f1('bsnl')">BSNL</button><br>
    </div>
</body>
</html>