<?php
$path_to_css = "../css/short/join.css";
require "blocks/header.php";
require "db.php";

    $first_name =  $_POST['name'];
    $last_name = $_POST['surname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $position_id = $_POST['position'] + 21;
    $com = $_POST['com'];
    $date = $_POST['date'];
    if ($position_id == 21) {
        $sql_insert = "INSERT INTO vilni.Candidates
    (first_name, last_name, phone_number, email, date_of_birth, comment)
    VALUES('$first_name', '$last_name', '$phone', '$email', '$date', '$com');";
    }
    else $sql_insert = "INSERT INTO vilni.Candidates
    (first_name, last_name, phone_number, email, date_of_birth, comment, position_id)
    VALUES('$first_name', '$last_name', '$phone', '$email', '$date', '$com', $position_id);";
    if ($conn->query($sql_insert) === TRUE) {
        echo " <section class = \"insert\" >
        <h1> Ваша форма була успішно надіслана </h1>
        </section>";
    } else {
        echo "Error: " . $sql_insert . "<br>" . $conn->error;
    }
$conn->close();

require "blocks/footer.php";