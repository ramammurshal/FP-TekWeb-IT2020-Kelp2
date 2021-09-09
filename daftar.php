<?php
    if(!isset($nama)){
        $nama = "";
    }
    if(!isset($email)){
        $email = "";
    }
    if(!isset($username)){
        $username = "";
    }
    if(!isset($password)){
        $password = "";
    }
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="icon" href="photos/listLast2.png">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@500&family=Poppins:wght@500&display=swap");
        body {
            padding-top: 20px;
            background-color: #958d88;
        }

        h1 {
            text-align: center;
            color: #2c2927;
            font-family: "Baloo Tammudu 2";
            font-size: 45px;
            margin-bottom: -5px;
        }

        form {
            width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: #d2cec4;
            border-radius: 8px;
            box-shadow: 2px 2px 20px;
            font-family: Poppins;
        }

        .forFlex {
            display: flex;
            margin-bottom: 10px;
        }

        label {
            flex-basis: 30%;
            padding-left: 18px;
        }

        .dot {
            flex-basis: 5%;
        }

        .inputHTML {
            flex-basis: 65%;
        }

        input {
            font-family: Poppins;
            border: none;
            border-radius: 5px;
            padding-left: 10px;
            width: 220px;
            height: 30px;
        }

        span {
            color: red;
            font-size: 10px;
            margin-top: -15px;
        }

        button {
            margin-left: 100px;
            font-family: Poppins;
            background-color: orange;
            border: none;
            border-radius: 6px;
            width: 50%;
            padding: 5px 0px;
        }

        button:hover {
            background-color: #dc2f02;
            color: white;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Let's create your account!</h1>

    <form method="POST" action="process_daftar.php">

        <!-- Daftar Nama -->
        <div class="forFlex">
            <label>Name</label>
            <div class="dot">: &nbsp;</div>
            <div class="inputHTML">
                <input type="text" name="nama" placeholder="Your name" value="<?php echo $nama ?>"><br>
                <span>
                    <?php if(isset($nameErr)){?>
                        <?php echo "* " . $nameErr ?>
                    <?php } ?>
                </span>
                <br>
            </div>
        </div>

        <!-- Daftar Email -->
        <div class="forFlex">
            <label>Email</label>
            <div class="dot">: &nbsp;</div>
            <div class="inputHTML">
                <input type="text" name="email" placeholder="Your email" value="<?php echo $email ?>"><br>
                <span>
                    <?php if(isset($emailErr)){?>
                        <?php echo "* " . $emailErr ?>
                    <?php } ?>
                </span>
                <br>
            </div>
        </div>

        <!-- Daftar Username -->
        <div class="forFlex">
            <label>Username</label>
            <div class="dot">: &nbsp;</div>
            <div class="inputHTML">
                <input type="text" name="username" placeholder="Your username" value="<?php echo $username ?>"><br>
                <span>    
                    <?php if(isset($usernameErr)){?>
                        <?php echo "* " . $usernameErr ?>
                    <?php } ?>
                </span>
                <br>
            </div>
        </div>

        <!-- Daftar Password -->
        <div class="forFlex">
            <label>Password</label>
            <div class="dot">: &nbsp;</div>
            <div class="inputHTML">
                <input type="password" name="password" placeholder="Your password" value="<?php echo $password ?>"><br>
                <span>
                    <?php if(isset($passwordErr)){?>
                        <?php echo "* " . $passwordErr ?>
                    <?php } ?>
                </span>
                <br>
            </div>
        </div>
        
        <!-- Button Submit -->
        <button type="submit" onclick="return confirm('Is your data input already correct?')">Register!</button>

    </form>
</body>

</html>
