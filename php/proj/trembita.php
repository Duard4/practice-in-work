<?php
$path_to_css = "../../css/project/common.css";
require "../blocks/h-2.php";
require "../db.php";
?>
<style>
    @media (max-width:330px) {
        html,
        body {
            height: 100%;
        }

        footer {
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;

        }
    }
</style>
<section>
    <div class="p-head">
        <h1>ЗБІР</h1>
        <p>"Трембіта" від "Вільні"</p>
        <img src="../../img/projects/h-2.png" alt="">
    </div>
    <div class="p-bottom">
        <div class="column">
            <h3>Благодійний івент-концерт
                від військових волонтерів "Вільні"</h3>
            <p>
                Наприкінці концерту відбуватиметься аукціон трофеїв
                подарованих нашими друзями розвідниками (*лише
                на івенті безпосередньо можна буде дізнатися,
                що саме буде розігруватися*)
            </p>
        </div>
        <div class="column">
            <ul>
                <li style="background-image: url(../../img/projects/v-m-1.svg);">
                    <p>Нд</p>
                    <p>27.11.2022</p>
                    <p>18:00</p>
                </li>
                <li style="background-image: url(../../img/projects/v-m-2.svg);">
                    <p>Oi Fusk</p>
                    <p>Chocollab</p>
                    <p>Karoon</p>
                </li>
                <li style="background-image: url(../../img/projects/v-m-3.svg);">
                    <p>Квитки для ранніх пташок: 250 грн <br> <br>
                        <span class="color">Ціна згодом зростає</span>
                    </p>
                </li>
                <li style="background-image: url(../../img/projects/v-m-4.svg);">
                    <p>Mezzanine, <br> <br>
                        вул. Нижньоюрківська, 31</p>
                </li>
            </ul>
        </div>
        <a href="maviki.php">
            <img src="../../img/Vector 96.svg" alt="">
        </a>
    </div>
</section>
<?php
$conn->close();
require "../blocks/f-2.php";
?>