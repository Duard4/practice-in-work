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
    <form action="insert.php" method="Post"  enctype="multipart/form-data">
        <div class="input-grid">
            <label for="name">Ім'я<span>*</span></label>
            <label for="surname">Прізвище </label>
            <input type="text" name="name" id="name" value="Олег" minlength="2" maxlength="20" autocomplete=true required />
            <input type="text" name="surname" id="surname" value="Вєрбіч" autocomplete=true />
            <label for="email">Email<span>*</span></label>
            <label for="phone">Номер<span>*</span></label>
            <input type="email" name="email" id="email" value="Reserved@bright.web" autocomplete=true required />
            <input type="number" name="phone" id="phone" min="3800000000" max="380999999999" required value="380991232334" />
            <p>Бажана посада</p>
            <label for="date">Ваш вік<span>*</span></label>
            <div class="custom-select" style="width:200px;">
                <select name="position" id="position">
                    <option value="0">Вакантні місця:</option>
                    <?php
                    $sql = "SELECT `rank`, amount_vacancies
                FROM vilni.Positions;";
                    $result = $conn->query($sql);
                    $i = 1;
                    $style = "";
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            if ($row["amount_vacancies"] == "") {
                                $style = 'style = "display: none;"';
                            } else $style = '';
                            echo "<option " . $style . " value=\"" . $i . "\">" . $row["rank"] . " (" . $row["amount_vacancies"]  . ")</option>";
                            $i++;
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </select>
            </div>
            <input type="date" name="date" id="date" min="1950-01-01" max="2006-02-01" required />
            <label for="com">Додайте коментар<span>*</span></label>
            <textarea name="com" id="com">Розкажи, що ти вмієш та чим можеш стати корисним у команді :)</textarea>
        </div>
        <input type="submit" value="ДОЄДНАТИСЯ">
    </form>
</section>

<?php
$conn->close();

require "blocks/footer.php";
?>