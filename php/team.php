<?php
$path_to_css = "../css/team/team-style.css";
require "blocks/header.php";
?>

<section class="team" id="team">
    <div class="card-wrapper">
        <?php
        $names = ["Кравчук Поліна", "Лебедівна Олеся", "Гліб Фіщенко", "Виповська Віта", "Лічик Дмитро", 
        "Лебединська Василіса", "Семенюк Богдан", "Міщенко Марія", "Вінс Валерій", "Саніна Іванна"];
        $roles = [
            "SMM-менеджер", "Project-менеджер", "Засновник, директор фонду", "Спіч-райтер, копірайтер, контент-менеджер",
            "Комунікаційний менеджер", "Операційний директор фонду", "Менеджер з документообліку",
            "Офіс-менеджер, психолог організації", "Аналітик", "IR-менеджер"
        ];
        $i = 0;
        for ($n = 0; $n < 4; $n++) {
            echo "<div class=\"column\">";
            for ($j = 0; ; $j++) {
                if ($n % 3 == 0) {
                    if ($j == 2) break;
                } else {if ($j == 3) break;}
                $name = $names[$i];
                $role = $roles[$i];
                $num = $i+1;
                $i++;
                echo "<div class=\"card\">
                        <div class=\"shade\"></div>
                        <div class=\"card-img\" style=\"background: url(../img/team/member\ " . $num . ".png), lightgray 50% / cover no-repeat;\">
                            <div class=\"text-wrapper\">
                                <h1>" . $name . "</h1>
                                <p>" . $role . "</p>
                            </div>
                        </div>
                    </div>";
            } 
            echo "</div>";
        }
        ?>
    </div>

    <div class="right">
        <h1>НАША КОМАНДА</h1>
        <p>Ми молодь з усіх куточків України: від Вугледару до Верховини,
            і нас обʼєднує одна ціль - зробити перебування на фронті наших бійців безпечнішим, а утилізацію
            ворога
            ефективнішою</p>
        <a href="join.html">
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
        <div class="slider__item">
            <img class="slider__image" src="../img/team/Rectangle 5140 (1).png" alt="Image">
            <div class="slider__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>НОВИНИ</h1>
                        <p>22.02.2023</p>
                    </div>
                    <p>Ми у Kyiv Independent </p>
                    <p>As a specialist, Fishchenko is convinced that the end is in sight, and that the democratic
                        strengths of pre-war Ukraine will flourish once again</p>
                </div>

                <a href="https://kyivindependent.com/plans-dreams-shattered-the-2022-that-could-have-been-for-ukraine/">ДЕТАЛЬНІШЕ</a>
            </div>
        </div>
        <div class="slider__item">
            <img class="slider__image" src="../img/team/Rectangle 5141 (1).png" alt="Image">
            <div class="slider__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>НОВИНИ</h1>
                        <p>03.01.2023</p>
                    </div>
                    <p>Допомога для ЗСУ та цивільного населення: понад 10 тонн їжі та ліків</p>
                    <p>Волонтерський громадський рух Вільні надав 600 сімейних харчових наборів загальною вагою 4
                        200
                        кг.</p>
                </div>

                <a href="https://fakty.com.ua/ua/ukraine/suspilstvo/20220901-10-tonn-yizhi-ta-likiv-blagodijni-fondy-peredaly-dopomogu-dlya-zsu-ta-czyvilnogo-naselennya/">ДЕТАЛЬНІШЕ</a>
            </div>
        </div>
        <div class="slider__item">
            <img class="slider__image" src="../img/team/Rectangle 5141 (2).png" alt="Image">
            <div class="slider__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>НОВИНИ, МІСІЇ</h1>
                    </div>
                    <p>Допомога ЗСУ та населенню
                        на Сході України</p>
                    <p>10 тонн харчових наборів та ліків відправилися до Слов'янська, Краматорська, Дружківки.</p>
                </div>
                <a href="https://apostrophe.ua/ua/news/society/2022-09-01/pomosch-vsu-i-naseleniyu-na-vostoke-ukrainy-fond-buduschee-dlya-ukrainy-rasskazal-o-svoih-proektah/278199?amp">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="slider__item">
            <img class="slider__image" src="../img/team/Rectangle 5140 (2).png" alt="Image">
            <div class="slider__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>НОВИНИ, МІСІЇ</h1>
                        <p>03.01.2023</p>
                    </div>
                    <p>Новий рік завдяки волонтерам</p>
                    <p>Спільна гуманітарна місія на Херсонщину</p>
                </div>
                <a href="https://www.youtube.com/watch?v=nC7HHbhY2JM">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>
        <div class="slider__item">
            <img class="slider__image" src="../img/team/Component 3.png" alt="Image">
            <div class="slider__info">
                <div class="text-wrapper">
                    <div class="h-wrapper">
                        <h1>НОВИНИ, МІСІЇ</h1>
                        <p>03.01.2023</p>
                    </div>
                    <p>Вільні: інтерв'ю на грузинському телебаченні</p>
                    <p>Волонтерський громадський рух Вільні: історія створення руху. </p>
                </div>

                <a href="https://fb.watch/hIqUqboo11/?mibextid=qC1gEa">
                    ДЕТАЛЬНІШЕ
                </a>
            </div>
        </div>

</section>
<?php
require "blocks/footer.php";
?>