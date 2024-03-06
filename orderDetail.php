<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.0/css/responsive.dataTables.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
            max-height: 100vh;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .sidebar {
            flex: 0 0 250px;
            background-color: #c20000;
            color: #fff;
            padding: 20px;
            height: 100vh;
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
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul li:hover {
            background-color: #555;
        }

        .content {
            flex: 1;
            padding: 20px 20px 40px 20px;
            max-height: 100vh;
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

        /* Table CSS */
        .main__table {
            max-width: 1200px;
            margin: auto;
            width: 100% !important;
            overflow-x: visible;
        }



        .dataTables_wrapper {
            max-width: 1200px;
            margin: auto;
            box-sizing: border-box;
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

        .dataTables_length,
        .dataTables_filter,
        .dataTables_info,
        .dataTables_paginate {
            padding: 20px 0px !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background: #c20000;
            color: white !important;
        }

        .paginate_button:hover {
            background: #c20000 !important;
            color: white !important;
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
            <h2>Gforce</h2>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="orderData.php">Booking</a></li>
                <li><a href="calender.php">Calender</a></li>
                <li id="logout_btn"><a href="#">Logout</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Order Detail Content</h2>
                <section id="table__section">
                    <div class="bulk_delete"><button id="bulk_delete">Bulk Delete</button></div>
                    <table id="main__table" class="display main__table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Serial No:</th>
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
            
            $("#logout_btn").click(function() {
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
                            data: {
                                action: "logout"
                            },
                            success: function(response) {
                                const responseData = JSON.parse(response);
                                const operation = responseData.operation;
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
                            <td>${details.id}</td>
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