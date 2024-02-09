<?php
$path_to_css = "../css/zvit/zvit.css";
require "blocks/header.php";
require "db.php";
?>
<section class="zvit">
    <div class="left">
        <h1>ЗВІТИ</h1>
        <img src="../img/zvit/Group.png" alt="diagram">
    </div>
    <img src="../img/zvit/table.jpg" alt="table">
    <div class="card-wrapper">
        <div class="card">
            <img class="card__image" src="../img/zvit/report_arrow.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ЗВІТ </h1>
                        <p>24.09.2022</p>
                    </div>
                    <p>Дрон для ССО</p>
                    <p>Звітуємо за кошти витрачені на дрон для ССО...</p>
                </div>
                <a href="zvit/dron-sso.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="../img/zvit/report_arrow.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ЗВІТ </h1>
                        <p>21.10.2022</p>
                    </div>
                    <p>Вересень</p>
                    <p>Закінчився вересень, а значить час відзвітувати, як ми разом з вами наближали перемогу останні 30 днів...
                    </p>
                </div>
                <a href="zvit/september.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="../img/zvit/report_arrow.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ЗВІТ </h1>
                        <p>01.11.2022</p>
                    </div>
                    <p>Жовтень</p>
                    <p>Жовтень видався доволі продуктивним. Разом із командою ми здійснили поїздку до Миколаївської області, об’єднали сили з іншими фондами...</p>
                </div>
                <a href="zvit/october.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="../img/zvit/report_arrow.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ЗВІТ </h1>
                        <p>05.01.2023</p>
                    </div>
                    <p>Грудень</p>
                    <p>У грудні, напередодні Нового року, ми здійснили два масштабні виїзди: на Південь та на Схід...</p>
                </div>
                <a href="zvit/november.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <img src="../img/zvit/Group 289263.png" alt="diagram" class="grid-img">
    </div>
</section>
<section class="transactions" "> 
        <h1>Грошові операції</h1>
        <table>
        <tr> <th>Коментар</th> <th>Джерело</th> <th>Дата</th> <th>Сума, грн</th> <th>Операція</th></tr>
        <?php
        $sql = "SELECT `name`, masked_card_number, transaction_datetime, amount, operation
            FROM defaultdb.Bills
            Limit 20;";
        $result = $conn->query($sql);

        $i = 1;
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td>
                <td>" . $row["masked_card_number"] . "</td>
                <td>" . $row["transaction_datetime"] . "</td>
                <td>" . $row["amount"] . "</td>
                <td>" . $row["operation"] . "</td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>

</section>
<section></section>
<?php
$conn->close();
require "blocks/footer.php";
?>