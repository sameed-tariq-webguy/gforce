<?php 
    session_start();
    if (isset($_SESSION['logged_In']) && $_SESSION['logged_In'] === TRUE) { ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }

        .sidebar {
            flex: 0 0 250px;
            background-color: #c20000;
            color: #fff;
            padding: 20px;
            overflow-y: auto;
        }

        .sidebar h2 {
            text-align: center;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
        }

        .sidebar ul li:hover {
            background-color: #ffffff;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul li:hover a {
            color: #c20000;
        }

        .sidebar ul li a:focus {
            color: #c20000;
        }

        .sidebar_logo_container{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sidebar_logo_container .logo{
            max-width: 150px;
        }

        .content {
            flex: 1;
            padding: 20px 20px 40px 20px;
            max-height: 100vh;
            height: 100%;
            overflow-y: auto;
        }

        @media only screen and (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .content {
                flex: 1;
                padding: 20px;
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
        <div class="sidebar_logo_container"><img class="logo" loading="lazy" src="https://gforceautocare.com/wp-content/uploads/2024/01/Logo-Header-1.svg" alt="Logo"></div>
            <ul>
                <li class="nav-link"><a href="orderDetail.php">Booking</a></li>
                <li class="nav-link"><a href="calender.php">Calender</a></li>
                <li id="logout_btn"><a href="#">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Dashboard Content</h2>
            <p>Welcome to the dashboard.</p>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Script -->
    <script>

        $(".nav-link").click(function(){
            $(".nav-link").removeClass("active");
            $(this).addClass("active");
        });

        $(document).ready(function () {
            $("#logout_btn").click(function () {
                Swal.fire({
                    title: "Logout?",
                    text: "Are you sure you want to logout?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Log Out!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "backend.php",
                            type: "POST",
                            data: { action: "logout" },
                            success: function (response) {
                                const responseData = JSON.parse(response);
                                const operation = responseData.operation;
                                if (operation) {
                                    window.location.href = 'login.php'
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error("Error occurred:", error);
                            }
                        });
                    }
                });
            })
        })
    </script>
</body>
</html>

<?php } else{header("Location: login.php"); exit();} ?>