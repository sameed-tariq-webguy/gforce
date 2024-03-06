
<?php

session_start();
if (isset($_SESSION['logged_In']) && $_SESSION['logged_In'] === TRUE) {
    header("Location: orderData.php");
    exit();
}


// Define database connection parameters
$servername = "localhost";
$username = "sameed";
$password = "sameed";
$database = "hiqonline";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validateInput($_POST["username"]);
    $email = validateInput($_POST["email"]);
    $password = validateInput($_POST["password"]);

    if (empty($username) || empty($email) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        $check_username_sql = "SELECT * FROM users WHERE username = '$username'";
        $check_username_result = $conn->query($check_username_sql);
        if ($check_username_result->num_rows > 0) {
            echo "Username already exists. Please choose another one.";
        } else {
            $check_email_sql = "SELECT * FROM users WHERE email = '$email'";
            $check_email_result = $conn->query($check_email_sql);
            if ($check_email_result->num_rows > 0) {
                echo "Email already exists. Please use a different one.";
            } else {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash password
                $insert_sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";
                if ($conn->query($insert_sql) === TRUE) {
                    $_SESSION['logged_In'] = TRUE;
                    header("Location: orderData.php");
                    exit();
                } else {
                    echo "Error: " . $insert_sql . "<br>" . $conn->error;
                }
            }
        }
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Gforce Auto Care</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .login_section{
            height: 100vh;
            width: 100%;
            background: #dedede;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .login_section .login_card{
            display: flex;
            flex-direction: column;
            max-width: 400px;
            background: white;
            width: 100%;
            max-height: max-content;
            padding: 40px 30px 60px 30px;
            border-radius: 20px;
            row-gap: 30px;
            background: #c20000;
            color: white;
            box-shadow:  20px 20px 60px #bebebe,
             -20px -20px 60px #ffffff;
        }

        .login_section .login_card .input_container{
            display: flex;
            flex-direction: column;
            row-gap: 10px;
        }

        .login_section .login_card .input_container label{
            font-weight: 500;
        }

        .login_section .login_card .input_container input{
            padding: 8px 20px;
            border: 1px solid #696969;
            border-radius: 8px;
        }

        .login_section .login_card .input_container input:focus{
            outline: none;
        }

        .logo{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img{
            margin: auto;
        }

        .login_form{
            display: flex;
            flex-direction: column;
            row-gap: 20px;
        }

        .submit_button{
            cursor: pointer;
        }

        .sign_up_redirect{
            font-size: 14px;
        }

        .sign_up_redirect a{
            color: white;
        }
    </style>
</head>
<body>
    <section class="login_section">
        <div class="login_card">
            <div class="logo"><img src="https://dummyimage.com/200x100/dedede/fff" alt="Logo"></div>
            <form class="login_form" action="" method="POST">
                <div class="input_container">
                    <label for="">Username</label>
                    <input type="text" name="username">
                </div>
                <div class="input_container">
                    <label for="">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="input_container">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>
 
                <div class="sign_up_redirect">
                    <p>Already Have an account? <a href="login.php">Login</a></p>
                </div>

                <!-- Input Button -->
                <div class="input_container">
                    <input class="submit_button" type="submit" value="Sign Up">
                </div>
            </form>
        </div>
        
        
    </section>
</body>
</html>