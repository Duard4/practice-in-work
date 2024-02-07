<?php
$host = 'db-mysql-fra1-31502-do-user-10404517-0.c.db.ondigitalocean.com';
$username = 'vilni_user';
$password = 'passw0rd';
$database = 'vilni';
$port = "25060";

$conn = new mysqli('db-mysql-fra1-31502-do-user-10404517-0.c.db.ondigitalocean.com', $username, $password, $database, $port);

// Перевірка наявності з'єднання
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT `rank`, amount_vacancies
FROM vilni.Positions;";
$result = $conn->query($sql);
$i = 1;
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<option value=\"". $i . "\">" . $row["rank"] . " (" . $row["amount_vacancies"] . ")</option>";
        $i++;
    }
} else {
    echo "0 results";
}
// Закриття з'єднання
$conn->close();
