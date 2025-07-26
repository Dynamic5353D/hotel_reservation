<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Information</title>
    <!-- Include FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <style>
        /* Reset & Basic Styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            padding: 20px;
            background: url('h3.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        h2 {
            margin-bottom: 20px;
            color: #fff;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #000;
            color: #fff;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .text-right {
            text-align: right;
        }

        .btn-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .btn {
            padding: 10px;
            font-size: 14px;
            cursor: pointer;
        }

        .btn-info {
            background-color: #000;
            color: #fff;
            border: none;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .btn-spacing {
            display: flex;
            flex-flow: row;
            gap: 10px;
            justify-content: flex-start;
        }
    </style>
</head>
<body>

<h2>Employee Information</h2>
<table border='1'>
    <tr>
        <th>Employee ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Doj</th>
        <th>Age</th>
        <th>Salary</th>
        <th>Hotel ID</th>
        <th>Action</th>
    </tr>

    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "hotel_reservation";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM Employee");

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['emp_id']}</td>";
            echo "<td>{$row['emp_name']}</td>";
            echo "<td>{$row['emp_gender']}</td>";
            echo "<td>{$row['emp_address']}</td>";
            echo "<td>{$row['emp_ph']}</td>";
            echo "<td>{$row['emp_doj']}</td>";
            echo "<td>{$row['emp_age']}</td>";
            echo "<td>{$row['emp_salary']}</td>";
            echo "<td>{$row['hotel_id']}</td>";

            echo "<td>
                <button type='button' class='btn btn-info' onclick=\"updateEmployee('{$row['emp_id']}')\">
                    <i class='fas fa-pencil-alt'></i> UPDATE
                </button>
                <button type='button' class='btn btn-info' onclick=\"deleteEmployee('{$row['emp_id']}')\">
                    <i class='fas fa-trash'></i> DELETE
                </button>
              </td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10' style='text-align:center;'>No employees found</td></tr>";
    }

    $conn->close();
    ?>

</table>

<div class="btn-container btn-spacing">
    <button type="button" class="btn btn-info" onclick="addEmployee()">
        <i class="fas fa-plus"></i> ADD EMPLOYEE
    </button>
    <button type="button" class="btn btn-info" onclick="back()">
        <i class="fas fa-arrow-left"></i> BACK
    </button>
</div>

<script>
    function addEmployee() {
        window.location.href = "employee.php";
    }

    function back() {
        window.location.href = "homepage.php";
    }

    function updateEmployee(empId) {
        window.location.href = "employee_update.php?id=" + empId;
    }

    function deleteEmployee(empId) {
        if (confirm("Are you sure you want to delete this employee?")) {
            window.location.href = "employee_delete.php?empId=" + empId;
        }
    }
</script>

</body>
</html>
