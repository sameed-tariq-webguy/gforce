


<?php


$requestData = json_decode(file_get_contents('php://input'), true);

class Database {
    private static $instance;
    private $conn;

    private function __construct($servername, $username, $password, $database) {
        $this->conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance($servername, $username, $password, $database) {
        if (!self::$instance) {
            self::$instance = new self($servername, $username, $password, $database);
        }
        return self::$instance;
    }


    public function getConnection() {
        return $this->conn;
    }

    public function storeInfo($vehicleDetails , $selectedServices , $selectedDates , $userInformation) {

        // Extract Vehicle Data

        [
            'DateFirstRegistered' => $dateFirstRegistered,
            'Vrm' => $vrm,
            'Model' => $model,
            'TransmissionType' => $transmissionType,
            'FuelType' => $fuelType,
            'Make' => $make,
            'NextMotDueDate' => $nextMotDueDate,
        ] = $vehicleDetails;

        [
            'fullname' => $fullname,
            'phone' => $phone,
            'address' => $address,
        ] = $userInformation;

        $services = implode(', ' , $selectedServices);
        $dates = implode(', ' , $selectedDates);

        $sql = "INSERT INTO hiqonline_data 
        SET 
            registration_date = '$dateFirstRegistered',
            fueltype = '$fuelType',
            make = '$make',
            model = '$model',
            next_month_due_date = '$nextMotDueDate',
            transmission_type = '$transmissionType',
            registration_number = '$vrm',
            service_name = '$services',
            fullname = '$fullname',
            phone = '$phone',
            address = '$address',
            selected_dates = '$dates'";

            if ($this->conn->query($sql) === TRUE) {
                echo json_encode(["message" => "Record inserted successfully"]);
            } else {
                echo json_encode(["error" => "Error: " . $sql . "<br>" . $this->conn->error]);
            }
    }

    public function orderData() {
        $sql = "SELECT * FROM hiqonline_data";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data, true);
            exit;
        } else {
            echo json_encode("No records found");
            exit;
        }
    }

    public function removeData($ids){
        $sanitizedIds = array_map('intval', $ids);
        $sql = "DELETE FROM hiqonline_data WHERE id IN (" . implode(',', $sanitizedIds) . ")";
        if ($this->conn->query($sql) === TRUE) {
            // Query executed successfully
            echo json_encode(array("operation" => true, "message" => "IDs deleted successfully"));
        } else {
            // Error occurred while executing the query
            echo json_encode(array("operation" => false, "message" => "Failed to delete IDs: " . $this->conn->error));
        }
    }
}


$db = Database::getInstance('localhost', 'u788702992_hiqonline', 'Welcome2024@@', 'u788702992_hiqonline');    
// $db = Database::getInstance('localhost', 'sameed', 'sameed', 'hiqonline');  

// Now $conn can be used for database operations

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $requestData['reason'] === 'storeInfo') {

    $vehicleDetails = $requestData['vehicleDetails'];
    $selectedServices = $requestData['selectedServices'];
    $selectedDates = $requestData['selectedDates'];
    $userInformation = $requestData['userInformation'];

    $storeInfo = $db->storeInfo($vehicleDetails , $selectedServices , $selectedDates, $userInformation);
    echo $storeInfo;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $requestData['reason'] === 'want_order_data') {
    $orderData = $db->orderData();
    echo $orderData;
}

// Delete

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ids'])) {
    $ids = $_POST['ids'];
    $delete = $db->removeData($ids);
}

// Logout

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['action'] === 'logout') {
    session_start();
    unset($_SESSION['logged_In']);
    if (!isset($_SESSION['logged_in'])) {
        echo json_encode(array("operation" => true, "message" => "Session destroyed successfully"));
        exit;
    } else {
        echo json_encode(array("operation" => false, "message" => "Failed to destroy session"));
        exit;
    }
    
}
