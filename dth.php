<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTH RECHARGE</title>
    <link rel="stylesheet" type = "text/css" href = "dth.css">


    <script>

        function opername(name)
        {
            if(name=="air")
            {
                document.getElementById("opt").value="Airtel Digital Tv";
            }
            else if(name=="sun")
            {
                document.getElementById("opt").value="Sun Direct";
            }
            else if(name=="tata")
            {
                document.getElementById("opt").value="Tata Play";
            }
            else if(name=="d2h")
            {
                document.getElementById("opt").value="D2H Tv";
            }
        }
        var a;
        function cost(a){
            if(a==100){
                document.getElementById("res").value="₹"+a;
            }
            if(a==200){
                document.getElementById("res").value="₹"+a;
            }
            if(a==201){
                document.getElementById("res").value="₹"+a;
            }
            if(a==229){
                document.getElementById("res").value="₹"+a;
            }
            if(a==231){
                document.getElementById("res").value="₹"+a;
            }
            if(a==739){
                document.getElementById("res").value="₹"+a;
            }
            if(a==653){
                document.getElementById("res").value="₹"+a;
            }
            if(a==1299){
                document.getElementById("res").value="₹"+a;
            }
            if(a==1298){
                document.getElementById("res").value="₹"+a;
            }
        }
    </script>
</head>
<body>
    
    <div class="main">
        <div class="cont-des">
            <h5 class="tt">let's get your<br><span>DTH recharge done!</span></h5><br><br>
            
            <div class="details">
             <form action="pay.php" method="post">
                <img type="image/svg" src="dthmain.svg" class="image" width="200px"><br>
                <label for="opt">Select your operator</label><br>
                <input type="text" class="operator" id="opt" name="oper"><br><br>
                <label for="num">Register mobile number/<br>Smart card number</label><br>
                <input type="tel" class="rmn" id="num" name="reg-mob"><br><br>
                <label for="res">Amount</label><br>
                <input type="text" class="amt" id="res" name="amount" placeholder="SELECT PLAN"><br><br>

                
                <a href="#"><button class="submit" id="">Proceed to pay</button></a>
            </form>
               
           </div>
           <h2 class="prov" align="center">DTH OPERATOR</h2>
                <hr height="20px" width="400px"><br>

           <div class="prov">    

                <div>
                    <img onclick="opername('air')" type="image/webp" src="airteldth.webp">
                    <p class="airtel" id="air" onclick="opername('air')">Airtel Digital Tv</p>
                </div>
                <div>
                    <img onclick="opername('sun')" type="image/webp" src="sundth.webp">
                    <p class="sun" id="sun" onclick="opername('sun')">Sun Direct</p>
                </div>
                <div>
                    <img onclick="opername('tata')" type="image/webp" src="tatadth.webp">
                    <p class="tata" id="tata" onclick="opername('tata')">TaTa Play</p>
                </div>
                <div>
                    <img onclick="opername('d2h')" type="image/webp" src="d2hdth.webp">
                    <p class="d2h" id="d2h" onclick="opername('d2h')">D2H recharge</p>
                </div>
            </div>
        </div>

        <div class="plans">
            
            <h2>SELECT PLANS</h2><br>
            <hr height="200" width="700"><br>
            <div class="p1">
                <h4>All circle</h4>
                <h3>&#8377;100</h3>
                <h4>Validity<br><span>1 Month</span></h4>
                <p>Tamil <br>Economy SD Pack</p>
                <button class="btn" onclick="cost(100)">Apply</button>
            </div>
            <div class="p2">
                <h4>All circle</h4>
                <h3>&#8377;200</h3>
                <h4>Validity<br><span>1 Month</span></h4>
                <p>Ala <br>Carte Denomination</p>
                <button class="btn" onclick="cost(200)">Apply</button>
            </div>
            <div class="p3">
                <h4>All circle</h4>
                <h3>&#8377;201</h3>
                <h4>Validity<br><span>1 Month</span></h4>
                <p>Tamil <br>Prime HD Pack</p>
                <button class="btn" onclick="cost(201)">Apply</button>
            </div>
            <div class="p4">
                <h4>All circle</h4>
                <h3>&#8377;229</h3>
                <h4>Validity<br><span>1 Month</span></h4>
                <p>Malayalam <br>Economy SD Pack</p>
                <button class="btn" onclick="cost(229)">Apply</button>
            </div>
            <div class="p5">
                <h4>All circle</h4>
                <h3>&#8377;231</h3>
                <h4>Validity<br><span>1 Month</span></h4>
                <p>Kannada <br>Economy SD Pack</p>
                <button class="btn" onclick="cost(231)">Apply</button>
            </div>
            <div class="p6">
                <h4>All circle</h4>
                <h3>&#8377;739</h3>
                <h4>Validity<br><span>3 Month</span></h4>
                <p>Tamil <br>Classic HD Pack</p>
                <button class="btn" onclick="cost(739)">Apply</button>
            </div>
            <div class="p7">
                <h4>All circle</h4>
                <h3>&#8377;653</h3>
                <h4>Validity<br><span>3 Month</span></h4>
                <p>Malayalam <br>Economy SD Pack</p>
                <button class="btn" onclick="cost(653)">Apply</button>
            </div>
            <div class="p8">
                <h4>All circle</h4>
                <h3>&#8377;1299</h3>
                <h4>Validity<br><span>6 Month</span></h4>
                <p>Tamil Value SD Pack</p>
                <button class="btn" onclick="cost(1299)">Apply</button>
            </div>
            <div class="p9">
                <h4>All circle</h4>
                <h3>&#8377;1298</h3>
                <h4>Validity<br><span>6 Month</span></h4>
                <p>Kanada <br>Value SD Pack</p>
                <button class="btn" onclick="cost(1298)">Apply</button>
            </div>
        </div>
    </div>
</body>
</html>