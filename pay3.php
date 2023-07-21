<?php
$serv=$_POST['service'];
$num=$_POST['number'];
?>

<html>
<head>
    <style>
         body {
                background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
                font-family: 'Poppins', sans-serif;
                margin-top: 50px;
                color: #fff;
            }
        #form {
                  width: 300px;
                 margin: 20vh auto 0 auto;
                  padding: 20px;
                 background-color: whitesmoke;
                border-radius: 4px;
                font-size: 12px;
        }
        #form h1 {
                color: #0f2027;
                text-align: center;
            }

    .but {
    padding: 10px;
    margin-top: 10px;
    width: 100%;
    color: white;
    background-color: rgb(41, 57, 194);
    border: none;
    border-radius: 4px;
}
.input-control {
    display: flex;
    flex-direction: column;
    margin-top: 10px;
}

.input-control input {
    border: 2px solid #f0f0f0;
	border-radius: 4px;
	display: block;
	font-size: 12px;
	padding: 10px;
	width: 300px;
    align-self:center;
}

.container{
    width:400px;
    border:2px solid #f0f0f0;
    padding:20px;
    background-color: #000000eb;
    border-radius: 10px;
}
    </style>
    </head><script>
        function checkInput(){
            var accname=document.getElementById("acc").value;
            var cardno=document.getElementById("can").value;
            var cvv=document.getElementById("cvnu").value;
            var mon=document.getElementById("month").value;
            if(accname=="" || cardno=="" || cvv=="" || mon=="")
            {
                alert("All fields are mandatory");
            }

        }
    </script>
</head>
<body>
    <center>
    <div class="container">
        <form method="post" id="form1">
            <h1>Payment</h1>
            <div class="input-control">
                <label for="mob">Service Provider:
                <input type="text" id="mob" name="mn" value="<?php echo $serv ?>">
                </div>
                <div class="input-control">
                    <label for="Service Provider">Linked Mobile Number:
                        <input type="text" id="service" name="sp" value="<?php echo $num ?>">
                    </div>
                <div class="input-control">
                    <label for="amt">Amount:</label><input type="text" id="amt" name="at" value="<?php echo rand(500,1000); ?>"></div>
                <div class="input-control">Credit card/Debit card/ATM card</div>
                <div class="input-control">
                    <label for="acc">Account Holder:</label><input type="text" id="acc" name="ah"></div>
                <div class="input-control">
                    <label for="cnu">Card Number:</label><input type="tel" id="can" placeholder="xxxx xxxx xxxx xxxx"></div>
                <div class="input-control" style="position:absolute;left:618px">
                    <label for="cvnu">CVV Number:</label><input type="tel" id="cvnu" name="cvvn" style="width:100px" ></div><div class="input-control" style="position:relative;top:0px;left:-200px;">
                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    Card-Provider:<select name="card" style="width:100px;height:40px;border-radius:5px;position: relative;left:250px"><option value="MasterCard">MasterCard</option><option value="Visa">Visa</option><option value="RuPay">RuPay</option></select>
                </div>
                <div class="input-control">
                    
                    
                    <label for="month">Valid through:</label>
                    <input type="text" id="month" name="mon" placeholder="(mm/yy)" style="width:140px" ></div>
                    <button class="but" type="submit" onclick="checkInput()">Pay</button>
                    </form>
                    </div>
                </center>
    </body>
    </html>