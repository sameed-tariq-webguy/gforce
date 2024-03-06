const apiOrderData = () => {
    const reason = "want_order_data";
    fetch(`backend.php`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ reason: reason }),
    })
    .then(response => response.json())
    .then(data => {
        populateOrderData(data)
    })
    .catch(error => {
        console.error('Error:', error);
    });
};

let populateData = '';

// Function to show vehicleDetails in Table
function populateOrderData(detailsArray) {
    let populateData = '';

    detailsArray.forEach((details) => {
        // Use 'details' instead of 'item'
        populateData += `
            <tr>
                <td>${details.registration_number}</td>
                <td>${details.make}</td>
                <td>${details.model}</td>
                <td>${details.registration_date}</td>
                <td>${details.transmission_type}</td>
                <td>${details.next_month_due_date}</td>
                <td>${details.fueltype}</td>
                <td>${details.service_name}</td>
                <td>${details.fullname}</td>
                <td>${details.phone}</td>
            </tr>`;
    });

    // Move this line outside of the forEach loop
    const tableBody = document.getElementById('populate_order_data');
    tableBody.innerHTML = populateData;
}

apiOrderData();

