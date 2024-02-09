<?php
$path_to_css = "../css/project/projects.css";
require "blocks/header.php";
require "db.php";
?>

<section class="projects">
    <div class="title">
        <h1>Проєкти</h1>
        <p>Всі благодійні заходи ми створюємо задля об’єднання суспільства навколо української культури та основною
            метою є збір коштів для закриття потреб військових</p>
    </div>
    <div class="card-wrapper">
        <?php
        $type = ["ІВЕНТ", "ЗБІР"];
        $sql = "SELECT project_id, title, date_of_start, status
        FROM vilni.Projects;";
        $result = $conn->query($sql);

        ?>
        <div class="card">
            <img class="card__image" src="../img/projects/i1.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ІВЕНТ </h1>
                        <p>14.10.2022</p>
                    </div>
                    <p>Стріла</p>
                    <p>Збір на військові рації
                        <br><br>
                        Команда «Вільних» продовжує забезпечувати новітніх українських супергероїв зв’язком....
                    </p>
                </div>

                <a href="proj/strila.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="../img/projects/i2.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ІВЕНТ </h1>
                        <p>18.11.2022</p>
                    </div>
                    <p>Трембіта</p>
                    <p>Благодійний івент-концерт від військових волонетрів "Вільні"...
                    </p>
                </div>
                <a href="proj/trembita.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="card">
            <img class="card__image" src="../img/projects/i3.png" alt="Image">
            <div class="card__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>ЗБІР </h1>
                        <p>01.02.2023</p>
                    </div>
                    <p>Мільйон на мавіки</p>
                    <p>Ми оголошуємо новий збір на підтримку 30-ї окремої механізованої бригади імені Князя
                        Острозького та 46-ї окремої аеромобільної бригади</p>
                </div>

                <a href="proj/maviki.php">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
    </div>
</section>
<?php
$conn->close();
require "blocks/footer.php";
?>