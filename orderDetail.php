<?php 
    session_start();
    if (isset($_SESSION['logged_In']) && $_SESSION['logged_In'] === TRUE) { ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.css">
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
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }
        .content {
            flex: 1;
            padding: 20px;
            overflow: auto;
        }
        .active{
            background: white;
            color: #c20000;
        }

        .active a{
            color: #c20000 !important;
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

        /* Table CSS */
        .main__table {
            margin: auto;
            width: 100% !important;
            overflow-x: visible !important;
        }

        #main__table_wrapper{
            padding-bottom: 40px;
        }

        .main__table thead tr th {
            border: 1px solid white;
            padding: 20px 15px;
            text-align: center;
            text-wrap: nowrap;
        }

        .main__table thead {
            background: #c20000;
            color: white;
        }

        #table__section {
            text-align: center;
            overflow: hidden;
        }

        #populate_order_data tr td {
            border: 1px solid white;
            padding: 14px 15px;
            text-align: center;
            text-wrap: nowrap;
            font-size: 14px;
        }

        #populate_order_data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #populate_order_data tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .bulk_delete{
            width: 100%;
            display: flex;
            justify-content: end;
            align-items: center;
        }

        .bulk_delete button{
            background: #c20000;
            color: white;
            padding: 8px 20px;
            border-radius: 8px;
            outline: none;
            border: 0;
            cursor: pointer;
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
            <h2>Order Detail Content</h2>
                <section id="table__section">
                    <div class="bulk_delete"><button id="bulk_delete">Delete</button></div>
                    <table id="main__table" class="display main__table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Registration</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Year of registration</th>
                                <th scope="col">TransmissionType</th>
                                <th scope="col">MOT due date</th>
                                <th scope="col">FuelType</th>
                                <th scope="col">Services</th>
                                <th scope="col">Date</th>
                            </tr>
                        </thead>
                        <tbody id="populate_order_data"></tbody>
                    </table>
                </section>
        </div>

        
    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- DATATABLES SCRIPT -->
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/dataTables.responsive.js"></script>
    <script src="https://cdn.datatables.net/responsive/3.0.0/js/responsive.dataTables.js"></script>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Script -->
    <script>
        $(document).ready(function() {
            $(".nav-link").click(function(){
                $(".nav-link").removeClass("active");
                $(this).addClass("active");
            });

            $("#logout_btn").click(function() {
                Swal.fire({
                    title: "Logout?",
                    text: "Are you sure you want to logout?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#000000",
                    cancelButtonColor: "#c20000",
                    confirmButtonText: "Yes, Log Out!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "backend.php",
                            type: "POST",
                            data: {
                                action: "logout"
                            },
                            success: function(response) {
                                const responseData = JSON.parse(response);
                                const operation = responseData.operation;
                                console.log(operation);
                                if (operation) {
                                    window.location.href = 'login.php'
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error("Error occurred:", error);
                            }
                        });
                    }
                });
            })

            // Table Content
            const apiOrderData = () => {
                const reason = "want_order_data";
                fetch(`backend.php`, {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify({
                            reason: reason
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        
                        if ($.fn.DataTable.isDataTable('#main__table')) {
                            $('#main__table').DataTable().destroy();
                        }
                        populateOrderData(data)
                        $('#main__table').DataTable({responsive : true});
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            };

            function populateOrderData(detailsArray) {
                let populateData = '';

                detailsArray.forEach((details) => {
                    // Use 'details' instead of 'item'
                    populateData += `
                        <tr>
                            <td><input type="checkbox" data-id=${details.id} class="deleteCheckbox"></td>
                            <td>${details.fullname}</td>
                            <td>${details.phone}</td>
                            <td>${details.address}</td>
                            <td>${details.registration_number}</td>
                            <td>${details.make}</td>
                            <td>${details.model}</td>
                            <td>${details.registration_date}</td>
                            <td>${details.transmission_type}</td>
                            <td>${details.next_month_due_date}</td>
                            <td>${details.fueltype}</td>
                            <td>${details.service_name}</td>
                            <td>${details.selected_dates}</td>
                        </tr>`;
                });
                const tableBody = document.getElementById('populate_order_data');
                tableBody.innerHTML = populateData;
                
                
            }

            apiOrderData()


            let checkedIds = [];
            $(document).on('click', '.deleteCheckbox', function () {
                let dataId = $(this).data('id');

                if ($(this).is(':checked')) {
                    checkedIds.push(dataId);
                } else {
                    let index = checkedIds.indexOf(dataId);
                    if (index !== -1) {
                        checkedIds.splice(index, 1);
                    }
                }

                console.log('Checked IDs:', checkedIds);
                
                
            });


            function deleteCheckedIds() {
                $.ajax({
                    url: 'backend.php',
                    type: 'POST',
                    data: { ids: checkedIds, reason : 'delete_ids_data' },
                    success: function(response) {
                        if (response.operation === true) {
                            Swal.fire({
                                title: "Success!",
                                text: response.message,
                                icon: "success"
                            });
                        }
                        checkedIds = [];
                        apiOrderData()
                    },
                    error: function(xhr, status, error) {
                        console.error('Error occurred during delete operation:', error);
                    }
                });
            }

            $('#bulk_delete').click(function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                    if (result.isConfirmed) {
                        deleteCheckedIds()
                        
                    }
                });
            })
        })
        
    </script>
</body>

</html>


<?php } else{header("Location: login.php"); exit();} ?>