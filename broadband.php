<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broadband recharges</title>
    <link rel="stylesheet" href="broadband.css">


    <script>

        function changeclass(name) {
            if (name == "ji") {
                document.getElementById("opt").value="Jio fibre";
                document.getElementById('air').className = "sty";
                document.getElementById('vi').className = "sty";
                document.getElementById('asia').className = "sty";
                document.getElementById('ji').className = "mystyle";
            }
            if (name == "air") {
                document.getElementById("opt").value="Airtel broadband";
                document.getElementById('ji').className = "sty";
                document.getElementById('vi').className = "sty";
                document.getElementById('asia').className = "sty";
                document.getElementById('air').className = "mystyle";
            }
            if (name == "vi") {
                document.getElementById("opt").value="viFibre broadband";
                document.getElementById('air').className = "sty";
                document.getElementById('ji').className = "sty";
                document.getElementById('asia').className = "sty";
                document.getElementById('vi').className = "mystyle";
            }
            if (name == "asia") {
                document.getElementById("opt").value="Asianet broadband";
                document.getElementById('air').className = "sty";
                document.getElementById('vi').className = "sty";
                document.getElementById('ji').className = "sty";
                document.getElementById('asia').className = "mystyle";
            }
        }
        var a;
        function cost(a) {
            document.getElementById("selected-plan").value = "₹" + a;
        }
    </script>
</head>

<body>
    <div class="main">
        <div class="title">
            <h5 class="tt">let's get your<br><span>Broadband recharge done!</span></h5><br><br>

            <img type="image/png"
                src = "broadband.png"
                class="image" width="200px"><br>
                <form action="pay.php" method="post">
            <label for="num">Enter your register mobile number</label><br>
            <input type="tel" class="rmn" id="num" name="reg-mob"><br>

            <input type="text" id="selected-plan" name="amount"><br><br>
            <input type="text" id="opt" name="oper" placeholder="SELECT provider"><br><br>
            <button id="" class="submit">Proceed to Pay</button>

    </form>
          

            <h2 class="prov" align="center">PROVIDER</h2>
            <hr height="20px" width="400px"><br>

            <h4 class="airtel" id="air" onclick="changeclass('air')">Airtel Broadband</h4>
            <h4 class="jio" id="ji" onclick="changeclass('ji')">Jio fibre</h4>
            <h4 class="Vifibre" id="vi" onclick="changeclass('vi')">ViFibre Broadband</h4>
            <h4 class="Asia" id="asia" onclick="changeclass('asia')">Asianet Broadband</h4>

        </div>

        <div class="select-plans">

            <h1>Monthly</h1>
            <hr height="20px" width="400px"><br>

            <div class="c1">
                <h3>popular plan</h3><br>
                <h1>&#8377;999<span>+GST</span></h1><br>
                <div>
                    <p class="time">VALIDITY<br><span>30days</span></p>

                    <p class="des">DATA<br>
                        <span>Unlimited<br> @150 Mbps</span>
                    </p>
                </div>
                <button class="btn" onclick="cost(999)">APPLY</button>
            </div>
            <div class="c2">
                <h3>100 mbps</h3><br>
                <h1>&#8377;699<span>+GST</span></h1><br>
                <div>
                    <p class="time">VALIDITY<br><span>30days</span></p>

                    <p class="des">DATA<br>
                        <span>Unlimited @100 Mbps</span>
                    </p>
                </div>
                <button class="btn" onclick="cost(699)">APPLY</button>
            </div>
            <div class="c3">
                <h3>30 mbps</h3><br>
                <h1>&#8377;399<span>+GST</span></h1><br>

                <div>
                    <p class="time">VALIDITY<br><span>30days</span></p>

                    <p class="des">DATA<br>
                        <span>Unlimited @30 Mbps</span>
                    </p><br>
                </div>
                <button class="btn" onclick="cost(399)">APPLY</button>
            </div>
            <div class="c4">
                <h3>300 mbps</h3><br>
                <h1>&#8377;1499<span>+GST</span></h1><br>
                <div>
                    <p class="time">VALIDITY<br><span>30days</span></p><br>

                    <p class="des">DATA<br>
                        <span>Unlimited @300 Mbps</span>
                    </p>
                </div>
                <button class="btn" onclick="cost(1499)">APPLY</button>
            </div>
            <div class="c5">
                <h3>500 mbps</h3><br>
                <h1>&#8377;2499<span>+GST</span></h1><br>
                <div>
                    <p class="time">VALIDITY<br><span>30days</span></p>

                    <p class="des">DATA<br>
                        <span>Unlimited @500 Mbps</span>
                    </p>
                </div>
                <button class="btn" onclick="cost(2499)">APPLY</button>
            </div>
            <div class="c6">
                <h3>1 Gbps</h3><br>
                <h1>&#8377;3999<span>+GST</span></h1><br>
                <div>
                    <p class="time">VALIDITY<br><span>30days</span></p>

                    <p class="des">DATA<br>
                        <span>Unlimited @1Gbps</span>
                    </p>
                </div>
                <button class="btn" onclick="cost(3999)">APPLY</button>
            </div>
        </div>

    </div>
</body>

</html>