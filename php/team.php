<?php
$path_to_css = "../css/team/team-style.css";
require "blocks/header.php";
require "db.php";
?>

<section class="team" id="team">
    <div class="card-wrapper">
        <?php
        $sql = "SELECT first_name, last_name, `rank`
        FROM vilni.Members 
        JOIN vilni.Candidates ON vilni.Members.candidate_id  = vilni.Candidates.candidate_id 
        JOIN vilni.Positions ON vilni.Members.position_id   = vilni.Positions.position_id 
        Limit 10";
        $result = $conn->query($sql);
        $i = 0;
        if ($result->num_rows > 0) {
            for ($n = 0; $n < 4; $n++) {
                echo "<div class=\"column\">";
                for ($j = 0;; $j++) {
                    if ($n % 3 == 0) {
                        if ($j == 2) break;
                    } else {
                        if ($j == 3) break;
                    }
                    $row = $result->fetch_assoc();
                    $i++;
                    echo "<div class=\"card\">
                        <div class=\"shade\"></div>
                        <div class=\"card-img\" style=\"background: url(../img/team/member\ " . $i . ".png), lightgray 50% / cover no-repeat;\">
                            <div class=\"text-wrapper\">
                            <h1>" . $row['first_name'] . " " . $row['last_name'] . "</h1>
                            <p>" . $row['rank'] . "</p>
                        </div>
                        </div>
                    </div>";
                }
                echo "</div>";
            }
        }
        ?>
    </div>

    <div class="right">
        <h1>НАША КОМАНДА</h1>
        <p>Ми молодь з усіх куточків України: від Вугледару до Верховини,
            і нас обʼєднує одна ціль - зробити перебування на фронті наших бійців безпечнішим, а утилізацію
            ворога
            ефективнішою</p>
        <a href="join.php">
            <div class="card">
                <h1>ТУТ МОЖЕ БУТИ ТВОЄ ФОТО 😱</h1>
                <div class="second-row">
                    <p>Приєднуйся до комади</p>
                    <img src="../img/team/Vector 96.svg" alt="">
                </div>
            </div>
        </a>
    </div>
</section>

<?php
require "blocks/about.php";
?>

<section class="zmi" id="zmi">
    <div class="slider__content" x-ref="slider" x-on:scroll.debounce="$refs.slider.scrollLeft == 0 ? start = true : start = false; Math.abs(($refs.slider.scrollWidth - $refs.slider.offsetWidth) - $refs.slider.scrollLeft) < 5 ? end = true : end = false;">
        <?php
        $sql = "SELECT highlight, published_date, `description`, link, img, title FROM defaultdb.News;";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class=\"slider__item\">
                <img class=\"slider__image\" src=\"../img/team/". $row['img'] ."\" alt=\"Image\">
                <div class=\"slider__info\">
                    <div class=\"text-wrapper\">
                        <div class=\"h-wrapper\">
                            <h1>". $row['highlight']. "</h1>
                            <p>". $row['published_date']. "</p>
                        </div>
                        <p>". $row['title']. "</p>
                        <p> ". $row['description']."</p>
                    </div>
                    <a href=" . $row['link'] .">ДЕТАЛЬНІШЕ</a>
                </div>
            </div>";
            }
        }
        ?>
    </div>
</section>
<?php
$conn->close();
require "blocks/footer.php";
?>