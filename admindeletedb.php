
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appointment_id = $_POST['appointment_id'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "evaccine";

    $connection = new mysqli($servername, $username, $password, $dbname);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    // Delete appointment from the database
    $delete_query = "DELETE FROM users WHERE username = $username"; 

    if ($connection->query($delete_query) === TRUE) {
        echo "Appointment ID $appointment_id deleted successfully.";
    } else {
        echo "Error deleting appointment: " . $connection->error;
    }

    $connection->close();
}
?>