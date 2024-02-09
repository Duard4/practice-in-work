<?php
$path_to_css = "../css/short/pidtrimay.css";
$path_to_js = "<script src=\"../js/pidtrimay.js\"></script>" ;
require "blocks/header.php";
?>

    <section class="pidtrimay">
        <h1>ПІДТРИМАТИ ФОНД</h1>
        <div class="main-frame">
            <div class="upper">
                <div class="btn-wrapper">
                    <button onclick="shift_left">Підтримати армію</button>
                    <button onclick="shift_right">Підтримати фонд</button>
                </div>
                <img src="../img/Polygon 1.svg" alt=""  id="triangle">
                <p>Твоя допомога - сила "Вільних": зараз</p>
            </div>
            <div class="bottom">
                <p>СПОСІБ ПЛАТІЖУ</p>
                <div class="btn-wrapper">
                    <a href="">Monobank</a>
                    <a href="">PayPal</a>
                    <a href="">Patreon</a>
                </div>
                <div class="p-list">
                    <div class="p-item">
                        <p><span>Рахунок в “Приватбанку“​​ (IBAN)</span></p>
                        <p id="p0">UA583052990000026003036234572</p>
                        <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p0">
                    </div>
                    <div class="p-item">
                        <p><span>ЄДРПОУ</span></p>
                        <p id="p1">39696398</p>
                        <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p1">
                    </div>
                    <div class="p-item">
                        <p><span>Рахунок в "Ощадбанку"​(IBAN)</span></p>
                        <p id="p2">UA073226690000026004303905964</p>
                        <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p2">
                    </div>
                    <div class="p-item">
                        <p><span>Отримувач</span></p>
                        <p id="p3">Благодійний фонд «Вільні»</p>
                        <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p3">
                    </div>
                    <div class="p-item">
                        <p><span>Призначення платежу</span></p>
                        <p id="p4">Безповортний благодійний внесок</p>
                        <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p4">
                    </div>
                    <div class="p-item">
                        <p><span>МФО Банку</span></p>
                        <p id="p5">322669</p>
                        <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p5">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="left">
            <img src="../img/розробка-02 5.png" alt="logo">
            <p>Ми функціонуємо, допоки ви підтримуєте нас фінансово!</p>
            <button class="yellow-btn">ПІДТРИМАТИ</button>
        </div>
        <div class="right">
            <div class="about-us">
                <p>ПРО НАС</p>
                <ul>
                    <li><a href="team.html#team">Команда</a></li>
                    <li><a href="">Звітність</a></li>
                    <li><a href="">Контакти</a></li>
                    <li><a href="team.html#zmi">Ми у ЗМІ</a></li>
                </ul>
            </div>
            <div class="contacts">
                <p>КОНТАКТИ</p>
                <p>vilnivolunteers@gmail.com</p>
                <div class="img-wrapper">
                    <a href="https://www.instagram.com/vilni_volunteers"><img src="../img/main/image 209.png"
                            alt=""></a>
                    <a href="https://www.facebook.com/vilnivolunteers"><img src="../img/main/image 210.png" alt=""></a>
                    <a href="https://x.com/VilniVolunteers"><img src="../img/main/image 208.png" alt=""></a>
                    <a href=""><img src="../img/main/image 211.png" alt=""></a>
                </div>
            </div>

        </div>

    </footer>
</body>

</html>