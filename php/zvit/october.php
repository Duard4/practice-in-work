<?php
$path_to_css = "../../css/zvit/october.css";
require "../blocks/h-2.php";
require "../db.php";
?>

<section>
    <div class="top">
        <h1>ЗВІТ<br>
            ЗА ЖОВТЕНЬ</h1>
        <p>“Вільні” здійснили поїздку до Миколаївської області</p>
    </div>
    <img src="../../img/zvit/oct-1.png" alt="">
    <img src="../../img/zvit/oct-2.png"" alt="">
        <div class=" text-wrapper">

    <p>
        “<span class="color">Вільні</span>” здійснили поїздку до Миколаївської області, об’єднали сили з іншими
        фондами задля здійснення
        гуманітарної місії, спрямованої на забезпечення медичною допомогою та харчовими наборами мешканців
        деокупованих сіл Харківської області, та відкрили збір на рації для 130 Сил ТрО ЗСУ.
    </p>

    <p>
        На Південь до наших військових ми виїхали вдруге. Така знайома дорога, проте відчуття були інші: будинки
        зазнали нових, ще більших руйнувань від влучень російських ракет. Усюди були викривлені фасади, вибиті вікна
        та випалені стіни. Важко було повірити, що декілька місяців тому назад там жили люди.
    </p>
    <p>
        Для наших воїнів ми відвезли понад півтори тонни харчових наборів, спальники, термобілизну, теплі шкарпетки,
        зимові бафи та медичні засоби, а саме: ізраїльські бандажі й таблетки для очищення води.
    </p>
    </div>
    <h2 class="intro">Повернувшись до Києва, <br>
        ми відкрили збір на рації <br>
        для військової розвідниці <br>
        із позивним “<span class="color">Стріла</span>”</h2>
    <div class="column">
        <img src="../../img/zvit/oct-3.png" alt="">
        <img src="../../img/zvit/oct-4.png" alt="">
    </div>
    <div class="text-wrapper-2">

        <p> <span class="bold">
                Стріла, була учасницею деокупації Харківської області і готувалася до виїзду на Схід.</span>
        </p>
        <p>До повномасштабного вторгнення вона працювала на підвищення обороноздатності нашої країни, тож для нас
            була честь допомогти
            людині з такою сильною громадянською позицією. Збір на рації задля хорошого і якісного зв'язку
            військових це один із перших наших зборів такого масштабу, його сума складає 500.000 грн.
            <br>
            <br> <span class="bold">
                Щойно з'явилася можливість відвідати деокуповані села
                Харківської області</span>, Вільні об'єдналися разом із трьома фондами
            Онуки, Future for Ukraine, Charity Foundation Ukraine, аби доставити гуманітарну поїздку цивільним.
            <br><br>
            Історії, які ми почули від людей лишили шрами, всі злодіяння росії ніколи
            не будуть забутими.
        </p>
    </div>
    <img src="../../img/zvit/oct-5.png" alt="">

    <div class="text-wapper-2">
        <h3><span class="bold">За неповних три дні, 17-19 жовтня, завдяки силам всіх організацій вдалося забезпечити
                949 людей, що нараховує 414 дворів загалом.</span></h3>
        <p>
            Такі виїзди можливі завдяки вам та вашій підтримці. Ми віримо, що разом із таким сильним народом, можемо
            закрити потреби як військових, так і цивільних.
        </p>
    </div>


    <div class=" bottom">
        <h2><span>Дякуємо всім,</span> хто долучився <br>
            до збору коштом чи поширенням, <br>
            ви зробив ці два виїзди можливими!</h2>
        <a href="november.html">
            <img src="../../img/Vector 96.svg" alt="">
        </a>
    </div>
</section>
<?php
$conn->close();
require "blocks/footer.php";
?>