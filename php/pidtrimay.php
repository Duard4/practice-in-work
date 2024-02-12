<?php
$path_to_css = "../css/short/pidtrimay.css";
$path_to_js = "<script src=\"../js/pidtrimay.js\"></script>";
require "blocks/header.php";
?>

<section class="pidtrimay">
    <h1>ПІДТРИМАТИ ФОНД</h1>
    <div class="main-frame">
        <div class="upper">
            <div class="btn-wrapper">
                <a href="pidtrimay-2.php">Підтримати армію</a>
                <a href="#!">Підтримати фонд</a>
            </div>
            <img src="../img/Polygon 1.svg" alt="" id="triangle">
            <p>Твоя допомога - сила "Вільних": зараз</p>
        </div>
        <div class="bottom">
            <p>СПОСІБ ПЛАТІЖУ</p>
            <div class="btn-wrapper">
                <a href="https://send.monobank.ua/jar/3pnbEJirEX">Monobank</a>
                <a href="https://tr.ee/ppGmRuQDGV">PayPal</a>
                <a href="https://www.patreon.com/Vilni/membership">Patreon</a>
            </div>
            <div class="p-list">
                <div class="p-item">
                    <p><span>Рахунок в “Приватбанку“​​ (IBAN)</span></p>
                    <p id="p0">UA37148259*****4825*****1482590</p>
                    <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p0">
                </div>
                <div class="p-item">
                    <p><span>ЄДРПОУ</span></p>
                    <p id="p1">38**2**3</p>
                    <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p1">
                </div>
                <div class="p-item">
                    <p><span>Рахунок в "Ощадбанку"​(IBAN)</span></p>
                    <p id="p2">UA82516*****28165****982165374</p>
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
                    <p id="p5">82**011</p>
                    <img src="../img/v-copy.svg" alt="" onclick="copy(this)" copy-id="p5">
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require "blocks/footer.php";
?>