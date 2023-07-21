<?php
    @include 'configTest2.php';
    session_start();

?>

<html>    
<head> 
    <title> Online Bill Payment System</title>    
    <link rel = "stylesheet" type = "text/css" href = "mainTest2.css">
    <script type="text/javascript" src="scriptCallsToggle.js"> </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Poppins&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
</head>

<body>

    <div class = "outer" id = "outer">
        <div class = "topbar">
            <button id = "freecharge" onclick = "location.href = 'homepageTest2.php'" > FreeCharge </button>
            
            <button id = "loginbtn" onclick = "toggle(); setTimeout(disablescroll,1000)"> <i class="fa fa-user-circle"></i>&nbsp; Login </button>
        </div>

        <div class = "content" id = "content">
            <div class = "sidenavbar" id = "sidenavbarid">
                <div class = "navlist">
                    <div class = "navtitleunderline"> </div>
                    <a href = "#top" class="a1">
                        <div class = "nav"> <span> <i class="fa fa-fw fa-home"> </i> </span> 
                        <span class = "navtitle" id = "homespan"> Home </span> </i> </div> </a> </br>
                    <div class = "navtitleunderline"> </div>
                    <a class = "a1"> 
                        <div class = "nav" id = "regbtn" onclick = "regtoggle(); setTimeout(disablescroll,1000)"> 
                        <span> <i class="fa fa-fw fa-user"> </i> </span> 
                        <span class = "navtitle" id = "regspan"> Registration </span> </i> </div> </a> <br>
                    <div class = "navtitleunderline"> </div>
                    <a href = "#rechargediv" class="a1">
                        <div class = "nav"> <span> <i class="fa fa-mobile"> </i> </span> 
                        <span class = "navtitle" id = "rechspan"> Recharges </span> </i> </div> </a> <br>
                    <div class = "navtitleunderline"> </div>
                    <a href = "#billpayments" class = "a1"> 
                        <div class = "nav"> <span> <i class="fa fa-file"> </i> </span> 
                        <span class = "navtitle" id = "billspan">Bill Payments </span> </i> </div> </a> <br>
                    <div class = "navtitleunderline"> </div>
                </div>   

                <div class = "userdetails" id = "userdetails"> 
                    <div class = "userwelcome"> welcome <br><span style = "font-size: 30px; "> 
                    <div class="displayerror2" id = "displayerror2">
                        <?php
                        @include 'configTest2.php';

                        if (isset ($_POST ['loginSubmit'] )) {
                            $username = $_POST['regusername'];
                            $pswd = md5($_POST['regpswd']);

                            $select = "SELECT id FROM userregister WHERE name = '$username' && pswd = '$pswd' ";

                            $selectres = mysqli_query($conn, $select);

                            $count = mysqli_num_rows($selectres);

                            if($count == 1) {
                                $var = $username; 

                                echo '<script type="text/javascript"> document.getElementsByClassName("displayerror2")[0].classList.add("active");  </script>';
                                    echo '<div class = "userwelcome"> <br> Login Successful <br><br> </div>';
                                    echo '<script> document.getElementById("userdetails").style.display = "inherit"; </script>';
                                    echo '<script> setTimeout(exitdisplayerror2,3500); </script>';

                                }
                                else {
                                $error2[] =  "invalid Username or Password";
                                    
                                    echo '<script type="text/javascript"> document.getElementsByClassName("displayerror2")[0].classList.add("active");  </script>';
                                    echo '<div class = "userpopupdetails2"> <br> redirecting to User Login </div>';
                                    echo '<script>  setTimeout(exitdisplayerror2,3000); setTimeout(toggle, 3000); </script>'; 
                                }

                        }
                                
                        ?>

                        
                        <?php   
                            if (isset($error2)) {
                                        foreach ($error2 as $error2) {
                                            echo '<div class = "userwelcome">' . $error2 . '</div> <br>' ;
                                        };    
                            }
                        ?>   
                    </div>
                    <?php 
                        if (isset ($_SESSION)) {
                        echo '<div class = "userwelcome">' . $var  . '</div>'; 
                        }
                        ?> </span> 
                    </div><br>
                    <div class = "userlogout" onclick = "loction.href = 'userlogoutTest2.php';"> <span><i class="fa fa-user-circle" ></i></span> <span>&nbsp;logout</span> </div>
                
                </div>

            </div>

            <div class = "maincontent">
                <div class = "captiondiv" style = "border: 1px solid Magenta;">
                    <div id = "caption1"> <strong>
                        Pay your Bills anywhere, anytime!  </strong>
                    </div>
                    
                    <div id = "caption2">
                        <div style = "font-size: 25px;"> FREECHARGE'S &nbsp; ONLINE &nbsp; PAYMENT &nbsp; SERVICE
                        </div> <br><br>
                        <div style = "font-size: 35px; font-family:Georgia, 'Times New Roman', Times, sans-serif;"> 
                            Providing Customers More Of What They Want
                        </div>
                    </div> <br><br> 
                </div> 

                <div id = "tablecaption" style = "border: 1px solid Turquoise">
                    <center>
                    <table>
                        <tr>
                            <th>Fastest Way to  pay <br> In-store  and Online</th>
                            <th>Pay anyone directly from your bank account</th>
                        </tr>
                        <tr>
                            <td>Load your freecharge wallet for free and make payments in a jiffy<br>over 21 million stores and websites</td>
                            <td>Make contactless & secure payments <br> in-stores or online <br> using your bank account</td>
                        </tr>
                        <tr>
                            <td><img class="img" height="280px" width="390px" src="p3.jpg"></td>
                            <td><img class="img" src="p2.jpg"></td>
                        </tr>
                        
                    </table> <br>
                    </center>
                </div>
                
                <div style = "border: 1px solid Aquamarine;" id = "rechargediv">
                    <div class="cont-des">
                        <h2 class="tt"> make recharges <span>faster</span> &amp; <span>easier</span>  </h2>
                    </div>
                    <div class="parent">
                        <div class="phn">
                            <i class="fa fa-mobile-phone" style="font-size:36px" id="mob"></i><br>
                            <label for="mob"> <a href="rc.php"> Mobile recharge </label> </a>
                        </div>
                        <div class="phn-pp">
                            <span id="lndline" style="font-size:36px">&#9742;</span><br>
                            <label for="lndline"><a href="broadband.php">Broadband recharge</a></label>
                        </div> 
                        <div class = "break"> </div>
                        <div class="ot">
                            <i class="fa fa-play-circle" style="font-size:36px;" id="ott"></i><br>
                            <label for="ott"><a href="ott.php">OTT subscription</a></label>
                        </div>
                        <div class="ot">
                            <i class="fa fa-play-circle" style="font-size:36px;" id="ott"></i><br>
                            <label for="ott"><a href="dth.php"> DTH recharge</a></label>
                        </div>
                    </div>
                </div> <br>

                <div class = "rechargeclassdiv" id = "billpayments">
                    <center><p class="payment">Payment Categories</p>
                    <p class="p1">Welcome to FreeCharge Payment Portal.
                    Click on any of the following icons to make the relevant payments. 
                    Payments can be made using Credit Cards/Debit Cards</p></center>
                    <div class = "payicons">
                        <div><a href="electricity.php " target="_blank">
                            <img src="electric.png" class="electric"> </a>
                        <p>Electricity Bill Payments </p>
                        </div>
                        <div>
                        <a href="gascylinder.php" target="_blank">
                            <img src="gas.png" class="gas"></img></a>
                        <p>Gas Cylinder </p>
                        </div>
                        <div>
                        <a href="postpaid.php" target="_blank">
                        <img src="mobile.png" class="dth"></img></a>
                        <p>Post-Paid Mobile</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
    
    

    <div class = "loginpopup">
        <div class = "formtitle"> User Login </div><br>
        <div class = "loginpage"> 
            <div id = "imgdiv"> <img src = "userIcon.png" name = "usericon"> </div> <br>
            
            <form id = "loginForm" action = "" method = "post"> 
                
                <div class="input-control2"> Hello </div>
                    <div class="input-control">
                        <label for="regusername">Username</label>
                        <input id="loginuser" name="regusername" type="text" required>
                        <div class="error"></div>
                    </div>
                    
                    <div class="input-control">
                        <label for="regpassword">Password</label>
                        <input id="loginpswd" name="regpswd" type="password" required>
                        <div class="error"></div>
                    </div>
                    <button type="submit" name = "loginSubmit" class = "loginbtn"> Login </button>

                <div style = "text-decoration: none; color: black; cursor: pointer" onclick="remtoggle();regtoggle();"> New to Freecharge? <span    style = "color: rgb(178,17,70)">Sign up now!</span> 
                </div>
            </form>
             
        </div>
        <div class = "dismiss"> 
            <button id = "dismissbtn" onclick = "remtoggle(); enablescroll()"> Dismiss </button>
        </div>
    </div>


    <div class = "registrationpopup">
        <div class = "formtitle"> Registration </div> <br>
        <form id = "registrationForm" action = "" method = "post"> 

            <div class="input-control2">
            Hello    
            </div>
            
            <div class="input-control">
                <label for="regusername">Username</label>
                <input id="reguser" name="regusername" type="text" required>
            </div><div> </div>
            <div class="input-control">
                <label for="regmail">Email</label>
                <input id="regmail" name="regmail" type="email" required>
            </div><div> </div>
            <div class="input-control">
                <label for="regpassword">Password</label>
                <input id="regpswd" name="regpswd" type="password" required>
            </div><div> </div>
            <div class="input-control">
                <label for="regpassword2">Confirm Password</label>
                <input id="regpswd2"name="regpswd2" type="password" required> 
            </div><div> </div>
            <button type="submit" name = "registrationSubmit" class = "registerbtn"> Sign Up </button>

            <div style = "text-decoration: none; color: black; cursor: pointer" onclick="regremtoggle(); toggle();"> already have an account. <span style = "color: rgb(178,17,70)">Login now!</span> 
            </div>           
        </form> 
        <div class = "dismiss" style = "text-align: center";> 
            <button id = "dismissbtn2" onclick = "regremtoggle();enablescroll()"> Dismiss </button>
        </div>
    </div>
    




    <style> 
        .displayerror {
            width:500px;
            height: max-content;
            padding:30px 20px;
            background: linear-gradient( to right, rgb(29,14,14), rgb(14,14,29)) ;
            border-radius:10px;
            box-sizing:border-box;
            z-index:4;
            text-align: center;
            opacity:0;
            transform: scale(0.5);
            transition:opacity 300ms ease-in-out,
                    top 100ms ease-in-out,
                    transform 1000ms ease-in-out; 
            display: none;
        } 

        .displayerror2 {
            width:500px;
            height: max-content;
            padding:30px 20px;
            background: linear-gradient( to right, rgb(14,14,29), rgb(29,14,14)) ;
            border-radius:10px;
            box-sizing:border-box;
            z-index:4;
            text-align: center;
            opacity:0;
            transform: scale(0.5);
            transition:opacity 300ms ease-in-out,
                    top 100ms ease-in-out,
                    transform 1000ms ease-in-out; 
            display: none;
        } 

        .displayerror.active {
            opacity:1;
            position: absolute;
            top: 50%; left: 58%;
            transform: translate(-50%,-50%) scale(1);
            transition:transform 300ms cubic-bezier(0.18,0.89,0.43,1.19); display: block;
        }

        .displayerror2.active {
            opacity:1;
            position: absolute;
            top: 90%; left: 50%;
            transform: translate(-50%,-50%) scale(1);
            transition:transform 300ms cubic-bezier(0.18,0.89,0.43,1.19); display: block;
        }
        
        
        .displayerror.dismiss-btn, .displayerror2.dismiss-btn{
            margin-top:15px;
        }
        .displayerror.dismiss-btn button, .displayerror2.dismiss-btn button {
            padding:10px 20px;
            background:#111;
            color:#f5f5f5;
            border:2px solid #111;
            font-size:16px;
            font: weight 400px;
            outline:none;
            border-radius:10px;
            cursor:pointer;
            transition:all 300ms ease-in-out;
        }
        .displayerror.dismiss-btn button:hover, .displayerror2.dismiss-btn button:hover {
            color:#111;
            background:#f5f5f5;

        }
        .displayerror>div, .displayerror2>div{
            position:relative;
            top:10px;
            opacity:0;
        }
        .displayerror.active>div, .displayerror2.active>div {
            top:0px;
            opacity:1;
        }
        
        .displayerror.active.dismiss-btn, .displayerror2.active.dismiss-btn{
            transition:all 300ms ease-in-out 400ms;
        }

        

    </style>

    <div class="displayerror" id = "displayerror">
        <?php
        @include 'configTest2.php';

        if (isset ($_POST ['registrationSubmit'] )) {
            $username = $_POST['regusername'];
            $mail = $_POST['regmail'];
            $pswd = md5($_POST['regpswd']);
            $checkpswd = md5($_POST['regpswd2']);

            $select = "SELECT * FROM userregister WHERE name = '$username' OR mail = '$mail' OR pswd = '$pswd' ";


            $selectres = mysqli_query($conn, $select);

            if (mysqli_num_rows($selectres) > 0) {
                $error[] = 'user already exists';
                echo '<script type="text/javascript"> document.getElementsByClassName("displayerror")[0].classList.add("active"); </script>';
                echo '<div class = "userpopupdetails2"> redirecting to User Registration </div>';
                echo '<script>  setTimeout(exitdisplayerror,3000); setTimeout(regtoggle, 3000); </script>';
            } 

            else {
                if ($pswd != $checkpswd ) {
                    $error[] = 'password does not match!';
                    echo '<script type="text/javascript"> document.getElementsByClassName("displayerror")[0].classList.add("active"); </script>';
                    echo '<div class = "userpopupdetails2"> <br> redirecting to User Registration </div>';
                    echo '<script>  setTimeout(exitdisplayerror,3000); setTimeout(regtoggle, 3000); </script>';
                } else {
                    $ins = "INSERT INTO userregister (name, mail, pswd,  checkpswd)
                    VALUES ('$username','$mail','$pswd','$checkpswd')";

                    mysqli_query($conn, $ins); 
                    echo '<script type="text/javascript"> document.getElementsByClassName("displayerror")[0].classList.add("active");  </script>';
                    echo '<div class = "userwelcome"> <br> Registered Successfully <br><br> </div>';
                    echo '<div class = "userpopupdetails2"> <br> redirecting to User Login </div>';
                    echo '<script> setTimeout(exitdisplayerror,3000); setTimeout(toggle, 3000); </script>';
                    
                    
                }
            }
        };
        ?>

        
        <?php   
            if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<div class = "userwelcome">' . $error . '</div> <br> <div class = "userpopupdetails"> Choose a different username or password </div> <br>' ;
                        };    
            }; 
        ?>   
    </div>


    
</body>

<?php
    echo '<script> alert("hello")</script>';
?> 

</html>