<?php
$path_to_css = "../css/short/join.css";
require "blocks/header.php";
?>

<section class="join">
    <div class="left">
        <h1>ДОЄДНАТИСЯ
            ДО КОМАНДИ</h1>
        <img src="../img/Vector 96.svg" alt="">
    </div>
    <form action="" method="post" enctype="multipart/form-data" style="width: 100rem;">
        <div class="input-grid">
            <label for="name">Ім'я<span>*</span></label>
            <label for="surname">Прізвище </label>
            <input type="text" name="name" id="name" value="Олег" autocomplete=true required />
            <input type="text" name="surname" id="surname" value="Вєрбіч" autocomplete=true />
            <label for="email">Email<span>*</span></label>
            <label for="number">Номер<span>*</span></label>
            <input type="email" name="email" id="email" value="Reserved@brightweb" autocomplete=true required />
            <input type="text" name="number" id="number" value="+380" autocomplete=true required />
            <p>Бажана посада</p>
            <label for="age">Ваш вік</label>
            <div class="custom-select" name="position" id="position" style="width:200px;">
                <select>
                    <option value="0">Вакантні місця:</option>
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
                            if ($row["amount_vacancies"] == "") {
                                $quantity = 0;}
                            else $quantity = $row["amount_vacancies"];
                            echo "<option value=\"". $i . "\">" . $row["rank"] . " (" . $quantity . ")</option>";
                            $i++;
                        }
                    } else {
                        echo "0 results";
                    }
                    // Закриття з'єднання
                    ?>
                    <!-- 
                    <option value="1">Audi</option>
                    <option value="2">BMW</option>
                    <option value="3">Citroen</option>
                    <option value="4">Ford</option>
                    <option value="5">Honda</option>
                    <option value="6">Jaguar</option>
                    <option value="7">Land Rover</option>
                    <option value="8">Mercedes</option>
                    <option value="9">Mini</option>
                    <option value="10">Nissan</option>
                    <option value="11">Toyota</option>
                    <option value="12">Volvo</option> -->
                </select>
            </div>
            <input type="number" name="age" id="age" value="18" min="18" max="99" required />
            <label for="com">Додайте коментар<span>*</span></label>
            <textarea name="com" id="com">Розкажи, що ти вмієш та чим можеш стати корисним у команді :)</textarea>
            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} файлів обрано" multiple />
            <label for="file" onclick="clear()">
                <img src="../img/join-add.png" alt="skripka" id="f-i-1">
                <p>прикріпити файл</p>
                <img src="../img/join-can.png" alt="can" id="f-i-2">
            </label>
        </div>

        <button>ДОЄДНАТИСЯ</button>

    </form>
</section>

<?php
$conn->close();
$path_to_css = "../css/team/team-style.css";
require "blocks/footer.php";
?>