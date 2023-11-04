<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>

    <style>

        h1 {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
        }

        .login-form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .label {
            display: flex;
            margin-bottom: 10px;
        }

        .inputBox {
            width: 50%;
            margin: 20px;
            font-size: 18px; 
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .submit-button {
            width: 100%;
            padding: 10px;
            background-color: #0074cc;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 20px; 
        }

        .submit-button:hover {
            background-color: #0056b3;
        }


    </style>

</head>
<body>
    <h1>User Login</h1>
    <form class= "container" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label class="label" for="email"></label>
        <input class="inputBox" type="text" placeholder="Email" name="email" id="email" required><br>

        <label class="label" for="password"></label>
        <input class="inputBox" type="password" placeholder="Password" name="password" id="password" required><br>

        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $givenEmail = "uc@gmail.com";
        $givenPassword = "ucban123";
        
        $inputEmail = $_POST['email'];
        $inputPassword = $_POST['password'];

        if (filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
            if ($inputEmail === $givenEmail && $inputPassword === $givenPassword) {
                echo "Success Login.";
            } else {
                echo "Error Login.";
            }
        } else {
            echo "Error Login.";
        }
    }
    ?>
</body>
</html>
