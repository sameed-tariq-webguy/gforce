<?php 
    session_start();
    if (isset($_SESSION['logged_In']) && $_SESSION['logged_In'] === TRUE) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calender</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    <style>
        
        @font-face {
            font-family: Avenir-Normal;
            src: url('assets/avenir_ff/AvenirLTStd-Book.otf');
        }
        @font-face {
            font-family: Avenir-Bold;
            src: url('assets/avenir_ff/AvenirLTStd-Black.otf');
        }

        *{
            font-family: Avenir-Normal;
        }

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

        #calendar{
            height: 100%;
            padding: 40px;
        }

        .sidebar {
            flex: 0 0 250px;
            background-color: #c20000;
            color: #fff;
            height: 100%;
        }

        .sidebar h2 {
            text-align: center;
        }

        .fc-toolbar-title{
            font-family: Avenir-Bold;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 60px 20px 40px 20px;
            margin: 0;
        }

        .sidebar ul li {
            padding: 16px 25px;
            display: flex;
            column-gap: 10px;
            transition: color 0.3s;
            align-items: center;
            border-bottom: 2px solid #b01a1a;
        }

        .sidebar ul li:hover {
            background-color: #ffffff;
            cursor: pointer;
            border-radius: 8px;
        }

        .sidebar ul li span{
            color: inherit;
        }

        .sidebar ul li:hover span i::before {
            color: #c20000;
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
            padding: 20px;
        }

        .sidebar_logo_container .logo{
            max-width: 150px;
        }

        .content {
            flex: 1;
            height: 100%;
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
                <li class="nav-link"><span><i class="bi bi-calendar3"></i></span><a href="orderDetail.php">Booking</a></li>
                <li class="nav-link"><span><i class="bi bi-box-arrow-right"></i></span><a href="calender.php">Calender</a></li>
                <li id="logout_btn"><span><i class="bi bi-calendar-date-fill"></i></span><a href="#">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <div id="calendar"></div>
        </div>
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Calender -->
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Script -->
    <script>
        $(document).ready(function () {
            $.ajax({
                type: "POST",
                url: "backend.php",
                contentType: 'application/json',
                data: JSON.stringify({ reason: 'want_dates' }),
                success: function (response) {
                    const datesarray = JSON.parse(response)
                    const events = datesarray.map(function(date) {
                        const parts = date.split('-');
                        const formattedDate = `${parts[2]}-${parts[1]}-${parts[0]}`;
                        return {
                            title: 'Booked',
                            start: formattedDate
                        };
                    })
                    console.log(events); 
                  
                    const calendarEl = document.getElementById('calendar');
                    const calendar = new FullCalendar.Calendar(calendarEl, {
                        initialView: 'dayGridMonth',
                        events: events
                    });

                    calendar.render();
                }
            });

            $(".nav-link").click(function(){
                $(".nav-link").removeClass("active");
                $(this).addClass("active");
            });

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