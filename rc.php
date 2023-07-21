<html>

<head>
    <title>Prepaid recharge Plans</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Poppins&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="rc.css">


<script>
    var a;
    function cost(a){
            document.getElementById("selected-plan").value="₹"+a;
    }
</script>

</head>
<body>
    <div class="main">
      <div class="cont-des">
                
            <h5 class="tt">let's get your<br><span>mobile recharge done!!</span></h5><br>
            <img type="image/svg" src="rechargedone.svg"><br>

            <form action="pay.php" method="post">
            <input type="tel" class="mob-num" placeholder="Enter Mobile Number" name="reg-mob"><br>
            <p class="cls-num">please enter a valid mobile number</p>
            
            <select class="selector" name="oper">
                <option>Operator</option>
                <option>Airtel Prepaid</option>
                <option>BSNL prepaid</option>
                <option>Jio prepaid</option>
                <option>Vi prepaid</option>
            </select><br>
            <p class="cls-opt">please select valid operator</p><br>

            <input type="text" id="selected-plan" name="amount"><br><br>
            <a href="#"><button class = "btn-1" class="submit">PROCEED</button></a> 
</form>
           

        </div>

        <div class="plans">
            <h4 class="slt">Select Plan</h4>
            <hr height="200" width="600">
            <div class="plans-sub">
                    <h3>REGULAR</h3>
                <div class="p1">
                    <h3>&#8377;15</h3>
                    <h4>Existing plan<span>validity</span></h4>
                    <p>1 GBValidity<br><span>data</span></p>
                    <button class = "btn" class = "btn" onclick="cost(15)">Apply</button>
                </div>
                <div class="p2">
                    <h3>&#8377;25</h3>
                    <h4>Existing plan<span>validity</span></h4>
                    <p>2 GBValidity<br><span>data</span></p>
                    <button class = "btn" onclick="cost(25)">Apply</button>
                </div>
                <div class="p3">
                    <h3>&#8377;149</h3>
                    <h4>20 Days<span>validity</span></h4>
                    <p>1GB /day <br><span>data & voice&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                    <button class = "btn" onclick="cost(149)" >Apply</button>
                </div>
                <div class="p4">
                    <h3>&#8377;152</h3>
                    <h4>28 Days<span>validity</span></h4>
                    <p>14 GB<br><span>data only&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
                    <button class = "btn" onclick="cost(152)">Apply</button>
                </div>
                <div class="p5">
                    <h3>&#8377;179</h3>
                    <h4>24 Days<span>validity</span></h4>
                    <p>1GB/day<br><span>data&unlimited voice</span></p>
                    <button class = "btn" onclick="cost(179)">Apply</button>
                </div>
                <div class="p6">
                    <h3>&#8377;239</h3>
                    <h4>28 Days<span>validity</span></h4>
                    <p>1.5 GB/day<br><span>data&unlimited voice</span></p>
                    <button class = "btn" onclick="cost(239)">Apply</button>
                </div>
                <div class="p7">
                    <h3>&#8377;479</h3>
                    <h4>56 Days<span>validity</span></h4>
                    <p>1.5 GB/day<br><span>data&unlimited voice</span></p>
                    <button class = "btn" onclick="cost(479)">Apply</button>
                </div>
                <div class="p8">
                    <h3>&#8377;719</h3>
                    <h4>84 Days<span>validity</span></h4>
                    <p>2 GB/day<br><span>data&unlimited voice</span></p>
                    <button class = "btn" onclick="cost(719)">Apply</button>
                </div>
                <div class="p9">
                    <h3>&#8377;2545</h3>
                    <h4>336 Days<span>validity</span></h4>
                    <p>1.5 GB/day<br><span>data&unlimited voice</span></p>
                    <button class = "btn"  onclick="cost(2545)">Apply</button>
                </div>

            </div>

        </div>
    </div>

</body>
</html>