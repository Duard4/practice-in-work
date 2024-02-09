<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
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

    $first_name =  $_POST['name'];
    $last_name = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $rank = $_POST['position'];
    $age = $_POST['age'];
    $com = $_POST['com'];
    $file = $_POST['file'];
    echo $first_name . " " . $last_name;
    // $sql_insert = "INSERT INTO vilni.Candidates
    // (candidate_id, last_name, first_name, phone_number, email, date_of_birth, comment, oidfil, position_id)
    // VALUES(0, '', '', '', '', '', '', 0, 0);";
    // $query = mysqli_query($db_conn, $sql);
    // if ($query) {
    //     echo 'New data inserted successfully. <a href="./index.html">Go Back</a>';
    // } else {
    //     echo "Failed to insert new data.";
    // }
    ?>
</body>

</html>