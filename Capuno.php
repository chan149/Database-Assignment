<?php
// 1. Database connection details
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = "";     // Default XAMPP password is empty
$dbname = "capuno"; // From your second image

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// 2. SQL query to select all data from your table
$sql = "SELECT * FROM capunotbl";
$result = mysqli_query($conn, $sql);

// 3. Display the data in an HTML table
echo "<h2>User Table Data</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Contact</th>
            <th>Gender</th>
          </tr>";

    // Loop through each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['Id'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Contact'] . "</td>";
        echo "<td>" . $row['Gender'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results found in capunotbl.";
}

// Close connection
mysqli_close($conn);
?>