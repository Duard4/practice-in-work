<?php
$path_to_css = "../css/main/main-style.css";
require "blocks/header.php";
?>
<section class="first">
    <div class="text-wrapper">
        <h1>
            ВОЛОНТЕРСЬКИЙ
            РУХ “ВІЛЬНІ”
        </h1>
        <p>
            Ми займаємось гуманітарною та військово-технічною допомогою для окремих підрозділів Збройних Сил
            України,
            СБУ та Сил спеціальних операцій.
        </p>
        <img src="../img/main/svg/Vector 96.svg" alt="arrow">
    </div>
    <div class="zbir-card">
        <img src="../img/main/zbir.png" alt="zahist">
        <p>Збір на бронековдри</p>
        <h2>290 000₴</h2>
        <div class="btn-wrapper">
            <a href=""><button class="transparent-btn">ДЕТАЛЬНІШЕ</button></a>
            <a href="pidtrimay.html"><button class="yellow-btn">ПІДТРИМАТИ</button>
            </a>
        </div>
    </div>
</section>
<section class="second">
    <?php
    $values_h = ["80", "6", "2", "10", "46", "3"];
    $values_p = ["тонн", "одиниць"];
    $values_p2 = ["гуманітарної допомоги", "медицини", "автомобілів", "дронів", "рацій", "РЕБи"];
    for ($i = 0; $i < 6; $i++) {
        $img_i = $i;
        $value = $values_h[$i];
        $p = $values_p2[$i];
        if ($i < 3) {
            $plus = "+";
            $type = $values_p[0];
        } else {
            $plus = "";
            $type = $values_p[1];
        }
        include "blocks/main-second-card.php";
    }
    ?>
    <div class="card">
        <div class="upper-row">
            <img src="../img/main/svg/icon (7.1).svg" alt="">
            <img src="../img/main/svg/icon (7.2).svg" alt="">
        </div>
        <div class="line"></div>
        <p>а також інше спорядження для військових</p>
    </div>
    <div class="card">
        <img src="../img/main/svg/Vector 96.svg" alt="arrow">
        <p>переглянути звітність</p>
    </div>
</section>
<?php
require "blocks/about.php";
?>
<section class="values">
    <div class="card-wrapper">
        <?php
        $values_p1 = [
            "Відданість Батьківщині та її національній ідеї", "Гордість вважати себе українцем",
            "Відданість Батьківщині та її національній ідеї", "Підвищення обороноздатності"
        ];
        $values_p2 = [
            "“Серцем до України: Глибокий зв'язок зі своєю нацією”", "“Українська Душа: Гордість нації в кожному серці”",
            "“Серцем до України: Глибокий зв'язок зі своєю нацією”", "“Надійний тил: Допомогти подолати сьогоденні виклики нашого буття”"
        ];
        for ($i = 0; $i < 4; $i++) {
            $p1 =  $values_p1[$i];
            $p2 = $values_p2[$i];
            include "blocks/main-values-card.php";
        }
        ?>
    </div>
    <div class="right">
        <img src="../img/розробка-02 5.png" alt="logo">
        <p>“<span>Вільні</span>” працюють для забезпечення окремих підрозділів Збройних сил України
            гуманітарною та військово-технічною допомогою, аби зробити їх ефективнішими та вберегти життя наших
            захисників. </p>
    </div>
</section>

<section class="support">
    <img src="../img/main/svg/Vector 100.png" alt="sup">
    <p>Нам важлива ваша підтримка. Саме завдяки донатам та спільним зусиллям ми можемо забезпечити бійців
        необхідним. Ми робимо усе, аби воїни відчували міцний тил.</p>
    <div class="container">
        <h2>Підтримай Вільних - Підтримай Україну</h2>
        <a href="pidtrimay.html"><button class="yellow-btn">ПІДТРИМАТИ</button></a>
    </div>
</section>

<section class="partners">
    <h1>Наші партнери</h1>
    <div class="logos-wrapper">
        <?php
        for ($i = 0; $i < 8; $i++) {
            $number = 5163 + $i;
            echo "<div class=\"partner-logo\" style=\"background-image: url(../img/main/Rectangle\ " . $number . ".png) ;\"></div>";
        }
        ?>
    </div>
</section>
<?php
require "blocks/footer.php";
?>