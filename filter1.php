<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation Filter Results</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* Background and basic page layout */
        body {
            background: url('h3.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            padding: 40px;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        /* Table styling */
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }

        th {
            background-color: #000;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        /* Responsive buttons container if needed */
        .btn-container {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
    </style>
</head>
<body>

<h2>Filtered Reservation Results</h2>

<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel_reservation";

// Create a connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve filter parameters from the form
$startDate = isset($_GET['startDate']) ? $_GET['startDate'] : null;
$endDate = isset($_GET['endDate']) ? $_GET['endDate'] : null;
$selectedMonth = isset($_GET['month']) ? $_GET['month'] : null;
$selectedHotelId = isset($_GET['hotelID']) ? $_GET['hotelID'] : null;

// Build the SQL query based on the provided parameters
$sql = "SELECT * FROM reservation WHERE 1";

if ($startDate) {
    $sql .= " AND checkin_date >= '$startDate'";
}

if ($endDate) {
    $sql .= " AND checkin_date <= '$endDate'";
}

if ($selectedMonth) {
    $sql .= " AND MONTH(checkin_date) = '$selectedMonth'";
}

if ($selectedHotelId) {
    $sql .= " AND hotel_id = '$selectedHotelId'";
}

// Execute the query
$result = mysqli_query($connection, $sql);

if (!$result) {
    die('Query failed: ' . mysqli_error($connection));
}

// Display the results in a table
echo '<table>';
echo '<tr><th>Hotel ID</th><th>Reservation ID</th><th>Check-in Date</th><th>Check-out Date</th></tr>';

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['hotel_id'] . '</td>';
        echo '<td>' . $row['rid'] . '</td>';
        echo '<td>' . $row['checkin_date'] . '</td>';
        echo '<td>' . $row['checkout_date'] . '</td>';
        echo '</tr>';
    }
} else {
    echo '<tr><td colspan="4">No reservations found</td></tr>';
}

echo '</table>';

// Close the connection
mysqli_close($connection);
?>

</body>
</html>
