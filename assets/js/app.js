window.addEventListener("load", function () {
    const destroySession = () => {
        sessionStorage.removeItem('vehicleDetails')
        sessionStorage.removeItem('selectedServices')
        sessionStorage.removeItem('selectedDates')
        sessionStorage.removeItem('userInformation')
    }

    

    populateData();
  

    const searchInput = document.getElementById("vehicle_number");
    const searchBtn = document.getElementById("searchBtn");
    let selectedServices = JSON.parse(sessionStorage.getItem("selectedServices")) || [];

    searchBtn.addEventListener("click", function () {
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
            const { NextMotDueDate } = data.Response.DataItems.VehicleStatus;

            const registrationYear = new Date(DateFirstRegistered).getFullYear();
            
            const extractedData = {
            DateFirstRegistered: registrationYear,
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
            renderSelectedServices('services_selected');
            
        })
        .catch((error) => console.error("Error:", error));
    };

    function renderSelectedServices(serviceId) {
        const servicesSelectedElement = document.getElementById(serviceId);

        servicesSelectedElement.innerHTML = ""; // Assuming there's only one element with the specified ID

        selectedServices.forEach(function (serviceTitle) {
            const listItemHTML = `<li class="list-group-item my-2">${serviceTitle}</li>`;
            servicesSelectedElement.innerHTML += listItemHTML;
        });
    }

    function renderVehicle(id) {
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
    
            const populateDataElement = document.getElementById(id);
            populateDataElement.innerHTML = template;
        }
    }

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

            var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
            myModal.show();
        }
    }

    function populateServices(services) {
        const serviceCardBox = document.getElementById("serviceCardBox");
        serviceCardBox.innerHTML = "";

        const htmlTemplate = `
        <div class="row">
            <div class="col-12 services_anchor">
                <div class="col-12">
                    <h1 class="mb-3">Choose your services</h1>
                    <p class="mb-3">We offer a wide range of services. Choose a category below to find out more about each, how to book, and promotional offers.</p>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="choose_services">

                                ${Object.entries(services).slice(0, 4).map(([category]) => (
                                    `<a href="#" class="text-decoration-none w-100">
                                        <div class="bg-white py-4 px-3 shadow rounded-3 w-100 d-flex align-items-center">
                                            <div class="icon">
                                                <svg style="max-width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                    <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero"/>
                                                </svg>
                                            </div>
                                            <div >${category}</div>
                                        </div>
                                    </a>`
                                )).join('') }
                                
                            </div>

                            <div class="choose_services">

                            ${Object.entries(services).slice(4, 6).map(([category, categoryData]) => (
                                `<div class="bg-white py-4 px-3 shadow rounded-3 w-100 d-flex align-items-center">
                                <div class="icon">
                                    <svg style="max-width: 40px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path xmlns="http://www.w3.org/2000/svg" d="M12 0c6.627 0 12 5.373 12 12s-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0zm0 1.043C5.949 1.043 1.043 5.95 1.043 12c0 6.051 4.906 10.957 10.957 10.957 6.051 0 10.957-4.906 10.957-10.957C22.957 5.949 18.05 1.043 12 1.043zm-1.275 15.943a.522.522 0 110-1.044h.956v-4.377h-.945a.522.522 0 01-.513-.428l-.009-.094c0-.288.234-.521.522-.521h1.467c.288 0 .522.233.522.521l-.001 4.899h.946a.522.522 0 110 1.044h-2.945zM11.73 6.26a1 1 0 110 2 1 1 0 010-2z" fill="currentColor" fill-rule="nonzero"/>
                                    </svg>
                                </div>
                                <div>${category}</div>
                            </div>`
                            )).join('') }
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ${Object.entries(services).map(([category, { description, services }]) => (
                `<div class="col-12 mt-5">
                    <div class="row">
                        <div class="col-12 col-lg-8 mb-3">
                            <h2>${category}</h2>
                            ${description ? `<p>${description}</p>` : ''}
                        </div>
                    </div>
                    ${services.map(({ name, description, price, type }) => (
                        `<div class="row bg-gray service_tab service shadow-sm" data-serviceTitle="${name}">
                            <div class="col-12 col-lg-12">
                                <h2>${name}</h2>
                                <p>${description}</p>
                            </div>
                        </div>`
                    )).join('')}
                </div>`
            )).join('')}


        </div>
    `;
        
        serviceCardBox.innerHTML = htmlTemplate;

    // Now you can use this template string wherever you need it in your JavaScript code.

    }

    const apiServices = () => {
        const reason = "want_services";
        fetch(`backend.php`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ reason: reason }),
        })
        .then((response) => response.json())
        .then((data) => {
            populateServices(data);
            getServiceTitle();

            renderSelectedServices('services_selected');
            populateSelectedClass(selectedServices);
        })
        .catch((error) => {
            console.error("Error:", error);
        });
    };

    apiServices();

    const populateSelectedClass = (selectedServices) => {
        // Show selected services from local storage and update the services_selected element
        selectedServices.forEach(function (serviceTitle) {
        const service = document.querySelector(
            `[data-serviceTitle="${serviceTitle}"]`
        );
        if (service) {
            service.classList.add("selected");
        }
        });
    };

    const getServiceTitle = () => {
        const services = document.querySelectorAll(".service");
        services.forEach(function (service) {
        service.addEventListener("click", function () {
            let serviceTitle = service.getAttribute("data-serviceTitle");
            toggleServiceSelection(service, serviceTitle);
        });
        });
    };

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
        function (date) {
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

    document.getElementById('loadSidebar2').addEventListener('click' , function () {
        const date_one = document.getElementById("date_one");
            const dateOneValue = date_one.value;
            if (dateOneValue) {
                const selectedDates = [dateOneValue];
                sessionStorage.setItem("selectedDates", JSON.stringify(selectedDates));

                console.log("Dates are valid and stored in local storage as an array.");
            } 
            else {
                alert("Please select date.");
            }
    })

  // ********************************************************************************************************************************


  document.getElementById('loadSidebar3').addEventListener('click', function (event) {
    event.preventDefault();
    const userInfoForm = document.getElementById("userInfoForm");
    const fullname = document.getElementById("fullname").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const address = document.getElementById("address").value.trim();

    if (validateInput(fullname, phone, address)) {
        const userInfo = {
            fullname: fullname,
            phone: phone,
            address: address,
        };

        const existingUserInfo = JSON.parse(sessionStorage.getItem("userInformation")) || [];

        sessionStorage.setItem("userInformation", JSON.stringify(userInfo));

        console.log("User information stored successfully");

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
                    alert(result);
                    destroySession()
                    window.location.href = "orderData.php";
                    // Handle the result from PHP if needed
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

  
  

    document.getElementById('loadSidebar').addEventListener('click', function () {
        renderVehicle('renderVehicle');
        renderSelectedServices('services_selected');
    });

    document.getElementById('loadSidebar1').addEventListener('click', function () {
        renderVehicle('renderVehicle1');
        renderSelectedServices('services_selected1');
    });

    document.getElementById('loadSidebar2').addEventListener('click', function () {
        renderVehicle('renderVehicle2');
        renderSelectedServices('services_selected2');
    });

    document.getElementById('loadSidebar3').addEventListener('click', function () {
        console.log('sameed');
        renderVehicle('renderVehicle3');
        renderSelectedServices('services_selected3');
    });
  
  
});


$(document).ready(function(){
    $(".btn-next").click(function(){
        // Find the current container
        var currentContainer = $(this).closest('.container_box');
        
        // Find the next container
        var nextContainer = currentContainer.next('.container_box');

        // Hide the current container
        currentContainer.hide();

        // Show the next container
        nextContainer.show();
    });

    $(".previous").click(function(){
        // Find the current container
        var currentContainer = $(this).closest('.container_box');
        
        // Find the previous container
        var previousContainer = currentContainer.prev('.container_box');
    
        // Hide all containers
        $('.container_box').hide();
    
        // Show only the previous container
        previousContainer.show();
    });
});
