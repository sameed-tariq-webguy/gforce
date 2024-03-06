<?php 
    session_start();
    if (isset($_SESSION['logged_In']) && $_SESSION['logged_In'] === TRUE) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Data</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main__table {
            max-width: 1200px;
            margin: auto;
            width: 100% !important;
        }

        .dataTables_wrapper {
            max-width: 1200px;
            margin: auto;
            box-sizing: border-box;
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
            padding: 20px 15px;
            text-align: center;
            text-wrap: nowrap;
        }

        #populate_order_data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #populate_order_data tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .dataTables_length, .dataTables_filter, .dataTables_info, .dataTables_paginate{
            padding: 20px 0px !important;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover{
            background: #c20000;
            color: white !important;
        }

        .paginate_button:hover{
            background: #c20000 !important;
            color: white !important;
        }

        
    </style>
</head>

<body>
    <main class="main__section">
        <section id="table__section">
            <table id="main__table" class="display main__table">
                <thead>
                    <tr>
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
    </main>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", (event) => {

          


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
                        populateOrderData(data)
                        $('#main__table').DataTable({responsive: true});
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
        });
    </script>
</body>

</html>

<?php } else{header("Location: login.php"); exit();} ?>