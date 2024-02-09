<?php
$path_to_css = "../css/short/join.css";
$path_to_js = "../js/join.js";

require "blocks/header.php";
require "db.php";

?>

<section class="join">
    <div class="left">
        <h1>ДОЄДНАТИСЯ
            ДО КОМАНДИ</h1>
        <img src="../img/Vector 96.svg" alt="">
    </div>
    <form action="insert.php" method="Post" enctype="multipart/form-data" >
        <div class="input-grid">
            <label for="name">Ім'я<span>*</span></label>
            <label for="surname">Прізвище </label>
            <input type="text" name="name" id="name" value="Олег" autocomplete=true required />
            <input type="text" name="surname" id="surname" value="Вєрбіч" autocomplete=true />
            <label for="email">Email<span>*</span></label>
            <label for="phone">Номер<span>*</span></label>
            <input type="email" name="email" id="email" value="Reserved@brightweb" autocomplete=true required />
            <input type="text" name="phone" id="phone" value="+380" autocomplete=true required />
            <p>Бажана посада</p>
            <label for="age">Ваш вік</label>
            <div class="custom-select" name="position" id="position" style="width:200px;">
                <select>
                    <option value="0">Вакантні місця:</option>
                    <?php
                    $sql = "SELECT `rank`, amount_vacancies
                FROM vilni.Positions;";
                    $result = $conn->query($sql);
                    $i = 1;
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($row["amount_vacancies"] == "") {
                                continue;
                            } else echo "<option value=\"" . $i . "\">" . $row["rank"] . " (" . $row["amount_vacancies"]  . ")</option>";
                            $i++;
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </select>
            </div>
            <input type="number" name="age" id="age" value="18" min="18" max="99" required />
            <label for="com">Додайте коментар<span>*</span></label>
            <textarea name="com" id="com">Розкажи, що ти вмієш та чим можеш стати корисним у команді :)</textarea>
        </div>

        <input type="submit" value="ДОЄДНАТИСЯ">
        <?php  
            
        ?>

    </form>
</section>

<?php
$conn->close();
$path_to_css = "../css/team/team-style.css";
require "blocks/footer.php";
?>