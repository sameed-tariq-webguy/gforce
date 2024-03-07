<?php
session_start();
if (isset($_SESSION['logged_In']) && $_SESSION['logged_In'] === TRUE) {
    header("Location: orderDetail.php");
    exit();
}

$servername = "localhost";
$username = "u788702992_hiqonline";
$password = "Welcome2024@@";
$database = "u788702992_hiqonline";

// $servername = "localhost";
// $username = "sameed";
// $password = "sameed";
// $database = "hiqonline";
$error = "";

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
    $username_or_email = validateInput($_POST["username_or_email"]);
    $password = validateInput($_POST["password"]);

    if (empty($username_or_email) || empty($password)) {
        echo "Please enter username or email and password.";
    } else {
        if (filter_var($username_or_email, FILTER_VALIDATE_EMAIL)) {
            $sql = "SELECT * FROM users WHERE email = '$username_or_email'";
        } else {
            $sql = "SELECT * FROM users WHERE username = '$username_or_email'";
        }

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_In'] = TRUE;
                header("Location: orderDetail.php");
                exit();
            } else {
                $error = "Invalid password.";
            }
        } else {
            $error = "User not found.";
        }
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Gforce Auto Care</title>
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
            max-width: 200px;
        }

        .login_form{
            display: flex;
            flex-direction: column;
            row-gap: 20px;
        }

        .submit_button{
            cursor: pointer;
            margin-top: 20px;
        }

        .sign_up_redirect{
            font-size: 14px;
        }

        .sign_up_redirect a{
            color: white;
        }

        .alert{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <section class="login_section">
        <div class="login_card">
            <div class="logo"><img loading="lazy" src="https://gforceautocare.com/wp-content/uploads/2024/01/Logo-Header-1.svg" alt="Logo"></div>
            <form class="login_form" action="" method="POST">
                <div class="input_container">
                    <label for="">Email or Username</label>
                    <input type="text" name="username_or_email">
                </div>
                <div class="input_container">
                    <label for="">Password</label>
                    <input type="password" name="password">
                </div>


                <!-- Input Button -->
                <div class="input_container">
                    <input class="submit_button" type="submit" value="Login">
                </div>

                <?php
                if ($error) { ?>
                    <div class="alert">
                        <?php echo $error; ?>
                    </div>
                <?php }
                ?>
            </form>
        </div>
        
        
    </section>
</body>
</html>