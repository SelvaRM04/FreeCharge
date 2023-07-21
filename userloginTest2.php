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
                $row = mysqli_fetch_array($selectres);

                if ( $row['usertype'] == 'user') {
                    $var = $row['name'];
                }
            }
            else {
                $error[] = 'incorrect username or password';
            }
        };
        ?>