<html lang="en" style="scroll-behavior:smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G FORCE AUTO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        :root {
            --background: #FAFAFA;
            --accordianBackground: #ebe8e4;
        }

        .active {
            background: rgb(194, 0, 0, 1) !important;
        }

        html,
        body {
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif !important;
        }

        .container {
            max-width: 100%;
            padding: 1rem;
        }

        .anchors_container {
            width: 100%;
            background: var(--background-section-color);
        }

        .anchor {
            background-color: #FFFFFF;
            padding: 1rem;
            display: flex;
            gap: 8px;
            align-items: center;
            cursor: pointer;
            max-height: 80px;
            height: 100%;
            width: 100%;
        }


        .anchor div:nth-child(2) {
            flex: 0.8;
        }

        .anchor_link {
            text-decoration: none;
            color: black !important;
        }

        .choose_services_title {
            font-size: 48px;
        }

        .choose_services_description {
            font-size: 16px;
            line-height: 24px;
        }

        .icon {
            background: #ebeaea;
            width: 50px;
            height: 50px;
            padding: 0.625rem;
            border-radius: 100%;
            object-fit: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .anchor:hover .icon {
            background-color: #c20000;
            /* Change the background color on hover */
            transition: 0.5s;
        }

        .anchor_box {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 16px;
        }

        .anchor:hover .icon svg {
            color: white;
        }

        .icon_image {
            max-width: 40px;
            width: 100%;
            max-height: 40px;
            height: 100%;
        }


        /* Service */
        .services_content {
            margin-block: 60px;
            box-sizing: border-box;
        }

        .service_button_container {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }


        .service_button {
            width: 100%;
            background: #c20000;
            color: white;
            outline: none;
            border: none;
            padding: 14px 16px;
            border-radius: 50px;
        }

        .book_now {
            width: 100%;
            color: white !important;
            outline: none;
            border: none;
            width: 100%;
            background: #c20000 !important;
            max-height: max-content !important;
            padding: 16px 30px;
            font-weight: 500;
            border-radius: 50px;
        }

        .service_row {
            background: #fafafa;
            padding: 24px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .service_row h2 {
            font-size: 18px;
            font-weight: 600;
        }

        .service_row p {
            font-size: 16px;
        }


        .services_list {
            border-bottom: 1px solid black;
            padding-block: 1.5rem;
        }

        #services_selected {
            padding: 8px 16px;
        }

        .sidebar {
            background: #EBE8E4;
            width: 100%;
            min-height: 400px;
            height: auto;
            padding: 1rem;
            border-radius: 0px 0px 16px 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            row-gap: 4rem;
        }

        .accordion-item addMargin {
            background: #ffffff;
        }

        .accordion-button {
            background-color: #c0bab1 !important;
            padding: 16px !important;
        }

        .collapsed {
            outline: none;
            box-shadow: none;
        }

        .accordion-item addMargin h2 {
            font-size: 20px;
            font-weight: 500;
        }

        .next_btn_container {
            width: 100%;

        }

        .next_btn_container .next_btn {
            width: 100%;
            padding: 1rem 2rem;
            border: none;
            outline: none;
            border-radius: 100px;
            background-color: #c0bab1;
            color: black;
        }

        .enabled_button {
            background: #c20000 !important;
            color: white !important;
        }

        @media only screen and (min-width: 768px) {
            .anchor_box {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media only screen and (min-width: 1200px) {
            .container {
                max-width: 100%;
                padding-inline: 2rem;
            }

            .anchor_box {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
            }
        }



        .nav-link {
            border-radius: 16px 16px 0px 0px;
            background: rgb(194, 0, 0, 0.2) !important;
        }


        .vehicle_search_container {
            border-radius: 50px;
        }

        .vehicle_details {
            border-radius: 2rem;
            padding: 2rem;
        }

        .form-control:focus {
            border-color: initial;
            box-shadow: none;
        }

        .vehicle_number {
            outline: none !important;
            border: 0 !important;
            width: 100%;
            background: none !important;
        }

        .vehicle_number:focus {
            box-shadow: none !important;
            outline: none !important;
        }

        .searchBtn {
            background: #c20000;
            color: white;
            height: 100%;
            border: none;
            outline: none;
        }

        .not_my_vehicle {
            background: #e6e4e4;
            color: #1b1c1b;
            padding: 0.875rem 1rem;
            border-radius: 50px;
        }

        .not_my_vehicle:hover {
            background: #505050;
            color: #fff;
        }

        .btn-green {
            background-color: #C1F35E;
            padding: 10px 20px;
            border-radius: 50px;
            width: 200px;
            height: 60px;
        }

        .btn-green:hover {
            background-color: #C1F35E;
        }

        #search_button {
            background: #c20000;
            color: white;
            padding: 10px 20px;
            border-radius: 50px;
            ;
        }

        .tab-panel {
            border-radius: 0px 20px 20px 20px;
        }

        .choose_services {
            display: grid;
            grid-template-columns: 1fr;
            /* 1 column by default */
            margin-top: 16px;
            gap: 16px;
        }

        @media (min-width: 576px) {
            .choose_services {
                grid-template-columns: repeat(2, 1fr);
                /* 2 columns on large mobile */
            }
        }

        @media (min-width: 992px) {
            .choose_services {
                grid-template-columns: repeat(4, 1fr);
                /* 4 columns on LG */
            }
        }

        .choose_services .shadow.rounded-3.w-100.d-flex.align-items-center {
            display: flex;
            align-items: center;
        }

        .choose_services .shadow.rounded-3 .icon {
            display: inline-block;
            background-color: #3498db;
            border-radius: 50%;
            padding: 4px;
            transition: background-color 0.3s;
            margin-right: 12px;
        }

        .choose_services .shadow.rounded-3:hover .icon {
            background-color: #2980b9;
        }

        .choose_services .icon svg {
            width: 100%;
            height: auto;
            color: #fff;
        }

        .choose_services>div .icon {
            margin-right: 8px;
        }

        .services_anchor {
            padding: 40px 20px;
            background-color: #FAFAFA;
        }

        .hiq_capra_btn {
            width: 100%;
            background-color: #c20000;
            padding: 16px 24px;
            width: 100%;
            border-radius: 50px;
            color: white;
            text-wrap: nowrap;
            outline: none;
            border: none;
        }

        .bg-gray {
            background: #FAFAFA;
        }

        .service_tab {
            padding: 30px 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            cursor: pointer;
        }


        .custom-accordion-button {
            background: #C0BAB1;
            color: black !important;
            font-weight: bold !important;
            font-size: 20px !important;
            border: 0;
            outline: 0;

        }

        .accordion-button-active:active {
            background: #C0BAB1;
            color: black;
            font-weight: bold;
            font-size: 20px;
            border: 0;
            outline: 0;
        }

        .selected {
            background: rgb(194, 0, 0, 0.3);
        }

        .custom-accordion-button:focus {
            box-shadow: none;
        }


        .content_section {
            background: #FAFAFA;
            padding: 40px 20px;
        }

        .date__box {
            background: #E6E4E4;
        }

        .accordion-button:focus {
            outline: 0 !important;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 0) !important;
        }

        .accordion-flush .accordion-item addMargin {
            border-radius: 0px 0px 20px 20px;
        }

        .accordion-flush .accordion-item addMargin:focus {
            margin-bottom: 20px;
        }

        .accordion-item addMargin:not(.collapsed) .accordion-body:not(:empty) {
            margin-bottom: 20px;
        }

        .table_accordion {
            background-color: #ebe8e4 !important;
            border-radius: 0px !important;
        }

        .table_accordion:hover,
        .table_accordion:focus {
            background-color: rgb(194, 0, 0, 0.2) !important;
        }

        .off-screen {
            visibility: hidden;
        }

        .services_table {
            width: 100%;
            border: 0;
            padding: 0;
        }

        .services_table thead tr td {
            padding: 10px;
        }

        .previous {
            cursor: pointer;
        }

        .main_container {
            padding-block: 32px;
            background: var(--background);
            margin-top: 3rem;
        }

        .wrapper {
            max-width: 95%;
            margin: auto;
        }

        .pre_table_content {
            margin-bottom: 2rem;
        }

        .pre_table_content h4 {
            margin-bottom: 16px;
        }

        .pre_table_content p {
            margin-top: 8px;
            margin-bottom: 16px;
        }

        .services_table {
            margin-block: 1.25rem;
            table-layout: fixed;
            width: 100%;
        }

        .services_table thead tr th {
            color: #1b1c1b;
            text-decoration: none;
            padding: 1.5rem 0.3125rem 1.4375rem;
            text-align: center;
            font-size: 18px;
            line-height: 18px;
            font-weight: 400;
            border-right: 1px solid rgb(0, 0, 0, 0.2);
        }

        .services_table thead tr th:last-child {
            border-right: 0px;
        }


        .off-screen {
            visibility: hidden;
        }

        .table_accordion {
            background: var(--accordianBackground) !important;
            border: none;
            outline: none !important;
            box-shadow: none !important;
        }

        .table_accordion:hover,
        .table_accordion:active,
        .table_accordion:focus {
            background: rgb(194, 0, 0, 0.2) !important;
        }

        .inner_table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px;
        }

        .inner_table tbody tr td {
            text-align: center;
            width: 20%;
            border: 1px solid black;
        }

        @media screen and (max-width: 850px) {
            .inner_table tbody tr td {
                text-align: center;
                width: 10%;
                border: 1px solid black;
            }

            .inner_table tbody tr td:first-child {
                width: 60%;
            }
        }

        .table_desc {
            padding: 10px;
        }

        .accordion-button{
            font-size: 20px !important;
            color: black !important;
            font-weight: 400 !important;
        }

        .accordion-button:not(.collapsed) .accordion-icon::before {
            background-color: white;
        }

        .accordion-button::after {
            background-color: white; 
            border-radius: 100%;
            padding: 20px; 
            background-position: center;
        }

        .service_list{
            margin: 0;
            
        }

        .service-title {
            flex: 1;
        }

        .price{
            flex: 1;
            text-align: end;
        }

        .swal2-confirm{
            background: #c20000 !important;
        }

    </style>
</head>

<body>

    <div class="container" style="padding: 0; margin: 0;">
        <div class="row">
            <div class="col-12 mt-5">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active " style="border-radius: 20px 20px 0px 0px; background : #c20000 !important; color : white;" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Book Your MOT or Service</button>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-panel fade show active px-3" style="padding-block: 20px;" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="container bg-white vehicle_search_container p-2">
                            <div class="input-group">
                                <input type="text" class="vehicle_number input form-control" autocomplete="off" placeholder="Enter Vehicle Number" id="vehicle_number">
                                <button class="btn searchBtn" id="searchBtn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Your Vehicle</h5>
                    <svg data-bs-dismiss="modal" aria-label="Close" style="max-width: 40px; cursor: pointer;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 btn-close">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                </div>
                <div class="modal-body p-4">
                    <div id="content">
                        <div id="container1" class="container_box mx-auto" style="max-width: 76rem;">
                            <div class="container mx-auto">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="mb-3">Your car</h1>
                                        <p class="mb-4">Check these details relate to your vehicle. If they’re incorrect, press ‘Not my vehicle’ to re-enter your information.</p>
                                    </div>
                                </div>
                                <div class="row shadow d-flex align-items-center vehicle_details">
                                    <div class="col-12 col-lg-6 d-flex justify-content-center">
                                        <img src="https://www.hiqonline.co.uk/assets/img/book/vehicle/hatchback.png" alt="Car Illustration">
                                    </div>
                                    <div class="col-12 col-lg-6 mt-5 mt-md-4 mt-lg-0">
                                        <div class="row" id="populate__data"></div>
                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end align-items-center">
                                                <button class="btn not_my_vehicle">Not My Vehicle</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-5">
                                <div class="col-12 btn-next d-flex justify-content-end">
                                    <button class="btn next btn-green loadSidebar" style="background: #c20000; color: white;" id="loadSidebar">Next Step</button>
                                </div>
                            </div>
                        </div>

                        <div id="container2" class="container_box mx-auto" style="display: none;">
                            <div class="container-fluid mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="previous">
                                            <svg style="max-width: 50px; color : #c20000;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... Your content for container 2 ... -->
                            <div class="container-fluid p-0">
                                <div class="container p-0 mx-auto">
                                    <div class="row px-lg-3">
                                        <div class="col-12 col-lg-8 p-0">
                                            <div class="anchors_container rounded">
                                                <div class="row px-4">
                                                    <div class="col-12 p-0">
                                                        <h1 class="choose_services_title">Choose your services</h1>
                                                        <p class="choose_services_description">We offer a wide range of services. Choose a category below to find out more about each, how to book, and promotional offers.</p>
                                                    </div>
                                                    <div class="col-12 p-0">
                                                        <div class="anchor_box">
                                                            <div class="w-100 p-0">
                                                                <a href="#carservicing" class="anchor_link">
                                                                    <div class="anchor shadow">
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero" />
                                                                            </svg>
                                                                        </div>
                                                                        <div>Car Servicing</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="w-100 p-0">
                                                                <a href="#wheelalignment" class="anchor_link">
                                                                    <div class="anchor shadow">
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero" />
                                                                            </svg>
                                                                        </div>
                                                                        <div>Wheel Alignment</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="w-100 p-0">
                                                                <a href="#brakes" class="anchor_link">
                                                                    <div class="anchor shadow">
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero" />
                                                                            </svg>
                                                                        </div>
                                                                        <div>Brakes</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="w-100 p-0">
                                                                <a href="#enginetransmission" class="anchor_link">
                                                                    <div class="anchor shadow">
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero" />
                                                                            </svg>
                                                                        </div>
                                                                        <div>Engine Treatments</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="w-100 p-0">
                                                                <a href="#diagnostics" class="anchor_link">
                                                                    <div class="anchor shadow">
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero" />
                                                                            </svg>
                                                                        </div>
                                                                        <div>Diagnostics</div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="w-100 p-0">
                                                                <a href="#freechecks" class="anchor_link">
                                                                    <div class="anchor shadow">
                                                                        <div class="icon">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                                                <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero" />
                                                                            </svg>
                                                                        </div>
                                                                        <div>Complimentary FREE Checks</div>
                                                                    </div>
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="services_content">
                                                <div class="row px-4 px-lg-4">
                                                    <div class="col-12 my-4" id="carservicing">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-8 p-0">
                                                                <h2>Car Servicing</h2>
                                                                <p>If you know what service(s) you need, please add to your basket. Not sure? See our servicing guide to find out what’s included with each type of service.</p>
                                                            </div>
                                                            <div class="col-12 col-lg-4 p-0">
                                                                <div class="service_button_container">
                                                                    <button class="service_button text-wrap">What's included in a service?</button>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row services_list">
                                                            <div class="col-12 service_row service" data-serviceTitle="Oil & Filter">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Oil & Filter</h2>
                                                                        <p>Our oil & filter change is perfect for maintaining your cars performance between services.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Interim Car service">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Interim Car service</h2>
                                                                        <p>Our interim service is recommended for high mileage drivers who want peace of mind between annual services.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Full Car Service">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Full Car Service</h2>
                                                                        <p>A full service is a thorough inspection of your vehicle with a 53 point check covering everything from essential fluids under the bonnet to brake discs and pads.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Major Car Service">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Major Car Service</h2>
                                                                        <p>A major service is a thorough inspection of your vehicle with a check covering everything from fuel filter, spark plugs and pads.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Premium Oil">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Premium Oil</h2>
                                                                        <p>Upgrade to a premium oil brand e.g. Castrol, Mobil, Shell. Price dependant on your car and oil selection</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!-- Wheel Alignment -->
                                                    <div class="col-12 my-4" id="wheelalignment">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                <h2>Wheel Alignment</h2>
                                                                <p>Wheel alignment – also known as tracking – ensures a safer grip on the road, better handling, and longer tyre life. Alignment can be affected by bumps caused by potholes and pavement curb clipping, so it’s good to monitor regularly. We’ll check your tyres’ angles and directions against industry specifications to keep your tyres safe on the road for longer.</p>
                                                            </div>

                                                        </div>

                                                        <div class="row services_list">
                                                            <div class="col-12 service_row service" data-serviceTitle="2 Wheel Alignment">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>2 Wheel Alignment</h2>
                                                                        <p>Tracking, or wheel alignment is not only important for good hold on the road, it also helps you get more miles out of your tyres. If you ever clip a curb, or drive through a pot hole, you might find that your wheel alignment is thrown out.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="4 Wheel Alignment">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>4 Wheel Alignment</h2>
                                                                        <p>Our 4 Wheel Alignment service ensures optimum positioning and adjustment for your wheels to maximise handling performance and tyre life.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>


                                                    <!-- Brakes -->
                                                    <div class="col-12 my-4" id="brakes">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                <h2>Brakes</h2>
                                                            </div>

                                                        </div>

                                                        <div class="row services_list">
                                                            <div class="col-12 service_row service" data-serviceTitle="Brake Fluid Change">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Brake Fluid Change</h2>
                                                                        <p>Brake Fluid Change. Vehicle manufacturers recommend this is changed every 2 years Over time the hydraulic brake fluid absorbs moisture and other contaminants which can seriously affect braking performance.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="New Brakes">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>New Brakes</h2>
                                                                        <p>New Brakes, The cost of new brakes depends on the make and model of your car. Choose the add to basket option and we will contact you direct with a quote bespoke to your car. We only use quality parts from approved suppliers .</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Brake Pads">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Brake Pads</h2>
                                                                        <p>Brake Pads The pads are fitted in the calliper with their friction material almost touching the two sides of the brake disc, These can wear out over time which can result in a warning light on the dashboard or a squeaking noise coming from the brakes.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Brake Disc">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Brake Discs</h2>
                                                                        <p>Brake Discs. They are fitted to the inside of your car’s wheels. As you apply pressure to the brake pedal, brake fluid pushes a piston against the caliper, causing it to squeeze the pads against the disc. They wear down over time & have a specific manufacture thickness to enable safe braking.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <!-- Engine Treatments -->
                                                    <div class="col-12 my-4" id="enginetransmission">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                <h2>Engine Treatments</h2>
                                                                <p>Engine oil treatments can be effective at reducing engine wear and tear and improving fuel efficiency. They typically contain anti-wear additives, detergents, and friction modifiers that help to protect engine parts from damage. Put simply they pretect, clean and lubricate your engine.</p>
                                                            </div>

                                                        </div>

                                                        <div class="row services_list">
                                                            <div class="col-12 service_row service" data-serviceTitle="Petrol Treatment">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Petrol Treatment</h2>
                                                                        <p>An advanced formula petrol treatment improves engine performance and driveability by cleaning and lubricating the fuel system in petrol engines.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Engine Flush">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Engine Flush</h2>
                                                                        <p>An Engine Flush provides rapid cleaning of engines internally, to eliminate sludge, varnish and lacquer caused by the effects of biodiesel and ethanol-based fuels.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <!-- Diagnostics -->
                                                    <div class="col-12 my-4" id="diagnostics">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                <h2>Diagnostics</h2>
                                                                <p>Modern cars have extensive computer networks which contain essential information. That network can only be accessed with advanced technology, especially when diagnosing problems or faults. We offer full vehicle diagnostic repairs with the latest tools and software, to keep your vehicle properly maintained.</p>
                                                            </div>

                                                        </div>

                                                        <div class="row services_list">
                                                            <div class="col-12 service_row service" data-serviceTitle="Vehicle Diagnostics">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Vehicle Diagnostics</h2>
                                                                        <p>Modern vehicles are becoming ever more technologically advanced. And so are the tools and equipment that you need to repair them.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Tyre Pressure Monitoring System Service (TPMS Service)">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Tyre Pressure Monitoring System Service (TPMS Service)</h2>
                                                                        <p>Tyre Pressure Monitoring Systems monitor tyre pressure without the need of a gauge and advise motorists if their tyres are losing pressure.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="Airbag Warning Light Diagnosis">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>Airbag Warning Light Diagnosis</h2>
                                                                        <p>Airbag Warning Light</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>

                                                    <!-- Complimentary FREE Checks -->
                                                    <div class="col-12 my-4" id="freechecks">
                                                        <div class="row">
                                                            <div class="col-12 col-lg-12">
                                                                <h2>Complimentary FREE Checks</h2>
                                                                <p>We offer FREE checks at our Centres to make sure your vehicle is roadworthy, keep you safe on the road and to give you peace of mind. Talk to us to find out more.</p>
                                                            </div>

                                                        </div>

                                                        <div class="row services_list">
                                                            <div class="col-12 service_row service" data-serviceTitle="FREE 25 Point Vehicle Health Check">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>FREE 25 Point Vehicle Health Check</h2>
                                                                        <p>Full vehicle health check for complete peace of mind.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 service_row service" data-serviceTitle="FREE Brake Fluid Check">
                                                                <div class="row">
                                                                    <div class="col-12 col-lg-9">
                                                                        <h2>FREE Brake Fluid Check</h2>
                                                                        <p>Brake Fluid Check. When you apply pressure to the brake pedal, a hydraulic fluid rushes to each brake which slows your vehicle down. Over time the hydraulic brake fluid absorbs moisture & other contaminants which can affect brake performance.</p>
                                                                    </div>
                                                                    <div class="col-12 col-lg-3 d-flex justify-content-end align-items-center">
                                                                        <button class="book_now">Book Now</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sidebar -->
                                        <div class="col-12 col-lg-4 p-0">
                                            <div class="sidebar" style="position: sticky; top : 0;">

                                                <div class="accordion accordion-flush" id="accordionFlushExample">

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-headingOne">
                                                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Your vehicle</button>
                                                        </h2>
                                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="row renderVehicle" id="renderVehicle"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Services & MOTs</button> </h2>
                                                        <div id="flush-collapseTwo" class="accordion-collapse collapse service_accordion" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <ul class="p-0 services_selected" id="services_selected"></ul>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="next_btn_container mt-auto">
                                                    <button class="next_btn btn-next loadSidebar" disabled id="loadSidebar1">Next Step</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="main_container">
                                        <div class="wrapper">
                                            <div class="pre_table_content">
                                                <h4>What's included with our services?</h4>
                                                <p>Take a look below for more details on what's included in each of our car care services.</p>
                                                <p>*Certain vehicles use specialist oils, if the manufacturer advises your car needs a premium oil we
                                                    will advise before commencing any work if any additional costs are involved</p>
                                                <p>**In rare cases certain car makes carry premium priced fuel filters. If this is applicable to your
                                                    vehicle then we will always advise before commencing the work if there would be an additional cost
                                                    for your vehicle</p>
                                                <p>***Applies to standard spark plugs. If your vehicle carries long life spark plugs or similar we will
                                                    advise if there are any additional costs before commencing any work</p>
                                                <p>****Some GFORCE AUTO Centres complete visual checks on the brake drums, shoes, pads and discs and do not
                                                    remove the wheels, please check before booking.</p>
                                            </div>

                                            <div>
                                                <table class="services_table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="">
                                                                <span class="off-screen">Item</span>
                                                            </th>
                                                            <th scope="col" class="oil-and-filter">
                                                                <a class="text-decoration-none text-black" href="/car-servicing/oil-and-filter" target="_blank">Oil &amp; filter</a>
                                                            </th>
                                                            <th scope="col" class="interim-service">
                                                                <a class="text-decoration-none text-black" href="/car-servicing/interim-service" target="_blank">Interim service</a>
                                                            </th>
                                                            <th scope="col" class="full-service">
                                                                <a class="text-decoration-none text-black" href="/car-servicing/full-service" target="_blank">Full service</a>
                                                            </th>
                                                            <th scope="col" class="major-service">
                                                                <a class="text-decoration-none text-black" href="/car-servicing/major-service" target="_blank">Major service</a>
                                                            </th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td colspan="5">
                                                                <div class="accordion " id="accordionExample">

                                                                    <div class="accordion-item addMargin mb-2">
                                                                        <h2 class="accordion-header" id="oilaccordion">
                                                                            <button class="accordion-button table_accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="true" aria-controls="collapseZero">Oil</button>
                                                                        </h2>
                                                                        <div id="collapseZero" class="accordion-collapse collapse" aria-labelledby="oilaccordion" data-bs-parent="#oilaccordion">
                                                                            <div class="accordion-body p-0">
                                                                                <table class="inner_table">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td width="40%" scope="col" class="table_desc text-end border-end">Renew engine oil*</td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/2196F3.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">
                                                                                                Replace oil filter</td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/2196F3.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Run
                                                                                                engine and check for leaks</td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/2196F3.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Refit
                                                                                                sump plug and replace washer if required</td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/2196F3.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="accordion-item addMargin mb-2">
                                                                        <h2 class="accordion-header" id="onlevelchecks">
                                                                            <button class="accordion-button table_accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">On Level
                                                                                Checks</button>
                                                                        </h2>
                                                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="onlevelchecks" data-bs-parent="#oilaccordion">
                                                                            <div class="accordion-body p-0">
                                                                                <table class="inner_table">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check vehicle lights</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check vehicle registration plate condition</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Fuel cap condition</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Horn Operation</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Dashboard Warning Lights</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Seat belts Front & rear (inc. lap belt)</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Windscreen wiper blades checked</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Washer Jets</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Shock Absorbers</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Tyre wear/condition</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></i></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Lubricate door hinges</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="accordion-item addMargin mb-2">
                                                                        <h2 class="accordion-header" id="onlevelchecks">
                                                                            <button class="accordion-button table_accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Under the bonnet</button>
                                                                        </h2>
                                                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="onlevelchecks" data-bs-parent="#oilaccordion">
                                                                            <div class="accordion-body p-0">
                                                                                <table class="inner_table">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Renew air filter</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"> </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Replace pollen filter</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check brake fluid levels</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>


                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Top-up washer fluid</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check and top-up power steering resevoir</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check cooling fan operation</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check coolant level and concentration %</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Top up coolant</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Visual check of hoses and pipes</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Battery check</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Replace external fuel filter, diesel only**</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Visual inspection of drive belts </td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end  border-end">Check timing/cam belt (Interval check only) </td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Replace spark plugs*** (Petrol Vehicles only)</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Lubricate bonnet latch and hinges</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="accordion-item addMargin mb-2">
                                                                        <h2 class="accordion-header" id="underthevehicle">
                                                                            <button class="accordion-button table_accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Under the vehicle</button>
                                                                        </h2>
                                                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="underthevehicle" data-bs-parent="#underthevehicle">
                                                                            <div class="accordion-body p-0">
                                                                                <table class="inner_table">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check wheel bearings</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check steering components</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Visual brake inspection</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>


                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Remove wheels and inspect brake drums and shoes**** </td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Remove wheels and inspect brake pads and discs****</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><i class="bi-dash-lg"></i></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check brake system hydraulics</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check brake servo</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check handbrake operation</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Inspect exhaust system</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Tyre pressures checked and adjusted</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check propshaft/drive shaft, joints and gaiters</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check suspension springs</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check shock absorbers </td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="accordion-item addMargin mb-2">
                                                                        <h2 class="accordion-header" id="onlevelchecks">
                                                                            <button class="accordion-button table_accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Road Test</button>
                                                                        </h2>
                                                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="onlevelchecks" data-bs-parent="#oilaccordion">
                                                                            <div class="accordion-body p-0">
                                                                                <table class="inner_table">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check gearbox operation </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Engine noises</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Clutch</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>

                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Exhausts operation</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Steering</td>
                                                                                            <td scope="col" class="table_desc border-end"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check"></td>
                                                                                            <td scope="col" class="table_desc border-end"><img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check"></td>
                                                                                        </tr>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="accordion-item addMargin mb-2">
                                                                        <h2 class="accordion-header" id="onlevelchecks">
                                                                            <button class="accordion-button table_accordion" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="true" aria-controls="collapsesix">Road Test</button>
                                                                        </h2>
                                                                        <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="onlevelchecks" data-bs-parent="#oilaccordion">
                                                                            <div class="accordion-body p-0">
                                                                                <table class="inner_table">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Recheck engine oil levels</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/2196F3.svg" alt="">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Check/adjust wheel nut torque</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td scope="col" class="table_desc text-end border-end">Service book stamped</td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/F29502.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/1a936f.svg" alt="Check">
                                                                                            </td>
                                                                                            <td scope="col" class="table_desc border-end">
                                                                                                <img width="20px" src="https://gforceautocare.com/wp-content/uploads/2024/02/85F321.svg" alt="Check">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div id="container3" class="container_box mx-auto" style="display: none;">
                            <div class="container-fluid mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="previous">
                                            <svg style="max-width: 50px; color : #c20000;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ... Your content for container 3 ... -->
                            <div class="container-fluid mt-4">
                                <div>
                                    <div class="row">
                                        <div class="col-12 col-lg-8 px-4 py-4 mb-4 mb--lg-0 content_section">
                                            <h1>Choose preferred appointments</h1>
                                            <p>Please choose two and we’ll fix the date when we call to confirm the booking.</p>

                                            <div class="row mx-auto w-100">
                                                <div class="col-12 p-0 date__box rounded">
                                                    <div class="px-3 py-3">
                                                        <div class="mb-3">
                                                            <label for="date_one" class="form-label">Date one</label>
                                                            <input type="date" class="form-control w-100" id="date_one">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sidebar -->
                                        <div class="col-12 col-lg-4 p-0">
                                            <div class="sidebar">

                                                <div class="accordion accordion-flush" id="accordionFlushExample">

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-headingOne">
                                                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" >Your vehicle</button>
                                                        </h2>
                                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="row renderVehicle"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Services & MOTs</button> </h2>
                                                        <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <ul class="p-0 services_selected"></ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-appointment"><button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-appointments" aria-expanded="false" aria-controls="flush-appointments">Appointments</button> </h2>
                                                        <div id="flush-appointments" class="accordion-collapse collapse" aria-labelledby="flush-appointment" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="p-0 d-flex flex-column justify-content-center align-items-start">
                                                                    <strong class="mb-3">Selected Date</strong>
                                                                    <p class="date_selected"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="next_btn_container mt-auto">
                                                    <button class="next_btn btn-next  loadSidebar" disabled id="loadSidebar2">Next Step</button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="container4" class="container_box mx-auto" style="display: none;">
                            <div class="container-fluid mb-4">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="previous">
                                            <svg style="max-width: 50px; color : #c20000;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div>
                                    <div class="row ">
                                        <div class="col-12 col-lg-8  content_section">
                                            <h1 class="mb-3">Contact</h1>

                                            <div class="row mx-auto w-100">
                                                <div class="col-12 p-0 date__box rounded">
                                                    <div class="px-3 py-3">
                                                        <form id="userInfoForm">
                                                            <div class="mb-3">
                                                                <label for="fullname" class="form-label">Full Name</label>
                                                                <input type="text" class="form-control" id="fullname" required autocomplete="nope">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="phone" class="form-label">Phone Number</label>
                                                                <input type="tel" class="form-control" id="phone" required autocomplete="nope">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="address" class="form-label">Address</label>
                                                                <textarea class="form-control" id="address" rows="3" required autocomplete="nope"></textarea>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Sidebar -->
                                        <div class="col-12 col-lg-4 p-0">
                                            <div class="sidebar">

                                                <div class="accordion accordion-flush" id="accordionFlushExample">

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-headingOne">
                                                            <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">Your vehicle</button>
                                                        </h2>
                                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="row renderVehicle" id="renderVehicle2"></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">Services & MOTs</button> </h2>
                                                        <div id="flush-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <ul class="p-0 services_selected" id="services_selected2"></ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Appointment -->
                                                    <div class="accordion-item addMargin">
                                                        <h2 class="accordion-header" id="flush-appointment"><button class="accordion-button collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#flush-appointments" aria-expanded="false" aria-controls="flush-appointments">Appointments</button> </h2>
                                                        <div id="flush-appointments" class="accordion-collapse collapse show" aria-labelledby="flush-appointment" data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">
                                                                <div class="p-0 d-flex flex-column justify-content-center align-items-start">
                                                                    <strong class="mb-3">Selected Date</strong>
                                                                    <p class="date_selected"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class="next_btn_container mt-auto">
                                                    <button class="next_btn loadSidebar" disabled id="loadSidebar3">Submit</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Flat Picker -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- App Js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.5/dist/sweetalert2.all.min.js"></script>

    <script>
        window.addEventListener("load", function() {
            let myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            let VehicleAccordion = new bootstrap.Collapse(document.getElementById('flush-collapseOne') , {toggle : true});
            let ServicesAccordion = new bootstrap.Collapse(document.getElementById('flush-collapseTwo') , {toggle : false});
            

            // VehicleAccordion._element.classList.contains('show')


            const destroySession = () => {
                sessionStorage.removeItem('vehicleDetails')
                sessionStorage.removeItem('selectedServices')
                sessionStorage.removeItem('selectedDates')
                sessionStorage.removeItem('userInformation')
            }

            destroySession()
            populateData();


            const searchInput = document.getElementById("vehicle_number");
            const searchBtn = document.getElementById("searchBtn");
            let selectedServices = JSON.parse(sessionStorage.getItem("selectedServices")) || [];


            searchBtn.addEventListener("click", function() {
                let vehicle_number = searchInput.value;
                if (vehicle_number != "") {
                    apiResponse(vehicle_number);
                }
            });

            const apiResponse = (vehicle_number) => {
                fetch(
                        `https://uk1.ukvehicledata.co.uk/api/datapackage/VehicleAndMotHistory?v=2&api_nullitems=1&auth_apikey=00a64f32-ef4f-4da9-aa2a-1caecb0099eb&key_VRM=${vehicle_number}`
                    )
                    .then((response) => response.json())
                    .then((data) => {
                        const {
                            DateFirstRegistered,
                            Vrm,
                            Model,
                            TransmissionType,
                            FuelType,
                            Make,
                        } = data.Response.DataItems.VehicleRegistration;
                        const {
                            NextMotDueDate
                        } = data.Response.DataItems.VehicleStatus;

                        const dateParts = DateFirstRegistered.split('/');
                        const year = dateParts[0];
                        
                        const extractedData = {
                            DateFirstRegistered: year,
                            Vrm,
                            Model,
                            TransmissionType,
                            FuelType,
                            Make,
                            NextMotDueDate,
                        };

                        sessionStorage.setItem("vehicleDetails", JSON.stringify(extractedData));
                        populateData();

                        populateSelectedClass(selectedServices);


                    })
                    .catch((error) => console.error("Error:", error));
            };

            // Function to show vehicleDetails in Table
            function populateData() {
                const storedvehicleDetails = JSON.parse(sessionStorage.getItem("vehicleDetails"));
                if (storedvehicleDetails) {
                    const template = `
            <div class="col-6">
                <strong>Registration</strong>
                <p>${storedvehicleDetails.Vrm}</p>
            </div>
            <div class="col-6">
                <strong>Vehicle brand</strong>
                <p>${storedvehicleDetails.Make}</p>
            </div>
            <div class="col-6">
                <strong>Model</strong>
                <p>${storedvehicleDetails.Model}</p>
            </div>
            <div class="col-6">
                <strong>Year of registration</strong>
                <p>${new Date(
                storedvehicleDetails.DateFirstRegistered
                ).getFullYear()}</p>
            </div>
            <div class="col-6">
                <strong>Transmission</strong>
                <p>${storedvehicleDetails.TransmissionType}</p>
            </div>
            <div class="col-6">
                <strong>MOT due date</strong>
                <p>${storedvehicleDetails.NextMotDueDate}</p>
            </div>
            <div class="col-6">
                <strong>Fuel type</strong>
                <p>${storedvehicleDetails.FuelType}</p>
            </div>
        `;

                    const populateDataElement = document.getElementById("populate__data");
                    populateDataElement.innerHTML = template;


                    myModal.show();
                }
            }


            function renderVehicle() {
                let rendervehicles = document.querySelectorAll('.renderVehicle')
                rendervehicles.forEach((vehicleElement) => {

                    const storedvehicleDetails = JSON.parse(sessionStorage.getItem("vehicleDetails"));

                    if (storedvehicleDetails) {
                        const template = `
                <div class="col-6">
                    <strong>Registration</strong>
                    <p>${storedvehicleDetails.Vrm}</p>
                </div>
                <div class="col-6">
                    <strong>Vehicle brand</strong>
                    <p>${storedvehicleDetails.Make}</p>
                </div>
                <div class="col-6">
                    <strong>Model</strong>
                    <p>${storedvehicleDetails.Model}</p>
                </div>
                <div class="col-6">
                    <strong>Year of registration</strong>
                    <p>${new Date(
                        storedvehicleDetails.DateFirstRegistered
                    ).getFullYear()}</p>
                </div>
                <div class="col-6">
                    <strong>Transmission</strong>
                    <p>${storedvehicleDetails.TransmissionType}</p>
                </div>
                <div class="col-6">
                    <strong>MOT due date</strong>
                    <p>${storedvehicleDetails.NextMotDueDate}</p>
                </div>
                <div class="col-6">
                    <strong>Fuel type</strong>
                    <p>${storedvehicleDetails.FuelType}</p>
                </div>
            `;


                        vehicleElement.innerHTML = template;
                    }
                })
            }

            function renderSelectedServices() {

                let render_services_selected = document.querySelectorAll('.services_selected')

                render_services_selected.forEach((serviceElement) => {
                    serviceElement.innerHTML = ""; // Assuming there's only one element with the specified ID

                    selectedServices.forEach(function(serviceTitle) {
                        const listItemHTML = `<li class="list-group-item service_list my-2 d-flex justify-content-between "><div class="service-title">${serviceTitle}</div><div class="price">Price on request</div></li>`;
                        serviceElement.innerHTML += listItemHTML;
                    });
                })



            }



            const populateSelectedClass = (selectedServices) => {
                // Show selected services from local storage and update the services_selected element
                selectedServices.forEach(function(serviceTitle) {
                    const service = document.querySelector(`[data-serviceTitle="${serviceTitle}"]`);
                    if (service) {
                        service.classList.add("selected")
                    }
                });
            };

            const getServiceTitle = () => {
                const services = document.querySelectorAll(".service");
                services.forEach(function(service) {
                    service.addEventListener("click", function() {
                        let serviceTitle = service.getAttribute("data-serviceTitle");
                        toggleServiceSelection(service, serviceTitle);
                    });
                });


            };

            getServiceTitle()

            function toggleServiceSelection(service, serviceTitle) {
                let index = selectedServices.indexOf(serviceTitle);

                if (index !== -1) {
                    // Service is already selected, remove it from the array and the 'selected' class
                    selectedServices.splice(index, 1);
                    service.classList.remove("selected");
                } else {
                    // Service is not selected, add it to the array and add the 'selected' class
                    selectedServices.push(serviceTitle);
                    service.classList.add("selected");
                }

                sessionStorage.setItem("selectedServices", JSON.stringify(selectedServices));


                renderSelectedServices('services_selected');

                enableBtn(1)
            }

            const enableBtn = (selectorNumber) => {
                const currentBtn = document.querySelectorAll('.btn-next')[selectorNumber];


                if (selectedServices.length > 0 && currentBtn.hasAttribute('disabled')) {
                    ServicesAccordion.show()
                    currentBtn.classList.add('enabled_button');
                    currentBtn.disabled = false;
                } else if (selectedServices.length === 0 && !currentBtn.hasAttribute('disabled')) {
                    ServicesAccordion.hide()
                    currentBtn.classList.remove('enabled_button');
                    currentBtn.disabled = true;
                }
            }


            const enableSubmitBtn = (id) => {
                const currentBtn = document.getElementById(id);
                
                if (currentBtn) {
                    if (currentBtn.disabled) {
                        // If button is currently disabled, enable it
                        ServicesAccordion.show();
                        currentBtn.classList.add('enabled_button');
                        currentBtn.disabled = false;
                    } 
                }
            }

            const disableSubmitBtn = (id) => {
                const currentBtn = document.getElementById(id);
                if (currentBtn && !currentBtn.hasAttribute('disabled')) {
                    // Check if the disabled attribute doesn't exist or is false
                    ServicesAccordion.hide();
                    currentBtn.classList.remove('enabled_button');
                    currentBtn.disabled = true;
                }
            }

            // ********************************************************************************************************************************

            // Date Picker

            const currentDate = new Date();
            const lastDayFormatted = lastDayOfMonthFormatted(currentDate);

            flatpickr("input[type='date']", {
                enableTime: false,
                dateFormat: "d-m-Y",
                minDate: "today",
                maxDate: formatDateForFlatpickr(lastDayFormatted),
                disable: [
                    function(date) {
                        // Disable Sundays
                        return date.getDay() === 0;
                    },
                ],
            });

            function lastDayOfMonthFormatted(date) {
                const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);

                const day = lastDay.getDate();
                const month = lastDay.getMonth() + 1;
                const year = lastDay.getFullYear();

                // Format the result as "dd.mm.yyyy"
                const formattedDate = `${day < 10 ? "0" : ""}${day}.${
        month < 10 ? "0" : ""
        }${month}.${year}`;

                return formattedDate;
            }

            function formatDateForFlatpickr(dateString) {
                const [day, month, year] = dateString.split(".");
                return `${year}-${month}-${day}`;
            }

            // ********************************************************************************************************************************


            const date_one = document.getElementById("date_one");
            date_one.addEventListener('change', function() {
                const dateOneValue = date_one.value;
                if (dateOneValue) {
                    const selectedDates = [dateOneValue];
                    sessionStorage.setItem("selectedDates", JSON.stringify(selectedDates));
                    isDateSelected()
                    console.log("Dates are valid and stored in local storage as an array.");
                    
                } else {
                    alert("Please select date.");
                }
            })



            const isDateSelected = () => {
                const dates = JSON.parse(sessionStorage.getItem("selectedDates"))
                if (dates) {
                    showDate(dates)
                    enableBtn(2)
                }
            }

            isDateSelected()


            const showDate = (selectedDate) => {
                const date_selected = document.querySelectorAll('.date_selected')
                date_selected.forEach((selector) => {
                    selector.innerText = selectedDate;
                })
               document.getElementById('flush-appointments').classList.add('show')
            }

            // ********************************************************************************************************************************

            const userInfoForm = document.getElementById("userInfoForm");
            const fullname = document.getElementById("fullname");
            const phone = document.getElementById("phone");
            const address = document.getElementById("address");

            const inputFields = [fullname, phone, address];

            inputFields.forEach(field => {
                field.addEventListener("keyup", validateInputOnKeyup);
                field.addEventListener("change", validateInputOnKeyup);
            });

            function validateInputOnKeyup() {
                const isValid = validateInput(fullname.value.trim(), phone.value.trim(), address.value.trim());
                
                if (isValid) {
                    enableSubmitBtn('loadSidebar3');
                }
            }

            document.getElementById('loadSidebar3').addEventListener('click', function(event) {
                event.preventDefault();


                if (validateInput(fullname, phone, address)) {
                    const userInfo = {
                        fullname: fullname.value.trim(),
                        phone: phone.value.trim(),
                        address: address.value.trim(),
                    };

                    const existingUserInfo = JSON.parse(sessionStorage.getItem("userInformation")) || [];

                    sessionStorage.setItem("userInformation", JSON.stringify(userInfo));
                    enableSubmitBtn('loadSidebar3')

                    userInfoForm.reset();

                    // Sending All Data To PHP

                    const sendDataToPHP = () => {
                        // Prepare data object
                        const data = {
                            vehicleDetails: JSON.parse(sessionStorage.getItem("vehicleDetails")),
                            selectedServices: JSON.parse(sessionStorage.getItem("selectedServices")),
                            selectedDates: JSON.parse(sessionStorage.getItem("selectedDates")),
                            userInformation: JSON.parse(sessionStorage.getItem("userInformation")),
                            reason: "storeInfo",
                        };

                            // Make a POST request to the PHP script
                            fetch("backend.php", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                                body: JSON.stringify(data),
                            })
                            .then((response) => response.json())
                            .then((result) => {
                                if (result.hasOwnProperty("message")) {
                                    console.log(result.message)
                                    destroySession();
                                    Swal.fire({
                                        title: "Thank You",
                                        text: "Your vehicle is successfully booked. A manager will be in touch with you soon to confirm your appointment and what you need.",
                                        icon: "success"
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            myModal.hide();
                                        }
                                    });
                                } else if (result.hasOwnProperty("error")) {
                                    alert(result.error);
                                    
                                } else {
                                    console.error("Unknown response format:", result);
                                }
                            })
                            .catch((error) => {
                                console.error("Error:", error);
                            });
                        };

                    // Call the function to send data to PHP
                    sendDataToPHP();
                } else {
                    console.log("Validation failed. Please check your input.");
                }
            });




            // Function to validate user input
            function validateInput(fullname, phone, address) {
                return fullname && phone && address;
            }


            let loadSidebarBtn = document.querySelectorAll('.loadSidebar');
            loadSidebarBtn.forEach((element) => {
                element.addEventListener('click', function() {
                    renderVehicle()
                })
            })

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            document.querySelector('.btn-close').addEventListener('click', function() {
                destroySession();
            });


        });


        $(document).ready(function() {
            $(".btn-next").click(function() {
                let currentContainer = $(this).closest('.container_box');
                let containers = $('.container_box'); 
                let currentIndex = containers.index(currentContainer); 
                currentContainer.hide();
                let nextIndex = (currentIndex + 1) % containers.length;
                if (nextIndex < containers.length) {
                    containers.eq(nextIndex).show();
                }
            });

            $(".previous").click(function() {
                let currentContainer = $(this).closest('.container_box');
                let containers = $('.container_box');
                let currentIndex = containers.index(currentContainer);
                currentContainer.hide();
                containers.eq((currentIndex - 1 + containers.length) % containers.length).show();
            });
        });
    </script>
</body>

</html>