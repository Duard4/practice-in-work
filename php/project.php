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
        $a = ['strila', 'trembita', 'maviki'];
        $sql = "SELECT title, date_of_start, status, `type`, pr_descr FROM vilni.Projects limit 3;
        ";
        $i = 0;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class=\"card\">
                <img class=\"card__image\" src=\"../img/projects/i" . $i + 1 . ".png\" alt=\"Image\">
                <div class=\"card__info\">
                    <div class=\"text-wrapper\">
                        <div class=\"h-wrapper\">
                            <h1>" . $row['type'] . "</h1>
                            <p>" . $row['date_of_start'] . "</p>
                        </div>
                        <p>" . $row['title'] . "</p>
                        <p>" . $row['pr_descr'] . "
                        </p>
                    </div>
    
                    <a href=\"proj/" . $a[$i] . ".php\">
                        ДЕТАЛЬНІШЕ
                    </a>
                </div>
            </div>";
                $i++;
            }
        }
        ?>
    </div>
</section>
<?php
$conn->close();
require "blocks/footer.php";
?>