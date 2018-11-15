<?php
    $username = "";
    $pass = "";
    $ppass = "";
    if(!empty($_POST)) {
        $username = $_POST["user"];
        $pass = $_POST["secret"];
        $ppass = $_POST["ssecret"];

        if($username=="") {
            print "<div class = 'lines'>Username should not be empty</div>";
        }
        else {
            print "<div class = 'lines'>Username $username is already reserved</div>";
        }
        if($pass == "" and $ppass =="") {
            print "<div class = 'lines'>Password and Confirm Password should not be empty</div>";
        }
        if($pass != $ppass) {
            print "<div class = 'lines'>Password and Confirm Password doesn't equal to each other</div>";
        }
    }
?>
<!doctype html>
<html>
    <head>
        <title>login</title>
        <style>
            label {
                display: inline-block;
                width: 150px;
                margin-bottom: 5px;
            }
            .lines {
                display:block;
                width : 400px;
                margin-bottom: 5px;
                border: 3px solid red;
            }
        </style>
    </head>
    <body>
        <main>
            <form action = "first.php" method = "post">
                <div id = "data">
                    <label>Username:</label>
                    <input type = "text" name = "user" value = <?php echo $username; ?>><br>

                    <label>Password:</label>
                    <input type = "password" name = "secret" value = <?php echo $pass; ?>><br>
                    
                    <label>Confirm password:</label>
                    <input type = "password" name = "ssecret" value = <?php echo $ppass;?>><br>
                </div>
                <div id = "button">
                    <input type = "submit" value = "Submit"><br>
                </div>
            </form>
        </main>
    </body>
</html>